<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demo 6 - Effets</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        
        .boite {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            margin: 20px 0;
            border-radius: 10px;
            text-align: center;
            font-size: 20px;
        }
        
        .boutons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }
        
        .btn-fade { background: #339af0; }
        .btn-slide { background: #51cf66; }
        .btn-toggle { background: #ff6b6b; }
        .btn-custom { background: #7950f2; }
    </style>
</head>
<body>
    <h1>Effets jQuery</h1>
    
    <div class="boite" id="boite1">
        Boite avec effets de fondu
    </div>
    
    <div class="boutons">
        <button class="btn-fade" id="fadeOut">Fade Out</button>
        <button class="btn-fade" id="fadeIn">Fade In</button>
        <button class="btn-fade" id="fadeToggle">Fade Toggle</button>
    </div>
    
    <div class="boite" id="boite2">
        Boite avec effets de slide
    </div>
    
    <div class="boutons">
        <button class="btn-slide" id="slideUp">Slide Up</button>
        <button class="btn-slide" id="slideDown">Slide Down</button>
        <button class="btn-slide" id="slideToggle">Slide Toggle</button>
    </div>
    
    <div class="boite" id="boite3">
        Animation personnalisée
    </div>
    
    <div class="boutons">
        <button class="btn-custom" id="animate">Animer</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>