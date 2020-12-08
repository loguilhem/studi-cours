<?php
include_once '../header.php';

$controller = new CarController();

$car = $controller->getCar($_GET['car']);
?>

<form method="post" action="/Vue/command/command.php">
    <div class="form-group">
        <label for="startDate">Date départ</label>
        <input class="form-control" type="date" name="startDate" id="startDate">
    </div>
    <div class="form-group">
        <label for="endDate">Date retour</label>
        <input class="form-control" type="date" name="endDate" id="endDate">
    </div>
    <input type="hidden" name="car" value="<?php echo $car->getId(); ?>">
    <button type="submit" class="btn btn-dark">Louer !</button>
</form>
