<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <style>
        /* Smaller screens (e.g., smartphones) */
            @media only screen and (max-width: 600px) {
                body {
                    font-size: 14px; /* Adjust font size for smaller screens */
                }
                #wrapper {
                    flex-direction: column; /* Stack items vertically on smaller screens */
                    margin-left:auto;
                }
                #left-pannel {
                    min-width: auto; /* Allow left panel to shrink */
                }
                #right-pannel {
                    min-width: auto; /* Allow right panel to shrink */
                }
                #header {
                    min-width: auto; /* Allow header to shrink */
                }
                #inner_left_pannel {
                    min-width: auto; /* Allow inner left panel to shrink */
                }
                #inner_right_pannel {
                    min-width: auto; /* Allow inner right panel to shrink */
                }
                #top-logo {
                      margin-right: -172px; /* Center top logo */
                 }
            }

            body {
                background-image: url("Images/pexels-francesco-ungaro-4638772.jpg"); /* Add your image URL here */
                background-size: cover; /* Cover the entire background */
                background-position: center; /* Center the background image */
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                flex-direction: column; /* Stack items vertically */
                color: #fff; /* Text color for the body */
            }

        #small-logo {
        position: fixed; 
        top: 10px;
        left: 10px;
        max-width: 50px;
        max-height: 50px;
        z-index: 1000; /* Make sure it's above other elements */
    }

        #top-logo {
            max-width: 300px; 
            margin-bottom: 20px; 
            margin-left: 10%;
        }

        #wrapper {
            max-width: 900px;
            min-height: 500px;
            max-height: 650px;
            display: flex;
            font-size: 17px;
        }

        #left-pannel {
            min-width: 200px;
            background-color: #27344b;
            flex: 1;
            padding: 15px;
            text-align: center;
        }
        #profile_image{
            width:50%;
            border:solid thin white;
            border-radius: 50%;
            margin:15px;
            padding: 7px;
        }
        #left-pannel label{
            width:100%;
            height: 30px;
            display: block;
            background-color:#404b56 ;
            border-bottom: solid thin #ffffff55;
            cursor: pointer; 
            padding: 5px; 
            transition:all 0.5s ease ;  
        }
        #left-pannel label:hover{
            background-color:#778593 ;  
        }
        #left-pannel label img{
               float: right;
               width:30px;
        }
        #right-pannel {
            min-width: 500px;
            background-color: #fff; 
            flex: 4;
            text-align: center;
        }

        #header {
            background-color: #485b6c;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            position: relative;
            min-width: 670px;
        }

        #header img {
            margin-right: 10px; 
        }

        #container {
            display: flex;
        }

        #inner_left_pannel {
            background-color: #383e48;
            flex: 1;
            min-height: 480px;
            min-width: 250px;
            max-height: 650px;
        }

        #inner_right_pannel {
            background-color: #f2f7f8;
            flex: 2;
            min-height: 430px;
            transition: all 2s ease;
            max-height:650px ;
        }
        #radio_contacts:checked ~ #inner_right_pannel{
            flex:0;
        }
        #radio_settings:checked ~ #inner_right_pannel{
            flex:0;
        }
        #contact{
            width: 120px;
            height: 140px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
        }
        #contact img{
            width: 110px;  
            height: 110px;
        }
        #active_contact{
            height: 80px;
            margin: 10px;
            border:solid thin #aaa;
            padding: 2px;
            background-color:#eee ;
            color: #444;
        }
        #active_contact img{
            width: 76px;  
            height: 76px;
            float:left;
            margin:2px;
        }
        #message_left{
            margin: 10px;
            padding: 2px;
            padding-right:10px;
            background-color:#eae0ff;
            color: black;
            float: left;
            box-shadow: 0px 0px 10px #aaa;
            border-bottom-left-radius:50%;
            border-top-right-radius:30%;
            position: relative;
            width: 60%;
            min-width: 200px;
        }
        #message_left #prof_img{
            width: 70px;  
            height: 70px;
            float:left;
            margin:2px;
            border-radius: 50%;
            border: solid 2px white;
        }
        #message_left div{
            width: 20px;  
            height: 20px;
           background-color: #34474f;
           border: solid 3px white;
           border-radius: 50%;
           position: absolute;
           left: -10px;
           top:20px;
        }
        #message_right{
            margin: 10px;
            padding: 2px;
            padding-right:10px;
            background-color:#fbffee;
            color: #444;
            float: right;
            box-shadow: 0px 0px 10px #aaa;
            border-bottom-right-radius:50%;
            border-top-left-radius:30%;
            position: relative;
            width: 60%;
            min-width: 200px;
        }
        #message_right #prof_img{
            width: 70px;  
            height: 70px;
            float:left;
            margin:2px;
            border-radius: 50%;
            border: solid 2px white;
        }
        #message_right div img{
            width: 25px;  
            height: 25px;
            float:none;
            margin:0px;
            border-radius: 50%;
            border:none;
            position: absolute;
            top: 30px;
            right: 5px;
        }
        #message_right #trash{
            width: 20px;  
            height: 20px;
            position: absolute;
            top: 35px;
            left: -18px;
            cursor: pointer;
        }
        #message_left #trash{
            width: 20px;  
            height: 20px;
            position: absolute;
            top: 35px;
            right: -18px;
            cursor: pointer;
        }
        #message_right div{
            width: 20px;  
            height: 20px;
           background-color: #34474f;
           border: solid 2px white;
           border-radius: 50%;
           position: absolute;
           right: -10px;
           top:20px;
        }
        .loader_on{
            position: absolute;
            width: 30%;
            margin-right: 200px;
            margin-top: 10px;
        }
        .loader_off{
            display: none;
        }
        input[type=text],input[type=password],input[type=submit]{
            padding: 10px;
            margin:10px;
            width: 100%;
            border-radius: 10px;
            border: solid 1px grey ;
        }
        input[type=submit]{
            width: 100%;
            cursor: pointer;
            background-color: #2cc53e ;
            color: white;
        }
        .image_on{
            position: absolute;
            margin-top: 10px;
            height: 500px;
            width: 500px;
            z-index: 10;
            top: 50px;
            left: 50px;
        }
        .image_off{
            display: none;
        }
        #pop_up_img{
            width:100%;
        }
        #fix_loader{
            max-height: 50px;
            max-width: 50px;
            margin-right: 10px; 
        }
    </style>
