<?php

    include "connection.php";
    // $SM=$_GET['SΜ'];
    // if(isset($_GET["SM"])){
        $SM_query = 'SELECT id FROM ΣΜ WHERE ΣΜ = '.$_GET["SM"].' ;';
        $result = pg_query($conn, $SM_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            $data = array();
       
            if(pg_num_rows($result) != 1) {
                $data['message'] = 'noInArray';
                echo json_encode($data);
            }else{
                $data['message'] = 'InArray';
                echo json_encode($data);
                
            }
        }
    // }
   

?>    