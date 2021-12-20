<?php 
    unlink('data/'.$_POST['id']);
    header('Location: /PHP/index.php');
?>