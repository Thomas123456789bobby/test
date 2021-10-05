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
    <title>tiksets.php</title>
</head>
<body>
<section z-index="1">

<video src="img/Video_background_party.mp4" muted autoplay="true" loop="true" id="showcase"></video>

</section>

    <div class="main_box">
    <form action="comfurm.php" method="POST">
        <h1>koop hier je tikets</h1>
    
    <span> voornaam:
    <input id="box" type="text" name="text_1",>
    </span>
    

    <span>achternaam:
    <input id="box" type="text" name="text_2">
    </span>
    
    
    <span>leeftijt:
    <input id="box" type="number" name="getal_1">
    </span>
    

    <span> e-mail:
    <input id="box" type="text" name="text_3">
    </span>
    

    <span> aders:
    <input id="box" type="text" name="text_4">
    </span>
    
    
    <span> aantal:
    <input id="box" type="number" name="getal_2">
    </span>

    <span> dag:
    <select name="dag" id="dag">
        <option value="zaterdag">    zaterdag    </option>
        <option value="zondag">    zondag    </option>
        <option value="zondag en zondag">zondag en zondag</option>
     </select>
    </span>

    <input id="submit" type="submit" value="verstuur">
    </form>
    </div>


</body>
</html>