</head>
<body>

    <img id="small-logo" src="Images/n-favicon-white.png" alt="Small Logo">

    <img id="top-logo" src="Images/get-connected-high-resolution-logo-transparent (1).png" alt="Top Logo">
    <div id="wrapper">
        <div id="left-pannel">
            <div id="user_info">
            <img id="profile_image" src="Images/man_4140048.png" alt="Profile Image" style="height:100px;width: 100px;"><br>
           <span id="username"> Username </span>
            <br>
           <span id="email" style="font-size:12px;opacity:0.5;">email@gmail.com</span><br><br><br><br>

     <div style="margin-right:8px;" >
           <label id="label_chat" for="radio_chat">Chat <img src="Images/icons8-chat-48.png"  alt="Chat Icon"></label>
           <label id="label_contacts"
           for="radio_contacts">Contacts <img src="Images/icons8-contacts-94.png " alt="Contacts Icon"></label>
           <label id="label_settings" for="radio_settings" >Settings<img src="Images/icons8-setting-64.png" alt="Settings Icon"></label>
           <label id="logout" for="radio_logout" >Log Out<img src="Images/icons8-logout-48.png" alt="Settings logout"></label>
    </div>
    </div><br>
        </div>
        <div id="right-pannel">
       
            <div id="header">
                <img src="Images/icons8-online-chat-64 (1).png" alt="Online Chat Logo">
                <div id="loader_holder" class="loader_on"><img id='fix_loader' src="Images/giphy.gif"></div>

                <div id="image_viewer" class="image_off" onclick="close_image(event)"></div>

                <span style="color: #fff;">My Chats</span>
            </div>
            <div id="container" >
               
    <div id="inner_left_pannel">
            
    </div>
            <input type="radio" id="radio_chat" name="myradio" style="display:none;">
                    <input type="radio" id="radio_contacts" name="myradio" style="display:none;">
                    <input type="radio" id="radio_settings" name="myradio" style="display:none;">
               
                <div id="inner_right_pannel">

                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">

    var sent_audio=new Audio("Images/message_sent.mp3");
    var received_audio=new Audio("Images/message_received.mp3");
    var CURRENT_CHAT_USER="";
    var SEEN_STATUS=false;

    function _(element) {
        return document.getElementById(element);
    }

    var label_contacts=_("label_contacts");
    label_contacts.addEventListener("click",get_contacts);

    var label_chat=_("label_chat");
    label_chat.addEventListener("click",get_chats);

    var label_settings=_("label_settings");
    label_settings.addEventListener("click",get_settings);

    var logout=_("logout");
    logout.addEventListener("click",logout_user);

    function get_data(find,type){
        var xml= new XMLHttpRequest();
        var loader_holder=_("loader_holder")
        loader_holder.className="loader_on";
        xml.onload = function () {
        if (xml.readyState == 4 || xml.status == 200) {
            loader_holder.className="loader_off";            
        handle_result(xml.responseText, type);
        }
        }
        var data={};
        data.find=find;
        data.data_type=type;
        data=JSON.stringify(data);

        xml.open("POST","api.php",true);
        xml.send(data);
    }
    function handle_result(result,type){
  // console.log(result);
        if(result.trim() != ""){

        var inner_right_pannel=_("inner_right_pannel"); 
        inner_right_pannel.style.overflow="visible";

        var obj=JSON.parse(result);
        if(typeof(obj.logged_in) != "undefined" && !obj.logged_in){
            window.location="login.php";
        }else{  
            switch(obj.data_type){
                case"user_info" : 
                    var username=_("username");
                    var email=_("email");
                    var profile_imageimage=_("profile_image");
                    username.innerHTML=obj.username;
                    email.innerHTML=obj.email;
                    profile_image.src=obj.image;
                    break;
                case "contacts":  
                    var inner_left_pannel=_("inner_left_pannel");
                        
                    inner_right_pannel.style.overflow="hidden";
                    inner_left_pannel.innerHTML=obj.message;
                    break;

                case "chats_refresh":
                    SEEN_STATUS=false;
                    var messages_holder=_("messages_holder");

                    messages_holder.innerHTML=obj.messages;
                    if(typeof obj.new_message != 'undefined'){
                        if(obj.new_message){
                            received_audio.play();

                            setTimeout(function(){
                        messages_holder.scrollTo(0,messages_holder.scrollHeight);
                        var message_text=_("message_text");
                        message_text.focus();
                         },100);
                        }
                    }
                   
                    break;
                 
                    case "send_message": 
                        sent_audio.play();   
                    case "chats":
                     SEEN_STATUS=false;
                    var inner_left_pannel=_("inner_left_pannel");
                    
                    inner_left_pannel.innerHTML=obj.user;
                    inner_right_pannel.innerHTML=obj.messages;

                    var messages_holder=_("messages_holder");
                    setTimeout(function(){
                        messages_holder.scrollTo(0,messages_holder.scrollHeight);
                        var message_text=_("message_text");
                        message_text.focus();
                    },100);

                    if(typeof obj.new_message != 'undefined'){
                        if(obj.new_message){
                            received_audio.play();
                        }
                    }

                    break;
                     

                case "settings":
                    var inner_left_pannel=_("inner_left_pannel");
                    
                    inner_left_pannel.innerHTML=obj.message;
                    break;


                case "send_image":
                    alert(obj.message);
                    break;
                    
                case "save_settings":
                    
                    alert(obj.message);
                    get_data({},"user_info");
                    get_settings(true);
                    break;
            }
       
        }
     }
    }
    function logout_user(){
        var answer=confirm("Are you sure you want to Log out?");
        if(answer){
            get_data({},"logout");
        }  
    }
     get_data({},"user_info");
     get_data({},"contacts"); 

    var radio_contacts=_("radio_contacts");
    radio_contacts.checked=true;
    function get_contacts(e)
    {
        get_data({},"contacts"); 
    }
    function get_chats(e)
    {
        get_data({},"chats"); 
    }
    function get_settings(e)
    {
        get_data({},"settings"); 
    }
    function send_message(e)
    {
        var message_text=_("message_text");
        if(message_text.value.trim()==""){
            alert("Type something to send.")
            return;
        }
        
        get_data({

            message:message_text.value.trim(),
            userid:CURRENT_CHAT_USER

        },"send_message"); 
    }

    function enter_pressed
                (e){
                    if(event.keyCode==13){
                        send_message(e); 
                    }
                    SEEN_STATUS=true;
                }

    setInterval(function(){

        var radio_chat=_("radio_chat");
        var radio_contacts=_("radio_contacts");
        if(CURRENT_CHAT_USER !="" && radio_chat.checked){
            get_data({
                userid:CURRENT_CHAT_USER,
                seen:SEEN_STATUS
            },"chats_refresh");
        }
        if( radio_contacts.checked){
            get_data({},"contacts"); 
        }

      },5000);

      function set_seen(e){

         SEEN_STATUS=true;

      }
      function delete_message(e)
      {
        if(confirm("Are you sure you want to Delete this message?")){
            var msgid=e.target.getAttribute("msgid");
            get_data({
                rowid:msgid
            },"delete_message");

            get_data({
                userid:CURRENT_CHAT_USER,
                seen:SEEN_STATUS
            },"chats_refresh");

        }
      }

      function delete_thread(e)
      {
        if(confirm("Are you sure you want to Delete this Whole Thread?")){
            get_data({
                userid:CURRENT_CHAT_USER
            },"delete_thread");

            get_data({
                userid:CURRENT_CHAT_USER,
                seen:SEEN_STATUS
            },"chats_refresh");

        }
      }

