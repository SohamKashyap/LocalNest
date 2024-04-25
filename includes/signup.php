<?php
$info = (object)[];
$data = [];

$data['userid'] = $DB->generate_id(20);
$data['date'] = date("Y-m-d H:i:s");

// validate username
$data['username'] = $DATA_OBJ->username;
if (empty($DATA_OBJ->username)) {
    $Error .= "Please enter a username.<br>";
} else {
    if (strlen($DATA_OBJ->username) < 3) {
        $Error .= "Username must be at least 3 characters long.<br> ";
    }
    if (!preg_match("/^[a-zA-Z]*$/", $DATA_OBJ->username)) {
        $Error .= "Please enter a valid Username.<br> ";
    }
}

$data['email'] = $DATA_OBJ->email;
if (empty($DATA_OBJ->email)) {
    $Error .= "Please enter your email.<br>";
} else {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $DATA_OBJ->email)) {
        $Error .= "Please enter a valid email.<br> ";
    }
}

$data['gender'] = isset($DATA_OBJ->gender) ? $DATA_OBJ->gender : null ;
if (empty($DATA_OBJ->gender)) {
    $Error .= "Please select a gender.<br>";
} else {
    if ($DATA_OBJ->gender != "Male" && $DATA_OBJ->gender != "Female") {
        $Error .= "Please select a valid gender.<br> ";
    }
}

$data['password'] = $DATA_OBJ->password;
$password = $DATA_OBJ->password2;
if (empty($DATA_OBJ->password)) {
    $Error .= "Please enter a Password.<br>";
} else {
    if ($DATA_OBJ->password != $DATA_OBJ->password2) {
        $Error .= "Your password does not match.<br> ";
    }
    if (strlen($DATA_OBJ->password) < 8) {
        $Error .= "Your password must be at least 8 characters long.<br> ";
    }
}

if ($Error == "") {
    $query = "insert into users(userid,username,gender,email,password,date) values (:userid,:username,:gender,:email,:password,:date)";
    $result = $DB->write($query, $data);

    if ($result) {
        $info->message = "Your Profile was created";
        $info->data_type = "info";
        echo json_encode($info);
    } else {
        $info->message = "Profile was NOT created due to an error!";
        $info->data_type = "error";
        echo json_encode($info);
    }
} else {
    $info->message = $Error;
    $info->data_type = "error";
    echo json_encode($info);
}

