<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="Navbar.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: url('icones/404.png') no-repeat center center fixed; 
            background-size: cover;
            color: white;
        }

        .content-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .center-div {
            color: white; /* Couleur du texte */
            background-color: rgba(0, 0, 0, 0.3); 
            padding: 50px;
            border-radius: 10px;
            backdrop-filter: blur(1px); /* Flou sur le fond */
        }

        /* Style pour le bouton "Retour à l'accueil" */
        .back-home-btn {
            display: block; 
            margin: 20px auto 0; /* Centre le bouton horizontalement et ajoute de l'espace au-dessus */
            padding: 10px 20px;
            background-color: transparent; /* Fond transparent */
            color: #fff; 
            text-decoration: none; /* Supprime le soulignement du lien */
            border: 1px solid white; 
            border-radius: 5px;
            transition: all 0.3s ease; /* Transition douce pour l'effet au survol */
            box-shadow: none; /* Pas d'ombre par défaut */
        }

        .back-home-btn:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Fond légèrement blanc au survol */
            box-shadow: 0 0 10px white; /* Halo blanc au survol */
        }
    </style>
</head>
<body>
    <div class="content-container">
        <div class="center-div">
            <h1>PAGE EN CONSTRUCTION</h1>
            <p>Votre patience et votre écoute sont vos plus belles vertus.</p>
            <!-- Bouton "Retour à l'accueil" -->
            <a href="index.php" class="back-home-btn">Retour à l'accueil</a>
        </div>
        
    </div>
</body>
</html>
