<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="#tourism; #shoping">
    <meta name="description" content="">
    <meta name="author" content="Igors Jacenko">
    <title>There should be "shop title"</title>

    <?php include('config/css.php'); ?> <!-- style config  -->
    <?php include('config/js.php'); ?>  <!-- javascript config  -->
   
</head>
<body>
    <header>
        <?php include('navigation.php');?>
    </header>
    

   <main id="main">
    <div id="table">
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>





    <script src="forms.js"></script>
   </main>
</body>
<footer>
<!-- Footer -->
<?php include('footer.php');?>
</footer>
</html>