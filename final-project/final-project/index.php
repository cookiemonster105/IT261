<?php

include('server.php');
include('includes/header.php');

session_start();
//include('config.php');

//did  user log in ccorrectly, and if not user will recive msg and be directed back to login

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
    <?php endif; ?>

    <div id="wrapper">
        
            <?php echo '<h1>'. $headline. '</h1>'; ?>
            <br>
            <div id="inner_wrapper">
            <?php echo $body ?>
        </div>
    </div>
    <br>

    <?php 
    include('./includes/footer.php'); 
    ?>