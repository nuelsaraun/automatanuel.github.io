<!DOCTYPE html>
<html>
<head>
    <title>TEORI BAHASA DAN OTOMATA</title>
    <style>
        body {
            background-color: #E6E6FA;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        
        img {
            width: 350px; 
            height: auto; 
        }
    </style>
</head>
<body>
    <h1>Automata_C</h1>
    <h3>Samuel Imanuel Hizkia Saraun</h3>
    <h3>211011060101</h3>
    <h3>Information System</h3>
    
    <form method="post" action="">
        <label for="word">Enter a word: </label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Check</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function isAccepted($word) {
            $state = 0;
            
            for ($i = 0; $i < strlen($word); $i++) {
                $char = $word[$i];
                
                switch ($state) {
                    case 0:
                        if ($char === 'a') {
                            $state = 1;
                        } else {
                            return false;
                        }
                        break;
                    case 1:
                        if ($char === 'a' || $char === 'b') {
                            $state = 2;
                        } else {
                            return false;
                        }
                        break;
                    case 2:
                        if ($char === 'a') {
                            $state = 2;
                        } else {
                            return false;
                        }
                        break;
                }
            }
            
            return $state === 2;
        }
        
        $word = $_POST['word'];
        
        if (isAccepted($word)) {
            echo "<p><strong>Result:</strong> Accepted</p>";
        } else {
            echo "<p><strong>Result:</strong> Not Accepted</p>";
        }
    }
    ?>

<img src="WhatsApp Image 2023-05-20 at 13.17.33.jpg">
</body>
</html>