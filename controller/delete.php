<?Php

    include "../model/db.php";

    $id=$_GET["id"];
    $whereID=$_GET["whereID"];
    $table=$_GET["table"];


    $execution = new CRUD($table);
    $execution->delete($id, $whereID);
    header('Location:../vue/dashboard.php?manage='.$table);


?>