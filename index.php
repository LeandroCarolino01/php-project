<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'leandro', '123456', 'pizza');
    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizza
    $sql = 'SELECT title, ingredients, id FROM pizza';

    // make query & get resuls
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    print_r($pizza)
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>
    
</body>
</html>