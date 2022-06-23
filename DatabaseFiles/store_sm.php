<?php
    include_once 'connection.php';

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
    $skarifima_path1 = "";
    // if(isset($_GET['skarifima_path1'])) {
    //     $skarifima_path1 = $_GET['skarifima_path1'];
    // }
    $fwto_path1 = "";
    // if(isset($_GET['fwto_path1'])) {
    //     $fwto_path1 = $_GET['fwto_path1'];
    // }
    $katwpsh_path = "";
    // if(isset($_GET['katwpsh_path'])) {
    //     $katwpsh_path = $_GET['katwpsh_path'];
    // }
    $opsh_path = "";
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





    //-----------------------------------------------------------------------------------------
    //Find key
    $query_for_id = "SELECT setval('ΣΜ_id_seq', (SELECT MAX(id) FROM ΣΜ)+1);";
    $result = pg_query($conn, $query_for_id);
    if(!$result) {
        echo pg_last_error($conn);
    }
    $SM_id = 0;
    $row = pg_fetch_array($result);
    $SM_id = $row[0];

    //Lock key
    $query_to_lock_id = "SELECT pg_try_advisory_xact_lock('$SM_id');";
    //-----------------------------------------------------------------------------------------




    //----------------------------------------------SM-----------------------------------------
    $query1 = 'INSERT INTO ΣΜ (
            id,
            ΣΜ,
            Έτος,
            Ταυτότητα,
            "Ανωτ Υ",
            "Κατωτ Υ",
            Β,
            Α,
            Ν,
            Δ,
            "Αντίστοιχη με",
            "Σύγχρονη με",
            Κάτω,
            Πάνω,
            Μήκος,
            Πλάτος,
            Διάμετρ,
            Βάθος,
            Ύψος,
            Πάχος,
            "Λίθος Κείμενο",
            "Πλίνθος Κείμενο",
            "Κεραμοπλαστικός διάοσμος",
            Spolia,
            Ξύλο,
            "Μεγεθος στοιχείων",
            "Αριθμ. σωζ δομών",
            "Πειγραφή/ερμηνεία",
            "Χαρακτ. σε σχ. με ΣΜ",
            "Σχέσεις με ΣΜ",
            Κόσκινο,
            Νεροκόσκινο,
            "Κόσκινο Ποσοστό",
            "Νεροκόσκινο Ποσοστό",
            "Ποσότητα κεραμικής",
            Ημερολόγιο,
            ΣκαρίφημαPath,
            ΦώτοPath,
            ΚάτοψηPath,
            ΌψηPath,
            Συντάκτης,
            Ημερομηνία,
            Συνθήκεςid,
            "Κατηγορία/τύποςid",
            "Κλίση προςid",
            Δάπεδοid,
            "Επιλογές Λίθουid",
            "Συνδετικό υλικόid",
            "Δομή/Υφήid",
            Χρώμαid,
            "Χρονολόγηση μέχριid",
            "Χρονολόγηση αποid",
            "Πιθανότητα επιμίξεωνid",
            Θέσηid,
            ΤύποςΣΜid,
            "Επίχρισμα(είδος)id",
            "Επίχρισμα (χρώμα)id"
        ) 
    VALUES ('.
            $SM_id.",".
            $SM.",".
            $etos.",'".
            $tautothta."','".
            $anwt_Y."','".
            $katwt_Y."',".
            $B1.",".
            $A1.",".
            $N1.",".
            $D1.",'".
            $antistoixh_me."','".
            $sugxronh_me."','".
            $katw."','".
            $panw."',".
            $mhkos1.",".
            $platos1.",".
            $diametr.",".
            $vathos1.",".
            $upsos.",".
            $paxos.",'".
            $lithos_keimeno."','".
            $plinthos_keimeno."','".
            $keramoplastikos_diaosmos."','".
            $spolia."','".
            $ksulo."','".
            $megethos_stoixeiwn."','".
            $arithm_swz_domwn."','".
            $perigrafh_ermhneia."','".
            $xarakt_se_sx_me_SM."','".
            $sxeseis_me_SM."',".
            $koskino.",".
            $nerokoskino.",".
            $koskino_pososto.",".
            $nerokoskino_pososto.",'".
            $posothta_keramikhs."',".
            $hmerologio1.",'".
            $skarifima_path1."','".
            $fwto_path1."','".
            $katwpsh_path."','".
            $opsh_path."','".
            $suntakths1."','".
            $hmeromhnia1."',".
            $Sunthhkes_id.",".
            $Kathgoria_tupos_id.",".
            $Klish_pros_id.",".
            $dapedo_id.",".
            $Epiloges_lithou_id.",".
            $Sundetiko_uliko_id.",".
            $Domh_Yfh_id.",".
            $Xrwma_id.",".
            $Xronologhsh_mexri_id.",".
            $Xronologhsh_apo_id.",".
            $Pithanothta_epimiksewn_id.",".
            $Thesh_id.",".
            $TuposSM_id.",".
            $Epixrisma_eidos_id.",".
            $Epixrisma_xrwma_id
        .');
    ';

    $result = pg_query($conn, $query1);
    if(!$result)
    {
        echo pg_last_error($conn);
    }
    //-----------------------------------------------------------------------------------------







    //---------------------------------------Exei_vasei--------------------------------------
    $Vasei_id;
    if(isset($_GET['Vasei_id'])) {
        $Vasei_id = $_GET['Vasei_id'];
    }

    if (strcmp($Vasei_id, "-"))
    {
        $SM_id = 0;
        $SM_id_query = "SELECT id FROM ΣΜ ORDER BY id DESC LIMIT 1;";
        $result = pg_query($conn, $SM_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            while ($row = pg_fetch_row($result) ) {
                $SM_id = $row[0];
            }
        }
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
    //-----------------------------------------------------------------------------------------


    

    


    //---------------------------------------Exei_Yliko--------------------------------------
    $Yliko_id;
    if(isset($_GET['Yliko_id'])) {
        $Yliko_id = $_GET['Yliko_id'];
    }

    if (strcmp($Yliko_id, "-"))
    {
        $SM_id = 0;
        $SM_id_query = "SELECT id FROM ΣΜ ORDER BY id DESC LIMIT 1;";
        $result = pg_query($conn, $SM_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            while ($row = pg_fetch_row($result) ) {
                $SM_id = $row[0];
            }
        }
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
    //-----------------------------------------------------------------------------------------





    //------------------------------------Exei_anaskaf_texnikh----------------------------------
    $Anaskaf_texnikh_id;
    if(isset($_GET['Anaskaf_texnikh_id'])) {
        $Anaskaf_texnikh_id = $_GET['Anaskaf_texnikh_id'];
    }

    if (strcmp($Anaskaf_texnikh_id, "-"))
    {
        $SM_id = 0;
        $SM_id_query = "SELECT id FROM ΣΜ ORDER BY id DESC LIMIT 1;";
        $result = pg_query($conn, $SM_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            while ($row = pg_fetch_row($result) ) {
                $SM_id = $row[0];
            }
        }
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
    //-----------------------------------------------------------------------------------------




    //------------------------------------Exei_Toixopoiia----------------------------------
    $Toixopoiia_id;
    if(isset($_GET['Toixopoiia_id'])) {
        $Toixopoiia_id = $_GET['Toixopoiia_id'];
    }

    if (strcmp($Toixopoiia_id, "-"))
    {
        $SM_id = 0;
        $SM_id_query = "SELECT id FROM ΣΜ ORDER BY id DESC LIMIT 1;";
        $result = pg_query($conn, $SM_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            while ($row = pg_fetch_row($result) ) {
                $SM_id = $row[0];
            }
        }
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
    //-----------------------------------------------------------------------------------------






    //------------------------------------Exei_Prosmikseis----------------------------------
    $Prosmikseis_id;
    if(isset($_GET['Prosmikseis_id'])) {
        $Prosmikseis_id = $_GET['Prosmikseis_id'];
    }

    if (strcmp($Prosmikseis_id, "-"))
    {
        $SM_id = 0;
        $SM_id_query = "SELECT id FROM ΣΜ ORDER BY id DESC LIMIT 1;";
        $result = pg_query($conn, $SM_id_query);
        if(!$result) {
            echo pg_last_error($conn);
        }
        else {
            while ($row = pg_fetch_row($result) ) {
                $SM_id = $row[0];
            }
        }
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
    //-----------------------------------------------------------------------------------------





    //-----------------------------------------------------------------------------------------
    //Unlock key
    $query_to_unlock_id = "SELECT pg_advisory_unlock('$SM_id');";
    $result = pg_query($conn, $query_to_unlock_id);
    if(!$result) {
        echo pg_last_error($conn);
    }
    //Unlock all keys in session
    $query_to_unlock_all = "SELECT pg_advisory_unlock_all();";
    $result = pg_query($conn, $query_to_unlock_all);
    if(!$result) {
        echo pg_last_error($conn);
    }
    //-----------------------------------------------------------------------------------------



    $data = array();
    $data['message'] = 'ok_sm';
    $data['SM_id'] = $SM_id;

    echo json_encode($data);


    pg_close($conn);
?>