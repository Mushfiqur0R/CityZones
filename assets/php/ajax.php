<?php
require_once 'config.php';
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("database is not connected");

if(isset($_COOKIE['follow'])){
    $user_id = $_POST['user_id'];
    //if(followUser($user_id)){
    if(true){
        $response['status']=true;

    }else{
        $response['status']=false;
    }

echo json_encode($response);
}