<?php
include('config.php');
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}
    else{
        header('Location:presidents.php');
    }


$sql = 'SELECT * FROM presidents WHERE pres_id = '.$id. '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $president = stripslashes($row['president']);
        $party = stripslashes($row['party']);
        $term = stripslashes($row['term']);
        $about = stripslashes($row['about']);
        $feedback = '';
    }//closing while loop

}//Closing if(mysqli_num_rows($result)>0) 
else{
    $feedback = 'we have a problem';
}//close else

include('./includes/header.php');
?>





<main>
    <h1>Welcome to our President View Page</h1>

    <div id="pres_view">

        <h2> <?= $president ?> </h2>

    
        <?php
        echo '
        <b>President: </b> ' . $president . '<br>
        <b>Political Party: </b> ' . $party . '<br>
        <b>Term: </b> ' . $term . '<br>
        <br>
         <b> About:</b><p>' . $about . '</p><br>
        ';
        ?>
        </ul>


     <p> <a href= "presidents.php"> Return to the presidents page</a></p>
    </div>


</main>


<aside>
<figure>
    <img src="images/pres<?= $id ?>.jpg" alt="<?= $president ?>">
    <figcaption><h3><?php echo $president?> </h3></figcaption>
</figure>
</aside>
<?php include('./includes/footer.php');?>

