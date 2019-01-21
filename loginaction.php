<?php include("config.php");

    $userid = "";
    $userpassword = "";

    if( isset($_POST['userid']) ) {
        $userid = $_POST['userid'];
    }
    if( isset($_POST['password']) ) {
        $userpassword = $_POST['password'];
    }

    if( $userid && $userpassword ) {
        $sql = "SELECT * FROM information WHERE userid='{$userid}' and userpassword='{$userpassword}'";
        if( $rs = $db->query($sql) ) {
            if( $information = $rs->fetch() ) {
                $_SESSION['loginname'] = $information['username'];
                $_SESSION['loginid'] = $information['userid'];
            }
        }
    }
	header("Location: ./");
    
?>