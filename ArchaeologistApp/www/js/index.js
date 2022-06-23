/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

// Wait for the deviceready event before using any of Cordova's device APIs.
// See https://cordova.apache.org/docs/en/latest/cordova/events/events.html#deviceready
//$( document ).ready(function() {


const myURL="";


//Fill checkbox and dropdowns when app is starting
 document.addEventListener("deviceready", function() {
        
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/ReadSM.php", (response) => {
        
        var data = response["Typos_SM"];
        // ---------------Typos SM---------
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SMtypos_Sm").append(tr_str);
        });

         // ---------------Klisi pros---------
         data = response["Klisi_pros"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SMklisi_Pros").append(tr_str);
        });

          // ---------------Κατηγορία/Τύπος---------
          data = response["Katigoria_typos"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SMkatigoria_typos").append(tr_str);
        });

        // ---------------Υλικό---------
        data = response["Yliko"];
           $.each(data, function() {
            var tr_str = ` <label for="SM_uliko_${this.id}"><b>${this.Selections}</b></label>
            <input type="checkbox" name="SM_uliko_${this.id}" id="SM_uliko_${this.id}"/>`;
            $("#SM_uliko").append(tr_str);
        });

          // ---------------Δομή/Υφή---------
          data = response["Domi_Yfi"];
          $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SMdomi_yfi").append(tr_str);
        });

         // ---------------Χρώμα---------
         data = response["Xroma"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SMxroma").append(tr_str);
        });

         // ---------------Προσμίξεις---------
         data = response["Prosmixeis"];
         $.each(data, function() {
            var tr_str = `<label for="SM_prosmixeis_${this.id}"><b>${this.Selections}</b></label>
            <input type="checkbox" name="SM_prosmixeis_${this.id}" id="SM_prosmixeis_${this.id}" >`;
            $("#SM_prosmixeis").append(tr_str);
        });

         // ---------------Λίθος---------
         data = response["Lithos"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_lithos_NAI_uliko").append(tr_str);
        });

         // ---------------Συνδετικό υλικό (χρώμα)---------
         data = response["Syndetiko_Ylko"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_syndetiko_uliko").append(tr_str);
           
        });
        var tr_str = `<option value="other">Άλλο</option>`;
        $("#SM_syndetiko_uliko").append(tr_str);

         // ---------------Επίχρισμα (είδος)---------
         data = response["Epixrisma_eidos"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_epixrisma_eidos").append(tr_str);
        });

         // ---------------Επίχρισμα (χρώμα)---------
         data = response["Epixrisma_xroma"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_epixrisma_xroma").append(tr_str);
        });
        var tr_str = `<option value="other">Άλλο</option>`;
        $("#SM_epixrisma_xroma").append(tr_str);

          // ---------------Τοιχοποιία---------
          data = response["Toixopoiia"];
          $.each(data, function() {
            var tr_str = `<label for="SM_toixopoiia_${this.id}"><b>${this.Selections}</b></label>
            <input type="checkbox" name="SM_toixopoiia_${this.id}" id="SM_toixopoiia_${this.id}" >`;
            $("#SM_toixopoiia").append(tr_str);
        });

         // ---------------Δάπεδο---------
         data = response["Dapedo"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_dapedo").append(tr_str);
        });

          // ------------Θέση------------
          data = response["Thesi"];
          $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_thesi").append(tr_str);
        });

         // ------------Χρονολόγιση από------------
         data = response["Xronologisi_apo"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_xronologisi_apo").append(tr_str);
        });

         // ------------Χρονολόγιση μέχρι------------
         data = response["Xronologisi_mexri"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_xronologisi_mexri").append(tr_str);
        });

         // ---------------Βάσει---------
         data = response["Vasei"];
         $.each(data, function() {
            var tr_str = `<label for="SM_Vasei_${this.id}"><b>${this.Selections}</b></label>
            <input type="checkbox" name="SM_Vasei_${this.id}" id="SM_Vasei_${this.id}" >`;
            $("#SM_Vasei").append(tr_str);
        });

          // ---------------Ανασκαφ. τεχνική---------
          data = response["Anaskaf_texn"];
          $.each(data, function() {
            var tr_str = `<label for="SM_anaskaf_texn_${this.id}"><b>${this.Selections}</b></label>
            <input type="checkbox" name="SM_anaskaf_texn_${this.id}" id="SM_anaskaf_texn_${this.id}" >`;
            $("#SM_anaskaf_texn").append(tr_str);
        });

         // ---------------Συνθήκες---------
         data = response["Sinthikes"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_sinthikes").append(tr_str);
        });

         // ---------------Πιθανότητα επιμίξεων---------
         data = response["Pithanotita_epim"];
         $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SM_pithanotita").append(tr_str);
        });


    }, (err) => {
        // Handle error
        alert("-Alert on fill SM form-"+err)
    });

    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/ReadSkel.php", (response) => {
        // console.log(response)
        
        var data = response["Typos_tafis"];
        // ---------------Typos SM---------
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SKEL_typos_tafis").append(tr_str);
        });

         // ---------------Klisi pros---------
         data = response["Typos_tafou"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SKEL_typos_tafou").append(tr_str);
        });

          // ---------------Κατηγορία/Τύπος---------
          data = response["Osta"];
        $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SKEL_osta").append(tr_str);
        });

        // ---------------Υλικό---------
        data = response["Tafi"];
           $.each(data, function() {
            var tr_str = `<option value="${this.id}">${this.Selections}</option>`;
            $("#SKEL_tafi").append(tr_str);
        }); 


      }, (err) => {
            // Handle error
            alert("-Alert on fill Skeleton form-"+err)
        });




  })



/* ========================== Slide drop in Table-List =============*/
$('#SMtable tbody').on('click', 'td', function (event) {
            
    event.stopPropagation();
    if($(this).index()==0 ){
        if($(this).attr("data-id") == "TdWithSM"){
            
        //    td      tr    next tr     td         div
            $(this).parent().next().children().children().slideToggle();
        }else{
            //  td         div
            $(this).children().slideUp();
        }
    }
      
});

