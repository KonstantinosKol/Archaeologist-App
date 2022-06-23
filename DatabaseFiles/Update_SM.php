<?php
    include_once 'connection.php';


    //-------------------------------- check GET request ------------------------------ 
    $SM_id;
    if(isset($_GET['SM_id'])) {
        $SM_id = $_GET['SM_id'];
    }

    $SM;
    if(isset($_GET['SM'])) {
        $SM = $_GET['SM'];
    }
    $etos;
    if(isset($_GET['etos'])) {
        $etos = $_GET['etos'];
    }
    $tautothta;
    if(isset($_GET['tautothta'])) {
        $tautothta = $_GET['tautothta'];
    }
    $anwt_Y;
    if(isset($_GET['anwt_Y'])) {
        $anwt_Y = $_GET['anwt_Y'];
    }
    $katwt_Y;
    if(isset($_GET['katwt_Y'])) {
        $katwt_Y = $_GET['katwt_Y'];
    }
    $B1;
    if(isset($_GET['B1'])) {
        $B1 = $_GET['B1'];
    }
    $A1;
    if(isset($_GET['A1'])) {
        $A1 = $_GET['A1'];
    }
    $N1;
    if(isset($_GET['N1'])) {
        $N1 = $_GET['N1'];
    }
    $D1;
    if(isset($_GET['D1'])) {
        $D1 = $_GET['D1'];
    }
    $antistoixh_me;
    if(isset($_GET['antistoixh_me'])) {
        $antistoixh_me = $_GET['antistoixh_me'];
    }
    $sugxronh_me;
    if(isset($_GET['sugxronh_me'])) {
        $sugxronh_me = $_GET['sugxronh_me'];
    }
    $katw;
    if(isset($_GET['katw'])) {
        $katw = $_GET['katw'];
    }
    $panw;
    if(isset($_GET['panw'])) {
        $panw = $_GET['panw'];
    }
    $mhkos1;
    if(isset($_GET['mhkos1'])) {
        $mhkos1 = $_GET['mhkos1'];
    }
    $platos1;
    if(isset($_GET['platos1'])) {
        $platos1 = $_GET['platos1'];
    }
    $diametr;
    if(isset($_GET['diametr'])) {
        $diametr = $_GET['diametr'];
    }
    $vathos1;
    if(isset($_GET['vathos1'])) {
        $vathos1 = $_GET['vathos1'];
    }
    $upsos;
    if(isset($_GET['upsos'])) {
        $upsos = $_GET['upsos'];
    }
    $paxos;
    if(isset($_GET['paxos'])) {
        $paxos = $_GET['paxos'];
    }
    $lithos_keimeno;
    if(isset($_GET['lithos_keimeno'])) {
        $lithos_keimeno = $_GET['lithos_keimeno'];
    }
    $plinthos_keimeno;
    if(isset($_GET['plinthos_keimeno'])) {
        $plinthos_keimeno = $_GET['plinthos_keimeno'];
    }
    $sundetiko_uliko_xrwma_keimeno;
    if(isset($_GET['sundetiko_uliko_xrwma_keimeno'])) {
        $sundetiko_uliko_xrwma_keimeno = $_GET['sundetiko_uliko_xrwma_keimeno'];
    }
    $epixrhsma_xrwma_keimeno;
    if(isset($_GET['epixrhsma_xrwma_keimeno'])) {
        $epixrhsma_xrwma_keimeno = $_GET['epixrhsma_xrwma_keimeno'];
    }
    $keramoplastikos_diaosmos;
    if(isset($_GET['keramoplastikos_diaosmos'])) {
        $keramoplastikos_diaosmos = $_GET['keramoplastikos_diaosmos'];
    }
    $spolia;
    if(isset($_GET['spolia'])) {
        $spolia = $_GET['spolia'];
    }
    $ksulo;
    if(isset($_GET['ksulo'])) {
        $ksulo = $_GET['ksulo'];
    }
    $megethos_stoixeiwn;
    if(isset($_GET['megethos_stoixeiwn'])) {
        $megethos_stoixeiwn = $_GET['megethos_stoixeiwn'];
    }
    $arithm_swz_domwn;
    if(isset($_GET['arithm_swz_domwn'])) {
        $arithm_swz_domwn = $_GET['arithm_swz_domwn'];
    }
    $perigrafh_ermhneia;
    if(isset($_GET['perigrafh_ermhneia'])) {
        $perigrafh_ermhneia = $_GET['perigrafh_ermhneia'];
    }
    $xarakt_se_sx_me_SM;
    if(isset($_GET['xarakt_se_sx_me_SM'])) {
        $xarakt_se_sx_me_SM = $_GET['xarakt_se_sx_me_SM'];
    }
    $sxeseis_me_SM;
    if(isset($_GET['sxeseis_me_SM'])) {
        $sxeseis_me_SM = $_GET['sxeseis_me_SM'];
    }
    $koskino;
    if(isset($_GET['koskino'])) {
        $koskino = $_GET['koskino'];
    }
    $nerokoskino;
    if(isset($_GET['nerokoskino'])) {
        $nerokoskino = $_GET['nerokoskino'];
    }
    $koskino_pososto;
    if(isset($_GET['koskino_pososto'])) {
        $koskino_pososto = $_GET['koskino_pososto'];
    }
    $nerokoskino_pososto;
    if(isset($_GET['nerokoskino_pososto'])) {
        $nerokoskino_pososto = $_GET['nerokoskino_pososto'];
    }
    $posothta_keramikhs;
    if(isset($_GET['posothta_keramikhs'])) {
        $posothta_keramikhs = $_GET['posothta_keramikhs'];
    }
    $hmerologio1;
    if(isset($_GET['hmerologio1'])) {
        $hmerologio1 = $_GET['hmerologio1'];
    }
    $skarifima_path1 = "-";;
    // if(isset($_GET['skarifima_path1'])) {
    //     $skarifima_path1 = $_GET['skarifima_path1'];
    // }
    $fwto_path1 = "-";
    // if(isset($_GET['fwto_path1'])) {
    //     $fwto_path1 = $_GET['fwto_path1'];
    // }
    $katwpsh_path = "-";
    // if(isset($_GET['katwpsh_path'])) {
    //     $katwpsh_path = $_GET['katwpsh_path'];
    // }
    $opsh_path = "-";
    // if(isset($_GET['opsh_path'])) {
    //     $opsh_path = $_GET['opsh_path'];
    // }
    $suntakths1;
    if(isset($_GET['suntakths1'])) {
        $suntakths1 = $_GET['suntakths1'];
    }
    $hmeromhnia1;
    if(isset($_GET['hmeromhnia1'])) {
        $hmeromhnia1 = $_GET['hmeromhnia1'];
    }
    //---------------------------------DropDowns------------------------------------
    $Sunthhkes_id;
    if(isset($_GET['Sunthhkes_id'])) {
        $Sunthhkes_id = $_GET['Sunthhkes_id'];
    }
    $Kathgoria_tupos_id;
    if(isset($_GET['Kathgoria_tupos_id'])) {
        $Kathgoria_tupos_id = $_GET['Kathgoria_tupos_id'];
    }
    $Klish_pros_id;
    if(isset($_GET['Klish_pros_id'])) {
        $Klish_pros_id = $_GET['Klish_pros_id'];
    }
    $dapedo_id;
    if(isset($_GET['dapedo_id'])) {
        $dapedo_id = $_GET['dapedo_id'];
    }
    $Epiloges_lithou_id;
    if(isset($_GET['Epiloges_lithou_id'])) {
        $Epiloges_lithou_id = $_GET['Epiloges_lithou_id'];
    }
    $Sundetiko_uliko_id;
    if(isset($_GET['Sundetiko_uliko_id'])) {
        $Sundetiko_uliko_id = $_GET['Sundetiko_uliko_id'];
    }
    $Domh_Yfh_id;
    if(isset($_GET['Domh_Yfh_id'])) {
        $Domh_Yfh_id = $_GET['Domh_Yfh_id'];
    }
    $Xrwma_id;
    if(isset($_GET['Xrwma_id'])) {
        $Xrwma_id = $_GET['Xrwma_id'];
    }
    $Xronologhsh_mexri_id;
    if(isset($_GET['Xronologhsh_mexri_id'])) {
        $Xronologhsh_mexri_id = $_GET['Xronologhsh_mexri_id'];
    }
    $Xronologhsh_apo_id;
    if(isset($_GET['Xronologhsh_apo_id'])) {
        $Xronologhsh_apo_id = $_GET['Xronologhsh_apo_id'];
    }
    $Pithanothta_epimiksewn_id;
    if(isset($_GET['Pithanothta_epimiksewn_id'])) {
        $Pithanothta_epimiksewn_id = $_GET['Pithanothta_epimiksewn_id'];
    }
    $Thesh_id;
    if(isset($_GET['Thesh_id'])) {
        $Thesh_id = $_GET['Thesh_id'];
    }
    $TuposSM_id;
    if(isset($_GET['TuposSM_id'])) {
        $TuposSM_id = $_GET['TuposSM_id'];
    }
    $Epixrisma_eidos_id;
    if(isset($_GET['Epixrisma_eidos_id'])) {
        $Epixrisma_eidos_id = $_GET['Epixrisma_eidos_id'];
    }
    $Epixrisma_xrwma_id;
    if(isset($_GET['Epixrisma_xrwma_id'])) {
        $Epixrisma_xrwma_id = $_GET['Epixrisma_xrwma_id'];
    }

    
    //---------------------------------------Sundetiko_uliko--------------------------------------
    if (!strcmp($Sundetiko_uliko_id, "-"))
    {
        $Sundetiko_uliko_id_query = 'SELECT id FROM "Συνδετικό υλικό" WHERE Selections = '."'".$sundetiko_uliko_xrwma_keimeno."';";
        $result = pg_query($conn, $Sundetiko_uliko_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            if(pg_num_rows($result) != 1) {
                $sundetiko_uliko_xrwma_keimeno_query = 'INSERT INTO "Συνδετικό υλικό" (Selections) VALUES ('."'".$sundetiko_uliko_xrwma_keimeno."');";
                $result = pg_query($conn, $sundetiko_uliko_xrwma_keimeno_query);
                if(!$result) {
                    echo pg_last_error($conn);
                }

                $sundetiko_uliko_new_id_query = 'SELECT id FROM "Συνδετικό υλικό" WHERE Selections = '."'".$sundetiko_uliko_xrwma_keimeno."';";
                $result = pg_query($conn, $sundetiko_uliko_new_id_query);
                if(!$result) {
                    echo pg_last_error($conn);
                }
                else {
                    while ($row = pg_fetch_row($result) ) {
                        $Sundetiko_uliko_id = $row[0];
                    }
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------





    

    //---------------------------------------Epixrhsma(xrwma)--------------------------------------
    if (!strcmp($Epixrisma_xrwma_id, "-"))
    {
        $Epixrisma_xrwma_id_query = 'SELECT id FROM "Επίχρισμα (χρώμα)" WHERE Selections = '."'".$epixrhsma_xrwma_keimeno."';";
        $result = pg_query($conn, $Epixrisma_xrwma_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            if(pg_num_rows($result) != 1) {
                $epixrhsma_xrwma_keimeno_query = 'INSERT INTO "Επίχρισμα (χρώμα)" (Selections) VALUES ('."'".$epixrhsma_xrwma_keimeno."');";
                $result = pg_query($conn, $epixrhsma_xrwma_keimeno_query);
                if(!$result) {
                    echo pg_last_error($conn);
                }
                
                $Epixrisma_xrwma_new_id_query = 'SELECT id FROM "Επίχρισμα (χρώμα)" WHERE Selections = '."'".$epixrhsma_xrwma_keimeno."';";
                $result = pg_query($conn, $Epixrisma_xrwma_new_id_query);
                if(!$result) {
                    echo pg_last_error($conn);
                }
                else {
                    while ($row = pg_fetch_row($result) ) {
                        $Epixrisma_xrwma_id = $row[0];
                    }
                }
            }
        }
    }
    //-----------------------------------------------------------------------------------------


    

    //---------------------------------------DELETE this ID from "Exei_vasei"--------------------------------------
    $DELETE_ID_Exei_vasei = 'DELETE FROM "Έχει Βάσει" WHERE ΣΜid= '.$SM_id. ';';
    $result = pg_query($conn, $DELETE_ID_Exei_vasei);
    if(!$result) {
        echo pg_last_error($conn);
    }
   
    //---------------------------------------DELETE this ID from "Exei_Yliko"--------------------------------------
    $DELETE_ID_Exei_uliko= 'DELETE FROM "Έχει Υλικό" WHERE ΣΜid= '.$SM_id. ';';
    $result = pg_query($conn, $DELETE_ID_Exei_uliko);
    if(!$result) {
        echo pg_last_error($conn);
    }

    //---------------------------------------DELETE this ID from "Exei_anaskaf_texnikh"--------------------------------------
    $DELETE_ID_Exei_anaskaf= 'DELETE FROM  "Έχει Ανασκαφ. τεχνική" WHERE ΣΜid= '.$SM_id. ';';
    $result = pg_query($conn, $DELETE_ID_Exei_anaskaf);
    if(!$result) {
        echo pg_last_error($conn);
    }

    //---------------------------------------DELETE this ID from "Exei_Toixopoiia"--------------------------------------
    $DELETE_ID_Exei_toixop= 'DELETE FROM  "Έχει Τοιχοποιία" WHERE ΣΜid= '.$SM_id. ';';
    $result = pg_query($conn, $DELETE_ID_Exei_toixop);
    if(!$result) {
        echo pg_last_error($conn);
    }

    //---------------------------------------DELETE this ID from "Exei_Toixopoiia"--------------------------------------
    $DELETE_ID_Exei_prosm= 'DELETE FROM  "Έχει Προσμίξεις" WHERE ΣΜid= '.$SM_id. ';';
    $result = pg_query($conn, $DELETE_ID_Exei_prosm);
    if(!$result) {
        echo pg_last_error($conn);
    }



    //---------------------------------------INSERT Exei_vasei--------------------------------------
    $Vasei_id;
    if(isset($_GET['Vasei_id'])) {
        $Vasei_id = $_GET['Vasei_id'];
    }

    if (strcmp($Vasei_id, "-"))
    {
        $Vasei_ids = preg_split('/\|/', $Vasei_id);

        foreach ($Vasei_ids as $id) {
            $query4 = 'INSERT INTO "Έχει Βάσει" (ΣΜid,Βάσειid) VALUES ('.$SM_id.",".$id.');';
            $result = pg_query($conn, $query4);
            if(!$result)
            {
                echo pg_last_error($conn);
            }
        }
    }

      //--------------------------------------- INSERT Exei_Yliko--------------------------------------
      $Yliko_id;
      if(isset($_GET['Yliko_id'])) {
          $Yliko_id = $_GET['Yliko_id'];
      }
  
      if (strcmp($Yliko_id, "-"))
      {
          $Yliko_ids = preg_split('/\|/', $Yliko_id);
  
          foreach ($Yliko_ids as $id) {
              $query5 = 'INSERT INTO "Έχει Υλικό" (ΣΜid,Υλικόid) VALUES ('.$SM_id.",".$id.');';
              $result = pg_query($conn, $query5);
              if(!$result)
              {
                  echo pg_last_error($conn);
              }
          }
      }

     //------------------------------------ INSERT Exei_anaskaf_texnikh----------------------------------
    $Anaskaf_texnikh_id;
    if(isset($_GET['Anaskaf_texnikh_id'])) {
        $Anaskaf_texnikh_id = $_GET['Anaskaf_texnikh_id'];
    }

    if (strcmp($Anaskaf_texnikh_id, "-"))
    {
        $Anaskaf_texnikh_ids = preg_split('/\|/', $Anaskaf_texnikh_id);

        foreach ($Anaskaf_texnikh_ids as $id) {
            $query6 = 'INSERT INTO "Έχει Ανασκαφ. τεχνική" (ΣΜid,"Ανασκαφ. τεχνικήid") VALUES ('.$SM_id.",".$id.');';
            $result = pg_query($conn, $query6);
            if(!$result)
            {
                echo pg_last_error($conn);
            }
        }
    }
    //------------------------------------ INSERT Exei_Toixopoiia----------------------------------
    $Toixopoiia_id;
    if(isset($_GET['Toixopoiia_id'])) {
        $Toixopoiia_id = $_GET['Toixopoiia_id'];
    }

    if (strcmp($Toixopoiia_id, "-"))
    {
        $Toixopoiia_ids = preg_split('/\|/', $Toixopoiia_id);

        foreach ($Toixopoiia_ids as $id) {
            $query7 = 'INSERT INTO "Έχει Τοιχοποιία" (ΣΜid,Τοιχοποιίαid) VALUES ('.$SM_id.",".$id.');';
            $result = pg_query($conn, $query7);
            if(!$result)
            {
                echo pg_last_error($conn);
            }
        }
    }
    //------------------------------------ INSERT Exei_Prosmikseis----------------------------------
    $Prosmikseis_id;
    if(isset($_GET['Prosmikseis_id'])) {
        $Prosmikseis_id = $_GET['Prosmikseis_id'];
    }

    if (strcmp($Prosmikseis_id, "-"))
    {
        $Prosmikseis_ids = preg_split('/\|/', $Prosmikseis_id);

        foreach ($Prosmikseis_ids as $id) {
            $query9 = 'INSERT INTO "Έχει Προσμίξεις" (ΣΜid,Προσμίξειςid) VALUES ('.$SM_id.",".$id.');';
            $result = pg_query($conn, $query9);
            if(!$result)
            {
                echo pg_last_error($conn);
            }
        }
    }

    //------------------------------------ UPDATE SM----------------------------------
    //----------------------------------------------SM-----------------------------------------
    
    $query1 = 'UPDATE ΣΜ
    SET 
    ΣΜ= '. $SM."
    , Έτος = ". $etos."
    , Ταυτότητα = '".$tautothta."'
    , \"Ανωτ Υ\" = '$anwt_Y'
    , \"Κατωτ Υ\" =' $katwt_Y'
    , Β = $B1
    , Α = $A1
    , Ν = $N1
    , Δ = $D1
    ,\"Αντίστοιχη με\"  = '$antistoixh_me'
    ,\"Σύγχρονη με\"  = '$sugxronh_me'
    , Κάτω  = '$katw'
    , Πάνω = '$panw'
    , Μήκος = $mhkos1
    , Πλάτος = $platos1
    , Διάμετρ =  $diametr
    , Βάθος = $vathos1
    , Ύψος =  $upsos
    , Πάχος =  $paxos
    , \"Λίθος Κείμενο\" = '$lithos_keimeno'
    , \"Πλίνθος Κείμενο\" = '$plinthos_keimeno'
    , \"Κεραμοπλαστικός διάοσμος\" = '$keramoplastikos_diaosmos'
    , Spolia = '$spolia'
    , Ξύλο = '$ksulo'
    , \"Μεγεθος στοιχείων\"  = '$megethos_stoixeiwn'
    ,  \"Αριθμ. σωζ δομών\" =  '$arithm_swz_domwn'
    , \"Πειγραφή/ερμηνεία\" =  '$perigrafh_ermhneia'
    , \"Χαρακτ. σε σχ. με ΣΜ\" = '$xarakt_se_sx_me_SM'
    ,  \"Σχέσεις με ΣΜ\" =  '$sxeseis_me_SM'
    ,  Κόσκινο = $koskino
    , Νεροκόσκινο = $nerokoskino
    , \"Κόσκινο Ποσοστό\" = $koskino_pososto
    , \"Νεροκόσκινο Ποσοστό\" =  $nerokoskino_pososto
    , \"Ποσότητα κεραμικής\" = '$posothta_keramikhs'
    , Ημερολόγιο =  $hmerologio1
    , ΣκαρίφημαPath = '$skarifima_path1'
    , ΦώτοPath = '$fwto_path1'
    , ΚάτοψηPath  = '$katwpsh_path'
    , ΌψηPath =  '$opsh_path'
    , Συντάκτης =  '$suntakths1'
    , Ημερομηνία  = '$hmeromhnia1'
    , Συνθήκεςid = $Sunthhkes_id
    , \"Κατηγορία/τύποςid\"  = $Kathgoria_tupos_id
    , \"Κλίση προςid\"  = $Klish_pros_id
    , Δάπεδοid = $dapedo_id
    , \"Επιλογές Λίθουid\" =  $Epiloges_lithou_id
    , \"Συνδετικό υλικόid\" =  $Sundetiko_uliko_id
    , \"Δομή/Υφήid\" =  $Domh_Yfh_id
    , Χρώμαid =  $Xrwma_id
    , \"Χρονολόγηση μέχριid\" = $Xronologhsh_mexri_id
    , \"Χρονολόγηση αποid\" =  $Xronologhsh_apo_id
    , \"Πιθανότητα επιμίξεωνid\" =  $Pithanothta_epimiksewn_id
    , Θέσηid = $Thesh_id
    , ΤύποςΣΜid =  $TuposSM_id
    , \"Επίχρισμα(είδος)id\" =  $Epixrisma_eidos_id
    , \"Επίχρισμα (χρώμα)id\" =  $Epixrisma_xrwma_id
    WHERE id= $SM_id; ";


    $result = pg_query($conn, $query1);
    if(!$result)
    {
        echo pg_last_error($conn);
    }


    $data = array();
    $data['message'] = 'ok_sm';

    echo json_encode($data);

    pg_close($conn);
?>