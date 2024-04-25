<?php

        $sql="select * from users where userid=:userid limit 1";
        $id=$_SESSION['userid'];
        $data=$DB->read($sql,['userid'=>$id]);

        $mydata="";
        if(is_array($data)){
            $data=$data[0];

            //check if image exists
            $image=($data->gender=="Male") ?"Images/man_4140048.png" : "Images/woman_4140047.png" ;
            if(file_exists($data->image)){
                $image=$data->image;
            }

            $gender_male="";
            $gender_female="";
            if($data->gender=="Male"){
                $gender_male="checked";
            }else{
                $gender_female="checked";
            }

        $mydata=
        '
        <style>

        @keyframes appear{
            0%{opacity:0;transform:translate(50px) rotate(5deg); transform-orign:100% 100%;}
            100%{opacity:1;transform:translate(0px) rotate(0deg);transform-orign:100% 100%;}
        }

        form{
                text-align:left;
                margin-top :40px;
            margin-left :89px;
            padding:10px;
            padding: 10px;
            width:100%;
            max-width:900px;
        }
        input[type=text],input[type=password],input[type=button]{
            padding: 10px;
            margin:10px;
            width: 200px;
            border-radius: 10px;
            border: solid 1px grey ;
        }
        input[type=button]{
            width: 220px;
            cursor: pointer;
            background-color: #005fb2 ;
            color: white;
        }
        input[type=radio]{
            transform: scale(1.2);
            cursor: pointer;
        }
        #error{
                text-align:center;
                padding: 0.5em;
                background-color:#ce1d32;
                color:white;
                display:none;
        }
        .dragging{
            border:dashed 2px #aaa;
        }
</style>

        <div id="error" style=""></div>
        <div style="display:flex;animation:appear 1s ease;">
        <div style="margin-top:30px;">
       <span style="font-size:14px; margin-left:60px;"> Drag and Drop an image to change.<br></span>
    <img ondragover="handle_drag_and_drop(event)" ondrop="handle_drag_and_drop(event)"  ondragleave="handle_drag_and_drop(event)" src="'.$image.'" style="width:200px; height:200px; margin:10px; margin-left:70px;margin-top:10px;">

    <label for="change_image_input" id="change_image_button" style="background-color: #005fb2; margin-left:70px; display:inline-block; padding:1em;border-radius:5px;cursor:pointer;">

        Upload Image
       
    </label>
    <input type="file" onchange="upload_profile_image(this.files)" id="change_image_input" style="display:none;"> 
    </div>


        <form id="myform">
        <input type="text" name="username" placeholder="Username" value="'.$data->username.'"><br>
        <input type="text" name="email" placeholder="Email" value="'.$data->email.'"><br>
        <div style="padding:10px">
         Gender:<br>
        <input type="radio" value="Male" name="gender" '.$gender_male.'> Male <br>
        <input type="radio" value="Female" name="gender" '.$gender_female.'> Female<br></div>
        <input type="password" name="password" placeholder="Password" value="'.$data->password.'"><br>
        <input type="password" name="password2" placeholder="Retype Password" value="'.$data->password.'"><br>
        <input type="button" value="Save Settings" id="save_settings_button" onclick="collect_data(event)"><br>
        
    </form>
    </div>
        
        ';
        $info->message = $mydata;
        $info->data_type = "contacts";
        echo json_encode($info);
    }else{
        $info->message = "No Contacts were Found!";
        $info->data_type = "error";
        echo json_encode($info);
    }

       
