<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" />

    <title>Insert category</title>
</head>
<body>
    <?php
    
    include("../includes/connect.php");
    if(isset($_POST['insert_cat'])){
        $category_title=$_POST['cat_title'];
       
        $select_query="Select * from `categories` where category_title='$category_title'";
        $result_select=mysqli_query($con,$select_query);
       
        $number=mysqli_num_rows( $result_select);
        if($number>0){
            echo "<script>alert('Category already exists')</script>";
        }else{

        $insert_query="insert into `categories` (category_title) values ('$category_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Category added successfully')</script>";
        }
    }
    }
    ?>
<div class="container">
  <form action="" method="post">

    <label for="fname">Insert Category</label>
    <input type="text" id="fname" name="cat_title" placeholder="">

    
    <input name="insert_cat" type="submit" value="Submit">

  </form>
</div>

</body>
</html>

