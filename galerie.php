<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie - Le Réveil du Futur</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
        }
        nav {
            background: #ffffff; /* Beige */
            padding: 15px 0; /* Augmentation de la taille */
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2); /* Ombre sous la nav */
            border-top: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
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
        header, footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            justify-content: center;
        }
        .photo {
            margin: 10px;
            border: 5px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.2s ease-in-out;
        }
        .photo:hover {
            transform: scale(1.05);
            cursor: pointer;
        }
        img {
            display: block;
            width: 100%;
            height: auto;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }
        .modal-content {
            margin: 5% auto;
            padding: 20px;
            width: 80%;
            max-width: 2000px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        @media (max-width: 600px) {
            .gallery {
                flex-direction: column;
                align-items: center;
            }
            .photo {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Galerie du Réveil du Futur</h1>
</header>
<nav>
    <a href="index.php">Accueil</a>
    <a href="details.php">Détails</a>
    <a href="galerie.php">Galerie</a>
    <a href="equipe.php">Equipe</a>
    <a href="contact.php">Contact</a>
</nav>
<div class="gallery">
    <!-- Exemples d'images, remplacez les URLs par vos propres images -->
    <div class="photo" onclick="openModal(this.children[0].src)">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Réveil du Futur 1">
    </div>
    <div class="photo" onclick="openModal(this.children[0].src)">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Réveil du Futur 2">
    </div>
    <div class="photo" onclick="openModal(this.children[0].src)">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Réveil du Futur 3">
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01">
</div>

<footer>
    <p>Contactez-nous: info@lereveildufutur.com</p>
</footer>

<script>
    function openModal(src) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        modal.style.display = "block";
        modalImg.src = src;
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>
</body>
</html>