//make URL from inputs in SM form
function returnSM_URL(condition){

    // <!-- -------------- ΣΜ -------------------->
    var  SMsm = $('#SMsm').val();
    if(condition == "search"){
        if(SMsm == "")
            SMsm ="";
    }else{
        if(SMsm == "")
        SMsm =0;
    }
   

    //<!-- -------------- Τύπος ΣΜ -------------------->
    var  SMtypos_Sm = $("#SMtypos_Sm option:selected").val();  //id
    // <!-- -------------- Έτος -------------------->
    var  SMetos = $('#SMetos').val();
    if(condition == "search"){
        if(SMetos == "")
        SMetos = "";
    }else{
        if(SMetos == "")
        SMetos = 0;
    }
   

    // <!-- -------------- Ταυτότητα -------------------->
    var  SMtautotita = $('#SMtautotita').val();
    // if(SMtautotita == "")
    //     SMtautotita ="-";

    // <!-- -------------- Κλίση προς -------------------->
    var  SMklisi_Pros = $("#SMklisi_Pros option:selected").val();  //id
    // <!-- -------------- Ανώτ. Υ -------------------->
    var  SManot_Y = $('#SManot_Y').val();
    // if(SManot_Y == "")
    //     SManot_Y ="-";

    // <!-- -------------- Κάτωτ. Υ -------------------->
    var  SMkatatot_Y = $('#SMkatatot_Y').val();
    // if(SMkatatot_Y == "")
    //     SMkatatot_Y ="-";

    // <!-- -------------- B -------------------->
    var  SMborras = $('#SMborras').val();
    if(condition == "search"){
        if(SMborras == "")
        SMborras = "";
    }else{
        if(SMborras == "")
        SMborras = 0;
    }
   

    // <!-- -------------- N -------------------->
    var  SMnotos = $('#SMnotos').val();
    if(condition == "search"){
        if(SMnotos == "")
        SMnotos = "";
    }else{
        if(SMnotos == "")
        SMnotos = 0;
    }


    // <!-- -------------- Δ -------------------->
    var  SMdysi = $('#SMdysi').val();
    if(condition == "search"){
        if(SMdysi == "")
        SMdysi = "";
    }else{
        if(SMdysi == "")
        SMdysi = 0;
    }
 

    // <!-- -------------- A -------------------->
    var  SManatoli = $('#SManatoli').val();
    if(condition == "search"){
        if(SManatoli == "")
        SManatoli = "";
    }else{
        if(SManatoli == "")
        SManatoli = 0;
    }

    // <!-- -------------- Αντίστοιχη με -------------------->
    var  SMantoistixi_Me = $('#SMantoistixi_Me').val();
    // if(SMantoistixi_Me == "")
    //     SMantoistixi_Me = "-";

    // <!-- -------------- Σύγχρονη με -------------------->
    var  SMsyxroni_Me = $('#SMsyxroni_Me').val();
    // if(SMsyxroni_Me == "")
    //     SMsyxroni_Me = "-";

    // <!-- -------------- Κάτω/πριν από -------------------->
    var  SMkato_prin_apo = $('#SMkato_prin_apo').val();
    // if(SMkato_prin_apo == "")
    //     SMkato_prin_apo = "-";

    // <!-- -------------- Πάνω/μετά από -------------------->
    var  SMpano_meta_apo = $('#SMpano_meta_apo').val();
    // if(SMpano_meta_apo == "")
    //     SMpano_meta_apo ="-";

    // <!-- -------------- Μήκος -------------------->
    var  SMmikos = $('#SMmikos').val();
    if(condition == "search"){
        if(SMmikos == "")
        SMmikos = "";
    }else{
        if(SMmikos == "")
        SMmikos = 0;
    }

    // <!-- -------------- Πλάτος -------------------->
    var  SMplatos = $('#SMplatos').val();
    if(condition == "search"){
        if(SMplatos == "")
        SMplatos = "";
    }else{
        if(SMplatos == "")
        SMplatos = 0;
    }

    // <!-- -------------- Ύψος -------------------->
    var  SMypsos = $('#SMypsos').val();
    if(condition == "search"){
        if(SMypsos == "")
        SMypsos = "";
    }else{
        if(SMypsos == "")
        SMypsos = 0;
    }

    // <!-- -------------- Διάμετρος -------------------->
    var  SMdiametros = $('#SMdiametros').val();
    if(condition == "search"){
        if(SMdiametros == "")
        SMdiametros = "";
    }else{
        if(SMdiametros == "")
        SMdiametros = 0;
    }

    // <!-- -------------- Βάθος -------------------->
    var  SMvathos = $('#SMvathos').val();
    if(condition == "search"){
        if(SMvathos == "")
        SMvathos = "";
    }else{
        if(SMvathos == "")
        SMvathos = 0;
    }

    // <!-- -------------- Πάχος -------------------->
    var  SMpaxos = $('#SMpaxos').val();
    if(condition == "search"){
        if(SMpaxos == "")
        SMpaxos = "";
    }else{
        if(SMpaxos == "")
        SMpaxos = 0;
    }

    // <!-- -------------- Κατηγορία/Τύπος -------------------->
    var  SMkatigoria_typos = $("#SMkatigoria_typos option:selected").val();  //id

    // <!-- -------------- Υλικό -------------------->
    var SM_uliko = "-";
    $('#SM_uliko input:checked').each(function() {
        SM_uliko=SM_uliko.replace("-","")
        SM_uliko=SM_uliko+$(this).attr('id').replace("SM_uliko_","")+"|"
    });
   
    if(SM_uliko.includes("|")){
        SM_uliko=SM_uliko.substring(0, SM_uliko.length - 1);
    }

    // <!-- -------------- Δομή/Υφή -------------------->
    var  SMdomi_yfi = $("#SMdomi_yfi option:selected").val();  //id
    // console.log("SMdomi_yfi-->"+SMdomi_yfi);
    // <!-- -------------- Χρώμα -------------------->
    var  SMxroma = $("#SMxroma option:selected").val();  //id
    // console.log("SMxroma-->"+SMxroma);
    // <!-- -------------- Πρσμίξεις -------------------->
    var SM_prosmixeis = "-";
    $('#SM_prosmixeis input:checked').each(function() {
        SM_prosmixeis=SM_prosmixeis.replace("-","")
        SM_prosmixeis=SM_prosmixeis+$(this).attr('id').replace("SM_prosmixeis_","")+"|"
    });
   
    if(SM_prosmixeis.includes("|")){
        SM_prosmixeis=SM_prosmixeis.substring(0, SM_prosmixeis.length - 1);
    }
    // console.log("SM_prosmixeis-->"+SM_prosmixeis);
    //<!-- -------------- Λίθος -------------------->
    var  SM_lithos_NAI_perigrafi=$('#SM_lithos_NAI_perigrafi').val();
    // if(SM_lithos_NAI_perigrafi == "")
    //     SM_lithos_NAI_perigrafi = "-";

    var SM_lithos_NAI_uliko = $("#SM_lithos_NAI_uliko option:selected").val();
    // if($("#SM_litho_NAI").is(':checked')){
    //     if( $('#SM_lithos_NAI_perigrafi').val() == ""){
    //         SM_lithos_NAI_perigrafi = "-";
    //     } 
    // }
    // console.log("SM_lithos_NAI_uliko-->"+SM_lithos_NAI_uliko);
    // console.log("SM_lithos_NAI_perigrafi-->"+SM_lithos_NAI_perigrafi);
    //<!-- -------------- Πλίνθο -------------------->
    var SM_plinthos_NAI_perigrafi=$('#SM_plinthos_NAI_perigrafi').val();
    // if($("#SM_plinthos_NAI").is(':checked')){
    //     if( $('#SM_plinthos_NAI_perigrafi').val() == ""){
    //         SM_plinthos_NAI_perigrafi = "-";
    //     } 
    // }
    // if( SM_plinthos_NAI_perigrafi == "")
    //     SM_plinthos_NAI_perigrafi = "-";
    // console.log("SM_plinthos_NAI_perigrafi-->"+SM_plinthos_NAI_perigrafi);
    //<!-- -------------- Συνδετικό υλικό (χρώμα) -------------------->

    // if (document.getElementById("SM_syndetiko_uliko").value == "other"){
    //     if( $('#SM_syndetiko_uliko_other').val() == ""){
    //         SM_syndetiko_uliko = "-";
    //     } 
    // }else{
    //     SM_syndetiko_uliko=document.getElementById("SM_syndetiko_uliko").value;
    // }
    var SM_syndetiko_uliko=$("#SM_syndetiko_uliko option:selected").val()
    var SM_syndetiko_uliko_other=$('#SM_syndetiko_uliko_other').val()
    if($("#SM_syndetiko_uliko option:selected").val()=="other"){
        SM_syndetiko_uliko="-"
    }else{
        SM_syndetiko_uliko=$("#SM_syndetiko_uliko option:selected").val()
    }

    // if( SM_syndetiko_uliko_other == "")
    // SM_syndetiko_uliko_other = "-";

    // console.log("SM_syndetiko_uliko-->"+SM_syndetiko_uliko);
    //<!-- -------------- Επίχρισμα (είδος,χρώμα) -------------------->
    var  SM_epixrisma_eidos = $("#SM_epixrisma_eidos option:selected").val();  //id
    var SM_epixrisma_xroma ;
    if($("#SM_epixrisma_xroma option:selected").val()=="other"){
        SM_epixrisma_xroma="-"
    }else{
        SM_epixrisma_xroma=$("#SM_epixrisma_xroma option:selected").val();
    }

    var SM_epixrisma_xroma_allo = $('#SM_epixrisma_xroma_allo').val();
    // if( SM_epixrisma_xroma_allo == "")
    //     SM_epixrisma_xroma_allo = "-";

    // if (document.getElementById("SM_epixrisma_xroma").value == "other"){
    //     if( $('#SM_epixrisma_xroma_allo').val() == ""){
    //         SM_epixrisma_xroma = "-";
    //     } 
    // }else{
    //     SM_epixrisma_xroma = document.getElementById("SM_epixrisma_xroma").value;
    // }

    // console.log("SM_epixrisma_eidos-->"+SM_epixrisma_eidos);
    // console.log("SM_epixrisma_xroma-->"+SM_epixrisma_xroma);
    //<!-- -------------- Κεραπομλπαστικός διάκοσμος -------------------->
    var SM_keramoplastikos_NAI_perigrafi=$('#SM_keramoplastikos_NAI_perigrafi').val() ;
    // if($("#SM_keramoplastikos_NAI").is(':checked')){
    //     if( $('#SM_keramoplastikos_NAI_perigrafi').val() == ""){
    //         SM_keramoplastikos_NAI_perigrafi = "-";
    //     } 
    // }
    // if(SM_keramoplastikos_NAI_perigrafi == "")
    //     SM_keramoplastikos_NAI_perigrafi = "-";

    // console.log("SM_keramoplastikos_NAI_perigrafi-->"+SM_keramoplastikos_NAI_perigrafi);
    //<!-- -------------- Spolia -------------------->
    var SM_spollia_NAI_perigrafi=$('#SM_spollia_NAI_perigrafi').val();
    // if($("#SM_spollia_NAI").is(':checked')){
    //     if( $('#SM_spollia_NAI_perigrafi').val() == ""){
    //         SM_spollia_NAI_perigrafi = "-";
    //     } 
    // }
    // if( SM_spollia_NAI_perigrafi == "")
    //     SM_spollia_NAI_perigrafi = "-";

    //<!-- -------------- Ξύλο -------------------->
    var SM_xylo_NAI_perigrafi=$('#SM_xylo_NAI_perigrafi').val() ;
    // if($("#SM_xylo_NAI").is(':checked')){
    //     if( $('#SM_xylo_NAI_perigrafi').val() == ""){
    //         SM_xylo_NAI_perigrafi = "-";
    //     } 
    // }
    // if( SM_xylo_NAI_perigrafi == "")
    //     SM_xylo_NAI_perigrafi = "-";

    //<!-- -------------- Μέγεθος στοιχείων -------------------->
    var SM_megethos_stoixeiwn=$('#SM_megethos_stoixeiwn').val();
    // if( SM_megethos_stoixeiwn== "")
    //     SM_megethos_stoixeiwn = "-";

    //<!-- -------------- Τοιχοποιία -------------------->
    var SM_toixopoiia = "-";
    $('#SM_toixopoiia input:checked').each(function() {
        SM_toixopoiia=SM_toixopoiia.replace("-","")
        SM_toixopoiia = SM_toixopoiia+$(this).attr('id').replace("SM_toixopoiia_","")+"|"
    });
   
    if(SM_toixopoiia.includes("|")){
        SM_toixopoiia=SM_toixopoiia.substring(0, SM_toixopoiia.length - 1);
    }

    //  console.log("SM_toixopoiia-->"+SM_toixopoiia);
    //<!-- -------------- Αριθμ. σωζ. δομών -------------------->
    var SM_arithm_soz= $('#SM_arithm_soz').val();
    // if( SM_arithm_soz == "")
    //     SM_arithm_soz = 0;

    //<!-- -------------- Δάπεδο -------------------->
    var SM_dapedo = $("#SM_dapedo option:selected").val();  //id
    // console.log("SM_dapedo-->"+SM_dapedo);

    //<!-- -------------- Θέση -------------------->
    var SM_thesi = $("#SM_thesi option:selected").val();  //id
    // console.log("SM_thesi-->"+SM_thesi);
    //<!-- -------------- Περιγραφή/ερμηνεία -------------------->
    var SM_perigrafi_erminia=$('#SM_perigrafi_erminia').val();
    // if( SM_perigrafi_erminia == "")
    //     SM_perigrafi_erminia = "-";

    //<!-- -------------- Χαρακτ. σε σχ. με ΣΜ -------------------->
    var SM_sxeseis_me_sm=$('#SM_sxeseis_me_sm').val();
    // if(SM_sxeseis_me_sm == "")
    //     SM_sxeseis_me_sm = "-";

    //<!-- -------------- Σχέσεις με ΣΜ -------------------->
    var SM_xarakt_me_sm=$('#SM_xarakt_me_sm').val();
    // if( SM_xarakt_me_sm == "")
    //     SM_xarakt_me_sm = "-";

    //<!-- -------------- Χρονολόγιση από -------------------->
    var SM_xronologisi_apo = $("#SM_xronologisi_apo option:selected").val();  //id
    // console.log("SM_xronologisi_apo-->"+SM_xronologisi_apo);
    //<!-- -------------- Χρονολόγιση μέχρι -------------------->
    var SM_xronologisi_mexri = $("#SM_xronologisi_mexri option:selected").val();  //id
    // console.log("SM_xronologisi_mexri-->"+SM_xronologisi_mexri);
    //<!-- -------------- Βάσει -------------------->
    var SM_Vasei = "-";
    $('#SM_Vasei input:checked').each(function() {
        SM_Vasei=SM_Vasei.replace("-","")
        SM_Vasei=SM_Vasei+$(this).attr('id').replace("SM_Vasei_","")+"|"
    });
   
    if(SM_Vasei.includes("|")){
        SM_Vasei=SM_Vasei.substring(0, SM_Vasei.length - 1);
    }


    // console.log("SM_Vasei-->"+SM_Vasei);
    //<!-- -------------- Ανασκαφ. τεχνική -------------------->
    var SM_anaskaf_texn = "-";
    $('#SM_anaskaf_texn input:checked').each(function() {
        SM_anaskaf_texn=SM_anaskaf_texn.replace("-","")
        SM_anaskaf_texn=SM_anaskaf_texn+$(this).attr('id').replace("SM_anaskaf_texn_","")+"|"
    });
  
    if(SM_anaskaf_texn.includes("|")){
        SM_anaskaf_texn=SM_anaskaf_texn.substring(0, SM_anaskaf_texn.length - 1);
    }
    // console.log("SM_anaskaf_texn-->"+SM_anaskaf_texn);

    //<!-- -------------- Συνθήκες -------------------->
    var SM_sinthikes = $("#SM_sinthikes option:selected").val();  //id
    // console.log("SM_sinthikes-->"+SM_sinthikes);
    //<!-- -------------- Πιθανότητα επιμίξεων -------------------->
    var SM_pithanotita = $("#SM_pithanotita option:selected").val();  //id
    // console.log("SM_pithanotita-->"+SM_pithanotita);
    // -------------- Κόσκινο + Νεροκόσκινο --------------------
    var SM_koskino = false;
    if($( "#SM_koskino" ).is(':checked')){
        SM_koskino = true;
    }

    var SM_nerokoskino = false;
    if($( "#SM_nerokoskino" ).is(':checked')){
        SM_nerokoskino = true;
    }
    // console.log("SM_nerokoskino-->"+SM_nerokoskino);

    // -------------- Κόσκινο Ποσοστό + Νεροκόσκινο Ποσοστό --------------------
    var SM_koskino_pososto=$('#SM_koskino_pososto').val();
    if(condition == "search"){
        if(SM_koskino_pososto == "")
        SM_koskino_pososto = "";
    }else{
        if(SM_koskino_pososto == "")
        SM_koskino_pososto = 0;
    }

    var SM_nerokoskino_pososto=$('#SM_nerokoskino_pososto').val();
    if(condition == "search"){
        if(SM_nerokoskino_pososto == "")
        SM_nerokoskino_pososto = "";
    }else{
        if(SM_nerokoskino_pososto == "")
        SM_nerokoskino_pososto = 0;
    }

    // -------------- Ποσότητα κεραμικής (τελαρα/σακούλες) --------------------
    var SM_pososotita_keramikis=$('#SM_pososotita_keramikis').val();
    // if(SM_pososotita_keramikis == "")
    //     SM_pososotita_keramikis  = "-";

    // -------------- Ημερολόγιο (σελ.) --------------------
    var SM_hmerologio=$('#SM_hmerologio').val() ;
    if(condition == "search"){
        if(SM_hmerologio == "")
        SM_hmerologio = "";
    }else{
        if(SM_hmerologio == "")
        SM_hmerologio = 0;
    }

    // -------------- Συντάκτης --------------------
    var SM_syntaktis=$('#SM_syntaktis').val();
    // if( SM_syntaktis == "")
    //     SM_syntaktis  = "-";

    // -------------- Ημερομηνία --------------------
   
    var SM_hmerominia = $('#SM_hmerominia').val();
    if( SM_hmerominia == ""){
        if(condition == "search"){
            SM_hmerominia=null
        }else{
            var now = new Date();
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            SM_hmerominia = now.getFullYear()+"-"+(month)+"-"+(day) ;
        }
    }  
    

    var URL1 ;
    // if(condition == "search"){
    //     URL1 =`
    //     SM=${SMsm}&
    //     etos=${SMetos}&
    //     tautothta=${SMtautotita}&
    //     anwt_Y=${SManot_Y}&
    //     katwt_Y=${SMkatatot_Y}&
    //     B1=${SMborras}&
    //     A1=${SManatoli}&
    //     N1=${SMnotos}&
    //     D1=${SMdysi}&
    //     antistoixh_me=${SMantoistixi_Me}&
    //     sugxronh_me=${SMsyxroni_Me}&
    //     katw=${SMkato_prin_apo}&
    //     panw=${SMpano_meta_apo}&
    //     mhkos1=${SMmikos}&
    //     platos1=${SMplatos}&
    //     diametr=${SMdiametros}&
    //     vathos1=${SMvathos}&
    //     upsos=${SMypsos}&
    //     paxos=${SMpaxos}&
    //     lithos_keimeno=${SM_lithos_NAI_perigrafi}&
    //     plinthos_keimeno=${SM_plinthos_NAI_perigrafi}&

    //     keramoplastikos_diaosmos=${SM_keramoplastikos_NAI_perigrafi}&
    //     spolia=${SM_spollia_NAI_perigrafi}&
    //     ksulo=${SM_xylo_NAI_perigrafi}&
    //     megethos_stoixeiwn=${SM_megethos_stoixeiwn}&
    //     arithm_swz_domwn=${SM_arithm_soz}&
    //     perigrafh_ermhneia=${SM_perigrafi_erminia}&
    //     xarakt_se_sx_me_SM=${SM_xarakt_me_sm}&
    //     sxeseis_me_SM=${SM_sxeseis_me_sm}&
    //     koskino=${SM_koskino}&
    //     nerokoskino=${SM_nerokoskino}&
    //     koskino_pososto=${SM_koskino_pososto}&
    //     nerokoskino_pososto=${SM_nerokoskino_pososto}&
    //     posothta_keramikhs=${SM_pososotita_keramikis}&
    //     hmerologio1=${SM_hmerologio}&

    //     suntakths1=${SM_syntaktis}&
    //     hmeromhnia1=${SM_hmerominia}&

    //     Sunthhkes_id=${SM_sinthikes}&
    //     Kathgoria_tupos_id=${SMkatigoria_typos}&
    //     Klish_pros_id=${SMklisi_Pros}&
    //     Epiloges_lithou_id=${SM_lithos_NAI_uliko}&
    //     Sundetiko_uliko_id=${SM_syndetiko_uliko}&
    //     Domh_Yfh_id=${SMdomi_yfi}&
    //     Xrwma_id=${SMxroma}&
    //     Xronologhsh_mexri_id=${SM_xronologisi_mexri}&
    //     Xronologhsh_apo_id=${SM_xronologisi_apo}&
    //     Pithanothta_epimiksewn_id=${SM_pithanotita}&
    //     Thesh_id=${SM_thesi}&
    //     TuposSM_id=${SMtypos_Sm}&
    //     Epixrisma_eidos_id=${SM_epixrisma_eidos}&
    //     Epixrisma_xrwma_id=${SM_epixrisma_xroma}&
    //     dapedo_id=${SM_dapedo}&

    //     Vasei_id=${SM_Vasei}&
    //     Yliko_id=${SM_uliko}&
    //     Anaskaf_texnikh_id=${SM_anaskaf_texn}&
    //     Toixopoiia_id=${SM_toixopoiia}&
    //     Prosmikseis_id=${SM_prosmixeis}
    //     `;
    //     URL1=URL1.replace(/[\r\n]/gm, '');

    // }else{
        URL1 =`
        SM=${SMsm}&
        etos=${SMetos}&
        tautothta=${SMtautotita}&
        anwt_Y=${SManot_Y}&
        katwt_Y=${SMkatatot_Y}&
        B1=${SMborras}&
        A1=${SManatoli}&
        N1=${SMnotos}&
        D1=${SMdysi}&
        antistoixh_me=${SMantoistixi_Me}&
        sugxronh_me=${SMsyxroni_Me}&
        katw=${SMkato_prin_apo}&
        panw=${SMpano_meta_apo}&
        mhkos1=${SMmikos}&
        platos1=${SMplatos}&
        diametr=${SMdiametros}&
        vathos1=${SMvathos}&
        upsos=${SMypsos}&
        paxos=${SMpaxos}&
        lithos_keimeno=${SM_lithos_NAI_perigrafi}&
        plinthos_keimeno=${SM_plinthos_NAI_perigrafi}&
        sundetiko_uliko_xrwma_keimeno=${SM_syndetiko_uliko_other}&
        epixrhsma_xrwma_keimeno=${SM_epixrisma_xroma_allo}&
        keramoplastikos_diaosmos=${SM_keramoplastikos_NAI_perigrafi}&
        spolia=${SM_spollia_NAI_perigrafi}&
        ksulo=${SM_xylo_NAI_perigrafi}&
        megethos_stoixeiwn=${SM_megethos_stoixeiwn}&
        arithm_swz_domwn=${SM_arithm_soz}&
        perigrafh_ermhneia=${SM_perigrafi_erminia}&
        xarakt_se_sx_me_SM=${SM_xarakt_me_sm}&
        sxeseis_me_SM=${SM_sxeseis_me_sm}&
        koskino=${SM_koskino}&
        nerokoskino=${SM_nerokoskino}&
        koskino_pososto=${SM_koskino_pososto}&
        nerokoskino_pososto=${SM_nerokoskino_pososto}&
        posothta_keramikhs=${SM_pososotita_keramikis}&
        hmerologio1=${SM_hmerologio}&

        suntakths1=${SM_syntaktis}&
        hmeromhnia1=${SM_hmerominia}&

        Sunthhkes_id=${SM_sinthikes}&
        Kathgoria_tupos_id=${SMkatigoria_typos}&
        Klish_pros_id=${SMklisi_Pros}&
        Epiloges_lithou_id=${SM_lithos_NAI_uliko}&
        Sundetiko_uliko_id=${SM_syndetiko_uliko}&
        Domh_Yfh_id=${SMdomi_yfi}&
        Xrwma_id=${SMxroma}&
        Xronologhsh_mexri_id=${SM_xronologisi_mexri}&
        Xronologhsh_apo_id=${SM_xronologisi_apo}&
        Pithanothta_epimiksewn_id=${SM_pithanotita}&
        Thesh_id=${SM_thesi}&
        TuposSM_id=${SMtypos_Sm}&
        Epixrisma_eidos_id=${SM_epixrisma_eidos}&
        Epixrisma_xrwma_id=${SM_epixrisma_xroma}&
        dapedo_id=${SM_dapedo}&

        Vasei_id=${SM_Vasei}&
        Yliko_id=${SM_uliko}&
        Anaskaf_texnikh_id=${SM_anaskaf_texn}&
        Toixopoiia_id=${SM_toixopoiia}&
        Prosmikseis_id=${SM_prosmixeis} `;

        URL1=URL1.replace(/[\r\n]/gm, '');
    // }
    

    return URL1

}

