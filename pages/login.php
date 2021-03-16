<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['id'] === 'bob') {
        session_start();
        $_SESSION['id'] = 'bob';
        $_SESSION['expires'] = time() + 60;
        header('Location: ../index.php');
    }
?>
<html lang="fr">
<head>
    <title>Cookies et sessions</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="id">Pseudo</label>
            <input type="text" class="form-control" name="id" id="id" aria-describedby="emailHelp" placeholder="Pseudo">
            <small id="pseudo" class="form-text text-muted">Votre pseudo.</small>
        </div>
        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
