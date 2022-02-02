<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link rel="stylesheet" href="nw_style.css">
    <title>🌲In the Northwest Forest🌲</title>
</head>
<body>
<?php

date_default_timezone_set('America/Vancouver');
$day = date('1');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
/*$days is for test*/
$days = '3';

/*switch(THIS_PAGE){*/
switch($day){
    
    case '2':
        $day_title ='The Leopard Slug';

        $day_photo = '<img src="images/lepord.jpg" alt="leopard slug">';
        
        $day_text = '<p>The leopard slug is one of the most common slugs in North America and is found in most areas with even moderate moisture or humidity. These pests are not native to the continent though. They arrived here from Europe. Identify these slugs by their leopard like spots on a yellowish to brown body that is about 4 inches long. </p>';
        echo '<body style="background-color:hsl(130, 82%, 30%)">';

    break;

    case '3':
        $day_title ='The Taildropper Slug';

        $day_photo = '<img src="images/td.png" alt="Taildropper Slug">';
        
        $day_text = '<p> There are seven species of native Oregon taildroppers.
        They are not commonly seen since they tend to be more
        restricted to natural habitat than many of the exotic slugs. When attacked by a predator they can lose a
        portion of their tail, which distracts the predator while the
        slug gets away.</p>';
        echo '<body style="background-color:#0d6d1d">';

    break;

    case '4':
        $day_title ='Three-band Garden Slug';

        $day_photo = '<img src="images/threeband.jpg" alt="Three-band garden slug">';
        
        $day_text = '<p> Three-band garden slugs are commonly seen around
        homes and in gardens. They are soft bodied and have a
        clear watery mucus. They are known to climb trees, but not
        as readily as Lehmannia marginata (the tree slug), another
        European exotic not yet documented in Oregon..</p>';
        echo '<body style="background-color:#0b5016">';

    break;

    case '5':
        $day_title =' The Banana Slug';

        $day_photo = '<img src="images/bs.png" alt="The Banana Slug">';
        
        $day_text = '<p>Banana slugs are an iconic species for the Pacific
        Northwest. They come in a variety of colors: yellow, green,
        gray, reddish brown, and even white. All color forms are
        found with and without spots. </p>';

        echo '<body style="background-color:#0b4114">';
    break;

    case '6':
        $day_title =' Roundback Slugs';

        $day_photo = '<img src="images/rb.png" alt="Roundback Slugs">';
        
        $day_text = '<p>There are at least 19 additional
        species of Arion in Europe. They are difficult to differentiate from
        species already present in Oregon. Dissection and inspection of
        internal organs is required to confirm identification. </p>';
        
        echo '<body style="background-color:#0b2c11">';
 
    break;

    case '7':
    
        $day_title ='Quileute Werewolf';

        $day_photo = '<img src="images/jacob.png" alt="warewolf">';
        
        $day_text = '<p>Though rarely seen werewolves are known to inhabit the forests of the Northwest. One famous werewolf is Jacob Black he is a shape-shifter or "werewolf" of the Quileute tribe, former Beta of the Uley pack, and Alpha of his ownThough rarely seen werewolves are known to inhabit the forests of the Northwest. One famous werewolf is Jacob Black he is a shape-shifter or "werewolf" of the Quileute tribe, former Beta of the Uley pack, and Alpha of his own.</p>';

        echo '<body style="background-color:#0f3516">';
   
    break;

    case '1':
        $day_title =' Vampires';

        $day_photo = '<img src="images/ed.png" alt="Three-band garden slug">';
        
        $day_text = '<p> The woods of the Northwest are home to many mysterious creatures, including vampires. Beware. </p>';

         echo '<body style="background-color:#0f3817">';
    
    break;
}
//$nav ['index.php'] = 'Home';
$nav ['mon.php'] = 'Monday';
$nav ['tue.php'] = 'Tuesday';
$nav ['wed.php'] = 'Wednesday';
$nav ['thur.php'] = 'Thursday';
$nav ['fri.php'] = 'Friday';
$nav ['sat.php'] = 'Saturday';
$nav ['sun.php'] = 'Sunday';


?>
      <!-- HTML -----------------------------------------------------  -->


    <div class="grid-container">
      <div class="item1"> <h3>Things in the Northwest Forest</h3> </div>

      <div class="item2"><!--Menu  -->

<?php
foreach($nav as $key => $value) {
    if (THIS_PAGE == $key){
    echo '<li> <a class="current"  href="' .$key.'"> ' .$value.'</a> </li>';
}else{
    echo '<li> <a href="' .$key.'"> ' .$value.'</a> </li>';
}
};  //end foreach
?>

      </div>
       <div class="item3"><!-- Photo -->
      <?php echo $day_photo;?>

      </div>  
      <div class="item4"><!-- Main Main Main -->
          
      <?php
      echo '<h4>'  . date("l").'  is a good day to visit the forest</h4>';
      echo '<h4>Where you might see:</h4>';
     echo '<h4>' .$day_title. '</h4>';
     echo '<br>';
     echo $day_text;



      ?>
      </div><!-- Main -->
            <h2>

      <div class="item5"><!-- footer -->
      
      </div>
    </div>
</body>

</htmD>