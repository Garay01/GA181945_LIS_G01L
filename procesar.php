<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Potencia</title>
    <link rel="stylesheet" href="./css/procesar.css">
</head>

<body>
    <section id="welcome-section" class="welcome-section">
        <h1>Resultado de Conversión</h1>
        <p><?php 
            foreach ($_POST as $key => $value) {
                echo "<strong>$key => $value</strong><br>";
            }
/*             $base=$_POST["base"];
            $exp=$_POST["exponente"];

            $resultado=1;
            for ($i=1; $i <= $exp; $i++) { 
                $resultado*=$base;
            }
            echo "$base^$exp = $resultado" */
        
        ?></p>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-section-header">
            <h2>Let's work together...</h2>
            <p>How do you take your coffee?</p>
        </div>
        <div class="contact-links">
            <a href="https://facebook.com/freecodecamp" target="_blank" class="btn contact-details"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a id="profile-link" href="https://github.com/freecodecamp" target="_blank" class="btn contact-details"><i class="fab fa-github"></i> GitHub</a>
            <a href="https://twitter.com/freecodecamp" target="_blank" class="btn contact-details"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="mailto:example@example.com" class="btn contact-details"><i class="fas fa-at"></i> Send a mail</a>
            <a href="tel:555-555-5555" class="btn contact-details"><i class="fas fa-mobile-alt"></i> Call me</a>
        </div>
    </section>

    
</body>

</html>