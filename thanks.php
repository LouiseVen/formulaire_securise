<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The box model</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h1>The box model</h1>
        <p>Merci <?php echo $_POST["prenom"] . " " . $_POST["name"];?>  de nous avoir contacté à propos de “<?php echo $_POST["subject"]?>”.

Un de nos conseillers vous contactera soit à l’adresse <?php echo $_POST["email"]?> ou par téléphone au <?php echo $_POST["phone"]?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST["textarea"];?>   
    </main>
    <footer>&copy; Wilder</footer>
</body>
</html>