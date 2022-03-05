<?php

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}
    else{
        header('Location:people.php');
    }


$sql = 'SELECT * FROM people WHERE people_id = '.$id. '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $details = stripslashes($row['details']);
        $feedback = '';
    }//closing while loop

}//Closing if(mysqli_num_rows($result)>0) 
else{
    $feedback = 'we have a problem';
}//close else

include('./includes/header.php');
?>





<main>
    <h1>Welcome to our People View Page</h1>
    <h2> Welcome to <?= $first_name ?> <?= $last_name ?>'s Page</h2>

    <ul>
        <?php
        echo '
        <li><b>First Name: </b> ' . $first_name . '</li>
        <li><b>Last Name: </b> ' . $last_name . '</li>
        <li><b>Birthdate: </b> ' . $birthdate . '</li>
        <li><b>Email: </b> ' . $email . '</li>
        <li><b>Occupation: </b> ' . $occupation . '</li>
        <hr>
        <li> <p>' . $details . '</p></li>
        ';
        ?>


    <p> <a href= "people.php"> Return to the People page</a></p>


</main>



<aside>
<h3>We will display the images of the politician that we see on the page</h3>
<figure>
    <img src="images/people<?= $id ?>.jpg" alt="<?= $first_name ?>">
    <figcaption><?php echo ''.$first_name. ' '. $last_name . ',' . $occupation. '  ';?> </figcaption>
</figure>
</aside>
</div>
<?php include('./includes/footer.php');?>

