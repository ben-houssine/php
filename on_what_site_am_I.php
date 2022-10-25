<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
<div>
    <a href="index.php?page=start">Start</a>
    <a href="index.php?page=contact">Contact</a>
    <a href="index.php?page=legal">Legal</a>
    <br></br>
    
    <i>simple text-output which tells us on which site we currently are</i>
    <br></br>

    <?php     
       echo "// You are currently on the: <b>". $_GET['page']." </b>- site";
    ?>

    </div>
</body>

</html>
