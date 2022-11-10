<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Admin</title>
</head>
<body>
   <h1 class="container">admin</h1>
    <div class="container">
    <a href="index.php?insert_category" class="btn sky">Insert Category</a>
    <a href="index.php?insert_brand" class="btn sky">Insert Brand</a>
    <a href="#fakeLink" class="btn sky">Sky</a>
    <a href="#fakeLink" class="btn sky">Sky</a>
    <a href="#fakeLink" class="btn sky">Sky</a>
    <a href="#fakeLink" class="btn sky">Sky</a>
    <a href="#fakeLink" class="btn sky">LogOut</a>
<a href="#fakeLink" class="btn sky">Sky</a>
    </div>
<div class="container">

<?php
   if(isset($_GET['insert_category'])){
    include('insert_category.php');
   }
   if(isset($_GET['insert_brand'])){
    include('insert_brand.php');
   }
?>
</div>
</html>