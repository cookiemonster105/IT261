<?php
include('config.php');
include('./includes/header.php');

?>
<main>
<h1>Welcom to the people page</h1>
<?php
$sql = 'SELECT * FROM people';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <h2>Information about '.$row['first_name'].' </h2>
        <ul>
        <li><b>First Name:</b> '.$row['first_name'].' </li>
        <li><b>Last Name:</b>  '.$row['last_name'].' </li>
             <li><b>Email:</b>  '.$row['email'].' </li>
        <li><b>Birthday:</b>  '.$row['birthday'].' </li>
             <li><b>occupation:</b>  '.$row['occupation'].' </li>
        </ul>
        <p> For more information about '.$row['first_name'].'click <a href="people-view.php?id=' . $row['people_id'] . ' " > here</a></p>'
        // <p>'.$row['details'].'</p>
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
