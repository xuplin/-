<?php



if(isset($_POST['query'])) {

    if($_POST['query'] == "year") {

        include 'query_awards.php';

        echo json_encode(queryYear());
    }


}






?> 