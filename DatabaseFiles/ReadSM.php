<?php
// header('Content-type: application/json');
// header('Access-Control-Allow-Origin: http://');
    include "connection.php";

    $jsonp = "";
    if(isset($_GET["callback"])) {
        $jsonp = $_GET['callback'];
    }
  

    $return_arr = array();
    $data = array();


    //--------------------Typos SM------------------------
    $query = "SELECT * FROM ΤύποςΣΜ ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array(
            "id" => $row[0],
            "Selections" => $row[1],
        );
    }
    $data['Typos_SM'] = $return_arr;
    $return_arr = array();

    //--------------------Klisi pros------------------------
    $query = 'SELECT * FROM "Κλίση προς" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Klisi_pros'] = $return_arr;
    $return_arr = array();

    //--------------------Κατηγορία/Τύπος------------------------
    $query = 'SELECT * FROM "Κατηγορία/τύπος" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Katigoria_typos'] = $return_arr;
    $return_arr = array();

    //--------------------Υλικό------------------------
    $query = "SELECT * FROM Υλικό ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Yliko'] = $return_arr;
    $return_arr = array();

    //--------------------Δομή/Υφή------------------------

    $query = 'SELECT * FROM "Δομή/Υφή" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Domi_Yfi'] = $return_arr;
    $return_arr = array();

    //--------------------Χρώμα------------------------
    $query = "SELECT * FROM Χρώμα ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Xroma'] = $return_arr;
    $return_arr = array();

    //--------------------Προσμίξεις------------------------
    $query = "SELECT * FROM Προσμίξεις ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Prosmixeis'] = $return_arr;
    $return_arr = array();

    //--------------------Λίθος------------------------
    $query = 'SELECT * FROM "Επιλογές Λίθου" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Lithos'] = $return_arr;
    $return_arr = array();

    //--------------------Συνδετικό υλικό------------------------
    $query = 'SELECT * FROM "Συνδετικό υλικό" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Syndetiko_Ylko'] = $return_arr;
    $return_arr = array();

    //--------------------Επίχρισμα(είδος)------------------------
    $query = 'SELECT * FROM "Επίχρισμα(είδος)" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Epixrisma_eidos'] = $return_arr;
    $return_arr = array();

    //--------------------Επίχρισμα (χρώμα)------------------------
    $query = 'SELECT * FROM "Επίχρισμα (χρώμα)" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Epixrisma_xroma'] = $return_arr;
    $return_arr = array();

    //--------------------Τοιχοποία------------------------
    $query = "SELECT * FROM Τοιχοποιία ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Toixopoiia'] = $return_arr;
    $return_arr = array();

    //--------------------Δάπεδο------------------------
    $query = "SELECT * FROM Δάπεδο ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Dapedo'] = $return_arr;
    $return_arr = array();

    //--------------------Θέση------------------------
    $query = "SELECT * FROM Θέση ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Thesi'] = $return_arr;
    $return_arr = array();

    //--------------------Χρονολόγιση από------------------------
    $query = 'SELECT * FROM "Χρονολόγηση απο" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Xronologisi_apo'] = $return_arr;
    $return_arr = array();

    //--------------------Χρονολόγιση μέχρι------------------------
    $query = 'SELECT * FROM "Χρονολόγηση μέχρι" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Xronologisi_mexri'] = $return_arr;
    $return_arr = array();

    //--------------------Βάσει------------------------
    $query = "SELECT * FROM Βάσει ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Vasei'] = $return_arr;
    $return_arr = array();

    //--------------------Ανασκαφ. τεχνική------------------------
    $query = 'SELECT * FROM "Ανασκαφ. τεχνική" ;';
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Anaskaf_texn'] = $return_arr;
    $return_arr = array();

    //--------------------Συνθήκες------------------------
    $query = "SELECT * FROM Συνθήκες ;";
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Sinthikes'] = $return_arr;
    $return_arr = array();

    //--------------------Πιθανότητα επιμίξεων------------------------
    $query = 'SELECT * FROM "Πιθανότητα επιμίξεων" ;';             //<<<<<<-------------------
    $result = pg_query($conn,$query);
    while($row = pg_fetch_row($result)){
        $return_arr[] = array("id" => $row[0],"Selections" => $row[1],);
    }
    $data['Pithanotita_epim'] = $return_arr;


    echo json_encode($data); 
 
    


?>