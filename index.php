<?php


$testo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium exercitationem possimus sint vitae animi, voluptatem reprehenderit ipsum modi alias aspernatur eaque! Accusamus a, quisquam magnam dolores fugit quod sunt?
Numquam eligendi architecto porro obcaecati ullam! Quia tempora nostrum reiciendis. Veritatis architecto quae explicabo ipsum totam quam hic, laudantium quisquam facilis ipsam dolorem ab nostrum, quas mollitia similique dolores vitae.
';
$lunghezza_testo = strlen($testo);
$daCensurare = trim( strtolower ( isset($_GET['censura'] ) ) );

if(strlen($daCensurare) > 0){
    $testoCensurato = str_replace($daCensurare,'***',strtolower($testo));
    $testo = "";
}
else{
    $testoCensurato = '';
    $testo = $testo;
}




//         name: 'mario';
//         surname: 'rossi';
//         age: 50;
//     },
//     {
//         name: 'alessandro';
//         surname: 'bianchi';
//         age: 73;
//     },
//     {
//         name: 'luca';
//         surname: 'porcu';
//         age: 21;
//     },
    

// ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
<h1>
   <?php echo $testo;?>
</h1>
<p>
  <?php echo $lunghezza_testo;?> caratteri.
</p>
<h1>
   <?php echo $testoCensurato ?>
</h1>


</body>
</html>