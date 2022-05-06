<?php


    include "Connection.php";

    $jsonp = $_GET['callback'];

    $return_arr = array();
    $data = array();

    //--------------------Τύπος ταφής------------------------
    $query = "SELECT * FROM `Τύπος Ταφής` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Typos_tafis'] = $return_arr;
    $return_arr = array();

    //--------------------Τύπος τάφου------------------------
    $query = "SELECT * FROM `Τύπος τάφου` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Typos_tafou'] = $return_arr;
    $return_arr = array();

    
    //--------------------Οστά------------------------
    $query = "SELECT * FROM `Οστά` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Osta'] = $return_arr;
    $return_arr = array();
 
    //--------------------Ταφή------------------------
    $query = "SELECT * FROM `Ταφή` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Tafi'] = $return_arr;


    echo json_encode($data);

    


?>

   
  