<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #000;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .navbar {
            background-color: #000;
            color: #fff;
            display: flex;
           
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .nav-links li a:hover {
            color:#ff3333;
        }

        .logo-img {
            max-width: 150px;
            height: auto;
        }

        .container {
            padding: 10px;
            border-radius: 8px;
            color: #fff;
        }
        .sign-up-logo img {
            max-width: 180px;
            height: auto;
            border-radius: 50%;
        }

        .sign-up-container {
            margin-top: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;    
        }


    </style>
</head>
<body>
<nav class="navbar">
    <div class="container">
    <img src="Images/local-nest-high-resolution-logo-white-transparent.png" alt="Logo" class="logo-img">
        <ul class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="main.php">Home/About/Services/Contact</a></li>
        </ul>
    </div>
</nav>
<div id="error" style="text-align:center; padding: 0.5em; background-color:#ce1d32; color: white;margin:auto; display:none;"></div>
<style>
    

        form{
            margin:auto;
            padding:10px;
            background-color: black;
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
        input[type=radio]{
            transform: scale(1.2);
            cursor: pointer;
        }
    
</style>




<body>

    <div class="sign-up-container">
        <div class="sign-up-logo">
            <img src="Images/log-in-high-resolution-logo-transparent.png" alt="Sign Up">
        </div>
        <form id="myform">
        
        <input type="text" name="email" placeholder="Email">
       
        <input type="password" name="password" placeholder="Password"><br>
        
        <input type="submit" value="Log In" id="login_button"><br>

        <br><a href="form.php" style="display:block;text-align:center;text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;Dont have an Account? SignUp Here...</a>
        
    </form>
    </div>
</body>
</html>

<script type="text/javascript">
        function _(element) {
            return document.getElementById(element);
        }

        var login_button = _("login_button");
        login_button.addEventListener("click", collect_data);

        function collect_data(e) {
            e.preventDefault();
            login_button.disabled=true;
            login_button.value="Loading... Please wait.";

            var myform = _("myform");
            var input = myform.getElementsByTagName("input");
            var data = {};

            for (var i = input.length - 1; i >= 0; i--) {
                var key = input[i].name;
                switch (key) {
                   
                    case "email":
                        data.email = input[i].value;
                        break;
                   
                    case "password":
                        data.password = input[i].value;
                        break;
                   
                }
            }
            send_data(data,"login");
            
        }
        function send_data(data,type){
            var xml=new XMLHttpRequest();
            xml.onload=function(){
                if(xml.readyState==4 || xml.status==200){
                    handle_result(xml.responseText);
                    login_button.disabled=false;
                     login_button.value="login";
                }
            }
                data.data_type=type;
                var data_string=JSON.stringify(data);
                xml.open("POST","api.php",true);
                xml.send(data_string);
        }
        function handle_result(result) {
            var data = JSON.parse(result);
            if (data.data_type == "info") {
                window.location = "livechat.php";
            } else {
                var error = _("error");
                error.innerHTML = data.message;
                error.style.display = "block";
            }
        }
    </script>