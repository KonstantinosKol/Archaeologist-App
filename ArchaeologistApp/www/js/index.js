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
    if (document.getElementById("SyndetikoYliko").value == "otherColor"){
        thisDiv.slideToggle();
    }else{
        if($("#hasSyndetikoDiv").css("display") == "grid"){
            thisDiv.slideToggle();
        }
    }
}


