<?php
    include "connection.php";


    $return_arr = array();
    $data = array();

    //--------------------Τύπος ταφής------------------------
    $query = 'SELECT * FROM "Τύπος Ταφής" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Typos_tafis'] = $return_arr;
    $return_arr = array();

    //--------------------Τύπος τάφου------------------------
    $query = 'SELECT * FROM "Τύπος τάφου" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Typos_tafou'] = $return_arr;
    $return_arr = array();

    
    //--------------------Οστά------------------------
    $query = "SELECT * FROM Οστά ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Osta'] = $return_arr;
    $return_arr = array();
 
    //--------------------Ταφή------------------------
    $query = "SELECT * FROM Ταφή ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Tafi'] = $return_arr;


    echo json_encode($data);

    


?>

   
  