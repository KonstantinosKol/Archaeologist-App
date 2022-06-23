<?php

    include "connection.php";


    $query1 = "SELECT * FROM ΣΜ WHERE ";
    $flag = 0;



    //---------------------------------------------SM--------------------------------------------
    $SM;
    if(isset($_GET['SM'])) {
        $SM = $_GET['SM'];
        if (strcmp($SM, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "ΣΜ = $SM ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND ΣΜ = $SM ";
            }
        }
    }
    $etos;
    if(isset($_GET['etos'])) {
        $etos = $_GET['etos'];
        if (strcmp($etos, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Έτος = $etos ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Έτος = $etos ";
            }
        }
    }
    $tautothta;
    if(isset($_GET['tautothta'])) {
        $tautothta = $_GET['tautothta'];
        if (strcmp($tautothta, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ταυτότητα = '$tautothta' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ταυτότητα = '$tautothta' ";
            }
        }
    }
    $anwt_Y;
    if(isset($_GET['anwt_Y'])) {
        $anwt_Y = $_GET['anwt_Y'];
        if (strcmp($anwt_Y, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Ανωτ Υ\" = '$anwt_Y' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Ανωτ Υ\" = '$anwt_Y' ";
            }
        }
    }
    $katwt_Y;
    if(isset($_GET['katwt_Y'])) {
        $katwt_Y = $_GET['katwt_Y'];
        if (strcmp($katwt_Y, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Κατωτ Υ\" = '$anwt_Y' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Κατωτ Υ\" = '$katwt_Y' ";
            }
        }
    }
    $B1;
    if(isset($_GET['B1'])) {
        $B1 = $_GET['B1'];
        if (strcmp($B1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Β = $B1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Β = $B1 ";
            }
        }
    }
    $A1;
    if(isset($_GET['A1'])) {
        $A1 = $_GET['A1'];
        if (strcmp($A1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Α = $A1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Α = $A1 ";
            }
        }
    }
    $N1;
    if(isset($_GET['N1'])) {
        $N1 = $_GET['N1'];
        if (strcmp($N1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ν = $N1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ν = $N1 ";
            }
        }
    }
    $D1;
    if(isset($_GET['D1'])) {
        $D1 = $_GET['D1'];
        if (strcmp($D1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Δ = $D1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Δ = $D1 ";
            }
        }
    }
    $antistoixh_me;
    if(isset($_GET['antistoixh_me'])) {
        $antistoixh_me = $_GET['antistoixh_me'];
        if (strcmp($antistoixh_me, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Αντίστοιχη με\" = '$antistoixh_me' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Αντίστοιχη με\" = '$antistoixh_me' ";
            }
        }
    }
    $sugxronh_me;
    if(isset($_GET['sugxronh_me'])) {
        $sugxronh_me = $_GET['sugxronh_me'];
        if (strcmp($sugxronh_me, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Σύγχρονη με\" = '$sugxronh_me' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Σύγχρονη με\" = '$sugxronh_me' ";
            }
        }
    }
    $katw;
    if(isset($_GET['katw'])) {
        $katw = $_GET['katw'];
        if (strcmp($katw, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Κάτω = '$katw' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Κάτω = '$katw' ";
            }
        }
    }
    $panw;
    if(isset($_GET['panw'])) {
        $panw = $_GET['panw'];
        if (strcmp($panw, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Πάνω = '$panw' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Πάνω = '$panw' ";
            }
        }
    }
    $mhkos1;
    if(isset($_GET['mhkos1'])) {
        $mhkos1 = $_GET['mhkos1'];
        if (strcmp($mhkos1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Μήκος = $mhkos1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Μήκος = $mhkos1 ";
            }
        }
    }
    $platos1;
    if(isset($_GET['platos1'])) {
        $platos1 = $_GET['platos1'];
        if (strcmp($platos1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Πλάτος = $platos1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Πλάτος = $platos1 ";
            }
        }
    }
    $diametr;
    if(isset($_GET['diametr'])) {
        $diametr = $_GET['diametr'];
        if (strcmp($diametr, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Διάμετρ = $diametr ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Διάμετρ = $diametr ";
            }
        }
    }
    $vathos1;
    if(isset($_GET['vathos1'])) {
        $vathos1 = $_GET['vathos1'];
        if (strcmp($vathos1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Βάθος = $vathos1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Βάθος = $vathos1 ";
            }
        }
    }
    $upsos;
    if(isset($_GET['upsos'])) {
        $upsos = $_GET['upsos'];
        if (strcmp($upsos, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ύψος = $upsos ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ύψος = $upsos ";
            }
        }
    }
    $paxos;
    if(isset($_GET['paxos'])) {
        $paxos = $_GET['paxos'];
        if (strcmp($paxos, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Πάχος = $paxos ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Πάχος = $paxos ";
            }
        }
    }
    $lithos_keimeno;
    if(isset($_GET['lithos_keimeno'])) {
        $lithos_keimeno = $_GET['lithos_keimeno'];
        if (strcmp($lithos_keimeno, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Λίθος Κείμενο\" = '$lithos_keimeno' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Λίθος Κείμενο\" = '$lithos_keimeno' ";
            }
        }
    }
    $plinthos_keimeno;
    if(isset($_GET['plinthos_keimeno'])) {
        $plinthos_keimeno = $_GET['plinthos_keimeno'];
        if (strcmp($plinthos_keimeno, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Πλίνθος Κείμενο\" = '$plinthos_keimeno' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Πλίνθος Κείμενο\" = '$plinthos_keimeno' ";
            }
        }
    }
    $keramoplastikos_diaosmos;
    if(isset($_GET['keramoplastikos_diaosmos'])) {
        $keramoplastikos_diaosmos = $_GET['keramoplastikos_diaosmos'];
        if (strcmp($keramoplastikos_diaosmos, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Κεραμοπλαστικός διάοσμος\" = '$keramoplastikos_diaosmos' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Κεραμοπλαστικός διάοσμος\" = '$keramoplastikos_diaosmos' ";
            }
        }
    }
    $spolia;
    if(isset($_GET['spolia'])) {
        $spolia = $_GET['spolia'];
        if (strcmp($spolia, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Spolia = '$spolia' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Spolia = '$spolia' ";
            }
        }
    }
    $ksulo;
    if(isset($_GET['ksulo'])) {
        $ksulo = $_GET['ksulo'];
        if (strcmp($ksulo, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ξύλο = '$ksulo' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ξύλο = '$ksulo' ";
            }
        }
    }
    $megethos_stoixeiwn;
    if(isset($_GET['megethos_stoixeiwn'])) {
        $megethos_stoixeiwn = $_GET['megethos_stoixeiwn'];
        if (strcmp($megethos_stoixeiwn, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Μεγεθος στοιχείων\" = '$megethos_stoixeiwn' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Μεγεθος στοιχείων\" = '$megethos_stoixeiwn' ";
            }
        }
    }
    $arithm_swz_domwn;
    if(isset($_GET['arithm_swz_domwn'])) {
        $arithm_swz_domwn = $_GET['arithm_swz_domwn'];
        if (strcmp($arithm_swz_domwn, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Αριθμ. σωζ δομών\" = '$arithm_swz_domwn' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Αριθμ. σωζ δομών\" = '$arithm_swz_domwn' ";
            }
        }
    }
    $perigrafh_ermhneia;
    if(isset($_GET['perigrafh_ermhneia'])) {
        $perigrafh_ermhneia = $_GET['perigrafh_ermhneia'];
        if (strcmp($perigrafh_ermhneia, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Πειγραφή/ερμηνεία\" = '$perigrafh_ermhneia' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Πειγραφή/ερμηνεία\" = '$perigrafh_ermhneia' ";
            }
        }
    }
    $xarakt_se_sx_me_SM;
    if(isset($_GET['xarakt_se_sx_me_SM'])) {
        $xarakt_se_sx_me_SM = $_GET['xarakt_se_sx_me_SM'];
        if (strcmp($xarakt_se_sx_me_SM, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Χαρακτ. σε σχ. με ΣΜ\" = '$xarakt_se_sx_me_SM' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Χαρακτ. σε σχ. με ΣΜ\" = '$xarakt_se_sx_me_SM' ";
            }
        }
    }
    $sxeseis_me_SM;
    if(isset($_GET['sxeseis_me_SM'])) {
        $sxeseis_me_SM = $_GET['sxeseis_me_SM'];
        if (strcmp($sxeseis_me_SM, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Σχέσεις με ΣΜ\" = '$sxeseis_me_SM' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Σχέσεις με ΣΜ\" = '$sxeseis_me_SM' ";
            }
        }
    }
    $koskino;
    if(isset($_GET['koskino'])) {
        $koskino = $_GET['koskino'];
        //xwris elegxo edw, an den epileksei mpainei false
        if ($flag === 0) {
            $query1 = $query1 . "Κόσκινο = $koskino ";
            $flag = 1;
        }
        else {
            $query1 = $query1 . "AND Κόσκινο = $koskino ";
        }
    }
    $nerokoskino;
    if(isset($_GET['nerokoskino'])) {
        $nerokoskino = $_GET['nerokoskino'];
        //xwris elegxo edw, an den epileksei mpainei false
        if ($flag === 0) {
            $query1 = $query1 . "Νεροκόσκινο = $nerokoskino ";
            $flag = 1;
        }
        else {
            $query1 = $query1 . "AND Νεροκόσκινο = $nerokoskino ";
        }
    }
    $koskino_pososto;
    if(isset($_GET['koskino_pososto'])) {
        $koskino_pososto = $_GET['koskino_pososto'];
        if (strcmp($koskino_pososto, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Κόσκινο Ποσοστό\" = $koskino_pososto ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Κόσκινο Ποσοστό\" = $koskino_pososto ";
            }
        }
    }
    $nerokoskino_pososto;
    if(isset($_GET['nerokoskino_pososto'])) {
        $nerokoskino_pososto = $_GET['nerokoskino_pososto'];
        if (strcmp($nerokoskino_pososto, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Νεροκόσκινο Ποσοστό\" = $nerokoskino_pososto ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Νεροκόσκινο Ποσοστό\" = $nerokoskino_pososto ";
            }
        }
    }
    $posothta_keramikhs;
    if(isset($_GET['posothta_keramikhs'])) {
        $posothta_keramikhs = $_GET['posothta_keramikhs'];
        if (strcmp($posothta_keramikhs, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Ποσότητα κεραμικής\" = '$posothta_keramikhs' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Ποσότητα κεραμικής\" = '$posothta_keramikhs' ";
            }
        }
    }
    $hmerologio1;
    if(isset($_GET['hmerologio1'])) {
        $hmerologio1 = $_GET['hmerologio1'];
        if (strcmp($hmerologio1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ημερολόγιο = $hmerologio1 ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ημερολόγιο = $hmerologio1 ";
            }
        }
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
        if (strcmp($suntakths1, "")) {
            if ($flag === 0) {
                $query1 = $query1 . "Συντάκτης = '$suntakths1' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Συντάκτης = '$suntakths1' ";
            }
        }
    }
    $hmeromhnia1;
    if(isset($_GET['hmeromhnia1'])) {
        $hmeromhnia1 = $_GET['hmeromhnia1'];
        if (strcmp($hmeromhnia1, "null")) {
            if ($flag === 0) {
                $query1 = $query1 . "Ημερομηνία = '$hmeromhnia1' ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Ημερομηνία = '$hmeromhnia1' ";
            }
        }
    }
    //-------------------------------------DropDowns--------------------------------------
    $Sunthhkes_id;
    if(isset($_GET['Sunthhkes_id'])) {
        $Sunthhkes_id = $_GET['Sunthhkes_id'];
        if (strcmp($Sunthhkes_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "Συνθήκεςid = $Sunthhkes_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Συνθήκεςid = $Sunthhkes_id ";
            }
        }
    }
    $Kathgoria_tupos_id;
    if(isset($_GET['Kathgoria_tupos_id'])) {
        $Kathgoria_tupos_id = $_GET['Kathgoria_tupos_id'];
        if (strcmp($Kathgoria_tupos_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Κατηγορία/τύποςid\" = $Kathgoria_tupos_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Κατηγορία/τύποςid\" = $Kathgoria_tupos_id ";
            }
        }
    }
    $Klish_pros_id;
    if(isset($_GET['Klish_pros_id'])) {
        $Klish_pros_id = $_GET['Klish_pros_id'];
        if (strcmp($Klish_pros_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Κλίση προςid\" = $Klish_pros_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Κλίση προςid\" = $Klish_pros_id ";
            }
        }
    }
    $dapedo_id;
    if(isset($_GET['dapedo_id'])) {
        $dapedo_id = $_GET['dapedo_id'];
        if (strcmp($dapedo_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "Δάπεδοid = $dapedo_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Δάπεδοid = $dapedo_id ";
            }
        }
    }
    $Epiloges_lithou_id;
    if(isset($_GET['Epiloges_lithou_id'])) {
        $Epiloges_lithou_id = $_GET['Epiloges_lithou_id'];
        if (strcmp($Epiloges_lithou_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Επιλογές Λίθουid\" = $Epiloges_lithou_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Επιλογές Λίθουid\" = $Epiloges_lithou_id ";
            }
        }
    }
    $Sundetiko_uliko_id;
    if(isset($_GET['Sundetiko_uliko_id'])) {
        $Sundetiko_uliko_id = $_GET['Sundetiko_uliko_id'];
        if (strcmp($Sundetiko_uliko_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Συνδετικό υλικόid\" = $Sundetiko_uliko_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Συνδετικό υλικόid\" = $Sundetiko_uliko_id ";
            }
        }
    }
    $Domh_Yfh_id;
    if(isset($_GET['Domh_Yfh_id'])) {
        $Domh_Yfh_id = $_GET['Domh_Yfh_id'];
        if (strcmp($Domh_Yfh_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Δομή/Υφήid\" = $Domh_Yfh_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Δομή/Υφήid\" = $Domh_Yfh_id ";
            }
        }
    }
    $Xrwma_id;
    if(isset($_GET['Xrwma_id'])) {
        $Xrwma_id = $_GET['Xrwma_id'];
        if (strcmp($Xrwma_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "Χρώμαid = $Xrwma_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Χρώμαid = $Xrwma_id ";
            }
        }
    }
    $Xronologhsh_mexri_id;
    if(isset($_GET['Xronologhsh_mexri_id'])) {
        $Xronologhsh_mexri_id = $_GET['Xronologhsh_mexri_id'];
        if (strcmp($Xronologhsh_mexri_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Χρονολόγηση μέχριid\" = $Xronologhsh_mexri_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Χρονολόγηση μέχριid\" = $Xronologhsh_mexri_id ";
            }
        }
    }
    $Xronologhsh_apo_id;
    if(isset($_GET['Xronologhsh_apo_id'])) {
        $Xronologhsh_apo_id = $_GET['Xronologhsh_apo_id'];
        if (strcmp($Xronologhsh_apo_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Χρονολόγηση αποid\" = $Xronologhsh_apo_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Χρονολόγηση αποid\" = $Xronologhsh_apo_id ";
            }
        }
    }
    $Pithanothta_epimiksewn_id;
    if(isset($_GET['Pithanothta_epimiksewn_id'])) {
        $Pithanothta_epimiksewn_id = $_GET['Pithanothta_epimiksewn_id'];
        if (strcmp($Pithanothta_epimiksewn_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Πιθανότητα επιμίξεωνid\" = $Pithanothta_epimiksewn_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Πιθανότητα επιμίξεωνid\" = $Pithanothta_epimiksewn_id ";
            }
        }
    }
    $Thesh_id;
    if(isset($_GET['Thesh_id'])) {
        $Thesh_id = $_GET['Thesh_id'];
        if (strcmp($Thesh_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "Θέσηid = $Thesh_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND Θέσηid = $Thesh_id ";
            }
        }
    }
    $TuposSM_id;
    if(isset($_GET['TuposSM_id'])) {
        $TuposSM_id = $_GET['TuposSM_id'];
        if (strcmp($TuposSM_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "ΤύποςΣΜid = $TuposSM_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND ΤύποςΣΜid = $TuposSM_id ";
            }
        }
    }
    $Epixrisma_eidos_id;
    if(isset($_GET['Epixrisma_eidos_id'])) {
        $Epixrisma_eidos_id = $_GET['Epixrisma_eidos_id'];
        if (strcmp($Epixrisma_eidos_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Επίχρισμα(είδος)id\" = $Epixrisma_eidos_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Επίχρισμα(είδος)id\" = $Epixrisma_eidos_id ";
            }
        }
    }
    $Epixrisma_xrwma_id;
    if(isset($_GET['Epixrisma_xrwma_id'])) {
        $Epixrisma_xrwma_id = $_GET['Epixrisma_xrwma_id'];
        if (strcmp($Epixrisma_xrwma_id, "1")) {
            if ($flag === 0) {
                $query1 = $query1 . "\"Επίχρισμα (χρώμα)id\" = $Epixrisma_xrwma_id ";
                $flag = 1;
            }
            else {
                $query1 = $query1 . "AND \"Επίχρισμα (χρώμα)id\" = $Epixrisma_xrwma_id ";
            }
        }
    }



    if ($flag === 0) {
        $query1 = "";
    }
    //--------------------------------------------------------------------------------------







    //-----------------------------------------Checkboxes------------------------------------

    //---------------------------------------Exei_vasei--------------------------------------
    $Vasei_id;
    if(isset($_GET['Vasei_id'])) {
        $Vasei_id = $_GET['Vasei_id'];

        if (strcmp($Vasei_id, "-"))
        {
            $Vasei_ids = preg_split('/\|/', $Vasei_id);
            $cntr = 0;
            foreach ($Vasei_ids as $id) {
                $cntr++;
                if ($cntr == 1) {
                    $query2 = 'SELECT ΣΜid FROM "Έχει Βάσει" WHERE Βάσειid = '.$id.'';
                }
                else {
                    $query2 = $query2 . 'SELECT ΣΜid FROM "Έχει Βάσει" WHERE Βάσειid = '.$id.'';
                }

                if ($cntr != sizeof($Vasei_ids)) {
                    $query2 = $query2 . " INTERSECT ";
                }
            }

            $result = pg_query($conn, $query2);

            if(!$result) {
                echo pg_last_error($conn);
            }
            else {
                $cntr1 = 0;
                while ($row = pg_fetch_array($result)) {
                    $cntr1++;
                }

                if ($cntr1 != 0) {

                    $result = pg_query($conn, $query2);

                    $query2 = "";
                    $cntr2 = 0;
                    while ($row = pg_fetch_array($result)) {
                        $cntr2++;
                        $SM_id = $row['ΣΜid'];
                        if ($cntr == 1) {
                            $query2 = 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }
                        else {
                            $query2 = $query2 . 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }

                        if ($cntr2 != $cntr1) {
                            $query2 = $query2 . " UNION ";
                        }
                    }

                    $result = pg_query($conn, $query2);
                    if(!$result) {
                        echo pg_last_error($conn);
                    }
                }
                else {
                    $query2 = "";
                    $query1 = "";
                }
            }

            if (strcmp($Vasei_id, "") && $query2 != "")
            {
                $query1 = "(" . $query1. ") INTERSECT (" . $query2 . ")";
            }
        }
    }
    //-----------------------------------------------------------------------------------------







    //---------------------------------------Exei_Yliko--------------------------------------
    $Yliko_id;
    if(isset($_GET['Yliko_id'])) {
        $Yliko_id = $_GET['Yliko_id'];

        if (strcmp($Yliko_id, "-"))
        {
            $Yliko_ids = preg_split('/\|/', $Yliko_id);
            $cntr = 0;
            foreach ($Yliko_ids as $id) {
                $cntr++;
                if ($cntr == 1) {
                    $query3 = 'SELECT ΣΜid FROM "Έχει Υλικό" WHERE Υλικόid = '.$id.'';
                }
                else {
                    $query3 = $query3 . 'SELECT ΣΜid FROM "Έχει Υλικό" WHERE Υλικόid = '.$id.'';
                }

                if ($cntr != sizeof($Yliko_ids)) {
                    $query3 = $query3 . " INTERSECT ";
                }
            }

            $result = pg_query($conn, $query3);

            if(!$result) {
                echo pg_last_error($conn);
            }
            else {
                $cntr1 = 0;
                while ($row = pg_fetch_array($result)) {
                    $cntr1++;
                }

                if ($cntr1 != 0) {

                    $result = pg_query($conn, $query3);
                    $query3 = "";

                    $cntr2 = 0;
                    while ($row = pg_fetch_array($result)) {
                        $cntr2++;
                        $SM_id = $row['ΣΜid'];
                        if ($cntr == 1) {
                            $query3 = 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }
                        else {
                            $query3 = $query3 . 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }

                        if ($cntr2 != $cntr1) {
                            $query3 = $query3 . " UNION ";
                        }
                    }

                    $result = pg_query($conn, $query3);
                    if(!$result) {
                        echo pg_last_error($conn);
                    }
                }
                else {
                    $query3 = "";
                    $query1 = "";
                }
            }

            if (strcmp($Yliko_id, "") && $query3 != "")
            {
                $query1 = "(" . $query1 . ") INTERSECT (" . $query3 . ")";
            }
        }
    }
    //-----------------------------------------------------------------------------------------






    //---------------------------------------Exei_anaskaf_texnikh--------------------------------------
    $Anaskaf_texnikh_id;
    if(isset($_GET['Anaskaf_texnikh_id'])) {
        $Anaskaf_texnikh_id = $_GET['Anaskaf_texnikh_id'];
        
        if (strcmp($Anaskaf_texnikh_id, "-"))
        {
            $Anaskaf_texnikh_ids = preg_split('/\|/', $Anaskaf_texnikh_id);
            $cntr = 0;
            foreach ($Anaskaf_texnikh_ids as $id) {
                $cntr++;
                if ($cntr == 1) {
                    $query4 = 'SELECT ΣΜid FROM "Έχει Ανασκαφ. τεχνική" WHERE "Ανασκαφ. τεχνικήid" = '.$id.'';
                }
                else {
                    $query4 = $query4 . 'SELECT ΣΜid FROM "Έχει Ανασκαφ. τεχνική" WHERE "Ανασκαφ. τεχνικήid" = '.$id.'';
                }

                if ($cntr != sizeof($Anaskaf_texnikh_ids)) {
                    $query4 = $query4 . " INTERSECT ";
                }
            }

            $result = pg_query($conn, $query4);

            if(!$result) {
                echo pg_last_error($conn);
            }
            else {
                $cntr1 = 0;
                while ($row = pg_fetch_array($result)) {
                    $cntr1++;
                }

                if ($cntr1 != 0) {

                    $result = pg_query($conn, $query4);
                    $query4 = "";

                    $cntr2 = 0;
                    while ($row = pg_fetch_array($result)) {
                        $cntr2++;
                        $SM_id = $row['ΣΜid'];
                        if ($cntr == 1) {
                            $query4 = 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }
                        else {
                            $query4 = $query4 . 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }

                        if ($cntr2 != $cntr1) {
                            $query4 = $query4 . " UNION ";
                        }
                    }

                    $result = pg_query($conn, $query4);
                    if(!$result) {
                        echo pg_last_error($conn);
                    }
                }
                else {
                    $query4 = "";
                    $query1 = "";
                }
            }

            if (strcmp($Anaskaf_texnikh_id, "") && $query4 != "")
            {
                $query1 = "(" . $query1 . ") INTERSECT (" . $query4 . ")";
            }
        }
    }
    //-----------------------------------------------------------------------------------------






    //---------------------------------------Exei_Toixopoiia--------------------------------------
    $Toixopoiia_id;
    if(isset($_GET['Toixopoiia_id'])) {
        $Toixopoiia_id = $_GET['Toixopoiia_id'];

        if (strcmp($Toixopoiia_id, "-"))
        {
            $Toixopoiia_ids = preg_split('/\|/', $Toixopoiia_id);
            $cntr = 0;
            foreach ($Toixopoiia_ids as $id) {
                $cntr++;
                if ($cntr == 1) {
                    $query5 = 'SELECT ΣΜid FROM "Έχει Τοιχοποιία" WHERE "Τοιχοποιίαid" = '.$id.'';
                }
                else {
                    $query5 = $query5 . 'SELECT ΣΜid FROM "Έχει Τοιχοποιία" WHERE "Τοιχοποιίαid" = '.$id.'';
                }

                if ($cntr != sizeof($Toixopoiia_ids)) {
                    $query5 = $query5 . " INTERSECT ";
                }
            }

            $result = pg_query($conn, $query5);

            if(!$result) {
                echo pg_last_error($conn);
            }
            else {
                $cntr1 = 0;
                while ($row = pg_fetch_array($result)) {
                    $cntr1++;
                }

                if ($cntr1 != 0) {

                    $result = pg_query($conn, $query5);
                    $query5 = "";

                    $cntr2 = 0;
                    while ($row = pg_fetch_array($result)) {
                        $cntr2++;
                        $SM_id = $row['ΣΜid'];
                        if ($cntr == 1) {
                            $query5 = 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }
                        else {
                            $query5 = $query5 . 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }

                        if ($cntr2 != $cntr1) {
                            $query5 = $query5 . " UNION ";
                        }
                    }

                    $result = pg_query($conn, $query5);
                    if(!$result) {
                        echo pg_last_error($conn);
                    }
                }
                else {
                    $query5 = "";
                    $query1 = "";
                }
            }

            if (strcmp($Toixopoiia_id, "") && $query5 != "")
            {
                $query1 = "(" . $query1 . ") INTERSECT (" . $query5 . ")";
            }
        }
    }
    //-----------------------------------------------------------------------------------------







    //---------------------------------------Exei_Prosmikseis--------------------------------------
    $Prosmikseis_id;
    if(isset($_GET['Prosmikseis_id'])) {
        $Prosmikseis_id = $_GET['Prosmikseis_id'];

        if (strcmp($Prosmikseis_id, "-"))
        {
            $Prosmikseis_ids = preg_split('/\|/', $Prosmikseis_id);
            $cntr = 0;
            foreach ($Prosmikseis_ids as $id) {
                $cntr++;
                if ($cntr == 1) {
                    $query6 = 'SELECT ΣΜid FROM "Έχει Προσμίξεις" WHERE "Προσμίξειςid" = '.$id.'';
                }
                else {
                    $query6 = $query6 . 'SELECT ΣΜid FROM "Έχει Προσμίξεις" WHERE "Προσμίξειςid" = '.$id.'';
                }

                if ($cntr != sizeof($Prosmikseis_ids)) {
                    $query6 = $query6 . " INTERSECT ";
                }
            }

            $result = pg_query($conn, $query6);

            if(!$result) {
                echo pg_last_error($conn);
            }
            else {
                $cntr1 = 0;
                while ($row = pg_fetch_array($result)) {
                    $cntr1++;
                }

                if ($cntr1 != 0) {

                    $result = pg_query($conn, $query6);
                    $query6 = "";

                    $cntr2 = 0;
                    while ($row = pg_fetch_array($result)) {
                        $cntr2++;
                        $SM_id = $row['ΣΜid'];
                        if ($cntr == 1) {
                            $query6 = 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }
                        else {
                            $query6 = $query6 . 'SELECT * FROM ΣΜ WHERE id = '.$SM_id.'';
                        }

                        if ($cntr2 != $cntr1) {
                            $query6 = $query6 . " UNION ";
                        }
                    }

                    $result = pg_query($conn, $query6);
                    if(!$result) {
                        echo pg_last_error($conn);
                    }
                }
                else {
                    $query6 = "";
                }
            }

            if (strcmp($Prosmikseis_id, "") && $query6 != "")
            {
                $query1 = "(" . $query1 . ") INTERSECT (" . $query6 . ")";
            }
        }
    }
    //-----------------------------------------------------------------------------------------



    $finalJSONarray= array();

    // echo $query1;

    if ($query1 != "") {
        
        $resultSM = pg_query($conn,$query1);
        $return_array_skeletons = array();
        while($rowSM = pg_fetch_array($resultSM)){

            $queryHASskeleton = 'SELECT * FROM "Έχει Σκελετό" where ΣΜid= '.$rowSM['id'].';';
            $resultHASskeleton = pg_query($conn,$queryHASskeleton);
            $SM_SM=$rowSM['ΣΜ'];
            $SM_id=$rowSM['id'];
            $SM_Etos=$rowSM['Έτος'];
            $SM_Hmerominia=$rowSM['Ημερομηνία'];
            
            // --------------------TyposSM---------------------
            $SM_TyposSM="";
            $queryTyposSM = "SELECT * FROM ΤύποςΣΜ where id =".$rowSM['ΤύποςΣΜid'].";";
            $resultTyposSM= pg_query($conn,$queryTyposSM);
            while($rowTyposSM = pg_fetch_array($resultTyposSM)){
                $SM_TyposSM = $rowTyposSM['selections'];
            }
            // -----------------------------------------
         
            $return_array_skeletons = array();
             
            while($rowHASskeleton = pg_fetch_array($resultHASskeleton)){
               
                $querySkeleton = 'SELECT * FROM "Σκελετός" where id='.$rowHASskeleton['Σκελετόςid'].";";
                $resultSkeleton  = pg_query($conn,$querySkeleton );
             
               
                while($rowSkeleton = pg_fetch_array($resultSkeleton)){
    
                    array_push($return_array_skeletons,$rowSkeleton['id']);
                    array_push($return_array_skeletons,$rowSkeleton['Έτος']);
                    array_push($return_array_skeletons,$rowSkeleton['Τομέας']);
                    array_push($return_array_skeletons,$rowSkeleton['Ημερομηνία']);
                    array_push($return_array_skeletons,$rowSkeleton['ΣΜ κοψίματος']);
                }
               
            }
    
            $finalJSONarray[]=array("SM_id" => $SM_id,
                                    "SM_SM" => $SM_SM,
                                    "SM_Etos" => $SM_Etos,
                                    "SM_Hmerominia" => $SM_Hmerominia,
                                    "SM_TyposSM" => $SM_TyposSM,
                                    "Skeletons" => $return_array_skeletons);
    
        }
    }

    echo json_encode($finalJSONarray); 
    
    

?>