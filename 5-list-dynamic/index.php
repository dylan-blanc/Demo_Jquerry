<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 5 - Liste</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        
        #formulaire {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        #tache {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ced4da;
            border-radius: 5px;
        }
        
        #btnAjouter {
            padding: 10px 20px;
            background: #339af0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #liste {
            list-style: none;
            padding: 0;
        }
        
        #liste li {
            background: #f1f3f5;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .btnSupprimer {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .btnSupprimer:hover {
            background: #fa5252;
        }
    </style>
</head>
<body>
    <h1>Ma Todo List</h1>
    
    <div id="formulaire">
        <input type="text" id="tache" placeholder="Nouvelle tâche...">
        <button id="btnAjouter">Ajouter</button>
    </div>
    
    <ul id="liste">
        <!-- Les tâches seront ajoutées ici -->
    </ul>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>