<?php

include('server.php');
include('includes/header.php');


// show session_start
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
<!--  -->
    <?php endif; ?>
<?php

$first_name ='';
$last_name='';
$email='';
$party='';
$phone='';
$comments ='';
$privacy ='';
$first_name_err ='';
$last_name_err = '';
$email_err = '';
$party_err = '';
$phone_err = '';
$comments_err ='';
$privacy_err ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
            if (empty($_POST['first_name']))
        {
            $first_name_err = 'Please fill out your first name';
        } //if empty
        else
        {
            $first_name = $_POST['first_name'];
            
        }

    if (empty($_POST['last_name']))
    {
        $last_name_err = 'Please fill out your last name';
    } //if empty
    else
    {
        $last_name = $_POST['last_name'];
    }

        if (empty($_POST['email']))
        {
            $email_err = 'Please fill out your email';
        } //if empty
        else
        {
            $email = $_POST['email'];
        }

            if (empty($_POST['party']))
        {
            $party_err = 'Please add your party';
        } //if empty
        else
        {
            $party = $_POST['party'];
        }

    
            if (empty($_POST['phone']))
        {
            $phone_err = 'Please add your phone number';
        } //if empty
        else
        {
            $phone = $_POST['phone'];
        }

    
    if (empty($_POST['comments']))
        {
            $comments_err = 'Your comments please';
        } //if empty
        else
        {
            $comments = $_POST['comments'];
        }


    if (empty($_POST['privacy']))
        {
            $privacy_err = 'Please check';
        } //if empty
        else
        {
            $privacy = $_POST['privacy'];
        }

if(isset($_POST['first_name'],
        $_POST['last_name'],
                    $_POST['email'],
                    $_POST['party'],
                    $_POST['phone'],
                    $_POST['comments'],
                    $_POST['privacy'] )) {

$to = 'journee@gmail.com';
$subject = 'test email'.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.'  '.PHP_EOL.'
Last Name: '.$last_name.'  '.PHP_EOL.'
email: '.$email.'  '.PHP_EOL.'
Party: '.$party.'  '.PHP_EOL.'
Phone: '.$phone.'  '.PHP_EOL.'
Comments: '.$comments.'  '.PHP_EOL.'
';

if(!empty($first_name &&
        $last_name &&
        $email &&
        $party &&
        $comments &&
        $privacy &&
        $phone )) {

        $headers = array(
            'From' => 'noreplyjournee@gmail.com',
            'Reply-to:' => ' '.$email.''
        );

mail($to, $subject, $body, $headers);
header('Location:thx.php');

        }// close if not empty

}
    

} //end server request

<body>
<h1>You could WIN a four year stay at the White House!</h1>
<br>
<h3>Enter for your chance to win a a four year stay at the white house along with the presidency of the USA</h3>

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

<p><a href ="">Reset!</a></p>





<?php include('./includes/footer.php'); ?>

