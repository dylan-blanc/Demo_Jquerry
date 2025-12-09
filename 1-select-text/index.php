<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 1 - Sélecteurs</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        .highlight { background: yellow; padding: 5px; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1 id="titre">Bienvenue sur jQuery</h1>
    <p class="message">Ceci est un message normal.</p>
    <p class="message">Un autre message.</p>
    <p id="info">Informations importantes ici.</p>
    <button id="btnChanger">Changer les textes</button>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>