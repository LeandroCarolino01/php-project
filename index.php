<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'leandro', '123456', 'pizza');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>
    
</body>
</html>