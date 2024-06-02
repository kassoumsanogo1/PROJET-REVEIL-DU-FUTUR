<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Réveil du Futur</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        header {
            background: #fff;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #ffffff; /* Beige */
            padding: 15px 0; /* Augmentation de la taille */
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2); /* Ombre sous la nav */
            border-top: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
            position: fixed; /* Fixe la navigation au haut de la page */
            top: 0;
            left: 0;
            width: 100%; /* Largeur complète */
        }
        nav a {
            color: #333;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px; /* Taille du texte augmentée */
            display: inline-block; /* Centrer le texte verticalement et maintenir l'espacement */
            position: relative;
        }
        nav a:not(:last-child):after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 20px;
            background: rgba(0,0,0,0.1); /* Trait de séparation */
            box-shadow: 1px 0 3px rgba(0,0,0,0.3); /* Effet d'ombre sur le trait */
        }
        nav a:hover, nav a:focus {
            background-color: #333333;
            color: #ffffff;
            border-radius: 5px;
        }
        .hero {
            background: url('https://i.ibb.co/9pPX9LY/test4.jpg') no-repeat center center/cover;
            padding: 140px 20px;
            text-align: center;
            color: #fff;
        }
        .hero h1 {
            font-size: 2.5em;
            margin: 0;
        }
        .hero p {
            font-size: 1.2em;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 50px;
            margin-top: 90px; /* Ajout de la marge supérieure pour compenser la nav fixe */
        }
        .feature {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        @media (max-width: 768px) {
            .feature {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .feature {
                width: 100%;
            }
        }
        .testimonials {
            background: white;
            padding: 20px;
            margin-top: 20px;
            margin: 65px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .testimonial {
            border-left: 5px solid #0056b3;
            margin: 20px 0;
            padding-left: 15px;
            font-style: italic;
        }
        footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
        }
        .discover-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #0056b3; /* Couleur bleue pour correspondre à votre thème */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .discover-button:hover {
            background-color: #0077cc; /* Un bleu légèrement plus clair au survol */
        }
        .downloads {
            margin-top: 20px;
        }
        .downloads a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background: #0056b3;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .downloads a:hover, .downloads a:focus {
            background: #004494;
        }

    </style>
</head>
<body>
<nav>
    <a href="index.php">Accueil</a>
    <a href="details.php">Détails</a>
    <a href="galerie.php">Galerie</a>
    <a href="equipe.php">Equipe</a>
    <a href="contact.php">Contact</a>
</nav>


<div class="hero">
    <h1>Le Reveil du Futur</h1>
    <h1>Bienvenue à l'ère du réveil innovant</h1>
    <p>Explorez toutes les fonctionnalités et commencez votre journée du bon pied!</p>
</div>

<div class="downloads">
    <h2>Documents à Télécharger au format .pdf</h2>
    <a href="docs/notice_utilisateur.pdf" download="Notice Utilisateur - Réveil du Futur.pdf">Télécharger la Notice Utilisateur</a>
    <a href="docs/notice_technique.pdf" download="Notice Technique - Réveil du Futur.pdf">Télécharger la Notice Technique</a>
</div>

<div class="features" id="details">
    <?php
    $features = [
        ['title' => 'Facile à utiliser', 'description' => 'Assemblage d\'une Interface utilisateur intuitive pour les grands et les petits.',
            'button' => true,
            'image' => 'https://i.ibb.co/gRgGb3G/IMG-20240602-132105-1.jpg'  // Remplacez par l'URL de votre image réelle
        ],
        ['title' => 'Technologie moderne', 'description' => 'Une technologie élégante qui s\'adapte parfaitement à votre réveil.',
            'button' => true,
            'image' => 'https://i.ibb.co/wr9Xg6J/PCBConception.png'  // Remplacez par l'URL de votre image réelle
        ],
        ['title' => 'Tests avancés', 'description' => 'Incorporant des fonctions intelligentes pour un réveil sur mesure.',
            'button' => true,
            'image' => 'https://i.ibb.co/wsqnkF8/IMG-20240530-173304.jpg'  // Remplacez par l'URL de votre image réelle
        ]
    ];

    foreach ($features as $feature) {
        echo "<div class='feature'>";
        echo "<h2>{$feature['title']}</h2>";
        echo "<p>{$feature['description']}</p>";
        echo "<img src='{$feature['image']}' alt='{$feature['title']}' style='width:100%; height:auto; border-radius:8px; margin-bottom:10px;'>"; // Ajout de l'image
        if ($feature['button']) {
            echo "<a href='details.php' class='discover-button'>Découvrir</a>"; // Ajouter un lien spécifique si nécessaire
        }
        echo "</div>";
    }
    ?>

</div>
<div class="testimonials">
    <h2>Témoignages</h2>
    <div class="testimonial">
        <p>"Le meilleur réveil que j'ai jamais utilisé. Révolutionnaire!" - Kassoum Sanogo</p>
    </div>
</div>
<footer>
    <p>ENSIM - Le Réveil du Futur © 2024</p>
</footer>
</body>
</html>
