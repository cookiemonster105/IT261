<footer>
    <div class="inner">
        <ul>
            <li>Copyright <?= date('Y') ?></li>
            <li>All Rights reserved</li>
            <li><a href="https://validator.w3.org/">HTML Validation</a></li>
            <li><a href="https://jigsaw.w3.org/css-validator/">CSS Validation</a></li>
        </ul>

    </div>
</footer>
<p>footer footer footer </p>
</body>
<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
</html>