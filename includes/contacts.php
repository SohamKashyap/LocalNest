<?php
        $myid=$_SESSION['userid'];
        $sql="select * from users where userid != '$myid' limit 10";
        $myusers=$DB->read($sql,[]);
        $mydata=' 
        <style>
        @keyframes appear{
            0%{opacity:0;transform:translate(50px)}
            100%{opacity:1;transform:translate(0px)}
        }
        #contact{
            cursor:pointer;
            transition:all .5s cubic-bezier(0.68,-2,0.265,1.55);
        }
        #contact:hover{
           transform:scale(1.1); 
        }
        </style>
        <div style="text-align:center;anidmation:appear 1s ease">';

        if(is_array($myusers)){
            //check for new messages
            $msgs=array();
            $me=$_SESSION['userid'];
            $query="select * from messages where receiver='$me' && received=0";
            $mymgs=$DB->read($query,[]);

            if(is_array($mymgs)){
                foreach($mymgs as $row2){
                    $sender=$row2->sender;

                    if(isset($msgs[$sender])){
                        $msgs[$sender]++;
                    }else{
                        $msgs[$sender]=1;
                    }
                    
                }
            }
            foreach($myusers as $row){

                $image=($row->gender=="Male") ?"Images/man_4140048.png" : "Images/woman_4140047.png" ;
                if(file_exists($row->image)){
                    $image=$row->image;
                }

                $mydata .="
                 <div id='contact'style='position:relative;' userid='$row->userid' onclick='start_chat(event)'>

                <img src='$image' ><br> $row->username";

                if(count($msgs)>0 && isset($msgs[$row->userid])){
                    $mydata.="
                <div style='width:20px;height:20px;border-radius:50%;background-color:orange;color:white;position:absolute;left:0px;top:0px;'>".$msgs[$row->userid]."</div>";
                }
                $mydata.="
                </div>";
                }
       
        
        $mydata .=' </div>';
    
       // $result = $result[0];
        $info->message = $mydata;
        $info->data_type = "contacts";
        echo json_encode($info);
        }else{
            $info->message = "No Contacts were Found!";
            $info->data_type = "error";
            echo json_encode($info);
        }

        
