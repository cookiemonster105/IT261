<?php
// config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 $success = 'You have logged on';

 $errors = array();

 //PHP for daily page
 date_default_timezone_set('America/Vancouver');

 if (isset($_GET['today']))
 {
     $today = $_GET['today'];
 }
 else
 {
     $today = date('l');
 }
 
 /*switch(THIS_PAGE){*/
switch ($today)
{

    case 'Monday':
        $day_title = '';

        $day = 'Monday';

        $day_photo = '<img src="images/.jpg" alt="leopard slug">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        

    break;

    case 'Tuesday':
        $day_title = '';

        $day = 'Tuesday';

        $day_photo = '<img src="images/.jpg" alt="">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        ;

    break;

    case 'Wednesday':
        $day_title = '';

        $day = 'Wednesday';

        $day_photo = '<img src="images/.jpg" alt="">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        ;

    break;

    case 'Thursday':
        $day_title = '';

        $day = 'Thursday';

        $day_photo = '<img src="images/.jpg" alt="">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        ;

    break;

    case 'Friday':
        $day_title = '';

        $day = 'Friday';

        $day_photo = '<img src="images/.jpg" alt="">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        ;

    break;

    case 'Saturday':
        $day_title = 'Gave Interviews on the Toilet';

        $day = 'Saturday';

        $day_photo = '<img src="images/lbj.webp" alt="">';

        $alt_tag = 'Lyndon B. Johnson';

        $day_text = '<p> Lyndon B. Johnson was one of our most brazenly unapologetic presidents. He did things his own way and did not care what you thought about it. <br>

        One of his odd habits was to give interviews from the bathroom while going to the bathroom. Presidential biographer Doris Kearns Goodwin describes how "he just did not want the conversation to stop. If you were in the bedroom holding back when he went into the bathroom, he would just call you in and say, come on in, I have not finished what I am saying.';
        

    break;

    case 'Sunday':
        $day_title = '';

        $day = 'Sunday';

        $day_photo = '<img src="images/.jpg" alt="">';

        $alt_tag = '';

        $day_text = '<p> </p>';
        

    break;
}// end switch


    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

 // Switch for title, body class et al.

 switch(THIS_PAGE){

    case 'index.php':
    $title ='Presidency of the USA';
    $body = '<p>The president of the United States is the head of state and head of government of the United States, indirectly elected to a four-year term by the American people through the Electoral College. The office holder leads the executive branch of the federal government and is the commander-in-chief of the United States Armed Forces.</p>

    <p>Since the office was established in 1789, 45 people have served in 46 presidencies. The first president, George Washington, won a unanimous vote of the Electoral College; one, Grover Cleveland, served two non-consecutive terms and is therefore counted as the 22nd and 24th president of the United States, giving rise to the discrepancy between the number of presidents and the number of persons who have served as president. </p>';
    $headline ='Presidency of the United States of America';
    break;

    case 'about.php':
        $title ='Presidency About Page';
        $body ='about inner';
        $headline ='Welcome to the Presidency of the USA About Page';
    break;

    case 'daily.php':
        $title ='Our Daily Page';
        $body ='daily inner';
        $headline ='Welcome to our Daily';
    break;

    case 'contact.php':
        $title ='Our contact Page';
        $body ='contact inner';
        $headline ='Welcome to our contact Page';
    break;


    case 'Thx.php':
        $title ='Thanks Page';
        $body ='Thanks inner';
        $headline ='Welcome to our Thanks Page';
    break;

    case 'register.php':
        $title ='Register Today';
        $body ='register inner';
        $headline ='Register Today';
    break;

    case 'login.php':
        $title ='Login Today';
        $body ='login inner';
        $headline ='Login Page';
    break;

    case 'datbase.php':
        $title ='Database Today';
        $body ='database inner';
        $headline ='Database Page';
    break;
    } // closing switch for pages
 

    $nav ['index.php'] = 'Home';
    $nav ['about.php'] = 'about';
    $nav ['daily.php'] = 'Daily';
    $nav ['contact.php'] = 'Contact';
    $nav ['database.php'] = 'Database';

    function make_links($nav) {
        $my_return ='';
    foreach($nav as $key => $value) {
                if (THIS_PAGE == $key) {
                $my_return . '<li><a class="current" href"'.$key .'"> '.$value. '</a></li>';
                
        // echo '<li> <a class="current"  href="' .$key.'"> ' .$value.'</a> </li>';
    }else{
        // echo '<li> <a href="' .$key.'"> ' .$value.'</a> </li>';
        $my_return. '<li><a href="' .$key.'"> '.$value.'</a></li>';
    }
    }  //end foreach
    return $my_return;
}
    

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