//make URL from inputs in Skeleton form
function returnSkeleton_URL(){
       // -------------- Έτος --------------------
       var SKEL_etos=$('#SKEL_etos').val();
       if(SKEL_etos == "")
           SKEL_etos  = 4;
       
       // -------------- ΣΜ κοψίματος --------------------
       var SKEL_sm_kops=$('#SKEL_sm_kops').val();
       if( SKEL_sm_kops == "")
           SKEL_sm_kops  = 0;
       
       // -------------- Τομέας --------------------
       var SKEL_tomeas=$('#SKEL_tomeas').val();
       if( SKEL_tomeas == "")
           SKEL_tomeas  = 0;
       
       // -------------- Κατασκευή --------------------
       var SKEL_kataskeui=$('#SKEL_kataskeui').val();
    //    if( SKEL_kataskeui == "")
    //        SKEL_kataskeui  = "-";
       
       // -------------- Ενότητα --------------------
       var SKEL_enotita=$('#SKEL_enotita').val() ;
    //    if(SKEL_enotita == "")
    //        SKEL_enotita  = "-";
       
       // -------------- Σύνολο --------------------
       var SKEL_synolo=$('#SKEL_synolo').val();
    //    if( SKEL_synolo == "")
    //        SKEL_synolo  = "-";
       
       // -------------- Φάση --------------------
       var SKEL_fasi = $('#SKEL_fasi').val() ;
    //    if( SKEL_fasi == "")
    //        SKEL_fasi  = "-";
       
       // -------------- Ταυτότητα --------------------
       var SKEL_tautotita=$('#SKEL_tautotita').val();
    //    if( SKEL_tautotita == "")
    //        SKEL_tautotita  = "-";
       
       // -------------- Κάτω/πριν από --------------------
       var SKEL_kato_prin_apo=$('#SKEL_kato_prin_apo').val();
    //    if( SKEL_kato_prin_apo == "")
    //        SKEL_kato_prin_apo  = "-";
       
       // -------------- Πάνω/μετά από --------------------
       var SKEL_pano_meta_apo=$('#SKEL_pano_meta_apo').val();
    //    if( SKEL_pano_meta_apo == "")
    //        SKEL_pano_meta_apo  = "-";  

       //<!-- -------------- Τύπος ταφής -------------------->
       var SKEL_typos_tafis = $("#SKEL_typos_tafis option:selected").val();  //id 

       //<!-- -------------- Τύπος τάφου -------------------->
       var SKEL_typos_tafou = $("#SKEL_typos_tafou option:selected").val();  //id 

       //<!-- -------------- Β -------------------->
       var SKEL_synt_vora=$('#SKEL_synt_vora').val();
       if( SKEL_synt_vora == "")
           SKEL_synt_vora  = 0;
           
       //<!-- -------------- Ν -------------------->
       var SKEL_synt_notou=$('#SKEL_synt_notou').val() ;
       if(SKEL_synt_notou == "")
           SKEL_synt_notou  = 0;
           
       //<!-- --------------Δ -------------------->
       var SKEL_synt_dysis=$('#SKEL_synt_dysis').val();
       if( SKEL_synt_dysis == "")
           SKEL_synt_dysis  = 0;
       
       //<!-- -------------- Α -------------------->
       var SKEL_synt_anatolis=$('#SKEL_synt_anatolis').val();
       if( SKEL_synt_anatolis == "")
           SKEL_synt_anatolis  = 0;
                   
       //<!-- -------------- Ανωτ. Υ. κραν. -------------------->
       var SKEL_anot_Y_kran= $('#SKEL_anot_Y_kran').val();
       if( SKEL_anot_Y_kran== "")
           SKEL_anot_Y_kran  = 0;
               
       //<!-- -------------- Κατωτ. Υ. κραν. -------------------->
       var SKEL_katot_Y_kran=$('#SKEL_katot_Y_kran').val() ;
       if( SKEL_katot_Y_kran == "")
           SKEL_katot_Y_kran  = 0;
       
       //<!-- -------------- Μήκος -------------------->
       var SKEL_mikos=$('#SKEL_mikos').val();
    //    if( SKEL_mikos == "")
    //        SKEL_mikos  = "-";
           
       //<!-- -------------- Πλάτος -------------------->
       var SKEL_platos=$('#SKEL_platos').val() ;
    //    if( SKEL_platos == "")
    //        SKEL_platos  = "-";
       
       //<!-- -------------- Βάθος -------------------->
       var SKEL_vathos=$('#SKEL_vathos').val();
    //    if( SKEL_vathos == "")
    //        SKEL_vathos  = "-";
       
       //<!-- -------------- Οστά -------------------->
       var SKEL_osta = $("#SKEL_osta option:selected").val();  //id 

       //<!-- -------------- Ταφή -------------------->
       var SKEL_tafi = $("#SKEL_tafi option:selected").val();  //id 
       //<!-- -------------- Προσανατολισμός -------------------->
       var SKEL_prosanatolismos=$('#SKEL_prosanatolismos').val();
    //    if( SKEL_prosanatolismos == "")
    //        SKEL_prosanatolismos  = "-";
       
       //<!-- -------------- Γενική στάση σώματος -------------------->
       var SKEL_geniki_stasi=$('#SKEL_geniki_stasi').val();
    //    if( SKEL_geniki_stasi == "")
    //        SKEL_geniki_stasi  = "-";
       
       //<!-- -------------- Κεφάλι -------------------->
       var SKEL_kefali=$('#SKEL_kefali').val();
    //    if( SKEL_kefali == "")
    //        SKEL_kefali  = "-";
               
       //<!-- -------------- Κορμός -------------------->
       var SKEL_kormos=$('#SKEL_kormos').val();
    //    if( SKEL_kormos == "")
    //        SKEL_kormos  = "-";
       
       //<!-- -------------- Δεξί χέρι -------------------->
       var SKEL_dexi_xeri=$('#SKEL_dexi_xeri').val();
    //    if(SKEL_dexi_xeri == "")
    //        SKEL_dexi_xeri  = "-";
       
       //<!-- -------------- Αριστερό χέρι -------------------->
       var SKEL_aristero_xeri=$('#SKEL_aristero_xeri').val() ;
    //    if( SKEL_aristero_xeri == "")
    //        SKEL_aristero_xeri  = "-";
       
       //<!-- -------------- Δεξί πόδι -------------------->
       var SKEL_dexi_podi=$('#SKEL_dexi_podi').val();
    //    if( SKEL_dexi_podi == "")
    //        SKEL_dexi_podi  = "-";
       
       //<!-- -------------- Αριστερό πόδι -------------------->
       var SKEL_aristero_podi=$('#SKEL_aristero_podi').val();
    //    if(SKEL_aristero_podi == "")
    //        SKEL_aristero_podi  = "-";
       
       //<!-- -------------- Περιγραφή/σχόλια -------------------->
       var SKEL_perigrafi_sxolia=$('#SKEL_perigrafi_sxolia').val();
    //    if( SKEL_perigrafi_sxolia == "")
    //        SKEL_perigrafi_sxolia  = "-";
               
       //<!-- -------------- Y. σκελετού κατά χώραν -------------------->
       var SKEL_Y_skel_kata_xoran=$('#SKEL_Y_skel_kata_xoran').val();
       if(SKEL_Y_skel_kata_xoran == "")
           SKEL_Y_skel_kata_xoran  = 0;
       
       //<!-- -------------- Μήκ. μηριαίου οστού (να σημειωθεί αριστ. ή δεξιού) -------------------->
       var SKEL_mik_miriaiou_ostou=$('#SKEL_mik_miriaiou_ostou').val();
    //    if( SKEL_mik_miriaiou_ostou == "")
    //        SKEL_mik_miriaiou_ostou  = "-";
       
       //<!-- -------------- Συνευρήματα (με Α/Α) -------------------->
       var SKEL_syneurimata=$('#SKEL_syneurimata').val();
    //    if( SKEL_syneurimata == "")
    //        SKEL_syneurimata  = "-";
       
       //<!-- -------------- Ανασκ. τεχνική -------------------->
       var SKEL_anaskaf_texn=$('#SKEL_anaskaf_texn').val();
    //    if( SKEL_anaskaf_texn == "")
    //        SKEL_anaskaf_texn  = "-";
       
       //<!-- -------------- Συνθήκες -------------------->
       var SKEL_sinthikes=$('#SKEL_sinthikes').val();
    //    if( SKEL_sinthikes== "")
    //        SKEL_sinthikes  = "-";

       //<!-- -------------- Ημερολόγιο -------------------->
       var SKEL_hmerologio=$('#SKEL_hmerologio').val();
       if( SKEL_hmerologio== "")
           SKEL_hmerologio  = 0;

       //<!-- -------------- Συντάκτης -------------------->
       var SKEL_syntaktis=$('#SKEL_syntaktis').val();
    //    if( SKEL_syntaktis== "")
    //        SKEL_syntaktis  = "-"; 
           
       //<!-- -------------- Ημερομινία -------------------->
       var SKEL_hmerominia=$('#SKEL_hmerominia').val();
       if( SKEL_hmerominia == ""){
           var now = new Date();
           var day = ("0" + now.getDate()).slice(-2);
           var month = ("0" + (now.getMonth() + 1)).slice(-2);
           SKEL_hmerominia = now.getFullYear()+"-"+(month)+"-"+(day) ;
       }   

       var URL2 = `
       etos=${SKEL_etos}&
       SM_kopsimatos=${SKEL_sm_kops}&
       tomeas=${SKEL_tomeas}&
       kataskeuh=${SKEL_kataskeui}&
       enothta=${SKEL_enotita}&
       sunolo=${SKEL_synolo}&
       fash=${SKEL_fasi}&
       tautothta=${SKEL_tautotita}&
       katw_prin_apo=${SKEL_kato_prin_apo}&
       panw_meta_apo=${SKEL_pano_meta_apo}&
       B2=${SKEL_synt_vora}&
       A2=${SKEL_synt_anatolis}&
       N2=${SKEL_synt_notou}&
       D2=${SKEL_synt_dysis}&
       anwt_Y_kran=${SKEL_anot_Y_kran}&
       katwt_Y_kran=${SKEL_katot_Y_kran}&
       platos2=${SKEL_platos}&
       vathos2=${SKEL_vathos}&
       prosanatolismos=${SKEL_prosanatolismos}&
       genikh_stash_swmatos=${SKEL_geniki_stasi}&
       kefali=${SKEL_kefali}&
       mhkos2=${SKEL_mikos}&
       kormos=${SKEL_kormos}&
       deksi_xeri=${SKEL_dexi_xeri}&
       aristero_xeri=${SKEL_aristero_xeri}&
       deksi_podi=${SKEL_dexi_podi}&
       aristero_podi=${SKEL_aristero_podi}&
       perigrafh_sxolia=${SKEL_perigrafi_sxolia}&
       Y_skeletou_kata_xwran=${SKEL_Y_skel_kata_xoran}&
       mhk_mhriaiou_ostou=${SKEL_mik_miriaiou_ostou}&
       suneurhmata=${SKEL_syneurimata}&
       anask_texnikh=${SKEL_anaskaf_texn}&
       sunthhkes=${SKEL_anaskaf_texn}&
       hmerologio2=${SKEL_hmerologio}&
       suntakths2=${SKEL_syntaktis}&
       hmeromhnia2=${SKEL_hmerominia}&

       Tupos_tafhs_id=${SKEL_typos_tafis}&
       Tupos_tafou_id=${SKEL_typos_tafou}&
       Osta_id=${SKEL_osta}&
       Tafh_id=${SKEL_tafi} `;

       //console.log(URL1)
       URL2=URL2.replace(/[\r\n]/gm, '');

       return URL2
}


