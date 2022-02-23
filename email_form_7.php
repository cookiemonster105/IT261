<?php
 ob_start();
 $name ='';
 $email='';
 $color='';
 $vines='';
 $ship = '';
 $comments ='';
 $privacy ='';
$phone ='';
$name_err ='';
$email_err = '';
$color_err = '';
$phone_err = '';
$vines_err = '';
$ship_err = '';
$comments_err ='';
$privacy_err ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
             if (empty($_POST['name']))
            {
                $name_err = 'Please fill out your name';
            } //if empty
            else
            {
                $email = $_POST['name'];
            }

       

            if (empty($_POST['email']))
            {
                $email_err = 'Please fill out your email';
            } //if empty
            else
            {
                $email = $_POST['email'];
            }

             if (empty($_POST['color']))
            {
                $gender_err = 'Please select a color';
            } //if empty
            else
            {
                $gender = $_POST['color'];
            }

  if(empty($_POST['phone'])) { // if empty, type in your number
$phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phone_err = 'Invalid format!';
} else{
$phone = $_POST['phone'];
} // end else
} // end main if

        
        
             if (empty($_POST['vines']))
            {
                $vines_err = 'You Should Pick a Vine';
            } //if empty
            else
            {
                $email = $_POST['vines'];
            }

        //honey

        if (empty($_POST['comments']))
            {
                $comments_err = 'Your comments please';
            } //if empty
            else
            {
                $email = $_POST['comments'];
            }


        if (empty($_POST['privacy']))
            {
                $privacy_err = 'Please check';
            } //if empty
            else
            {
                $email = $_POST['privacy'];
            }

       

        if($_POST['ship']==NULL){
          $ship_err = 'Please select a location';
        }
        else {
          $ship = $_POST['ship'];
        }
 
 function my_vines($vines){
$my_return ='';
if(!empty($_POST['vines'])){
  $my_return = implode(' ,', $_POST['vines']);
}else{
  $vines_err = 'Please select your vines';
}
return $my_return;
 }//end vine function

    if(isset($_POST['name'],
                     $_POST['email'],
                     $_POST['color'],
                     $_POST['ship'],
                     $_POST['vines'],
                     $_POST['comments'],
                     $_POST['privacy'] )) {

$to = 'journee@gmail.com';
$subject = 'test email'.date('m/d/y, h i A');
$body = '
Name: '.$name.'  '.PHP_EOL.'
email: '.$email.'  '.PHP_EOL.'
Gender: '.$color.'  '.PHP_EOL.'
Phone: '.$phone.'  '.PHP_EOL.'
Regions: '.$ship.'  '.PHP_EOL.'
Wines: '.my_vines($vines).'  '.PHP_EOL.'
Comments: '.$comments.'  '.PHP_EOL.'
';

if(!empty($first_name &&
          $email &&
          $color &&
          $vines &&
          $ship &&
          $comments &&
          $privacy &&
          $phone) &&
          preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

            $headers = array(
              'From' => 'nopeply@journee@gmail.com',
              'Replt to: '=> ' '.$email.''
            );


  mail($to, $subject, $body, $headers);
  header('Location:thx.php');
          }// close if not empty




}
        

} //end server request

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vines</title>
    <link href="email_form.css" type="text/css" rel="stylesheet">

</head>
<body>
    <h2>Vines</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="post">

      <fieldset>
<legend> Contact  Us</legend>
        

        <label>Name</label>
        <input type= "text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <span class="error"><?= $name_err ?></span>

        <label>email</label>
        <input type= "text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error"><?=$email_err ?></span>


        <label>Color</label>
        <ul>
          <li>
          <input type="radio" name="color" value="red"
          <?php if(isset($_POST['color']) && $_POST['color'] =='red') echo'checked ="checked" ' ;?>> Red
          </li>
          <li>
          <input type="radio" name="color" value="blue"
          <?php if(isset($_POST['color']) && $_POST['color'] =='blue') echo'checked ="checked" ' ;?>> Blue
          </li>
         <li>
          <input type="radio" name="color" value="pink"
          <?php if(isset($_POST['color']) && $_POST['color'] =='pink') echo'checked ="checked" ' ;?>> Pink
          </li>
        </ul>
        <span class="error"><?= $color_err ?></span>

         <label>Phone</label>
        <input type= "tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
      <span class="error"><?=$phone_err ?></span>

      <label>Favorite Vines</label>
        <ul>
          <li>
          <input type="checkbox" name="vines[]" value="honey"
          <?php if(isset($_POST['vines']) && in_array('honey', $vines)) echo'checked ="checked" ' ;?>> Hallania Honeysuckle
          </li>

          <li>
          <input type="checkbox" name="vines[]" value="clematis"
          <?php if(isset($_POST['vines']) && in_array('clematis', $vines)) echo'checked ="checked" ' ;?>> Henryi Clematis
          </li>

          <li>
          <input type="checkbox" name="vines[]" value="trumpet"
          <?php if(isset($_POST['vines']) && in_array('trumpet', $vines)) echo'checked ="checked" ' ;?>> Trumpet Vine
          </li>

          <li>
          <input type="checkbox" name="vines[]" value="ivy"
          <?php if(isset($_POST['vines']) && in_array('ivy', $vines)) echo'checked ="checked" ' ;?>> Boston Ivy
          </li>

          </ul>
          <span class="error"><?=$vines_err ?></span>

          <label>Ship From:</label>
          <select name ="regions">

           <option value="" NULL <?php if(isset($_POST['ship']) && $_POST['ship'] == NULL) echo 'selected = "unselected" ';?>>Select One  <option>

          <option value="spain"  <?php if(isset($_POST['ship']) && $_POST['ship'] == 'spain') echo 'selected = "selected" ';?>>Spain  <option>

         <option value="canada"  <?php if(isset($_POST['ship']) && $_POST['ship'] == 'canada') echo 'selected = "selected" ';?>>Canada  <option>

         <option value="westeros"  <?php if(isset($_POST['ship']) && $_POST['regions'] == 'westeros') echo 'selected = "selected" ';?>>Westeros  <option>

         <option value="caledonia"  <?php if(isset($_POST['ship']) && $_POST['regions'] == 'caledonia') echo 'selected = "selected" ';?>>Caledonia  <option>

         </select>
         <span class="error"><?=$ship_err ?></span>
        
        
         <label>Comments</label> <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea> <span class="error"><?= $comments_err ?></span>

        <span class="error"><?=$comments_err ?></span>
          
           <label>Privacy</label>
        <ul>
          <li>
          <input type="radio" name="privacy" value="yes"
          <?php if(isset($_POST['privacy']) && $_POST['privacy'] =='yes') echo'checked ="checked" ' ;?>>You must agree
          </li>
          </ul>
         <span class="error"><?=$privacy_err ?></span>

      <input type="submit" value ="Purchuse">

      </filedset>
    </form>

    <p><a href ="">Reset!</a></p>


    
</body>
</html>