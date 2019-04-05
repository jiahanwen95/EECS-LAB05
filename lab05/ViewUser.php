<html>
    <head>
        <title>Viewuser</title>
    </head>
    <body>
        <center>
            <form name="Users" action="processShowData.php">
                <table  border="1" cellspacing="0" cellpadding="0">
                    <caption>Userid</caption>
                        <th>User_id</th>
                        <?php
                            $mysqli=new mysqli("mysql.eecs.ku.edu","h539j862","jhw2900031","h539j862");
                            $exec="select * from Users";
                            $result=$mysqli->query($exec);
                            if($result->num_rows == 0) {
                                echo "the user not exits"."<br>";
                            } 
                            while($rs=mysqli_fetch_object($result)){
                                $id=$rs->user_id;                 
                        ?>
                    <tr align="center">

                    <td><?php echo $id ?></td>
                </tr>
                <?php
                    }
                    mysqli_close();
                ?>
                </table>
            </form>
        </center>
    </body>
</html>