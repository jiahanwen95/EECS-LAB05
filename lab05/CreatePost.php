<?php
$mysqli=new mysqli("mysql.eecs.ku.edu","h539j862","jhw2900031","h539j862");

if($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit(); 
}
$exituser=$_POST['author_id'];
$con=$_POST['content'];
$result = $mysqli->query("SELECT * FROM Users WHERE user_id = '$exituser' ");
 if($exituser==NULL || $con==NULL )
{
    echo "Username and Content Cannot be nothing"."<br>";
}

else if($result->num_rows == 0) {
    echo "the user not exits"."<br>";
} 
else
{
    $sql = "INSERT INTO Posts (content,author_id)
    VALUES ('$con','$exituser')";
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