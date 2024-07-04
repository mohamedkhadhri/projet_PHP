<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à la base de données</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Connexion à la base de données</h1>
        
        <!-- Formulaire de connexion -->
        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="login">Se connecter</button>
            <button type="submit" class="btn btn-secondary" name="action" value="register">S'inscrire</button>
        </form>
        
        <div class="alert alert-info mt-3">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérer les données du formulaire
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $action = $_POST['action']; // "login" ou "register"

                    // Informations de connexion à la base de données
                    $host = "localhost";
                    $db = "test1";

                    // Connexion à la base de données
                    $connection = mysqli_connect($host, 'root', 'mohamed', $db);

                    if (!$connection) {
                        die("Erreur de connexion : " . mysqli_connect_error());
                    }

                    if ($action == "login") {
                        // Vérifier si l'utilisateur existe
                        $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
                        $result = mysqli_query($connection, $query);
                        if (mysqli_num_rows($result) > 0) {
                            echo "Connexion réussie";
                            header("Location: accueil.php");
                            exit();
                        } else {
                            echo "Nom d'utilisateur ou mot de passe incorrect";
                        }
                    } elseif ($action == "register") {
                        // Inscription de l'utilisateur
                        $query = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
                        if (mysqli_query($connection, $query)) {
                            echo "Inscription réussie";
                        } else {
                            echo "Erreur lors de l'inscription : " . mysqli_error($connection);
                        }
                    }

                    // Fermeture de la connexion
                    mysqli_close($connection);
                }
            ?>
        </div>
    </div>
</body>
</html>
