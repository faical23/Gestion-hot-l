<?Php

    include "../model/db.php";

    $id=$_GET["id"];
    $table=$_GET["table"];


    $execution = new CRUD($table);
    $execution->delete($id);
    header('Location:../vue/dashboard.php?manage='.$table);

?>