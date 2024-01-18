<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Thistleskull</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="tattoopresentation.css">
    <link rel="stylesheet" href="dex.css">
</head>
<body>

<?php
  require_once(__DIR__ . '/navbar.php');
?>

<div class="info-box">
  <h2>Thistel Skull</h2>
  <br>
  <p><strong>Taille Min:</strong> 15cm</p>
  <p><strong>Taille Max :</strong> 30cm</p>
  <br><br>
  
  <p><strong>Lore :</strong></p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quasi eligendi expedita molestias ipsa officia sed excepturi id eius voluptatibus sequi fugit similique perferendis eveniet, et cumque veniam blanditiis quis!</p>
  <br><br>
  
  <p><strong>Prix :</strong></p>
  <br><br>
  <p>A venir: slide variation pri en fonction de la taille</p>
  <div class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <p>Valeur : <span id="demo"></span></p>
  </div>
</div>

Note: prvoir une section "Déja pris par XXXX"

<?php
  require_once(__DIR__ . '/footer.php');
?>


<script src="slider.js"></script>

</body>
</html>
