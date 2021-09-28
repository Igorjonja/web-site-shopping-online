<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="#tourism; #shoping">
    <meta name="description" content="">
    <meta name="author" content="Igors Jacenko">
    <title>  <?php echo $page['title'];?></title>

    <?php include('config/css.php'); ?> <!-- style config  -->
    <?php include('config/js.php'); ?>  <!-- javascript config  -->
   
</head>
<body>
    <header>
        <?php include('navigation.php');?>
    </header>
    

   <main id="main">
   <?php echo $page['body'];?>
 




   <script src="forms.js"></script>
   </main>
</body>
<footer>
<!-- Footer -->
<?php include('footer.php');?>
</footer>
</html>