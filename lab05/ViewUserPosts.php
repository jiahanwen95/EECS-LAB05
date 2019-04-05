<html>
<body>
<table  border="1" cellspacing="0" cellpadding="0">
<?php
    $mysqli=new mysqli("mysql.eecs.ku.edu","h539j862","jhw2900031","h539j862");
    $exituser=$_POST['Users'];
    $result = $mysqli->query("SELECT content FROM Posts where author_id= '$exituser' ");
    if($result->num_rows == 0) {
        echo "the user not post anything"."<br>";
    } 
    while($rs=mysqli_fetch_object($result)){
        $content=$rs->content;  
        
?>

<tr align="center">
<td><?php echo $content ?><td> <br>
</tr>
 <?php
                    }
                    mysqli_close();
?>
</table>
</body>
<html>