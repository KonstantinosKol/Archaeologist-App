<?php

    include "Connection.php";

    $jsonp = $_GET['callback'];

    $return_arr = array();
    $data = array();


    //--------------------Typos SM------------------------
    $query = "SELECT * FROM ΤύποςΣΜ ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Typos_SM'] = $return_arr;
    $return_arr = array();

    //--------------------Klisi pros------------------------
    $query = "SELECT * FROM `Κλίση προς` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Klisi_pros'] = $return_arr;
    $return_arr = array();

    //--------------------Κατηγορία/Τύπος------------------------
    $query = "SELECT * FROM `Κατηγορία/τύπος` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Katigoria_typos'] = $return_arr;
    $return_arr = array();

    //--------------------Υλικό------------------------
    $query = "SELECT * FROM Υλικό ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Yliko'] = $return_arr;
    $return_arr = array();

    //--------------------Δομή/Υφή------------------------

    $query = "SELECT * FROM `Δομή/Υφή` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Domi_Yfi'] = $return_arr;
    $return_arr = array();

    //--------------------Χρώμα------------------------
    $query = "SELECT * FROM Χρώμα ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Xroma'] = $return_arr;
    $return_arr = array();

    //--------------------Προσμίξεις------------------------
    $query = "SELECT * FROM Προσμίξεις ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Prosmixeis'] = $return_arr;
    $return_arr = array();

    //--------------------Λίθος------------------------
    $query = "SELECT * FROM `Επιλογές Λίθου` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Lithos'] = $return_arr;
    $return_arr = array();

    //--------------------Συνδετικό υλικό------------------------
    $query = "SELECT * FROM `Συνδετικό υλικό` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Syndetiko_Ylko'] = $return_arr;
    $return_arr = array();

    //--------------------Επίχρισμα(είδος)------------------------
    $query = "SELECT * FROM `Επίχρισμα(είδος)` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Epixrisma_eidos'] = $return_arr;
    $return_arr = array();

    //--------------------Επίχρισμα (χρώμα)------------------------
    $query = "SELECT * FROM `Επίχρισμα (χρώμα)` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Epixrisma_xroma'] = $return_arr;
    $return_arr = array();

    //--------------------Τοιχοποία------------------------
    $query = "SELECT * FROM `Τοιχοποία` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Toixopoiia'] = $return_arr;
    $return_arr = array();

    //--------------------Δάπεδο------------------------
    $query = "SELECT * FROM `Δάπεδο` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Dapedo'] = $return_arr;
    $return_arr = array();

    //--------------------Θέση------------------------
    $query = "SELECT * FROM `Θέση` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Thesi'] = $return_arr;
    $return_arr = array();

    //--------------------Χρονολόγιση από------------------------
    $query = "SELECT * FROM `Χρονολόγηση απο` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Xronologisi_apo'] = $return_arr;
    $return_arr = array();

    //--------------------Χρονολόγιση μέχρι------------------------
    $query = "SELECT * FROM `Χρονολόγηση απο` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Xronologisi_mexri'] = $return_arr;
    $return_arr = array();

    //--------------------Βάσει------------------------
    $query = "SELECT * FROM `Βάσει` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Vasei'] = $return_arr;
    $return_arr = array();

    //--------------------Ανασκαφ. τεχνική------------------------
    $query = "SELECT * FROM `Ανασκαφ. τεχνική` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Anaskaf_texn'] = $return_arr;
    $return_arr = array();

    //--------------------Συνθήκες------------------------
    $query = "SELECT * FROM `Συνθήκες` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Sinthikes'] = $return_arr;
    $return_arr = array();

    //--------------------Πιθανότητα επιμίξεων------------------------
    $query = "SELECT * FROM `Πιθανότητα επιμίξεων` ;";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $return_arr[] = array("id" => $row['id'],"Selections" => $row['Selections'],);
    }
    $data['Pithanotita_epim'] = $return_arr;


    echo json_encode($data);
 
    


?>