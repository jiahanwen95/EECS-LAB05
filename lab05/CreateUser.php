<?php
$mysqli=new mysqli("mysql.eecs.ku.edu","h539j862","jhw2900031","h539j862");
if($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit(); 
}
$newuser=$_POST['userid'];
$result = $mysqli->query("SELECT user_id FROM Users WHERE userid = '$newuser' ");
$sql = "INSERT INTO Users (user_id)
VALUES ('$newuser')";
if($newuser==NULL)
{
    echo "Cannot be nothing"."<br>";
}
else
{
    if($mysqli->query($sql)==TRUE)
    {
        echo "Insert sucessed";
    }
    else{
        echo "Insert faile";
    }
    $mysqli->close();
}


?>