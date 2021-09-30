<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <?php include('config/css.php'); ?>
    <!-- style config  -->
    <?php include('config/js.php'); ?>
    <!-- javascript config  -->
</head>

<body>
    <header>
        <!-- Navigation -->
        <?php include('navigation.php'); ?>
    </header>
    <main id="main">
        <div id="currentForecast">

            <h3>Current weather Riga</h3>
            <img id="weatherImg">
            <div>
                <ul id="weatherList">

                </ul>

            </div>
        </div>



    </main>
    <script src="weather.js"></script>
    <script src="forms.js"></script>
</body>

<footer class="footer">
    <!-- Footer -->
    <?php include('footer.php'); ?>
</footer>

</html>