//insert new entry SM/SM+Skeleton
function insertNewSM(){

    if($("#skeletonCheckbox").is(':checked')){

        var URL= returnSM_URL();
        var SM_id=0;

        var URL1= returnSkeleton_URL();
        
        //------------------------------ Add SM --------------------------
         cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/store_sm.php?"+URL, (response) => {
            SM_id=response.SM_id

            var URL= returnSkeleton_URL();
           //------------------------------ Add Skeleton --------------------------
            cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/store_skeleton.php?SM_id="+SM_id+"&"+URL, (response) => {
                    $("#correctAlert").html("Αποθήκευση <i class='fas fa-check-double' style='font-size:20px;color:#28b83b'></i>")
                    $("#correctAlert").animate({bottom: '10%'});
                    clearSkeleton();
                    clearSM();
                    setTimeout(function() {
                        $("#correctAlert").animate({bottom: '-100px'});
                    }, 2500);
            }, (err) => {
                alert("error on store skeleton api after sm "+err)
            });
        }, (err) => {
            alert("error on store sm api before sm "+err)
        });
        
    }else{
        var URL= returnSM_URL();
         //------------------------------ Add SM --------------------------
        cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/store_sm.php?"+URL, (response) => {
            $("#correctAlert").html("Αποθήκευση <i class='far fa-check-circle' style='font-size:20px;color:#28b83b'></i>")
            $("#correctAlert").animate({bottom: '10%'});
            clearSM();
            setTimeout(function() {
                $("#correctAlert").animate({bottom: '-100px'});
            }, 2500);
        }, (err) => {
            alert("error on store sm "+err)
        });
    }

}

