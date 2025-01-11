<?php

include './models/modelHome.php';

$model = new ModelHome($pdo);

include './views/viewHome.php';

?>