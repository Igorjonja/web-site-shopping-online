<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Igors Jacenko">
    <title>New client</title>
    <?php include('config/css.php'); ?> <!-- style config  -->
    <?php include('config/js.php'); ?>  <!-- javascript config  -->
    
</head>
<body>

    <header>
    <?php include('navigation.php');?>
    </header>
    <main id="main">
        <div>
    <div class="signinForm">
        <form  id="Sign in" method="post">
            <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            <br>
            <label for="pass">Show password</label>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
            </svg>
                <input type="checkbox" onclick="showPassword()" id="pass" value="Show password">

            <br>
            <label for="confirm_password">Confirm password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="examlple@example.com">
            <br>
            <label for="birthday">Enter your birthday:</label>
                <input type="date" id="birthday" name="birthday" min="1888-01-01" max="">
            <br>
            <fieldset class="gender"  id="gender" >
                <legend>Gender:</legend>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female">
            </fieldset>


                <input class="submit" type="submit" value="Sign in" method>




        </form>
     

    
    </div>
    <div class="signinForm">
    <form action="new_client.php" method="post">
            <fieldset>
                <p>Type number of symbols</p>
                <p><input type="number" min="1" name="num_of_symbols" ></p>
                <input type="checkbox" id="without_1_0_numbers" name="numberNo10" value="true">
                <label for="without_1_0_numbers"> Numbers without 0 and 1</label><br>
                <input type="checkbox" id="Big_letters" name="Bletters" value="true">
                <label for="vehicle2">Big letters without o and O</label><br>
                <input type="checkbox" id="Small_letters" name="Sletters" value="true">
                <label for="vehicle3"> Small letters without "l"</label>
                <p><input type="submit" value="Generete password"></p>
            </fieldset>
        </form>
        
   
    <?php include('randompass.php')?>
    </div>
        </div>

        <script src="forms.js"></script>
    </main>
    
</body>

<footer>
<!-- Footer -->
<?php include('footer.php');?>
</footer>
</html>