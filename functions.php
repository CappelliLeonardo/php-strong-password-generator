<?php  
$password = "";
if(isset($_GET['passwordLength'])) {             //tramite il metodo isset verifico se il campo
                                                //passwordLenght è stato inserito oppore no.

    $passwordLength = (int)$_GET['passwordLength'];  //recupero il numero inserito dall'ux e lo rendo intero tramite INT

    // Generate random password
    $password = generateRandomPassword($passwordLength); // creo la variabile password e chiamo la funzione con argomento il valore inserito dall'utente.

    // Riporto l'out put della password generata nel body a riga 73 
    
}

function generateRandomPassword($lenght) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?'; // definisco la stringa dei caratteri pickup-abili
    $password = '';     

    $charactersLength = strlen($characters);  //tramite la funzione strlen calcolo la lunghezza della stringa dei caratteri 

    for ($i = 0; $i < $lenght; $i++) {      // ciclo for che si ripete sulla lunghezza della password desiderata inserita (passwordLenght)
        $password .= $characters[rand(0, $charactersLength - 1)];  // utilizzo la funzione rand per prendere x caratteri casuali ad ogni iterazione del ciclo for
    }
    return $password;
}
?>
