<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';

$tmpPath = $_FILES['avatar']['tmp_name'];
$name = $_FILES['avatar']['name'];
move_uploaded_file($tmpPath, $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$name);
$newPath = '/uploads/'.$name;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Voici vos données</h1>
            Votre nom : <?php echo $_POST["name"]; ?>
            <br>
            Votre civilité : <?php echo $_POST["type"]; ?>
            <br>
            Votre date de naissance : <?php echo $_POST['birthdate']; ?>
            <br>
            Votre pays : <?php echo $_POST['country']; ?>
            <br>
            Vos atouts:
            <?php
                foreach ($_POST['assets'] as $asset) {
                    echo '<br>'.$asset;
                }
            ?>
            <br>
            <img src="<?php echo $newPath; ?>" style="max-height: 200px">
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>

