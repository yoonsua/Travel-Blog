<?php
include('config.php');

$statement = $connect-> prepare($query);
$statement -> execute(
array(
':content_id' => $_POST["content_id"],
':user_id' => $_SESSION["user_id"]
)
);

$result = $statement->fetchAll();
if(isset($result))
{
echo 'done';
}
}

?>