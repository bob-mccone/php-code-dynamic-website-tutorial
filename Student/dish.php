<?php
    define("TITLE", "Menu Item | Franklin's Fine Dining");
    include('includes/header.php');

    function strip_bad_chars($input) {
        // Finds the bad character and removes then, stops an attack
        $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    if (isset($_GET['item'])) {
        // Strip the bad characters first then get the menu item that the user has clicked on
        $menuItem = strip_bad_chars($_GET['item']);
        // Dish is the actual menu item that is in the array e.g. dill salmon
        $dish = $menuItems[$menuItem];
    }

    // Calculate a suggested tip
    function suggestedTip($price, $tip) {
        $totalTip = $price * $tip;
        // Putting the tip into money format otherwise php will think it's just a number
        echo sprintf("%1\$.2f", $totalTip);
    }
?>

    <hr>
    <div id="dish">
        <h1><?php echo $dish[title]; ?> <span class="price"><sup>$</sup><?php echo $dish[price]; ?></span></h1>
        <p><?php echo $dish[blurb]; ?></p>
        <br>
        <p><strong>Suggested beverage: <?php echo $dish[drink]; ?></strong></p>
        <p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish[price], 0.20); ?></em></p>
    </div><!-- dish -->

    <hr>

    <a href="menu.php" class="button previous">&laquo; Back to menu</a>

<?php include('includes/footer.php'); ?>