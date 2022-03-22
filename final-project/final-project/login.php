<?php
include('server.php');
 include ('./includes/header-no-nav.php');

?>
<div id="wrapper">
<?php echo '<h1>'. $headline. '</h1>'; ?>

<div id="login">
<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
method ="post">
<filedset >
    <label>Username</label>
    <input type="type" name="username" value ="<?php  if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

    <label>Password</label>
    <input type="password" name="password">
    <button type="submit" class="btn" name="login_user">Login</button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>' ">Reset</button>
    
<?php include('errors.php');?>

</fieldset>
</div>
</form>
<h4 id="login_havent">Haven't Registered? Please vist our <a href="register.php">Reigistration Page</a></h4>

</div> <!-- close wrapper -->
<?php
include ('includes/footer.php'); ?>
