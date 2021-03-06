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
            <?php echo $body ?>
            <div id="inner_wrapper">
            
                
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="post" class="win_form">

<fieldset>

    <label>First Name</label>
    <input type= "text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
    <span class="error"><?= $first_name_err ?></span>

    <label>Last Name</label>
    <input type= "text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
    <span class="error"><?= $last_name_err ?></span>

    <label>email</label>
    <input type= "text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    <span class="error"><?=$email_err ?></span>

    <label>Phone</label>
    <input type= "tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
    <span class="error"><?=$phone_err ?></span>


    <label>Political Party</label>
    <ul>
        <li>
        <input type="radio" name="party" value="democratic"
        <?php if(isset($_POST['party']) && $_POST['party'] =='democratic') echo'checked ="checked" ' ;?>> Democratic Party
        </li>
        <li>
        <input type="radio" name="party" value="working"
        <?php if(isset($_POST['party']) && $_POST['party'] =='working') echo'checked ="checked" ' ;?>> Working Class Party
        </li>
                <li>
        <input type="radio" name="party" value="green"
        <?php if(isset($_POST['party']) && $_POST['party'] =='green') echo'checked ="checked" ' ;?>> Green
        </li>

        <li>
        <input type="radio" name="party" value="marijuana"
        <?php if(isset($_POST['party']) && $_POST['party'] =='marijuana') echo'checked ="checked" ' ;?>>  Legal Marijuana Now Party
        </li>

        <li>
        <input type="radio" name="party" value="other"
        <?php if(isset($_POST['party']) && $_POST['party'] =='other') echo'checked ="checked" ' ;?>>   Other political parties
        </li>
    </ul>
    <span class="error"><?= $party_err ?></span>

    <label>Comments</label>
         <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea> <span class="error"><?= $comments_err ?></span>
    <?=$comments_err ?></span> 
        
        <label>Privacy</label>
    <ul>
        <li>
        <input type="radio" name="privacy" value="yes"
        <?php if(isset($_POST['privacy']) && $_POST['privacy'] =='yes') echo'checked ="checked" ' ;?>>You must agree
        </li>
        </ul>
        <span class="error"><?=$privacy_err ?></span>

    <input type="submit" value ="WIN!">

    </fieldset>
</form>

<h4 id="reset"><a href ="">Reset!</a></h4>



         
        </div>
    </div>
    <br>

    <?php 
    include('./includes/footer.php'); 
    ?>