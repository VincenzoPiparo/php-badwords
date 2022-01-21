<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> The Lord of The Rings </h1>
    <!-- Creation a variable -->
    <?php
    $my_variable = 'One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them'
     ?>
    <!-- We print the variable -->
     <p><?php echo $my_variable; ?></p>

     <!-- We print the length -->
     <p>
         <?php 
         $original_lenght = strlen($my_variable);
         echo 'Lunghezza ' . $original_lenght;
         ?>
     </p>

     <!-- We censor the word -->
     <p>
        <?php
            $_GET["object"];
            $replace_name = str_replace('Ring', '***', $my_variable);
            echo $replace_name;
        ?> 
     </p>
     <!-- We print the new length -->
     <p>
         <?php
           $original_lenght = strlen($replace_name);
           echo 'Lunghezza ' . $original_lenght;
         ?>
     </p>
</body>
</html>