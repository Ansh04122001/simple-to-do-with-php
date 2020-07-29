<?php
include "../classes/db.php";
if(DB::connect()){
    echo "Connected";
}
else{
    echo "not connected";
}

?>