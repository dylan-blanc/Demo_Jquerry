<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 4 - Formulaire</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input.erreur {
            border-color: #ff6b6b;
        }
        
        .message-erreur {
            color: #ff6b6b;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
        
        button {
            padding: 12px 30px;
            background: #51cf66;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background: #40c057;
        }
        
        #resultat {
            margin-top: 20px;
            padding: 15px;
            background: #d3f9d8;
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Inscription</h1>
    
    <form id="formulaire">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" placeholder="Votre nom">
            <div class="message-erreur" id="erreur-nom">Le nom est obligatoire</div>
        </div>
        
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="votre@email.com">
            <div class="message-erreur" id="erreur-email">L'email est invalide</div>
        </div>
        
        <button type="submit">Valider</button>
    </form>
    
    <div id="resultat"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>