<?php

session_start();
$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);
$info = (object)[];

// check if logged in
if (!isset($_SESSION['userid'])) {
    if (isset($DATA_OBJ->data_type)&& $DATA_OBJ->data_type != "login" && $DATA_OBJ->data_type != "signup") {
        $info->logged_in = false;
        echo json_encode($info);
        die;
    }
}

require_once("classes/autoload.php");
$DB = new Database();

$Error = "";
// process the data

if (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "signup") {
    // signup
    include("includes/signup.php");
} elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "login") {
    // login
    include("includes/login.php");
}elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "logout"){
    include("includes/logout.php");
} elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "user_info") {
    //user info
    include("includes/user_info.php");
}elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "contacts") {
    //user info
    include("includes/contacts.php");
}elseif (isset($DATA_OBJ->data_type) && ($DATA_OBJ->data_type == "chats" || $DATA_OBJ->data_type == "chats_refresh")) {
    //user info
    include("includes/chats.php");
}elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "settings") {
    //user info
    include("includes/settings.php");
}
elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "save_settings") {
    //user info
    include("includes/save_settings.php");
}
elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "send_message") {
    //send message
    include("includes/send_message.php");
}
elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "delete_message") {
    //delete message
    include("includes/delete_message.php");
}
elseif (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "delete_thread") {
    //delete thread
    include("includes/delete_thread.php");
}

function message_left($data,$row){


    $image=($row->gender=="Male") ?"Images/man_4140048.png" : "Images/woman_4140047.png" ;
    if(file_exists($row->image)){
        $image=$row->image;
    }

    $a="
    <div id='message_left'>
            <div></div>
        <img id='prof_img' src='$image'><b>$row->username</b><br>
        $data->message<br><br>";

        if($data->files !="" && file_exists($data->files)){
            $a.="<img src='$data->files' style='width:100%;cursor:pointer;' onclick='image_show(event)'/><br>";
        }
        $a.="<span style='font-size:11px;color:#999;'>".date("jS M Y H:i:s a",strtotime($data->date))."</span>
        <img id='trash' src='Images/delete.png' onclick='delete_message(event)' msgid='$data->id' />
   </div>";
   return $a;

}

function message_right($data,$row){

    $image=($row->gender=="Male") ?"Images/man_4140048.png" : "Images/woman_4140047.png" ;
    if(file_exists($row->image)){
        $image=$row->image;
    }

    $a="
    <div id='message_right'>
            <div>";

            if($data->seen){
                $a.="<img src='Images/seen.png' style='' />";
            }elseif($data->received){
                $a.="<img src='Images/notseen.png' style='' />";
            }
            $a.="</div>
            <img id='prof_img' src='$image' style='float:right;'><b>$row->username</b><br>
            $data->message<br><br>";

            if($data->files !="" && file_exists($data->files)){
                $a.="<img src='$data->files' style='width:100%;cursor:pointer;' onclick='image_show(event)'/><br>";
            }
            $a.="
            <span style='font-size:11px;color:#999;'>".date("jS M Y H:i:s a",strtotime($data->date))."</span>
            <img id='trash' src='Images/delete.png' onclick='delete_message(event)' msgid='$data->id' />
    </div>";
    return $a;

}

function message_controls(){


    return"
    </div>
    <span onclick='delete_thread(event)' style='color:grey;cursor:pointer;'>Delete This Thread</span>
    <div style='display: flex; width: 100%;'>
            <label for='message_file' style='flex: 1; display: flex; align-items: center; justify-content: center;'>
             <img src='Images/icons8-clip-60.png' style='opacity:0.8;width:40px;height:40px;margin:8px;cursor:pointer;'>
            </label>

            <input type='file' id='message_file' name='file' style='display:none' onchange='send_image(this.files)'/>

            <input id='message_text' onkeyup='enter_pressed
            (event)' style='flex: 6; padding: 10px; border: 2px solid #ccc; border-radius: 5px 0 0 5px; font-size: 14px;' type='text' placeholder='Type your message'/>

            <input  id='sendButton' style='flex: 1; cursor: pointer; background-color: #4CAF50; color: white; border: none;padding: 10px; transition: background-color 0.3s;' type='button' value='Send' onclick='send_message(event)'/>

    </div>
    </div>";

}



