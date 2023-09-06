<?php

$con = new mysqli('localhost','root','','signup');

if($con){

    ?>
    <script>
        alert("connection succesfull");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("no connection");
    </script>
    <?php
}

?>