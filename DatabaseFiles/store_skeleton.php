<?php
    include_once 'connection.php';


    //--------------------------------------------Skeletos--------------------------------------
    $SM_kopsimatos;
    if(isset($_GET['SM_kopsimatos'])) {
        $SM_kopsimatos = $_GET['SM_kopsimatos'];
    }
    $etos;
    if(isset($_GET['etos'])) {
        $etos = $_GET['etos'];
    }
    $tomeas;
    if(isset($_GET['tomeas'])) {
        $tomeas = $_GET['tomeas'];
    }
    $kataskeuh;
    if(isset($_GET['kataskeuh'])) {
        $kataskeuh = $_GET['kataskeuh'];
    }
    $enothta;
    if(isset($_GET['enothta'])) {
        $enothta = $_GET['enothta'];
    }
    $sunolo;
    if(isset($_GET['sunolo'])) {
        $sunolo = $_GET['sunolo'];
    }
    $fash;
    if(isset($_GET['fash'])) {
        $fash = $_GET['fash'];
    }
    $tautothta;
    if(isset($_GET['tautothta'])) {
        $tautothta = $_GET['tautothta'];
    }
    $katw_prin_apo;
    if(isset($_GET['katw_prin_apo'])) {
        $katw_prin_apo = $_GET['katw_prin_apo'];
    }
    $panw_meta_apo;
    if(isset($_GET['panw_meta_apo'])) {
        $panw_meta_apo = $_GET['panw_meta_apo'];
    }
    $B2;
    if(isset($_GET['B2'])) {
        $B2 = $_GET['B2'];
    }
    $A2;
    if(isset($_GET['A2'])) {
        $A2 = $_GET['A2'];
    }
    $N2;
    if(isset($_GET['N2'])) {
        $N2 = $_GET['N2'];
    }
    $D2;
    if(isset($_GET['D2'])) {
        $D2 = $_GET['D2'];
    }
    $anwt_Y_kran;
    if(isset($_GET['anwt_Y_kran'])) {
        $anwt_Y_kran = $_GET['anwt_Y_kran'];
    }
    $katwt_Y_kran;
    if(isset($_GET['katwt_Y_kran'])) {
        $katwt_Y_kran = $_GET['katwt_Y_kran'];
    }
    $platos2;
    if(isset($_GET['platos2'])) {
        $platos2 = $_GET['platos2'];
    }
    $vathos2;
    if(isset($_GET['vathos2'])) {
        $vathos2 = $_GET['vathos2'];
    }
    $prosanatolismos;
    if(isset($_GET['prosanatolismos'])) {
        $prosanatolismos = $_GET['prosanatolismos'];
    }
    $genikh_stash_swmatos;
    if(isset($_GET['genikh_stash_swmatos'])) {
        $genikh_stash_swmatos = $_GET['genikh_stash_swmatos'];
    }
    $kefali;
    if(isset($_GET['kefali'])) {
        $kefali = $_GET['kefali'];
    }
    $mhkos2;
    if(isset($_GET['mhkos2'])) {
        $mhkos2 = $_GET['mhkos2'];
    }
    $kormos;
    if(isset($_GET['kormos'])) {
        $kormos = $_GET['kormos'];
    }
    $deksi_xeri;
    if(isset($_GET['deksi_xeri'])) {
        $deksi_xeri = $_GET['deksi_xeri'];
    }
    $aristero_xeri;
    if(isset($_GET['aristero_xeri'])) {
        $aristero_xeri = $_GET['aristero_xeri'];
    }
    $deksi_podi;
    if(isset($_GET['deksi_podi'])) {
        $deksi_podi = $_GET['deksi_podi'];
    }
    $aristero_podi;
    if(isset($_GET['aristero_podi'])) {
        $aristero_podi = $_GET['aristero_podi'];
    }
    $perigrafh_sxolia;
    if(isset($_GET['perigrafh_sxolia'])) {
        $perigrafh_sxolia = $_GET['perigrafh_sxolia'];
    }
    $Y_skeletou_kata_xwran;
    if(isset($_GET['Y_skeletou_kata_xwran'])) {
        $Y_skeletou_kata_xwran = $_GET['Y_skeletou_kata_xwran'];
    }
    $mhk_mhriaiou_ostou;
    if(isset($_GET['mhk_mhriaiou_ostou'])) {
        $mhk_mhriaiou_ostou = $_GET['mhk_mhriaiou_ostou'];
    }
    $suneurhmata;
    if(isset($_GET['suneurhmata'])) {
        $suneurhmata = $_GET['suneurhmata'];
    }
    $anask_texnikh;
    if(isset($_GET['anask_texnikh'])) {
        $anask_texnikh = $_GET['anask_texnikh'];
    }
    $sunthhkes;
    if(isset($_GET['sunthhkes'])) {
        $sunthhkes = $_GET['sunthhkes'];
    }
    $skarifima_path2 = "";
    // if(isset($_GET['skarifima_path2'])) {
    //     $skarifima_path2 = $_GET['skarifima_path2'];
    // }
    $fwto_path2 = "";
    // if(isset($_GET['fwto_path2'])) {
    //     $fwto_path2 = $_GET['fwto_path2'];
    // }
    $sxedio_path = "";
    // if(isset($_GET['sxedio_path'])) {
    //     $sxedio_path = $_GET['sxedio_path'];
    // }
    $hmerologio2 = $_GET['hmerologio2'];
    if(isset($_GET['hmerologio2'])) {
        $hmerologio2 = $_GET['hmerologio2'];
    }
    $suntakths2;
    if(isset($_GET['suntakths2'])) {
        $suntakths2 = $_GET['suntakths2'];
    }
    $hmeromhnia2;
    if(isset($_GET['hmeromhnia2'])) {
        $hmeromhnia2 = $_GET['hmeromhnia2'];
    }
    //---------------------------------DropDowns------------------------------------
    $Tupos_tafhs_id;
    if(isset($_GET['Tupos_tafhs_id'])) {
        $Tupos_tafhs_id = $_GET['Tupos_tafhs_id'];
    }
    $Tupos_tafou_id;
    if(isset($_GET['Tupos_tafou_id'])) {
        $Tupos_tafou_id = $_GET['Tupos_tafou_id'];
    }
    $Osta_id;
    if(isset($_GET['Osta_id'])) {
        $Osta_id = $_GET['Osta_id'];
    }
    $Tafh_id;
    if(isset($_GET['Tafh_id'])) {
        $Tafh_id = $_GET['Tafh_id'];
    }





    //-----------------------------------------------------------------------------------------
    //Get key for SM
    $SM_id = 0;
    if(isset($_GET['SM_id'])) {
        $SM_id = $_GET['SM_id'];
    }

    //Find key for Skeletos
    $query_for_id = "SELECT setval('Σκελετός_id_seq', (SELECT MAX(id) FROM Σκελετός)+1);";
    $result = pg_query($conn, $query_for_id);
    if(!$result) {
        echo pg_last_error($conn);
    }
    $Skeletos_id = 0;
    $row = pg_fetch_array($result);
    $Skeletos_id = $row[0];


    //Lock key for SM
    $query_to_lock_id = "SELECT pg_try_advisory_xact_lock('$SM_id');";

    //Lock key for Skeletos
    $query_to_lock_id = "SELECT pg_try_advisory_xact_lock('$Skeletos_id');";
    //-----------------------------------------------------------------------------------------






    $query2 = 'INSERT INTO Σκελετός (
            id,
            "ΣΜ κοψίματος",
            Έτος,
            Τομέας,
            Κατασκευή,
            Ενότητα,
            Σύνολο,
            Φάση,
            Ταυτότητα,
            "Κάτω/πριν από",
            "Πάνω/μετά από",
            Β,
            Ν,
            Α,
            Δ,
            "Ανωτ. Υ κραν",
            "Κατώτ Υ. κραν.",
            Πλάτος,
            Βάθος,
            Προσανατολισμός,
            "Γενική στάση σώματος",
            Κεφάλι,
            Μήκος,
            Κορμός,
            "Δεξί χέρι",
            "Αριστερό χέρι",
            "Δεξί πόδι",
            "Αριστερό πόδι",
            "Περιγραφή/σχόλια",
            "Υ. σκελετού κατά χώραν",
            "Μήκ. μηριαίου οστού",
            Συνευρήματα,
            "Ανασκ. τεχνική",
            Συνθήκες,
            ΣκαρίφημαPath,
            ΦώτοPath,
            ΣχέδιοPath,
            Ημερολόγιο,
            Συντάκτης,
            Ημερομηνία,
            "Τύπος Ταφήςid",
            "Τύπος τάφουid",
            Οστάid,
            Ταφήid
        ) 
    VALUES ('.
            $Skeletos_id.",".
            $SM_kopsimatos.",".
            $etos.",".
            $tomeas.",'".
            $kataskeuh."','".
            $enothta."','".
            $sunolo."','".
            $fash."','".
            $tautothta."','".
            $katw_prin_apo."','".
            $panw_meta_apo."',".
            $B2.",".
            $A2.",".
            $N2.",".
            $D2.",".
            $anwt_Y_kran.",".
            $katwt_Y_kran.",".
            $platos2.",".
            $vathos2.",'".
            $prosanatolismos."','".
            $genikh_stash_swmatos."','".
            $kefali."',".
            $mhkos2.",'".
            $kormos."','".
            $deksi_xeri."','".
            $aristero_xeri."','".
            $deksi_podi."','".
            $aristero_podi."','".
            $perigrafh_sxolia."',".
            $Y_skeletou_kata_xwran.",".
            $mhk_mhriaiou_ostou.",'".
            $suneurhmata."','".
            $anask_texnikh."','".
            $sunthhkes."','".
            $skarifima_path2."','".
            $fwto_path2."','".
            $sxedio_path."',".
            $hmerologio2.",'".
            $suntakths2."','".
            $hmeromhnia2."',".
            $Tupos_tafhs_id.",".
            $Tupos_tafou_id.",".
            $Osta_id.",".
            $Tafh_id
        .');
    ';

    $result = pg_query($conn, $query2);
    if(!$result)
    {
        echo pg_last_error($conn);
    }
    //-----------------------------------------------------------------------------------------






    //---------------------------------------Exei_skeleto--------------------------------------
    $query3 = 'INSERT INTO "Έχει Σκελετό" (ΣΜid,ΣκελετόςId) VALUES ('.$SM_id.",".$Skeletos_id.');';
    $result = pg_query($conn, $query3);
    if(!$result)
    {
        echo pg_last_error($conn);
    }


    //Unlock key for SM
    $query_to_unlock_id = "SELECT pg_advisory_unlock('$SM_id');";
    $result = pg_query($conn, $query_to_unlock_id);
    if(!$result) {
        echo pg_last_error($conn);
    }
    //Unlock key for Skeletos
    $query_to_unlock_id = "SELECT pg_advisory_unlock('$Skeletos_id');";
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
    $data['message'] = 'ok_skeleton';

    echo json_encode($data);


    pg_close($conn);

?>