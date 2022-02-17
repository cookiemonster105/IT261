<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🖩 Calculator Form 🖩</title>
    <link href ="calc_styles.css" type="text/css" rel="stylesheet">

</head>
<body>
    <h1>Travel Calculator Form</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
  <fieldset>
  <legend>MPG Form:</legend>
    <label>Name</label>
    <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">


    <label>Total Miles Driving?</label>
    <input type="number" name="total_number" value="<?php if (isset($_POST['total_number'])) echo htmlspecialchars($_POST['total_number']); ?>">

    <label>How Fast Do You Typically Drive?</label>
    <input type="number" name="fast" value="<?php if (isset($_POST['fast'])) echo htmlspecialchars($_POST['fast']); ?>">

    <label>How Many Hours Per Day Do You Plan On Driving?</label>
    <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">

    <lable>Price of Gas</label>
    <ul>
        <li>
        <input type ="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked" ';?> >$3.00
        </li>

        <li>
        <input type ="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked" ';?> >$3.50
        </li>

        <li>
        <input type ="radio" name="gas" value="1.37" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked" ';?> >$4.00
        </li>
    </ul>

    <select name = "Miles Per Gallon">
<option value = "" NULL <?php if(isset($_POST['bank']) &&  $_POST['bank'] == NULL) echo 'Selected = "unselected" ';?>>Select MPG</option>

<option value="10" <?php if (isset ($_POST['10']) && $_POST['mpg'] == '10') echo 'selected = "unelected" ' ;?>>10</option>

<option value="15" <?php if (isset ($_POST['15']) && $_POST['mpg'] == '15') echo 'selected = "unelected" ' ;?>>15</option>

</select>

    
    <input type ="submit" value="Calculate">
</fieldset>
</form>
 <button><a href="">Reset</a></button>

 <?php

 $name = $_POST['name'];
        $total_number =$_POST['total_number'];
        $fast = 'fast';
        $hours = 'hours';
        $gas = 'gas';
        $mpg = 'mpg';
       
        
        $gas_cost = 12 / 5 /** $gas*/;
        echo $gas_cost;
        
        /*$name = $_POST['name'];
        $total_number = $_POST['total_number'];
        $fast = $_POST['fast'];
        $hours = $_POST['hours'];
        $gas = $_POST['gas'];
        $mpg = $_POST['mpg'];
        
        $gas_cost= ($total_number/$mpg) * $gas;
        echo $gas_cost;*/
        echo $name;
        echo $_POST['total_number'];

?>
</body>
</html>