// ======================== Add SM from menu============================
$('#add_SM_ButtonInMenu').on('click',  function(e){ 
    
    document.querySelector('.containerS').classList.toggle('view-change1');
    $("#topBar").show();
    $("#searchButton").hide();
    $("#updateSMButton").hide();
    $("#deleteSMbutton").hide();
    $("#saveSMbutton").show();
    $("#hasSkeleton").show();
    $("#hasSkeletonSection").show();

    $("#backToSMfromSkeleton").hide();
    $("#backToMenu").show();

    clearSM();
 
});


// ======================== Search from menu============================
$('#searchButtonInMenu').on('click',  function(e){ 
    document.querySelector('.containerS').classList.toggle('view-change1');
    $("#topBar").show();
    $("#searchButton").show();
    $("#updateSMButton").hide();
    $("#deleteSMbutton").hide();
    $("#saveSMbutton").hide();
    $("#hasSkeletonSection").hide();

    $('#backToSMfromSkeleton').hide();
    $('#backToMenu').show();

    clearSM();
 
});

// ======================== Back to menu from Skeleton / SM ============================
$('#backToMenu').on('click', function(e){ 

    $('.containerS').attr( "class","containerS view" )
    $('#topBar').hide()
    $('#firstScreenContent').animate({scrollTop:0}, '300');
    $('#secondScreenContent').animate({scrollTop:0}, '300');
    clearSM();
    clearSkeleton();
});

//  Go to SM from Array button
$('#SMtable tbody').on('click', '.goToSM', function(e){ 

    document.getElementById("PopUp").classList.toggle("activeAlert");
    $("#goUpButton").show();
    $("#topBar").show();

    $("#SMtable tbody").empty(); 

    $('#firstScreenContent').animate({scrollTop:0}, '300');
 
    fill_SM_inputs( $(this).attr("data-id"))

    $("#updateSMButton").show();
    $("#deleteSMbutton").show();
    $("#updateSMButton").attr('data-id',$(this).attr("data-id"));
    $("#deleteSMbutton").attr('data-id',$(this).attr("data-id"));
    $('#searchButton').hide();
    $('#saveSMbutton').hide();
    $('#hasSkeletonSection').hide();

    $('#backToSMfromSkeleton').hide();
    $('#backToMenu').show();

});


//  Go to Skeleton from Array button

function goToSkeleton(e,skelID){

    document.getElementById("PopUp").classList.toggle("activeAlert");
    document.querySelector('.containerS').classList.toggle('view-change2');
    $("#goUpButton").show();
    $("#topBar").show();

    $("#SMtable tbody").empty(); 

    $('#secondScreenContent').animate({scrollTop:0}, '300');

    fill_Skeleton_inputs(skelID)

    $('#backToSMfromSkeleton').hide();
    $('#backToMenu').show();

    $('#updateSkeletonButton').show();
    $('#deleteSkelbutton').show();
    $('#updateSkeletonButton').attr('data-id',skelID);
    $('#deleteSkelbutton').attr('data-id',skelID);

}

//Add skeleton button in already inserted SM
function addSkeletonFromArray(SM_id){

    document.getElementById("PopUp").classList.toggle("activeAlert");
    document.querySelector('.containerS').classList.toggle('view-change2');
    $("#goUpButton").show();
    $("#topBar").show();

    $("#SMtable tbody").empty(); 

    $('#secondScreenContent').animate({scrollTop:0}, '300');

    $('#backToSMfromSkeleton').hide();
    $('#backToMenu').show();

    $('#addNewSkeletonToSM').show();
    $('#addNewSkeletonToSM').attr('data-id',SM_id);
    $('#updateSkeletonButton').hide();
    $('#deleteSkelbutton').hide();
 
}

//  Update Skeleton  
$('#updateSkeletonButton').on('click', function(e){ 

    document.getElementById("PopUp").classList.toggle("activeAlert");
    document.querySelector('.containerS').classList.toggle('view-change2');
    $("#goUpButton").hide();
    $("#topBar").hide();

    var URL= returnSM_URL()

    var URL= returnSkeleton_URL();
    var Skel_id=$(this).attr('data-id')
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Update_Skeleton.php?Skel_id="+Skel_id+"&"+URL, (response) => {
        $("#correctAlert").html("Ενημέρωση <i class='far fa-check-circle' style='font-size:20px;color:#28b83b'></i>")
        $("#correctAlert").animate({bottom: '10%'});
        setTimeout(function() {
            $("#correctAlert").animate({bottom: '-100px'});
        }, 2500);
        fill_the_List();
        clearSkeleton();
        $('#secondScreenContent').animate({scrollTop:0}, '300');
    }, (err) => {
        alert("error on update skeleton "+err)
    });

});



// Delete Skeleton button 
$('#deleteSkelbutton').on('click', function(e){ 

    document.getElementById("popupConfirmDelete").classList.toggle("activeSeason");
    $("#popUpMessage").html("Είσαι σίγουρος πως θέλεις να διαγράψεις τον συγκεκριμένο Σκελετό;");
    $('#popupConfirmDelete2').animate({
        top: "65%"
    }, "fast");
    $("#deleteSkel").show();
    $("#deleteSM").hide();
    $("#deleteSkel").attr("data-id",$(this).attr('data-id'));

});


// Delete Skeleton 
$('#deleteSkel').on('click', function(e){ 
    document.getElementById("popupConfirmDelete").classList.toggle("activeSeason");
    $('#popupConfirmDelete2').animate({
        top: "1000px"
    }, "fast");

    var Skel_id=$(this).attr('data-id');
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Delete_Skeleton.php?Skel_id="+Skel_id, (response) => {
        $("#correctAlert").html("Διαγραφή <i class='far fa-check-circle' style='font-size:20px;color:#28b83b'></i>")
        $("#correctAlert").animate({bottom: '10%'});
        setTimeout(function() {
            $("#correctAlert").animate({bottom: '-100px'});
        }, 2500);
        clearSM();
        $("#searchButton").hide();
        $("#updateSMButton").hide();
        $("#deleteSMbutton").hide();
        $("#saveSMbutton").show();
        $("#hasSkeletonSection").show();
 
    }, (err) => {
        alert("error on delete skeleton"+err)
    });

    clearSkeleton();
    document.querySelector('.containerS').classList.toggle('view-change2');
    fill_the_List();
    document.getElementById("PopUp").classList.toggle("activeAlert");
    $('#topBar').hide()
    $("#goUpButton").hide();
    $('#firstScreenContent').animate({scrollTop:0}, '300');
    $('#secondScreenContent').animate({scrollTop:0}, '300');
    clearSM();
    $("#deleteSM").hide();
    $("#deleteSkel").hide();
 });



//Add skeleton in already inserted SM
$('#addNewSkeletonToSM').on('click', function(e){ 

    document.getElementById("PopUp").classList.toggle("activeAlert");
    document.querySelector('.containerS').classList.toggle('view-change2');
    $("#goUpButton").hide();
    $("#topBar").hide();

    $('#addNewSkeletonToSM').hide();

    var SM_id=$(this).attr('data-id')
    var URL = returnSkeleton_URL();

    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/store_skeleton.php?SM_id="+SM_id+"&"+URL, (response) => {
            // alert('Success call get1');
            $("#correctAlert").html("Αποθήκευση <i class='fas fa-check-double' style='font-size:20px;color:#28b83b'></i>")
            $("#correctAlert").animate({bottom: '10%'});
            setTimeout(function() {
                $("#correctAlert").animate({bottom: '-100px'});
            }, 2500);
            clearSkeleton();
            $('#secondScreenContent').animate({scrollTop:0}, '300');
            fill_the_List();
    }, (err) => {
        alert("error on add skeleton on sm "+err)
    });

});


