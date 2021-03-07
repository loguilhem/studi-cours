<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Nous contacter</h1>
            <p>Merci de remplir le formulaire ci-dessous</p>
            <form method="post" action="/pages/contact-response.php">
                <div class="form-group">
                    <label for="name">Votre nom</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="type">Civilité</label>
                    <select class="form-control" id="type">
                        <option>M.</option>
                        <option>Mme</option>
                        <option>Mlle</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthdate">Date de naissance</label>
                    <input type="date" class="form-control-input" id="birthdate">
                </div>
                <div class="form-group">
                Où habitez-vous ?
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="country" id="fr">
                        <label class="form-check-label" for="fr">Fr</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="country" id="ue">
                        <label class="form-check-label" for="ue">UE</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="country" id="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
                <div class="form-group">
                    Vos atouts ?
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="php" name="assets">
                        <label class="form-check-label" for="php">PHP</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="js" name="assets">
                        <label class="form-check-label" for="js">JS</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="html-css" name="assets">
                        <label class="form-check-label" for="html-css">HTML/CSS</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control-file" name="avatar" id="avatar">
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>

