<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
    <?php include('config/css.php'); ?>
</head>

<body>
    <header>
        <!-- Navigation -->
        <?php include('navigation.php'); ?>
    </header>
    <main id="main">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="submit" value="Upload">


    </form>







    </main>
    <script src="forms.js"></script>

</body>
<footer class="footer">
    <!-- Footer -->
    <?php include('footer.php'); ?>
</footer>

</html>