//  Update SM
$('#updateSMButton').on('click', function(e){ 

   var URL= returnSM_URL()
   var SM_id=$(this).attr('data-id');
//    alert(myURL+"/Update_SM.php?SM_id="+SM_id+"&"+URL);
   cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Update_SM.php?SM_id="+SM_id+"&"+URL, (response) => {
       // alert('Success call get1');
       $("#correctAlert").html("Ενημέρωση <i class='far fa-check-circle' style='font-size:20px;color:#28b83b'></i>")
       $("#correctAlert").animate({bottom: '10%'});
       setTimeout(function() {
           $("#correctAlert").animate({bottom: '-100px'});
       }, 2500);
       clearSM();
       $('#firstScreenContent').animate({scrollTop:0}, '300');
       $("#searchButton").hide();
       $("#updateSMButton").hide();
       $("#deleteSMbutton").hide();
       $("#saveSMbutton").show();
       $("#hasSkeletonSection").show();

   }, (err) => {
       alert("error on update sm "+err)
   });

});


//  Delete SM button
$('#deleteSMbutton').on('click', function(e){ 
    document.getElementById("popupConfirmDelete").classList.toggle("activeSeason");
    $("#popUpMessage").html("Είσαι σίγουρος πως θέλεις να διαγράψεις την συγκεκριμένη Στρ. Μον και τις σχέσεις της");
    $('#popupConfirmDelete2').animate({
        top: "65%"
    }, "fast");
    $("#deleteSM").show();
    $("#deleteSM").attr("data-id",$(this).attr('data-id'));
});

//  Delete SM
$('#deleteSM').on('click', function(e){ 
    document.getElementById("popupConfirmDelete").classList.toggle("activeSeason");
    $('#popupConfirmDelete2').animate({
        top: "1000px"
    }, "fast");
    $('#topBar').hide()
    $("#goUpButton").hide();
    document.getElementById("PopUp").classList.toggle("activeAlert");

    var SM_id=$(this).attr('data-id');
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Delete_SM.php?SM_id="+SM_id, (response) => {
        $("#correctAlert").html("Διαγραφή <i class='far fa-check-circle' style='font-size:20px;color:#28b83b'></i>")
        $("#correctAlert").animate({bottom: '10%'});
        setTimeout(function() {
            $("#correctAlert").animate({bottom: '-100px'});
        }, 2500);
        clearSM();
        $('#firstScreenContent').animate({scrollTop:0}, '300');
        $("#searchButton").hide();
        $("#updateSMButton").hide();
        $("#deleteSMbutton").hide();
        $("#saveSMbutton").show();
        $("#hasSkeletonSection").show();
        fill_the_List();
    }, (err) => {
        alert("error on delete sm"+err)
    });

    clearSM();
    $('#firstScreenContent').animate({scrollTop:0}, '300');
    $("#searchButton").hide();
    $("#updateSMButton").hide();
    $("#deleteSMbutton").hide();
    $("#saveSMbutton").show();
    $("#hasSkeletonSection").show();

    $("#deleteSM").hide();
    $("#deleteSkel").hide();
 
 });

 // Close bottom popup
$('.overlaySeason').on('click', function(e){ 
    document.getElementById("popupConfirmDelete").classList.toggle("activeSeason");
    $('#popupConfirmDelete2').animate({
        top: "1000px"
    }, "fast");
});





function checkSkeleton(){
   
    if($("#skeletonCheckbox").is(':checked')){
        $('#hasSkeleton').css("background-color"," #F75A1B");
    }else{
        $('#hasSkeleton').css("background-color"," #306060");
    }
}

//button to go on skeleton form
$("#hasSkeleton").on('click', function(e) {

    e.preventDefault();

    document.querySelector('.containerS').classList.toggle('view-change2');

    $('#backToSMfromSkeleton').show();
    $('#backToMenu').hide();

    $('#updateSkeletonButton').hide();
    $('#addNewSkeletonToSM').hide();
    $('#deleteSkelbutton').hide();


});



// Go to SM from Skeleton
$("#backToSMfromSkeleton").on('click', function(e) {

    e.preventDefault();

    document.querySelector('.containerS').classList.toggle('view-change2');

    $('#backToSMfromSkeleton').hide();
    $('#backToMenu').show();

});



//SM sections DIV 

$("#SM_Sydetagmenes").on('click', function(e) {
    
    if($(this).attr("data-id") =="closed"){
        $(this).attr("data-id","open")
        $(this).html('Συντεταγμένες <i class="fas fa-caret-down" style="text-align: right;"></i>');
    }else{
        $(this).attr("data-id","closed")
        $(this).html('Συντεταγμένες <i class="fas fa-caret-up" style="text-align: right;"></i>');
    }
    $("#SM_Sydetagmenes_div").slideToggle();

});


$("#SM_Ylika_texniki").on('click', function(e) {
    
    if($(this).attr("data-id") =="closed"){
        $(this).attr("data-id","open")
        $(this).html('Υλικά/τεχνική κατασκευής <i class="fas fa-caret-down" style="text-align: right;"></i>');
    }else{
        $(this).attr("data-id","closed")
        $(this).html('Υλικά/τεχνική κατασκευής <i class="fas fa-caret-up" style="text-align: right;"></i>');
    }
    $("#SM_Ylika_texniki_div").slideToggle();

});



//Open Search PopUp
$("#searchButton").on('click', function(e) {
    document.getElementById("PopUp").classList.toggle("activeAlert");
    $("#goUpButton").hide();
    $("#topBar").hide();

    //Searching Results
    fill_the_List();

});




function fill_the_List(){
    $("#SMtable tbody").empty();
    var URL = returnSM_URL("search");
 
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Read_SM_and_Skeletons_with_checkboxes.php?"+URL, (response) => {

        var data= response;
        var len = data.length;

        for(var i=0; i<len; i++){

            var len2 = data[i].Skeletons.length;
            
            var str =`<tr >
                        <td class="SMrowDIV" data-id="TdWithSM">
                            <i class='fas fa-layer-group' class="SMtext" style="font-size:25px; margin-top:15%"></i>
                            <p class="SMtext" >ΣΜ: ${data[i].SM_SM}</p>
                            <button class="goToSM" data-id=${data[i].SM_id} ><i class='fas fa-angle-right'></i></button> 
                            <p class="SMtext" style=" text-align: center;"> ${data[i].SM_Etos}</p>
                            <p class="SMtext" > ${data[i].SM_Hmerominia}</p>
                            <p class="SMtext" > ${data[i].SM_TyposSM}</p>
                        </td>
                    </tr>`;

            str = str +`
            <tr> 
            <td colspan="1">
                <div class="SMrowExtendedDiv" >`

            if(len2 != 0){
                var tmp_Array = new Array();
                tmp_Array = data[i].Skeletons;
                for(var j=0; j<tmp_Array.length; j=j+5){
                    str = str +`<div class="SMrowExtendedDivContentRow">
                                    <i style="width:100%; height:100%; margin-top:15%; font-size:25px;" class='fas fa-skull-crossbones'></i>
                                    <p style="text-align:left">Σκελετός: ${tmp_Array[j+1]}</p>
                                    <button onclick="goToSkeleton(this,${tmp_Array[j]})" class="goToSkeleton"><i class='fas fa-angle-right'></i></button> 
                                    <p style="text-align:center">${tmp_Array[j+2]}</p>
                                    <p style="text-align:left">${tmp_Array[j+3]}</p>
                                    <p style="text-align:left">${tmp_Array[j+4]}</p>
                                </div>`;  
                }         
            }
            str = str + `<button onclick="addSkeletonFromArray(${data[i].SM_id},)" id="addSkeletonButton" > <i class='fas fa-plus'></i> Σκελετός</button>`               
            str = str +`  </div>
                        </td><
                    /tr>`;  
            
            $("#SMtable tbody").append(str); 
            $("td[colspan=1]").children().hide(); 
    
        }
       
        if($("#SMtableBody").is(':empty')){
            $("#megethidikos").show();
        }else{
            $("#megethidikos").hide();
        }
    
       }, (err) => {
           alert("error on fill the list in search"+err)
       });
}

