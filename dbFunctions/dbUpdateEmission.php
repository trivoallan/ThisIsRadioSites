<?php

include('dbFunctions.php');

dbUpdateEmission($_POST["numero"], $_POST["titre"], $_POST["date_sortie"], $_POST["etat"], $_POST["time_min"], $_POST["time_sec"]);

?>