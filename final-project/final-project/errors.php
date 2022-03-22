<?php
// errors page using for each loop to count errors
// if we have more than 0 erros we will need to echo message


if(count($errors)>0) : ?>

<div class="error">
    <?php foreach($errors as $error) :?>
    <p>
        <?= $error ?>
    </p>
    <?php endforeach; ?>
    </div> <!-- end div error -->

    <?php endif; ?>