//fill SM fields from searching results
function fill_SM_inputs(smID){

    // alert("fill_sm:"+smID)

    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Display_SM.php?smID="+smID, (response) => {

        var data= response;
        var len = data.length;
    
        for(var i=0; i<len; i++){

            $("#SMsm").val(data[i].SM_SM);
            $("#SMtypos_Sm").val(data[i].SM_TyposSM_id);
            $("#SMetos").val(data[i].SM_Etos);
            $("#SMtautotita").val(data[i].SM_Tautotita);
            $("#SMklisi_Pros").val(data[i].SM_Klisi_pros_id);
            $("#SManot_Y").val(data[i].SM_Anot_Y);
            $("#SMkatatot_Y").val(data[i].SM_Katot_Y);
            $("#SMborras").val(data[i].SM_B);
            $("#SMnotos").val(data[i].SM_N);
            $("#SMdysi").val(data[i].SM_D);
            $("#SManatoli").val(data[i].SM_A);
            $("#SMantoistixi_Me").val(data[i].SM_Antistoixi_me);
            $("#SMsyxroni_Me").val(data[i].SM_Sygxroni_me);
            $("#SMkato_prin_apo").val(data[i].SM_Kato);
            $("#SMpano_meta_apo").val(data[i].SM_Pano);
            $("#SMmikos").val(data[i].SM_Mikos);
            $("#SMplatos").val(data[i].SM_Platos);
            $("#SMypsos").val(data[i].SM_Ypsos);
            $("#SMdiametros").val(data[i].SM_Diametros);
            $("#SMvathos").val(data[i].SM_Vathos);
            $("#SMpaxos").val(data[i].SM_Paxos);
            $("#SMkatigoria_typos").val(data[i].SM_Katigoria_id);
            //--------ylikko check-----------
            //------------------
            $("#SMdomi_yfi").val(data[i].SM_Domi_id);
            $("#SMxroma").val(data[i].SM_Xrwma_id);
             //--------prosmixeis check-----------
            //------------------
            if(data[i].SM_Lithos_keimeno != ""){
                $('#hasLithoDiv').slideToggle();
                $('#SM_litho_NAI').prop('checked', true);
                $("#SM_lithos_NAI_uliko").val(data[i].SM_Epiloges_Lithou_id);
                $("#SM_lithos_NAI_perigrafi").val(data[i].SM_Lithos_keimeno);
            }
            if(data[i].SM_Plinthos_keimeno != ""){
                $('#hasPlinthoDiv').slideToggle();
                $('#SM_plinthos_NAI').prop('checked', true);
                $("#SM_plinthos_NAI_perigrafi").val(data[i].SM_Plinthos_keimeno);
            }
            $("#SM_syndetiko_uliko").val(data[i].SM_Syndetiko_uliko_id);
            $("#SM_epixrisma_eidos").val(data[i].SM_Epixrisma_eidos_id);
            $("#SM_epixrisma_xroma").val(data[i].SM_Epixrisma_xroma_id);
            $("#SM_epixrisma_xroma").val(data[i].SM_Epixrisma_xroma_id);
            if(data[i].SM_Keramoplastikos != ""){
                $('#hasKeramoplastikosDiv').slideToggle();
                $('#SM_keramoplastikos_NAI').prop('checked', true);
                $("#SM_keramoplastikos_NAI_perigrafi").val(data[i].SM_Keramoplastikos);
            }
            //---------spolia
            if(data[i].SM_Spolia != ""){
                $('#hasSpoliaDiv').slideToggle();
                $('#SM_spollia_NAI').prop('checked', true);
                $("#SM_spollia_NAI_perigrafi").val(data[i].SM_Spolia);
            }
            if(data[i].SM_ksilo != ""){
                $('#hasXiloDiv').slideToggle();
                $('#SM_xylo_NAI').prop('checked', true);
                $("#SM_xylo_NAI_perigrafi").val(data[i].SM_ksilo);
            }
            $("#SM_megethos_stoixeiwn").val(data[i].SM_Megethos_Stoix);
            //--------------------Toixop check
            //----------------
            $("#SM_arithm_soz").val(data[i].SM_Arithmos_soz);
            $("#SM_dapedo").val(data[i].SM_Dapedo_id);
            $("#SM_thesi").val(data[i].SM_Thesi_id);
            $("#SM_perigrafi_erminia").val(data[i].SM_Perigrafi);
            $("#SM_xarakt_me_sm").val(data[i].SM_Xarakt_me_sm);
            $("#SM_sxeseis_me_sm").val(data[i].SM_Sxeseis_me_sm);
            $("#SM_xronologisi_apo").val(data[i].SM_Xronologisi_apo_id);
            $("#SM_xronologisi_mexri").val(data[i].SM_Xronologisi_mexri_id);
            //--------------------Vasei check
            //----------------------
             //--------------------Anaskaf texn check
            //----------------------
            $("#SM_sinthikes").val(data[i].SM_Synthikes_id);
            $("#SM_pithanotita").val(data[i].SM_Pithanotita_epimixewn_id);
            if(data[i].SM_Koskino == "t"){
                $('#SM_koskino').prop('checked', true);
                $('#SM_koskino').prev().css('color', "#F75A1B");
            }
            if(data[i].SM_Nerokoskino == "t"){
                $('#SM_nerokoskino').prop('checked', true);
                $('#SM_nerokoskino').prev().css('color', "#F75A1B");
            }
            $("#SM_koskino_pososto").val(data[i].SM_Koskino_pososto);
            $("#SM_nerokoskino_pososto").val(data[i].SM_Nerokoskino_pososto);
            $("#SM_pososotita_keramikis").val(data[i].SM_Posostita_keramikis);
            $("#SM_hmerologio").val(data[i].SM_Hmerologio);
            $("#SM_syntaktis").val(data[i].SM_Syntaktis);
            $("#SM_hmerominia").val(data[i].SM_Hmerominia);

            var tmp_Array = new Array();
            tmp_Array = data[i].Vasei;
            for(var j=0; j<tmp_Array.length; j++){
                $('#SM_Vasei_'+tmp_Array[j]).prop('checked', true);
                $('#SM_Vasei_'+tmp_Array[j]).prev().css('color', "#F75A1B");
            } 

            tmp_Array = new Array();
            tmp_Array = data[i].Yliko;
            for(var j=0; j<tmp_Array.length; j++){
                $('#SM_uliko_'+tmp_Array[j]).prop('checked', true);
                $('#SM_uliko_'+tmp_Array[j]).prev().css('color', "#F75A1B");
            } 

            tmp_Array = new Array();
            tmp_Array = data[i].Prosmixeis;
            for(var j=0; j<tmp_Array.length; j++){
                $('#SM_prosmixeis_'+tmp_Array[j]).prop('checked', true);
                $('#SM_prosmixeis_'+tmp_Array[j]).prev().css('color', "#F75A1B");
            }

           
            tmp_Array = new Array();
            tmp_Array = data[i].Toixop;
            for(var j=0; j<tmp_Array.length; j++){
                $('#SM_toixopoiia_'+tmp_Array[j]).prop('checked', true);
                $('#SM_toixopoiia_'+tmp_Array[j]).prev().css('color', "#F75A1B");
            }

            tmp_Array = new Array();
            tmp_Array = data[i].Anaskaf_texn;
            for(var j=0; j<tmp_Array.length; j++){
                $('#SM_anaskaf_texn_'+tmp_Array[j]).prop('checked', true);
                $('#SM_anaskaf_texn_'+tmp_Array[j]).prev().css('color', "#F75A1B");
            }
            
        }
    
       }, (err) => {
           // Handle error
           alert("error on fill sm form after search "+err)
       });
}

//fill skeleton fields from searching results
function fill_Skeleton_inputs(skeletonID){
  
    cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Display_Skeleton.php?skeletonID="+skeletonID, (response) => {

        var data= response;
        var len = data.length;
    
        for(var i=0; i<len; i++){
            $("#SKEL_etos").val(data[i].Skeleton_Etos);
            $("#SKEL_sm_kops").val(data[i].Skeleton_SM_kopsimatos);
            $("#SKEL_tomeas").val(data[i].Skeleton_Tomeas);
            $("#SKEL_kataskeui").val(data[i].Skeleton_Kataskeui);
            $("#Skeleton_Enotita").val(data[i].Skeleton_Kataskeui);
            $("#SKEL_synolo").val(data[i].Skeleton_Synolo);
            $("#SKEL_fasi").val(data[i].Skeleton_Fasi);
            $("#SKEL_tautotita").val(data[i].Skeleton_Tautotita);
            $("#SKEL_kato_prin_apo").val(data[i].Skeleton_Kato_prin);
            $("#SKEL_pano_meta_apo").val(data[i].Skeleton_Pano_meta);
            $("#SKEL_typos_tafis").val(data[i].Skeleton_TyposTafisID);
            $("#SKEL_typos_tafou").val(data[i].Skeleton_TyposTafouID);
            $("#SKEL_synt_vora").val(data[i].Skeleton_B);
            $("#SKEL_synt_notou").val(data[i].Skeleton_N);
            $("#SKEL_synt_dysis").val(data[i].Skeleton_D);
            $("#SKEL_synt_anatolis").val(data[i].Skeleton_A);
            $("#SKEL_anot_Y_kran").val(data[i].Skeleton_Anot_Y);
            $("#SKEL_katot_Y_kran").val(data[i].Skeleton_Katot_Y);
            $("#SKEL_platos").val(data[i].Skeleton_Platos);
            $("#SKEL_mikos").val(data[i].Skeleton_Mikos);
            $("#SKEL_vathos").val(data[i].Skeleton_Vathos);
            $("#SKEL_osta").val(data[i].Skeleton_OstaID);
            $("#SKEL_tafi").val(data[i].Skeleton_TafiID);
            $("#SKEL_prosanatolismos").val(data[i].Skeleton_Prosanatolismos);
            $("#SKEL_geniki_stasi").val(data[i].Skeleton_Geniki_stasi);
            $("#SKEL_kefali").val(data[i].Skeleton_Kefali);
            $("#SKEL_kormos").val(data[i].Skeleton_Kormos);
            $("#SKEL_dexi_xeri").val(data[i].Skeleton_Dexi_xeri);
            $("#SKEL_aristero_xeri").val(data[i].Skeleton_Aristero_xeri);
            $("#SKEL_dexi_podi").val(data[i].Skeleton_Dexi_podi);
            $("#SKEL_aristero_podi").val(data[i].Skeleton_Aristero_podi);
            $("#SKEL_perigrafi_sxolia").val(data[i].Skeleton_Perigrafi);
            $("#SKEL_Y_skel_kata_xoran").val(data[i].Skeleton_Y_skel);
            $("#SKEL_mik_miriaiou_ostou").val(data[i].Skeleton_Mikos_mir);

            $("#SKEL_syneurimata").val(data[i].Skeleton_Sineurimata);
            $("#SKEL_anaskaf_texn").val(data[i].Skeleton_Anaskaf_texn);
            $("#SKEL_sinthikes").val(data[i].Skeleton_Synthikes);
            $("#SKEL_hmerologio").val(data[i].Skeleton_Hmerologio);
            $("#SKEL_syntaktis").val(data[i].Skeleton_Syntaktis);
            $("#SKEL_hmerominia").val(data[i].Skeleton_Hmerominia);


        }
    
    }, (err) => {
        alert("error on fill skeleton after search"+err)
    });
}



function closePopUp(){
    document.getElementById("PopUp").classList.toggle("activeAlert");
    $("#goUpButton").show();
    $("#topBar").show();
}



function checkLithos(){
    var thisDiv = $('#hasLithoDiv');
    thisDiv.slideToggle();
}

function checkPlintho(){
    var thisDiv = $('#hasPlinthoDiv');
    thisDiv.slideToggle();
}

function otherColor(){
    var thisDiv = $('#hasSyndetikoDiv');
    if (document.getElementById("SM_syndetiko_uliko").value == "other"){
        thisDiv.slideToggle();
    }else{
        if($("#hasSyndetikoDiv").css("display") == "grid"){
            thisDiv.slideToggle();
        }
    }
}

function otherEpixrisma(){
    var thisDiv = $('#hasEpixrismaDiv');
    if (document.getElementById("SM_epixrisma_xroma").value == "other"){
        thisDiv.slideToggle();
    }else{
        if($("#hasEpixrismaDiv").css("display") == "grid"){
            thisDiv.slideToggle();
        }
    }
}

function checkKeramoplastikos(){
    var thisDiv = $('#hasKeramoplastikosDiv');
    thisDiv.slideToggle();
}


