<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 2 - Événements</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        button { 
            padding: 10px 20px; 
            margin: 10px; 
            font-size: 16px;
            cursor: pointer;
        }
        .rouge { background: #ff6b6b; color: white; border: none; }
        .vert { background: #51cf66; color: white; border: none; }
        .bleu { background: #339af0; color: white; border: none; }
        #resultat { 
            margin-top: 20px; 
            padding: 15px; 
            background: #f1f3f5; 
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Cliquez sur les boutons</h1>
    
    <button class="rouge" data-couleur="rouge">Bouton Rouge</button>
    <button class="vert" data-couleur="vert">Bouton Vert</button>
    <button class="bleu" data-couleur="bleu">Bouton Bleu</button>
    
    <div id="resultat"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>