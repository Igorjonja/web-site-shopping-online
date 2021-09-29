<?php
#Make the navigation an active
// var_dump($_SERVER["PHP_SELF"]); cheking link name
if (isset($_SERVER["PHP_SELF"])) {
    $link = $_SERVER["PHP_SELF"];
    $needle = 'online/';
    $filter1 = stristr($link, $needle);

    // var_dump($link);
    // var_dump($filter1);
    $filter2 = stristr($filter1, '/');
    // var_dump($filter2);
}


?>


<nav>
    <ul>
        <li <?php if ($filter2 === "/index.php") {
                echo 'class="active"';
            } ?>>
            <a href="index.php">Home</a>
        </li>

        <li <?php if ($filter2 === "/contact.php") {
                echo 'class="active"';
            } ?>>
            <a href="contact.php"  target=”_blank”>Contacts</a>
        </li>

        <li <?php if ($filter2 === "/section_with_columns.php") {
                echo 'class="active"';
            } ?>>
            <a href="section_with_columns.php"  target=”_blank”>Section with columns</a>
        </li>

        <li <?php if ($filter2 === "/section_with_table.php") {
                echo 'class="active"';
            } ?>>
            <a href="section_with_table.php"  target=”_blank”>Section with table</a>
        </li>




        <li>
            <a href="#"> Practice operation </a>
            <ul>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="random_cat.php"  target=”_blank”>Cat randomizer</a>
        </li>

        <a class="dropdown-item" href="new_client.php"  target=”_blank”>New client</a></li>

        <a class="dropdown-item" href="about.php"  target=”_blank”>About from DB</a></li>

        <a class="dropdown-item" href="createnew.php" target=”_blank”>Create new elements in section</a></li>


        </div>
    </ul>
    </li>
    <div class="actionButtons">
        <input class="changeColor" type="button" value="change color" onclick="changeColor()">
        <input class="changeColor" type="button" value="change language" onclick="changeLanguage()">
    </div>
    </ul>



</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>