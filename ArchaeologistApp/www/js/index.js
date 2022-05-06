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


const myURL="yourURLfromDatabase";

document.addEventListener("deviceready", function() {
    $.ajax({
        url: myURL+"/ReadSM.php",
        dataType: 'json',
        jsonp:"callback",
        success: function (response) {
        
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
            <input type="checkbox" name="SM_uliko_${this.id}" id="SM_uliko_${this.id}">`;
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
       
     

            
        }//====End Success    
    });//===End AJAX

    $.ajax({
        url: myURL+"/ReadSkel.php",
        dataType: 'json',
        jsonp:"callback",
        success: function (response) {
        
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


      }//====End Success    
    });//===End AJAX

  })



document.querySelector("#firstScreenButton2").addEventListener("click", function(e) {
    $('#firstScreenButton1').css("color","#d7d8d7");
    $('#firstScreenButton2').css("color","#4C9292");
    document.querySelector('.containerS').classList.toggle('view-change');
})

document.querySelector("#firstScreenButton1").addEventListener("click",e=>{
    $('#firstScreenButton2').css("color","#d7d8d7"); 
    $('#firstScreenButton1').css("color","#4C9292");
    document.querySelector('.containerS').classList.toggle('view-change');
})

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
    // if($('#firstScreenContent').scrollTop() + $('#firstScreenContent').height() == $(document).height()) {
    //    btn.removeClass('show');
    // }
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

// =========================Save==================

$('#saveSMbutton').on('click', function(e) {
    e.preventDefault();

    // -------------------------SM---------------------------
    $('#firstScreenContent').animate({scrollTop:0}, '300');

    $("#SMsm").val("");
    $("#SMetos").val("");
    $("#SMtautotita").val("");
    $("#SManot_Y").val("");
    $("#SMkatatot_Y").val("");

    $("#SMborras").val("0");
    $("#SMnotos").val("0");
    $("#SMdysi").val("0");
    $("#SManatoli").val("0");

    $("#SMantoistixi_Me").val("0");
    $("#SMsyxroni_Me").val("0");
    $("#SMkato_prin_apo").val("0");
    $("#SMpano_meta_apo").val("0");
    $("#SMmikos").val("0");
    $("#SMplatos").val("0");
    $("#SMypsos").val("0");
    $("#SMdiametros").val("0");
    $("#SMvathos").val("0");
    $("#SMpaxos").val("0");

    $("#SM_litho_OXI").prop( "checked", true );

    $("#SM_lithos_NAI_perigrafi").val("");
    
    $("#SM_plinthos_OXI").prop( "checked", true );

    $("#SM_syndetiko_uliko_other").val("");
    $("#SM_epixrisma_xroma_allo").val("");

    $("#SM_keramoplastikos_OXI").prop( "checked", true );

    $("#SM_keramoplastikos_NAI_perigrafi").val("");

    $("#SM_spollia_OXI").prop( "checked", true );

    $("#SM_spollia_NAI_perigrafi").val("");
    $("#SM_xylo_NAI_perigrafi").val("");
    $("#SM_megethos_stoixeiwn").val("");
    $("#SM_arithm_soz").val("0");
    $("#SM_perigrafi_erminia").val("");
    $("#SM_xarakt_me_sm").val("");
    $("#SM_sxeseis_me_sm").val("");
    $("#SM_koskino").prop( "checked", false );
    $("#SM_nerokoskino").prop( "checked", false );
    $("#SM_koskino_pososto").val("0");
    $("#SM_nerokoskino_pososto").val("0");
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
    // -------------------------Skeletos---------------------------

    $("#SKEL_etos").val("0");
    $("#SKEL_sm_kops").val("0");
    $("#SKEL_tomeas").val("0");
    $("#SKEL_kataskeui").val("");
    $("#SKEL_enotita").val("");
    $("#SKEL_synolo").val("");
    $("#SKEL_fasi").val("");
    $("#SKEL_tautotita").val("");
    $("#SKEL_kato_prin_apo").val("");
    $("#SEKL_pano_meta_apo").val("");
    $("#SKEL_synt_vora").val("0");
    $("#SKEL_synt_notou").val("0");
    $("#SKEL_synt_dysis").val("0");
    $("#SKEL_synt_anatolis").val("0");
    $("#SKEL_anot_Y_kran").val("");
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
    $("#SKEL_Y_skel_kata_xoran").val("");
    $("#SKEL_mik_miriaiou_ostou").val("0");
    $("#SKEL_syneurimata").val("");
    $("#SKEL_anaskaf_texn").val("");
    $("#SKEL_sinthikes").val("");

});

function onResize(){

    if($("#bottomBar").css("display") == "grid"){
        $("#bottomBar").css("display","none")
    }else{
        $("#bottomBar").css("display","grid")
    }
}
