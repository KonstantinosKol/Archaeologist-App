<?php
    include_once 'connection.php';

    $Skel_id;
    if(isset($_GET['Skel_id'])) {
        $Skel_id = $_GET['Skel_id'];
    }
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
    $skarifima_path2 = "-";
    // if(isset($_GET['skarifima_path2'])) {
    //     $skarifima_path2 = $_GET['skarifima_path2'];
    // }
    $fwto_path2 = "-";
    // if(isset($_GET['fwto_path2'])) {
    //     $fwto_path2 = $_GET['fwto_path2'];
    // }
    $sxedio_path = "-";
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

    $query2 = "UPDATE Σκελετός SET 
            \"ΣΜ κοψίματος\" = $SM_kopsimatos,
            Έτος = $etos,
            Τομέας = $tomeas,
            Κατασκευή = '$kataskeuh',
            Ενότητα = '$enothta',
            Σύνολο  = '$sunolo',
            Φάση = '$fash',
            Ταυτότητα = '$tautothta',
            \"Κάτω/πριν από\" = '$katw_prin_apo',
            \"Πάνω/μετά από\" = '$panw_meta_apo',
            Β = $B2,
            Ν = $A2,
            Α = $N2,
            Δ = $D2,
            \"Ανωτ. Υ κραν\" = $anwt_Y_kran,
            \"Κατώτ Υ. κραν.\" = $katwt_Y_kran,
            Πλάτος = $platos2 ,
            Βάθος = $vathos2,
            Προσανατολισμός = '$prosanatolismos',
            \"Γενική στάση σώματος\" = '$genikh_stash_swmatos',
            Κεφάλι = '$kefali',
            Μήκος = $mhkos2 ,
            Κορμός = '$kormos',
            \"Δεξί χέρι\" = '$deksi_xeri',
            \"Αριστερό χέρι\" =  '$aristero_xeri',
            \"Δεξί πόδι\" = '$deksi_podi',
            \"Αριστερό πόδι\" = '$aristero_podi',
            \"Περιγραφή/σχόλια\" = '$perigrafh_sxolia',
            \"Υ. σκελετού κατά χώραν\" = '$Y_skeletou_kata_xwran',
            \"Μήκ. μηριαίου οστού\" = $mhk_mhriaiou_ostou,
            Συνευρήματα = '$suneurhmata',
            \"Ανασκ. τεχνική\" = '$anask_texnikh',
            Συνθήκες = '$sunthhkes',
            ΣκαρίφημαPath = '$skarifima_path2',
            ΦώτοPath = '$fwto_path2',
            ΣχέδιοPath = '$sxedio_path',
            Ημερολόγιο = $hmerologio2,
            Συντάκτης = '$suntakths2',
            Ημερομηνία = '$hmeromhnia2' ,
            \"Τύπος Ταφήςid\" = $Tupos_tafhs_id,
            \"Τύπος τάφουid\" = $Tupos_tafou_id,
            Οστάid = $Osta_id,
            Ταφήid = $Tafh_id
        WHERE id = $Skel_id";

    $result = pg_query($conn, $query2);
    if(!$result)
    {
        echo pg_last_error($conn);
    }
    //-----------------------------------------------------------------------------------------



    $data = array();
    $data['message'] = 'ok_skeleton';

    echo json_encode($data);


    pg_close($conn);
?>