</script>
<script type="text/javascript">

        function collect_data() {
            var save_settings_button=_("save_settings_button");
            save_settings_button.disabled=true;
            save_settings_button.value="Loading... Please wait.";

            var myform = _("myform");
            var input = myform.getElementsByTagName("input");
            var data = {};

            for (var i = input.length - 1; i >= 0; i--) {
                var key = input[i].name;
                switch (key) {
                    case "username":
                        data.username = input[i].value;
                        break;
                    case "email":
                        data.email = input[i].value;
                        break;
                    case "gender":
                        if (input[i].checked) {
                            data.gender = input[i].value;
                        }
                        break;
                    case "password":
                        data.password = input[i].value;
                        break;
                    case "password2":
                        data.password2 = input[i].value;
                        break;
                }
            }
            send_data(data,"save_settings");
            
        }
        function send_data(data,type){
            var xml=new XMLHttpRequest();
            xml.onload=function(){
                if(xml.readyState==4 || xml.status==200){
                    handle_result(xml.responseText);
                    var save_settings_button=_("save_settings_button");
                    save_settings_button.disabled=false;
                    save_settings_button.value="Sign Up";
                }
            }
                data.data_type=type;
                var data_string=JSON.stringify(data);
                xml.open("POST","api.php",true);
                xml.send(data_string);
        }
      
        function upload_profile_image(files){

            var filename=files[0].name;
            var ext_start=filename.lastIndexOf(".");
            var ext=filename.substr(ext_start + 1,3);
            if(!(ext=="jpg" || ext=="JPG")){
                alert("This file type is not Allowed");
                return;
            }

            var change_image_button=_("change_image_button");
            change_image_button.disabled=true;
            change_image_button.innerHTML="Uploading Image...";

            var myform=new FormData();
            var xml=new XMLHttpRequest();
            xml.onload=function(){
                if(xml.readyState==4 || xml.status==200){

                    get_data({},"user_info");
                    get_settings(true);   
                    change_image_button.disabled=false;
                    change_image_button.innerHTML="Change Image";
                }
            }
                myform.append('file',files[0]);
                myform.append('data_type',"change_profile_image");
                xml.open("POST","uploader.php",true);
                xml.send(myform);
        }

        function handle_drag_and_drop(e){
            if(e.type=="dragover"){
                e.preventDefault();
                e.target.className="dragging";
            }else if(e.type=="dragleave"){
                e.target.className="";
            }
            else if(e.type=="drop"){
                e.preventDefault();
                e.target.className="";
                upload_profile_image(e.dataTransfer.files);
            }
            else{
                e.target.className="";
            }   
        }
        function start_chat(e){
            var userid=e.target.getAttribute("userid");
            if(e.target.id==""){
                userid=e.target.parentNode.getAttribute("userid");
            }
            
            CURRENT_CHAT_USER =userid;

            var radio_chat=_("radio_chat");
            radio_chat.checked=true;
            get_data({userid:CURRENT_CHAT_USER},"chats"); 
        }

        function send_image(files){
            
            var filename=files[0].name;
            var ext_start=filename.lastIndexOf(".");
            var ext=filename.substr(ext_start + 1,3);
            if(!(ext=="jpg" || ext=="JPG")){
                alert("This file type is not Allowed");
                return;
            }
            var myform=new FormData();
            var xml=new XMLHttpRequest();
            xml.onload=function(){
                if(xml.readyState==4 || xml.status==200){

                    handle_result(xml.responseText,"send)image");
                    get_data({
                     userid:CURRENT_CHAT_USER,
                        seen:SEEN_STATUS
                        },"chats_refresh");   
                }
            }
                myform.append('file',files[0]);
                myform.append('data_type',"send_image");
                myform.append('userid',CURRENT_CHAT_USER);

                xml.open("POST","uploader.php",true);
                xml.send(myform);
        }
        function close_image(e){
            e.target.className="image_off";
        }
        function image_show(e){
           var image= e.target.src;
           var image_viewer=_("image_viewer");

           image_viewer.innerHTML="<img id='pop_up_img' src='"+image+"' />";
           image_viewer.className="image_on";
        }
    </script>
