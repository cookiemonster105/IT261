<?php
include('server.php')
// include ('./include/header.php');

?>

<h1> Login Page</h1>
<form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
method ="post">
<filedset>
    <label>Username</label>
    <input type="type" name="username" value ="<?php  if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

    <label>Password</label>
    <input type="password" name="password">
    <button type="submit" class="btn" name="login_user">Login</button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>' ">Reset</button>

</fieldset>