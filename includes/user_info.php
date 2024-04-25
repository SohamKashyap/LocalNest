<?php
$info = (object)[];
$data = [];

// validate info
if (isset($_SESSION['userid'])) {
    $data['userid'] = $_SESSION['userid'];

    $query = "SELECT * FROM users WHERE userid = :userid LIMIT 1";
    $result = $DB->read($query, $data);

    if (is_array($result) && !empty($result)) {
        $result = $result[0];
        $result->data_type = "user_info";
        //check if image exists
        $image=($result->gender=="Male") ?"Images/man_4140048.png" : "Images/woman_4140047.png" ;
        if(file_exists($result->image)){
            $image=$result->image;
        }
        $result->image=$image;
        echo json_encode($result);
    } else {
        $info->message = "Wrong email";
        $info->data_type = "error";
        echo json_encode($info);
    }
} else {
    $info->message = "User not logged in !";
    $info->data_type = "error";
    echo json_encode($info);
}

