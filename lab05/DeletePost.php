<html>
<body>
<table  border="1" cellspacing="0" cellpadding="0">
<th>Post_id</th>
<th>content</th>
<th>author_id</th>
<?php
    $mysqli=new mysqli("mysql.eecs.ku.edu","h539j862","jhw2900031","h539j862");
    $markedpost=$_POST['content'];
    $N = count($markedpost);
    
    echo("You delet $N post(s): </br>");
    
    
    for ($i=0; $i < $N; $i++)
    {
        $ids="select * from Posts where content='" . $markedpost[$i] . "'";
        $info=$mysqli->query($ids);    
        while($rs=mysqli_fetch_object($info)){
            $authorid=$rs->author_id;
            $postid=$rs->post_id; 
        }
        echo "<tr>";
        echo ("<td>$postid</td>");
        echo ("<td>$markedpost[$i]</td>");
        echo ("<td>$authorid</td>");
        echo "</tr>";
    }

    
    for($i=0; $i < $N; $i++)
    {
      $exec="delete  from Posts where content='$markedpost[$i]';";
      $result=$mysqli->query($exec);
   }
    





    
     
        
?>
</table>
<body>
<html>
