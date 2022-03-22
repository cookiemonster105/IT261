<?php

include('server.php');
include('includes/header.php');


// show session_start
session_start();

//did  user log in correctly, and if not user will recive msg and be directed back to login

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

// include('./includes/header.php');
// is session success set?
if(isset($_SESSION['success']))  : 
    ?>

    <div class="success">
        <h3> <?php echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
        </h3>
    </div><!-- close success div  -->
<!--  -->
    <?php endif; ?>

   
      <!-- HTML -------------------------------------------  -->
      <link href="nw_style.css" type="text/css" rel="stylesheet">


    <div class="grid-container">
      <div class="item1"> <h3>7 Days of the Craziest Things U.S. Presidents Have Done</h3> 
        </div>

      <div class="item2"><!--Menu  -->
      <a href="daily.php?today=Monday">Monday</a><br>
    <a href="daily.php?today=Tuesday">Tuesday</a></br>
    <a href="daily.php?today=Wednesday">Wednesday</a><br>
    <a href="daily.php?today=Thursday">Thursday</a><br>
    <a href="daily.php?today=Friday">Friday</a><br>
    <a href="daily.php?today=Saturday">Saturday</a><br>
    <a href="daily.php?today=Sunday">Sunday</a><br>

<!-- //<?php
//foreach($nav as $key => $value) {
// if (THIS_PAGE == $key){
// echo '<li> <a class="current"  href="' .$key.'"> ' .$value.'</a> </li>';
//}else{
////  echo '<li> <a href="' .$key.'"> ' .$value.'</a> </li>';
//}
//};  //end foreach

?> --> 



      </div>
       <div class="item3"><!-- Photo -->
      <?php echo $day_photo. ' ' .$alt_tag; ?>

     </div>  
        <div class="item4"><!-- Main Main Main -->
    
      <?php
            echo '<h4>' . $day . ' </h4>';
            echo '<h4>' . $day_title . '</h4>';
            echo '<br>';
            echo $day_text;


        ?>
      </div><!-- Main -->
    
    </div>
    <?php include ('includes/footer.php'); ?>