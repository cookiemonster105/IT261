<?php

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    else{
        header('Location:people.php');
    }
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id. '';

include('./includes/header.php');
?>



<main>
    <h1>Welcome to our People View Page</h1>
</main>

<aside>
<h3>We will display the images of the politician that we see on the page</h3>
</aside>
</div>
<?php include('./includes/footer.php');