function checkSpolia(){
    var thisDiv = $('#hasSpoliaDiv');
    thisDiv.slideToggle();
}

function checkXilo(){
    var thisDiv = $('#hasXiloDiv');
    thisDiv.slideToggle();
}


const scroller = document.querySelector("#firstScreenContent");

var btn=$('#goUpButton');

scroller.addEventListener("scroll", event => {
    if(scroller.scrollTop > 100){
        btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('#firstScreenContent').animate({scrollTop:0}, '300');
});


const scroller2 = document.querySelector("#secondScreenContent");

var btn2=$('#goUpButton2');

scroller2.addEventListener("scroll", event => {
    if(scroller2.scrollTop > 100){
        btn2.addClass('show');
    } else {
      btn2.removeClass('show');
    }
});


btn2.on('click', function(e) {
    e.preventDefault();
    $('#secondScreenContent').animate({scrollTop:0}, '300');
});


$(".checkBoxes").on('click','input:checkbox', function(e) {
    
    if( $(this).prev().css("color") == "rgb(247, 90, 27)"){
        $(this).prev().css("color","#306060");
    }else{
        $(this).prev().css("color","#F75A1B");
    }

});


//Check insertion SM / SM and skeleton
$('#saveSMbutton').on('click', function(e) {

    e.preventDefault();

    if($('#SMsm').val() != ""){

        var mesage="noInArray";

        cordova.plugins.RESTful.get("db3u04", "FmAF7P2A", myURL+"/Check_Existance_Of_SM.php?SM="+$('#SMsm').val(), (response) => {
            mesage=response.message;

            if(mesage=="noInArray"){
                insertNewSM();
               
                $('#firstScreenContent').animate({scrollTop:0}, '300');
            }else{
                $("#warningAlert").html("Η συγκεκριμένη ΣΜ υπάρχει <i class='fas fa-exclamation-circle' style='font-size:20px;color:#c54e4a'></i>")
                $("#warningAlert").animate({bottom: '10%'});
                setTimeout(function() {
                    $("#warningAlert").animate({bottom: '-100px'});
                }, 2500);
                $('#firstScreenContent').animate({scrollTop:0}, '300');

                $("#SMsm").css("border-bottom","1px solid #c54e4a;");
                setTimeout(function() {
                    $("#SMsm").css("border-bottom","1px solid #9fa0a0;");
                }, 1500); 
            }
           
        }, (err) => {
           alert("error on check existance"+err)
        });
     }
    else{
      
        $("#warningAlert").html("Είναι απαραίτητο το πεδίο 'ΣΜ' ")
      
        $("#warningAlert").animate({bottom: '10%'});
        setTimeout(function() {
            $("#warningAlert").animate({bottom: '-100px'});
        }, 2500);

        $('#firstScreenContent').animate({scrollTop:0}, '300');

        $("#SMsm").css("border-color","#c54e4a");
        setTimeout(function() {
            $("#SMsm").css("border-color","#9fa0a0");
        }, 1500);
    }
   
});


//clear skeleton inputs
function clearSkeleton(){
    //Dropdowns
    $('#SKEL_typos_tafis').prop("selectedIndex", 0);
    $('#SKEL_typos_tafou').prop("selectedIndex", 0);
    $('#SKEL_osta').prop("selectedIndex", 0);
    $('#SKEL_tafi').prop("selectedIndex", 0);
    // text/numbers
    $("#SKEL_etos").val("0");
    $("#SKEL_sm_kops").val("0");
    $("#SKEL_tomeas").val("0");
    $("#SKEL_kataskeui").val("");
    $("#SKEL_enotita").val("");
    $("#SKEL_synolo").val("");
    $("#SKEL_fasi").val("");
    $("#SKEL_tautotita").val("");
    $("#SKEL_kato_prin_apo").val("");
    $("#SKEL_pano_meta_apo").val("");
    $("#SKEL_synt_vora").val("0");
    $("#SKEL_synt_notou").val("0");
    $("#SKEL_synt_dysis").val("0");
    $("#SKEL_synt_anatolis").val(0);
    $("#SKEL_anot_Y_kran").val(0);
    $("#SKEL_katot_Y_kran").val("");
    $("#SKEL_mikos").val("0");
    $("#SKEL_platos").val("0");
    $("#SKEL_vathos").val("0");
    $("#SKEL_prosanatolismos").val("");
    $("#SKEL_geniki_stasi").val("");
    $("#SKEL_kefali").val("");
    $("#SKEL_kormos").val("");
    $("#SKEL_dexi_xeri").val("");
    $("#SKEL_aristero_xeri").val("");
    $("#SKEL_dexi_podi").val("");
    $("#SKEL_aristero_podi").val("");
    $("#SKEL_perigrafi_sxolia").val("");
    $("#SKEL_Y_skel_kata_xoran").val(0);
    $("#SKEL_mik_miriaiou_ostou").val("0");
    $("#SKEL_syneurimata").val("");
    $("#SKEL_anaskaf_texn").val("");
    $("#SKEL_sinthikes").val("");
}



//clear SM inputs
function clearSM(){
    //Dropwdowns
    $('#SMtypos_Sm').prop("selectedIndex", 0);
    $('#SMklisi_Pros').prop("selectedIndex", 0);
    $('#SMkatigoria_typos').prop("selectedIndex", 0);
    $('#SMdomi_yfi').prop("selectedIndex", 0);
    $('#SMxroma').prop("selectedIndex", 0);
    $('#SM_lithos_NAI_uliko').prop("selectedIndex", 0);
    $('#SM_epixrisma_eidos').prop("selectedIndex", 0);
    $('#SM_epixrisma_xroma').prop("selectedIndex", 0);
    $('#SM_dapedo').prop("selectedIndex", 0);
    $('#SM_thesi').prop("selectedIndex", 0);
    $('#SM_xronologisi_apo').prop("selectedIndex", 0);
    $('#SM_xronologisi_mexri').prop("selectedIndex", 0);
    $('#SM_sinthikes').prop("selectedIndex", 0);
    $('#SM_pithanotita').prop("selectedIndex", 0);

    //CheckBoxes
    $('#SM_uliko input:checked').each(function() {
        $(this).prop( "checked", false );
        $(this).prev().css("color","#306060")
    });
    $('#SM_prosmixeis input:checked').each(function() {
        $(this).prop( "checked", false );
        $(this).prev().css("color","#306060")
    });
    $('#SM_toixopoiia input:checked').each(function() {
        $(this).prop( "checked", false );
        $(this).prev().css("color","#306060")
    });
    $('#SM_Vasei input:checked').each(function() {
        $(this).prop( "checked", false );
        $(this).prev().css("color","#306060")
    });
    $('#SM_anaskaf_texn input:checked').each(function() {
        $(this).prop( "checked", false );
        $(this).prev().css("color","#306060")
    });

    $("#SMsm").val("");
    $("#SMetos").val("");
    $("#SMtautotita").val("");
    $("#SManot_Y").val("");
    $("#SMkatatot_Y").val("");

    $("#SMborras").val("");
    $("#SMnotos").val("");
    $("#SMdysi").val("");
    $("#SManatoli").val("");

    $("#SMantoistixi_Me").val("");
    $("#SMsyxroni_Me").val("");
    $("#SMkato_prin_apo").val("");
    $("#SMpano_meta_apo").val("");
    $("#SMmikos").val("");
    $("#SMplatos").val("");
    $("#SMypsos").val("");
    $("#SMdiametros").val("");
    $("#SMvathos").val("");
    $("#SMpaxos").val("");

    $("#SM_litho_OXI").prop( "checked", true );

    $("#SM_lithos_NAI_perigrafi").val("");
    
    $("#SM_plinthos_OXI").prop( "checked", true );

    $("#SM_syndetiko_uliko_other").val("");
    $("#SM_epixrisma_xroma_allo").val("");

    $("#SM_keramoplastikos_OXI").prop( "checked", true );

    $("#SM_keramoplastikos_NAI_perigrafi").val("");

    $("#SM_spollia_OXI").prop( "checked", true );

    $("#SM_spollia_NAI_perigrafi").val("");
    $("#SM_xylo_OXI").prop( "checked", true );
    $("#SM_xylo_NAI_perigrafi").val("");
    $("#SM_megethos_stoixeiwn").val("");
    $("#SM_arithm_soz").val("");
    $("#SM_perigrafi_erminia").val("");
    $("#SM_xarakt_me_sm").val("");
    $("#SM_sxeseis_me_sm").val("");
    $("#SM_koskino").prop( "checked", false );
    $("#SM_koskino").prev().css("color","#306060")
    $("#SM_nerokoskino").prop( "checked", false );
    $("#SM_nerokoskino").prev().css("color","#306060")
    $("#SM_koskino_pososto").val("");
    $("#SM_nerokoskino_pososto").val("");
    $("#SM_pososotita_keramikis").val("");
    $("#SM_hmerologio").val("");
    $("#SM_syntaktis").val("");
    $("#SM_hmerominia").val("");

    if (!$('#hasLithoDiv').is(':hidden'))
    {
        $('#hasLithoDiv').slideToggle();
    }
    if (!$('#hasPlinthoDiv').is(':hidden'))
    {
        $('#hasPlinthoDiv').slideToggle();
    }
    if (!$('#hasSyndetikoDiv').is(':hidden'))
    {
        $('#hasSyndetikoDiv').slideToggle();
    }
    if (!$('#hasEpixrismaDiv').is(':hidden'))
    {
        $('#hasEpixrismaDiv').slideToggle();
    }
    if (!$('#hasKeramoplastikosDiv').is(':hidden'))
    {
        $('#hasKeramoplastikosDiv').slideToggle();
    }
    if (!$('#hasSpoliaDiv').is(':hidden'))
    {
        $('#hasSpoliaDiv').slideToggle();
    }
    if (!$('#hasXiloDiv').is(':hidden'))
    {
        $('#hasXiloDiv').slideToggle();
    }

    if($("#SM_Ylika_texniki").attr("data-id") != "closed"){
        $('#SM_Ylika_texniki_div').slideToggle();
    }

    if($("#SM_Sydetagmenes").attr("data-id") != "closed"){
        $('#SM_Sydetagmenes_div').slideToggle();
    }

    $('#hasSkeleton').css("background-color"," #306060");

    $('#skeletonCheckbox').prop( "checked", false );
   
}

//Limiters for [0-100] number in inputs 
function limiter1(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
 }


 function limiter2(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
 }



