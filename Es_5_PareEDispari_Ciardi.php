<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pari e Dispari</title>
</head>
<body>
    <?php 
        $num = random_int(1,10);
        if($num%2==0){
            echo "<p> Il numero ".$num." è pari</p>";
        } else {
            echo "<p> Il numero ".$num." è dispari</p>";
        }
        
    ?>



</body>
</html>