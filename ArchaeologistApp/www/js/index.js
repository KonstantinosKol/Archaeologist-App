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
document.querySelector("#firstScreenButton2").addEventListener("click", function(e) {
    $('#firstScreenButton1').css("color","#d7d8d7");
    $('#firstScreenButton2').css("color","#4C9292");
    $('#secondScreenButton2').css("color","#4C9292");
    $('#secondScreenButton1').css("color","#d7d8d7");
    document.querySelector('.containerS').classList.toggle('view-change');
})

document.querySelector("#secondScreenButton1").addEventListener("click",e=>{
    $('#secondScreenButton2').css("color","#d7d8d7");
    $('#firstScreenButton2').css("color","#d7d8d7"); 
    $('#firstScreenButton1').css("color","#4C9292");
    $('#secondScreenButton1').css("color","#4C9292");
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

});