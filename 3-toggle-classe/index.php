<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 3 - Toggle</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        
        .lampe {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #adb5bd;
            margin: 30px auto;
            transition: all 0.3s;
            box-shadow: 0 0 0 0 rgba(255, 235, 59, 0);
        }
        
        .lampe.allumee {
            background: #ffeb3b;
            box-shadow: 0 0 50px 20px rgba(255, 235, 59, 0.6);
        }
        
        #btnToggle {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            font-size: 18px;
            background: #339af0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #btnToggle:hover {
            background: #228be6;
        }
        
        #status {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Lampe Interactive</h1>
    
    <div class="lampe"></div>
    
    <button id="btnToggle">Allumer</button>
    
    <div id="status">État : <strong>Éteinte</strong></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>