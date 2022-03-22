<?php
include('config.php');
include('./includes/header.php');

// show session_start
session_start();

//did  user log in correctly, and if not user will recive msg and be directed back to login

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

<main>
<h1>Welcome to the president page</h1>
<div id="pres_box">
    
<?php
$sql = 'SELECT * FROM presidents';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){


        echo'
        <h2 id="pres_h2">'.$row['president'].' </h2>
        
        <b id="pres_b">Political Party:</b> '.$row['party'].' </br>
      <b id="pres_b">term:</b>  '.$row['term'].' </br>
      <b id="pres_b">About:</b>  '.$row['about'].' </br></br></br>
    
       
        <p> For more information about '.$row['president'].' click <a href="president-view.php?id=' . $row['pres_id'] . ' " id="pres_a" > here</a></p>'
       
        ;


    }//close while loop
}//Close If Statement

?>
</div>
</main>

<aside>
<h3>Aside</h3>
<figure>
    <img src="images/pres<?= $id ?>.jpg" alt="<?= $president ?>">
    <figcaption><?php echo ''.$president.  ',' . $occupation. '  ';?> </figcaption>
</figure>
</aside>


</div><!-- end wrapper from header.php  -->
<?php
include('./includes/footer.php'); ?>
