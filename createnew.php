<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section with columns</title>
    <?php include('config/css.php'); ?>
</head>

<body>
    <header>
        <!-- Navigation -->
        <?php include('navigation.php'); ?>
    </header>


    <main id="main">
        <div>

            <ul class="list-group" id=myList>
                <li class="list-group-item">Element1</li>
                <li class="list-group-item">Element2</li>

            </ul>



            <button onclick="myFunction()">Try it</button>
        </div>
    </main>



    <script src="createNew.js"></script>
    <script src="forms.js"></script>

</body>
<footer class="footer">
    <!-- Footer -->
    <?php include('footer.php'); ?>
</footer>

</html>