<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/24/2019
 * Time: 11:17 AM
 */

?>

<?php include 'Calculation.php';?>

<form action="" method="post">

    <input name="num1" type="number">
    <input name="num2" type="number">
    <input type="submit" name="calculate" value="calculate">

</form>

<?php

if (isset($_POST['calculate'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (empty($num1) && empty($num2)){

        echo "<span style='color: red;'>Full Fill the Field</span>";
    }else{

        //creating the object
        $cal = new Calculation();

        //calling method with parameter

        echo 'sum:'.$cal->add($num1,$num2);
        echo 'sub:'.$cal->sub($num1,$num2);
        echo 'mul:'.$cal->mul($num1,$num2);
        echo 'div:'.$cal->div($num1,$num2);

    }






}



?>
