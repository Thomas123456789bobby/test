<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tikets.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <title>comfurm.php</title>
    </head>
    <body>
    <div class="main_box">
    <h1>klop het?</h1>
    <section z-index="1">

        <video src="img/Video_background_party.mp4" muted autoplay="true" loop="true" id="showcase"></video>

    </section>
    
    <?php
    $text_1 = $_POST['text_1'];
    $text_2 = $_POST['text_2'];
    $getal_1 = $_POST['getal_1'];
    $text_3 = $_POST['text_3'];
    $text_4 = $_POST['text_4'];
    $getal_2 = $_POST['getal_2'];
    $dag = $_POST['dag'];
    if ($dag == "zondag en zondag") {$getal_3 = 36 * 2 * $getal_2;}
    if ($dag == "zondag" or $dag == "zaterdag") {$getal_3 = 36 * $getal_2;}
    echo "<span> voornaam: $text_1 </span>";
    echo "<span> achternaam: $text_2 </span>";
    echo "<span> leeftijt: $getal_1 </span>";
    echo "<span> e-mail: $text_3 </span>";
    echo "<span> aders: $text_4 </span>";
    echo "<span> aantal: $getal_2 </span>";
    echo "<span> dag: $dag </span>"; 
    echo "<span> prijs: €$getal_3 euro</span>"; 
    echo "<a href='tikets.php'><input id='box1' type='submit' value='return'></a>";
    if ($getal_1 >= 18 ) {echo "<a href='denkje.php'><input id='box2' type='submit' value='corfurm'></a>";}
    if ($getal_1 < 18 ) { echo "<a href='jebenttejong.php'><input id='box2' type='submit' value='corfurm'></a>";}
      ?>
  
 </div>
    
   </body>
   </html>