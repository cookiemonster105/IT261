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
        $day_title = 'Opened a Whiskey Distillery';

        $day = 'Monday';

        $day_photo = '<img src="images/gw.jpg">';

        $alt_tag = 'George Washington Distillery';

        $day_text = 'After leaving the presidency, George Washington was not satisfied with just puttering around Mount Vernon, so he jumped into whiskey distillation. By 1799, during the final months of Washingtons life, it was the largest distillery in the country, producing 11,000 gallons of un-aged whiskey. Unfortunately, after the first presidents death, the business failed to continue in his absence.';
        

    break;

    case 'Tuesday':
        $day_title = 'Fought More Than 100 Duels';

        $day = 'Tuesday';

        $day_photo = '<img src="images/duel.jpg">';

        $alt_tag = 'Duel';

        $day_text = 'Andrew Jackson loved going toe-to-toe with an opponent, and took part in more than 100 duels. He suffered injuries from them on several occasions, including a shot to the chest.';
        ;

    break;

    case 'Wednesday':
        $day_title = 'Lost the Nuclear Launch Codes';

        $day = 'Wednesday';

        $day_photo = '<img src="images/BillClinton.webp">';

        $alt_tag = 'Bill Clinton';

        $day_text = 'According to then-chairman of the Joint Chiefs of Staff, at one time during his presidency Bill Clinton lost the personal ID code needed to confirm nuclear launches (also known as the "nuclear biscuit") for months. "That is a big deal," said the chairman, "A gargantuan deal."';
        ;

    break;

    case 'Thursday':
        $day_title = 'Married His Adopted Daughter';

        $day = 'Thursday';

        $day_photo = '<img src="images/Cleveland.webp">';

        $alt_tag = 'President Grover Cleveland';

        $day_text = 'Grover Cleveland met his wife shortly after she was born. She was the daughter of a family friend and he would act as her guardian when her father died in 1875, though he was not legally appointed when she was just 11 years old. When she began college, the two began a romantic relationship and were wed when she was 21 years old—becoming the youngest first lady in history.';
        ;

    break;

    case 'Friday':
        $day_title = 'Feared Electricity';

        $day = 'Friday';

        $day_photo = '<img src="images/harrison.jpg">';

        $alt_tag = 'Benjamin Harrison';

        $day_text = 'We all have our weird phobias. For Benjamin Harrison, it was electricity that really made him jittery. Serving during the late 19th century, as major developments were being made in conduction, it was Harrison who introduced electric lighting into the White House—but he refused to actually touch the switches himself out of a fear of being electrocuted.';
        ;

    break;

    case 'Saturday':
        $day_title = 'Gave Interviews on the Toilet';

        $day = 'Saturday';

        $day_photo = '<img src="images/lbj.webp">';

        $alt_tag = 'Lyndon B. Johnson';

        $day_text = 'Lyndon B. Johnson was one of our most brazenly unapologetic presidents. He did things his own way and did not care what you thought about it. <br>

        One of his odd habits was to give interviews from the bathroom while going to the bathroom. Presidential biographer Doris Kearns Goodwin describes how "he just did not want the conversation to stop. If you were in the bedroom holding back when he went into the bathroom, he would just call you in and say, come on in, I have not finished what I am saying.';
        

    break;

    case 'Sunday':
        $day_title = 'Introduced Waffles and Ice Cream to the U.S. ';

        $day = 'Sunday';

        $day_photo = '<img src="images/james-hemings.jpg">';

        $alt_tag = 'James Hemings';

        $day_text = 'During the five years that Thomas Jefferson spent as American minister to France, he became enamored with Parisian cuisine. While there, he ordered his nineteen-year-old chef (and slave), James Hemings, to learn French cooking. Upon returning to Virginia and later as president, Jefferson hosted elaborate dinner parties with French dishes prepared by Hemings and those he taught, helping to popularize dishes such as parmesan cheese, macaroni and cheese, and ice cream. ';
        

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
        $body ='Screenshots of the databases running on the server';
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


    case 'thx.php':
        $title ='Thanks Page';
        $body ='<p>Pack a bag you might be going to the whitehouse for a four year stay!</p>';
        $headline =' Thanks For Entering';

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
    $nav ['about.php'] = 'About';
    $nav ['daily.php'] = 'Daily';
    $nav ['contact.php'] = 'Contact';
    $nav ['database.php'] = 'Database';

    function make_links($nav) {
        $my_return ='';
    foreach($nav as $key => $value) {
                if (THIS_PAGE == $key) {
                $my_return .= '<li><a class="current" href"'.$key .'"> '.$value. '</a></li>';
                
        //echo '<li> <a class="current"  href="' .$key.'"> ' .$value.'</a> </li>';
    }else{
        //echo '<li> <a href="' .$key.'"> ' .$value.'</a> </li>';
        $my_return .= '<li><a href="' .$key.'"> '.$value.'</a></li>';
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
