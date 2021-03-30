<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/data.php';

if (!file_exists("files/eleves.txt")) {
    $fileStudents = fopen("files/eleves.txt", "w");

    foreach ($students as $student) {
        fwrite($fileStudents, 'Prénom : ' . $student[0] . ' | Nom : ' . $student[1] . " \n");
    }

    fclose($fileStudents);
} else {
    $fileStudents = fopen("files/eleves.txt", "r");
    $data = [];

    while ($line = fgets($fileStudents)) {
        $data[] = $line;
        $bobIsInList = false;
        if ('Prénom : Bob | Nom : Marley ' === $line) {
            $bobIsInList = true;
        }
    }
    fclose($fileStudents);

    if (!$bobIsInList) {
        $fileStudents2 = file_get_contents("files/eleves.txt");
        $fileStudents2 .= 'Prénom : Bob | Nom : Marley ';
        file_put_contents("files/eleves.txt", $fileStudents2);
    }
}

if (!file_exists("files/notes.csv")) {
    $filesNotes = fopen("files/notes.csv", "w");

    fputcsv($filesNotes, ['Prénom', 'Français', 'Anglais', 'Informatique'], ",");
    foreach ($notes as $note) {
        fputcsv($filesNotes, $note, ",");
    }

    fclose($filesNotes);
} else {
    $filesNotes =  $filesNotes = fopen("files/notes.csv", "r");
    $dataNotes = [];
    $row = 0;
    while (($line = fgetcsv($filesNotes)) !== FALSE) {
        $row++;
        for ($c = 0 ; $c < count($line) ; $c++) {
            $dataNotes[$row][] = $line[$c];
        }
        echo '<br>';
    }
    fclose($filesNotes);
}



?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="files/eleves.txt" target="_blank" class="btn btn-outline-primary">Télécharger la liste des élèves</a>
            <a href="files/notes.csv" target="_blank" class="btn btn-outline-primary">Télécharger les notes</a>

            <?php

//            foreach ($data as $student) {
//                echo '<div class="alert alert-primary">'.$student.'</div>';
//                echo '<br>';
//            }



            ?>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <?php
                     foreach ($dataNotes[1] as $title) {
                         echo '<th>' . $title . '</th>';
                     }
                    ?>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($dataNotes as $key => $notes) {
                    if (1 !== $key) {
                        echo '<tr>';
                        foreach ($notes as $note) {
                            echo '<td>' . $note . '</td>';
                        }
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
