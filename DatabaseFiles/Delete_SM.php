<?php
    include_once 'connection.php';

    //-------------------------------- check GET request ------------------------------ 
    $SM_id;
    if(isset($_GET['SM_id'])) {
        $SM_id = $_GET['SM_id'];
    }

    //-------------------------------- Delete skeleton from "Skeletos" ------------------------------
    $exei_skel = "SELECT FROM \"Έχει Σκελετό\" WHERE ΣΜid = $SM_id;";
    $resultExei_skel = pg_query($conn,$exei_skel);
    while($rowExei_skel = pg_fetch_array($resultExei_skel)){

        $Delete_skel_from_Skel = "DELETE FROM \"Σκελετός\" WHERE id = ".$rowExei_skel['Σκελετόςid'].";";

        $result = pg_query($conn, $Delete_skel_from_Skel);
        if(!$result) {
            echo pg_last_error($conn);
        }

    } 

    //-------------------------------- Delete skeleton from "exei skeleto" ------------------------------ 
    $Delete_skel_from_exeiSkel = "DELETE FROM \"Έχει Σκελετό\" WHERE ΣΜid = $SM_id;";
    $result = pg_query($conn, $Delete_skel_from_exeiSkel);
    if(!$result) {
        echo pg_last_error($conn);
    }

     //-------------------------------- Delete skeleton from "ΣΜ" ------------------------------ 
    $Delete_skel_from_SM = "DELETE FROM ΣΜ WHERE id = $SM_id;";
    $result = pg_query($conn, $Delete_skel_from_SM);
    if(!$result) {
        echo pg_last_error($conn);
    }

    $data = array();
    $data['message'] = 'ok_sm';

    echo json_encode($data);

    pg_close($conn);
?>