<?php
    define("TITLE", "Menu | Franklin's Fine Dining");
    include('includes/header.php');
?>

    <div id="menu-items">
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
        <p><em>Click any menu item to learn more about it.</em></p>

        <hr>

        <ul>
            <!-- This foreach loop allows us to extract the key -->
            <?php foreach ($menuItems as $dish => $item) { ?>
            <!-- This will output the dish key in the url bar -->
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a> <sup>$</sup><?php echo $item[price]; ?></li>
            <!-- End of foreach loop -->
            <?php } ?>
        </ul>
    </div><!-- menu-items -->

<?php
    include('includes/footer.php');
?>