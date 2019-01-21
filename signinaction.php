<?php include("config.php");

    $userid = "";
    $userpassword = "";
    $username = "";
    $email = "";

    if( isset($_POST['userid']) ) {
        $userid = $_POST['userid'];
    }
    if( isset($_POST['password']) ) {
        $userpassword = $_POST['password'];
    }
    if( isset($_POST['username']) ) {
        $username = $_POST['username'];
    }
    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    }

    $sql = "INSERT INTO Information SET";
    $sql .= " userid='{$userid}'";
    $sql .= ", userpassword='{$userpassword}'";
    $sql .= ", username='{$username}'";
    $sql .= ", email='{$email}'";    
    
    $rs = $db->query($sql);
    header("Location: index.php");
?>