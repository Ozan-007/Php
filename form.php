<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="form.php" method="get">
        <label>Name: </label>
        <input type="text" name="name">
        <label>Last Name: </label>
        <input type="text" name="lastname">
        <label>E-mail: </label>
        <input type="email" name="email" required="">
        <br> <br>
        <label>Checkbox: </label>
        <input type="radio" name="yes-no" value="yes" checked="true">
        <input type="radio" name="yes-no" value="no">

        <button type="submit">Submit</button>
    </form>

    <br>
    <?php
    echo json_encode($_GET)
    
    
    ?>

</body>

</html>