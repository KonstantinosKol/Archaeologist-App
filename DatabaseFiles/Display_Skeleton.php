<?php

    include "connection.php";


    $query = 'SELECT * FROM Σκελετός WHERE id = '.$_GET["skeletonID"].';';

    $resultSkeleton = pg_query($conn,$query);
    $finalJSONarray= array();
    while($rowSkeleton = pg_fetch_array($resultSkeleton)){

        $Skeleton_id=$rowSkeleton['id'];                    //<<<<--------------------Skeleton ID
     
        $finalJSONarray[]=array("Skeleton_id" => $rowSkeleton['id'],
                                "Skeleton_SM_kopsimatos" => $rowSkeleton["ΣΜ κοψίματος"],
                                "Skeleton_Etos" => $rowSkeleton['Έτος'],
                                "Skeleton_Tomeas" => $rowSkeleton['Τομέας'],
                                "Skeleton_Kataskeui" => $rowSkeleton["Κατασκευή"],
                                "Skeleton_Enotita" => $rowSkeleton["Ενότητα"],
                                "Skeleton_Synolo" => $rowSkeleton['Σύνολο'],
                                "Skeleton_Fasi" => $rowSkeleton['Φάση'],
                                "Skeleton_Tautotita" => $rowSkeleton['Ταυτότητα'],
                                "Skeleton_Kato_prin" => $rowSkeleton["Κάτω/πριν από"],
                                "Skeleton_Pano_meta" => $rowSkeleton["Πάνω/μετά από"],
                                "Skeleton_B" => $rowSkeleton['Β'],
                                "Skeleton_N" => $rowSkeleton['Ν'],
                                "Skeleton_A" => $rowSkeleton['Α'],
                                "Skeleton_D" => $rowSkeleton['Δ'],
                                "Skeleton_Anot_Y" => $rowSkeleton["Ανωτ. Υ κραν"],
                                "Skeleton_Katot_Y" => $rowSkeleton["Κατώτ Υ. κραν."],
                                "Skeleton_Platos" => $rowSkeleton['Πλάτος'],
                                "Skeleton_Vathos" => $rowSkeleton['Βάθος'],
                                "Skeleton_Prosanatolismos" => $rowSkeleton["Προσανατολισμός"],
                                "Skeleton_Geniki_stasi" => $rowSkeleton["Γενική στάση σώματος"],
                                "Skeleton_Kefali" => $rowSkeleton["Κεφάλι"],
                                "Skeleton_Mikos" => $rowSkeleton["Μήκος"],
                                "Skeleton_Kormos" => $rowSkeleton["Κορμός"],
                                "Skeleton_Dexi_xeri" => $rowSkeleton["Δεξί χέρι"],
                                "Skeleton_Aristero_xeri" => $rowSkeleton["Αριστερό χέρι"],
                                "Skeleton_Dexi_podi" => $rowSkeleton["Δεξί πόδι"],
                                "Skeleton_Aristero_podi" => $rowSkeleton["Αριστερό πόδι"],
                                "Skeleton_Perigrafi" => $rowSkeleton["Περιγραφή/σχόλια"],
                                "Skeleton_Y_skel" => $rowSkeleton["Υ. σκελετού κατά χώραν"],
                                "Skeleton_Mikos_mir" => $rowSkeleton["Μήκ. μηριαίου οστού"],
                                "Skeleton_Sineurimata" => $rowSkeleton["Συνευρήματα"],
                                "Skeleton_Anaskaf_texn" => $rowSkeleton["Ανασκ. τεχνική"],
                                "Skeleton_Synthikes" => $rowSkeleton["Συνθήκες"],
                                "Skeleton_Hmerologio" => $rowSkeleton["Ημερολόγιο"],
                                "Skeleton_Syntaktis" => $rowSkeleton["Συντάκτης"],
                                "Skeleton_Hmerominia" => $rowSkeleton["Ημερομηνία"],
                                "Skeleton_TyposTafisID" => $rowSkeleton["Τύπος Ταφήςid"],
                                "Skeleton_TyposTafouID" => $rowSkeleton["Τύπος τάφουid"],
                                "Skeleton_OstaID" => $rowSkeleton["Οστάid"],
                                "Skeleton_TafiID" => $rowSkeleton["Ταφήid"],

                                );

    }   
    
    echo json_encode($finalJSONarray); 
    
    

?>