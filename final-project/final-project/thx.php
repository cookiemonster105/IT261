<?php

include('server.php');
include('includes/header.php');


// // show session_start
// session_start();
// include('config.php');

// //did  user log in ccorrectly, and if not user will recive msg and be directed back to login

// if(!isset($_SESSION['username'])) {
//     $_SESSION['msg'] = 'You must login first';
//     header('Location:login.php');
// }

// if(isset($_GET['logout'])){
//     session_destroy();
//     unset($_SESSION['username']);
//     header('Location:login.php');
// }

// // include('./includes/header.php');
// // is session success set?
// if(isset($_SESSION['success']))  : 
//     ?>

    <div class="success">
        <h3> <?php echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
        </h3>
    </div><!-- close success div  -->
<!--  -->
    

    <?php 
    // is session username set
    if(isset($_SESSION['username'])) :?>

    <div class="welcome-logout">

    <h3>Welcome, 
        <?=  $_SESSION['username']; ?>
    </h3>
    <p><a href="index.php?logout='1'">Logout</a> </p><!-- logout may need to be index_week9 -->
    
    </div><!-- close welcome logout -->
    <?php endif; ?>

    <div id="wrapper">
    <?php echo '<h1>'. $headline. '</h1>'; ?>
<img src= "images/wh.jpg" alt="Whitehouse">

<?php echo '<h1>'. $body. '</h1>'; ?>
    </div>
    

    <?php 
    include('./includes/footer.php'); 
    