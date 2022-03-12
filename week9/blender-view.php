<?php
include('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}
    else{
        header('Location:blender.php');
    }


$sql = 'SELECT * FROM blender WHERE id = '.$id. '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $blender_name = stripslashes($row['Model']);
        $company = stripslashes($row['Company']);
        $color  = stripslashes($row['color']);
        $material = stripslashes($row['Material']);
        $watts = stripslashes($row['Watts']);
        $reg_date = stripslashes($row['Date Added to DB']);
        $feedback = '';
    }//closing while loop

}//Closing if(mysqli_num_rows($result)>0) 
else{
    $feedback = 'we have a problem';
}//close else

include('./includes/header.php');
?>





<main>
    <h1>Welcome to our Blender View Page</h1>
    <h2> Welcome to <?= $company ?> <?= $blender_name ?> Page</h2>

    <ul>
        <?php
        echo '
        <li><b>Model: </b> ' . $blender_name . '</li>
        <li><b>Company: </b> ' . $company . '</li>
        <li><b>Color: </b> ' . $color . '</li>
        <li><b>Material: </b> ' . $material . '</li>
        <li><b>Watts: </b> ' . $watts . '</li>
        <li><b>Date Added to DB: </b> ' . $reg_date . '</li>
        <hr>
    // <!--<li> <p>' . $details . '</p></li>-->
        ';
        ?>


    <p> <a href= "blender.php"> Return to the Blender page</a></p>


</main>



<aside>
<h3><?php echo $last_name ?></h3>
<figure>
    <img src="images/blender<?= $id ?>.jpg" alt="<?= $company ?>" style="height:300px;">
    <figcaption><?php echo ''.$company. ' by '. $blender_name . ',' . $occupation. '  ';?> </figcaption>
</figure>
</aside>
</div>
<?php include('./includes/footer.php');?>

