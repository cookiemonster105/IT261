<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <?php
    // show session_start
session_start();


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
        </div><!--  close success div  -->
  
    <?php endif; ?>
    
    <div id="menu_grid">
    <div>
        <img src="images/coat_of_arms.png" id="coat_of_arms" alt="Symbol of presidency">
    </div>
    <nav>
        <?php echo make_links($nav); ?>
    </nav>
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
</div>
    
