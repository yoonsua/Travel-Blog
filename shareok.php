<?php
include("config.php");
$title = "";
$contents = "";
$writer = "";
if( isset($_POST['title']) ) {
 $title = htmlentities($_POST['title']);
}
if( isset($_POST['contents']) ) {
 $contents = htmlentities($_POST['contents']);
}
if( isset($_POST['writer']) ) {
 $writer = htmlentities($_POST['writer']);
}
//파일업로드 
$file = "";
$dir = "./image/";
if(is_uploaded_file($_FILES['upfile']['tmp_name'])) {
 $upfile = basename($_FILES['upfile']['name']);
 $target = $dir . $upfile;
 if( move_uploaded_file($_FILES['upfile']['tmp_name'], $target) ) {
  $file = $upfile;
 }
}

if( $title && $contents && $writer ) {
 $sql = "INSERT INTO posts SET ";
 $sql .= "title=:title";
 $sql .= ", contents=:contents";
 $sql .= ", writer=:writer";
 $sql .= ", file=:file";
 $sql .= ", wdate=now()";
 $sql .= ", hit=0";
 $rs = $db->prepare($sql);
 $rs->bindParam(":title", $title);
 $rs->bindParam(":contents", $contents);
 $rs->bindParam(":writer", $writer);
 $rs->bindParam(":file", $file);
 $rs->execute();
}
header("Location: ./");