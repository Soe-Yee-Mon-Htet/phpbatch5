
<?php
    echo "Destroy Session <br/>";

    session_start();

    
    // Single Destroy
    unset($_SESSION["idxcount"]);
    echo "Deleted Successfully!";

    // Multiple Destroy
    // session_destroy();
    // echo "Deleted All Successfully!";

?>