<?php
/*
 * This is the order summary for the cupcake index.php
 * Author: Adolfo Gonzalez
 * Date: 1/7/2019
 *
 * File: summary.php
 */

    //Turn on error reporting

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>
<body>
    <pre>
        <?php
        //boolean to track errors
        $isValid = true;

        //variables
        $flavors = array();
        $name = "";
        $cupcakes = 0;
        $total = 0;

        //make form sticky
        if(!empty($_POST)){
            $name =  $_POST['name'];
            $flavors = $_POST['flavor'];
            $cupcakes = count($flavors );
        }

        //check first name
        if (empty($name)){
            echo "alert(Please provide a first name)";
            $isValid =  false;
        }

        if($cupcakes < 1){
            echo "alert(Please select at least 1 cupcake flavor)";
            $isValid = false;
        }

        //if data is valid display summary
        if ($isValid){
            echo "<p>Thank you, $name, for your order!<br/><br/>";
            echo "Order Summary: <br/>";
            echo "<ul>";
            echo '<li>' . implode( '</li><li>', $flavors) . '</li>';
            echo "</ul><br/><br/>";
            $total = ($cupcakes * 3.50);
            echo "Order Total: $".number_format($total, 2);

        }
        ?>

    </pre>
</body>
</html>