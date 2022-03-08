

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       table  tr td, th, table{
            border-collapse: collapse;
            border: 2px solid blue;
           width: 20px;
           height: 20px;
        }
        
    </style>
</head>
<body>
    <?php
    include('./mia.php');

      if (!$connection) {
       echo 'connection error '.mysqli_connect_error();
    }else{
        $sql="SELECT * FROM registration";
        $select = mysqli_query($connection, $sql) or die("Error occurred".mysqli_error());
        if($select){
         $mia= mysqli_num_rows($select);
         if($mia>0){
        
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>email</th>
            <th>Nationality</th>
        </tr>
    
    <?php
    
    while ($row=mysqli_fetch_assoc($select)){
         
        ?>
    <tr>
        <td><?php echo md5( $row['id'])?></td>
        <td><?php echo $row['firstname']?></td>   
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['nationality']?></td>
    </tr>
    <?php
    }
    }
        }
    }
    // echo var_dump($row);
    ?>
    </table>
</body>
</html>