<?php

include './models/modelClassement.php';

$model = new ModelClassement($pdo);

include './views/viewClassement.php';

?>