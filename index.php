<?php
/**
 * This page creates an order for cupcakes and adds up the total in a summary.
 * Author: Adolfo Gonzalez
 * Date: 1/7/2019
 *
 * File: index.php
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Assignment</title>
</head>
<body>
<h1>Place your cupcake order here.</h1>
<p>Each pancake is $3.50. Chose one or more.</p>

<form action="summary.php" method="post">
    <label>Name: </label><input type="text" name="name" id="name" placeholder="first name"><br/>
    <input checked="checked" type="checkbox" name="flavors[]" value="grasshoper"><label>The Grasshopper</label><br/>
    <input type="checkbox" name="flavors[]" value="maple"><label>Whiskey Maple Bacon</label><br/>
    <input type="checkbox" name="flavors[]" value="carrot"><label>Carrot Walnut</label><br/>
    <input type="checkbox" name="flavors[]" value="caramel"><label>Salted Caramel Cupcake</label><br/>
    <input type="checkbox" name="flavors[]" value="velvet"><label>Red Velvet</label><br/>
    <input type="checkbox" name="flavors[]" value="lemon"><label>Lemon Drop</label><br/>
    <input type="checkbox" name="flavors[]" value="tiramisu"><label>Tiramisu</label><br/>
    <input type="submit" name="submit" value="Submit Order"/><br/>
</form>

</body>
</html>
