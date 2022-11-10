<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" />

    <title>Insert Brand</title>
</head>
<body>
<?php
    
    include("../includes/connect.php");
    if(isset($_POST['insert_brand'])){
        $brand_title=$_POST['brand_title'];
       
        $select_query="Select * from `brands` where brand_title='$brand_title'";
        $result_select=mysqli_query($con,$select_query);
       
        $number=mysqli_num_rows( $result_select);
        if($number>0){
            echo "<script>alert('Brand already exists')</script>";
        }else{

        $insert_query="insert into `brands` (brand_title) values ('$brand_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Brand added successfully')</script>";
        }
    }
    }
    ?>
<div class="container">
  <form action="" method="post">

    <label for="fname">Insert Brand</label>
    <input type="text" id="fname" name="brand_title" placeholder="">

    
    <input name="insert_brand" type="submit" value="Submit">

  </form>
</div>

</body>
</html>

