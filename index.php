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

//variables
$flavors = array();
$name = "";
$num = 0;
//make form sticky
if(!empty($_POST)){
  $name =  $_POST['name'];
  $flavors = $_POST['flavor'];
  //count variable
  $num = count($flavors);
}
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
<?php
//array to hold cupcake options
$cupcakes = array("grasshoper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
                    "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake",
                    "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

?>
<h1>Place your cupcake order here.</h1>
<p>Each pancake is $3.50. Chose one or more.</p>
<form action="" method="post">
    <label>Name: </label><input type="text" name="name" id="name"<?php echo "value='$name'";?> placeholder="first name"><br/>
    <?php
        foreach($cupcakes as $key => $value ){
            echo "<input type='checkbox' name='flavor[]' value='$value'";
            if(in_array($value, $flavors))
            {
                echo "checked='checked'";
            }
            echo "><label>$value</label><br/>";
        }
    ?>
    <input type="submit" name="submit" value="Submit"/><br/>
</form>

</body>
</html>
