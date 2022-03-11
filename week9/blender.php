<?php
include('config.php');
include('./includes/header.php');

?>
<main>
<h1>Welcom to the Blender page</h1>
<?php
$sql = 'SELECT * FROM blender';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <h2>Information about '.$row['blender_name'].' </h2>
        <ul>
            <li><b>Company:</b> '.$row['company'].' </li>
            <li><b>Color:</b>  '.$row['color'].' </li>
            <li><b>material:</b>  '.$row['material'].' </li>
            <li><b>Date Added to DB:</b>  '.$row['reg_date'].' </li>
        </ul>
        <p> For more information about '.$row['blender_name'].' click <a href="people-view.php?id=' . $row['people_id'] . ' " > here</a></p>'
        
        <figure>
    <img src="images/blender<?= $id ?>.jpg" alt="<?= $blender_name ?>">
    <figcaption><?php echo ''.$company. ' '. $blender_name . ',' . $occupation. '  ';?> </figcaption>
</figure>// <p>'.$row['details'].'</p>
        // <hr>
        ;


    }//close while loop
}//Close If Statement

?>

</main>

<aside>
<h3>Aside</h3>
</aside>


</div><!-- end wrapper from header.php  -->
<?php
include('./includes/footer.php'); ?>
