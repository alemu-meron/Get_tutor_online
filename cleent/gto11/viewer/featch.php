

<?php
    
        include_once('../controller/db.php');
//        $dbontroller = new dbcontroller();
//           $sign = $dbontroller->getsign();
       
        $sql = mysql_query  ("select * from tutor_sign");
       $result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> fecth</title>
</head>
<body>
    <table align="center" border="1px" style="width: 600px"; line-height:40px;>
        <tr>
            <th colspan="4"><h2> Tutor Records</h2></th>  
        </tr>
        <tr>
            <th>Fullname</th>
            <th>Date of birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Story</th>
            <th>img</th>
        </tr>
        <?php
        while ($rows=  mysql_fetch_assoc($result)){
            
        }
        ?>
        <tr>
        <td><?php echo $rows['Fullname']; ?></td>
        <td><?php echo $rows['Dateofbirth']; ?></td>
        <td><?php echo $rows['Gender']; ?></td>
        <td><?php echo $rows['Email']; ?></td>
        <td><?php echo $rows['Mobil']; ?></td>
        <td><?php echo $rows['Address']; ?></td>
        <td><?php echo $rows['Story']; ?></td
         <td><?php echo $rows['img']; ?></td>
        </tr>
    </table>
    
</body>
</html>-+=