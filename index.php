<?php
    include __DIR__ .'/functions.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <!-- FONTAWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <h2>Password Generator</h2>
            <form action="./generatedPassword.php" method="GET" class="form-control">
                <div class="form-group">
                    <label for="passwordLength">Choose your psw lenght</label>
                    <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="6" max="50" required>
                </div>
                <button type="submit" class="btn btn-primary">Generate Password</button>
            </form>
        </div>

        
    </main>
</body>
</html>