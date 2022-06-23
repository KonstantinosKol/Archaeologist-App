<?php
    include_once 'connection.php';

    //-------------------------------- check GET request ------------------------------ 
    $Skel_id;
    if(isset($_GET['Skel_id'])) {
        $Skel_id = $_GET['Skel_id'];
    }

    //-------------------------------- Delete skeleton from "exei skeleto" ------------------------------ 
    $Delete_skel_from_exeiSkel = "DELETE FROM \"Έχει Σκελετό\" WHERE Σκελετόςid = $Skel_id;";

    $result = pg_query($conn, $Delete_skel_from_exeiSkel);
    if(!$result) {
        echo pg_last_error($conn);
    }

     //-------------------------------- Delete skeleton from "Skeletos" ------------------------------ 
    $Delete_skel_from_table = "DELETE FROM \"Σκελετός\" WHERE id = $Skel_id;";
    $result = pg_query($conn, $Delete_skel_from_table);
    if(!$result) {
        echo pg_last_error($conn);
    }

    $data = array();
    $data['message'] = 'ok_sm';

    echo json_encode($data);

    pg_close($conn);
?>