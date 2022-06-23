<?php

include "connection.php";

    // $data = array();   142


    $query = 'SELECT * FROM ΣΜ WHERE id = '.$_GET["smID"].';';

    // $query = 'SELECT * FROM ΣΜ WHERE id = 248 ;';

    $resultSM = pg_query($conn,$query);
    $finalJSONarray= array();
    while($rowSM = pg_fetch_array($resultSM)){

        $SM_id=$rowSM['id'];                    //<<<<--------------------SM ID

        //-----------------------------------Exei_vasei----------------------------------------
        $query1 = 'SELECT * FROM "Έχει Βάσει" WHERE ΣΜid = '.$SM_id. ';';
        $resultVasei= pg_query($conn,$query1);
        $Vasei_array = array();
        while($rowVasei = pg_fetch_array($resultVasei)){
            // $Vasei_array[] = array("VaseiID" => $rowVasei['Βάσειid']);
            array_push($Vasei_array,$rowVasei['Βάσειid']);
        }  
        
        //-----------------------------------Exei_Yliko----------------------------------------
        $query2 = 'SELECT * FROM "Έχει Υλικό" WHERE ΣΜid = '.$SM_id. ';';
        $resultYliko= pg_query($conn,$query2);
        $Yliko_array = array();
        while($rowYliko = pg_fetch_array($resultYliko)){
            array_push($Yliko_array,$rowYliko['Υλικόid']);
        }  
        
        //-----------------------------------Exei_anaskaf_texnikh----------------------------------------
        $query3 = 'SELECT * FROM "Έχει Ανασκαφ. τεχνική" WHERE ΣΜid = '.$SM_id. ';';
        $resultAnaskaf_Texn= pg_query($conn,$query3);
        $Anaskaf_texn_array = array();
        while($rowAnaskaf = pg_fetch_array($resultAnaskaf_Texn)){
            array_push($Anaskaf_texn_array,$rowAnaskaf["Ανασκαφ. τεχνικήid"]);
        }  
        
        //-----------------------------------Exei_Toixopoiia----------------------------------------
        $query4 = 'SELECT * FROM "Έχει Τοιχοποιία" WHERE ΣΜid = '.$SM_id. ';';
        $resultToixop= pg_query($conn,$query4);
        $Toixop_array = array();
        while($rowToixop= pg_fetch_array($resultToixop)){
            array_push($Toixop_array,$rowToixop["Τοιχοποιίαid"]);
        }  
        
        //-----------------------------------Exei_Prosmikseis----------------------------------------
        $query6 = 'SELECT * FROM "Έχει Προσμίξεις" WHERE ΣΜid = '.$SM_id. ';';
        $resultProsmixeis= pg_query($conn,$query6);
        $Prosmixeis_array = array();
        while($rowProsm = pg_fetch_array($resultProsmixeis)){
            array_push($Prosmixeis_array,$rowProsm["Προσμίξειςid"]);
        }  
        
        //-------------------------------------------------------------------------------------
         


     
        $finalJSONarray[]=array("SM_id" => $rowSM['id'],
                                "SM_SM" => $rowSM['ΣΜ'],
                                "SM_Etos" => $rowSM['Έτος'],
                                "SM_Tautotita" => $rowSM['Ταυτότητα'],
                                "SM_Anot_Y" => $rowSM["Ανωτ Υ"],
                                "SM_Katot_Y" => $rowSM["Κατωτ Υ"],
                                "SM_B" => $rowSM['Β'],
                                "SM_A" => $rowSM['Α'],
                                "SM_N" => $rowSM['Ν'],
                                "SM_D" => $rowSM['Δ'],
                                "SM_Antistoixi_me" => $rowSM["Αντίστοιχη με"],
                                "SM_Sygxroni_me" => $rowSM["Σύγχρονη με"],
                                "SM_Kato" => $rowSM['Κάτω'],
                                "SM_Pano" => $rowSM['Πάνω'],
                                "SM_Mikos" => $rowSM['Μήκος'],
                                "SM_Platos" => $rowSM['Πλάτος'],
                                "SM_Diametros" => $rowSM['Διάμετρ'],
                                "SM_Vathos" => $rowSM['Βάθος'],
                                "SM_Ypsos" => $rowSM['Ύψος'],
                                "SM_Paxos" => $rowSM['Πάχος'],
                                "SM_Lithos_keimeno" => $rowSM["Λίθος Κείμενο"],
                                "SM_Plinthos_keimeno" => $rowSM["Πλίνθος Κείμενο"],
                                "SM_Keramoplastikos" => $rowSM["Κεραμοπλαστικός διάοσμος"],
                                "SM_Spolia" => $rowSM["spolia"],
                                "SM_ksilo" => $rowSM["Ξύλο"],
                                "SM_Megethos_Stoix" => $rowSM["Μεγεθος στοιχείων"],
                                "SM_Arithmos_soz" => $rowSM["Αριθμ. σωζ δομών"],
                                "SM_Perigrafi" => $rowSM["Πειγραφή/ερμηνεία"],
                                "SM_Xarakt_me_sm" => $rowSM["Χαρακτ. σε σχ. με ΣΜ"],
                                "SM_Sxeseis_me_sm" => $rowSM["Σχέσεις με ΣΜ"],
                                "SM_Koskino" => $rowSM["Κόσκινο"],
                                "SM_Nerokoskino" => $rowSM["Νεροκόσκινο"],
                                "SM_Koskino_pososto" => $rowSM["Κόσκινο Ποσοστό"],
                                "SM_Nerokoskino_pososto" => $rowSM["Νεροκόσκινο Ποσοστό"],
                                "SM_Posostita_keramikis" => $rowSM["Ποσότητα κεραμικής"],
                                "SM_Hmerologio" => $rowSM["Ημερολόγιο"],
                                "SM_Syntaktis" => $rowSM["Συντάκτης"],
                                "SM_Hmerominia" => $rowSM["Ημερομηνία"],
                                "SM_Epixrisma_eidos_id" => $rowSM["Επίχρισμα(είδος)id"],
                                "SM_Xronologisi_mexri_id" => $rowSM["Χρονολόγηση μέχριid"],
                                "SM_Xronologisi_apo_id" => $rowSM["Χρονολόγηση αποid"],
                                "SM_Synthikes_id" => $rowSM["Συνθήκεςid"],
                                "SM_Thesi_id" => $rowSM["Θέσηid"],
                                "SM_Syndetiko_uliko_id" => $rowSM["Συνδετικό υλικόid"],
                                "SM_Xrwma_id" => $rowSM["Χρώμαid"],
                                "SM_Katigoria_id" => $rowSM["Κατηγορία/τύποςid"],
                                "SM_Epiloges_Lithou_id" => $rowSM["Επιλογές Λίθουid"],
                                "SM_Domi_id" => $rowSM["Δομή/Υφήid"],
                                "SM_TyposSM_id" => $rowSM["ΤύποςΣΜid"],
                                "SM_Pithanotita_epimixewn_id" => $rowSM["Πιθανότητα επιμίξεωνid"],
                                "SM_Epixrisma_xroma_id" => $rowSM["Επίχρισμα (χρώμα)id"],
                                "SM_Klisi_pros_id" => $rowSM["Κλίση προςid"],
                                "SM_Dapedo_id" => $rowSM["Δάπεδοid"],

                                "Vasei" =>  $Vasei_array,
                                "Yliko" =>  $Yliko_array,
                                "Anaskaf_texn" =>  $Anaskaf_texn_array,
                                "Toixop" =>  $Toixop_array,
                                "Prosmixeis" =>  $Prosmixeis_array

                                );

    }   
    
    echo json_encode($finalJSONarray); 
    
    

?>