 function code(text, key, bool) {
    var result = "";
    var decode;

    if(bool == true) {
        decode = -1;
    } else {
        decode = 1;
    }

    for (var textLetter= 0; textLetter < text.length; textLetter++) {
        
        result += String.fromCharCode( text.charCodeAt(textLetter) + decode * key.charCodeAt(0) );
 
    }
    return result
}


 var buttonSend = document.querySelector(".button_send");
 var buttonGet = document.querySelector(".button_get");
 var room = document.querySelector(".room_number");
 var nick = document.querySelector(".user_nic");
 var textChat = document.querySelector("#text");
 var pole = $(".chat_pole");
 var mes = $(".message_chat");
 var nick_chat = $(".nick_chat");
 var mess_chat = $(".mess_chat");
 var decode = $(".decode_text");
 
 buttonSend.addEventListener("click", function(){
    var obj = {
        room : room.value,
        nick : nick.value,
        textChat: code(text.value, key.value)
    }

 var result = JSON.stringify(obj);
     $.ajax({
        url:"http://localhost/chatServer/save.php",
        type:"POST",
        data:{
            chatData: result
        },
        success: function(res){
            console.log(res)
                 $.ajax({
                        url:"http://localhost/chatServer/load.php",
                        type:"POST",
                        success: function(load){
                           var pars = JSON.parse(load);
                        console.log(pars);
                                var q = room.value;
                                 pole.empty();
                                  decode.empty();
                                  $("#text").val("");
                                for(i=0; i< pars.rooms[q].messages.length; ++i){
                                    pole.append('<div><span class="uk-label label">' +  pars.rooms[q].messages[i].nick +'</span>'+ " : "+ pars.rooms[q].messages[i].textChat+'</div>');
                                    decode.append('<div><span class="uk-label label">' +  pars.rooms[q].messages[i].nick +'</span>'+ " : "+ code(pars.rooms[q].messages[i].textChat, key.value, true)+'</div>');
                                    pole.scrollTop(1000000);
                                    decode.scrollTop(1000000);
                                }               
                            }
                })
        }
     })
 })
 
buttonGet.addEventListener("click", function(){
     $.ajax({
    url:"http://localhost/chatServer/load.php",
    type:"POST",
    success: function(load){
        
    var pars = JSON.parse(load);
    console.log(pars);
            var q = room.value;
            pole.empty();
            decode.empty();

                for(i=0; i< pars.rooms[q].messages.length; ++i){
                    
                pole.append('<div><span class="uk-label">'+"Ник: " +  pars.rooms[q].messages[i].nick +'</span>'+ " Сообщение: "+ pars.rooms[q].messages[i].textChat+'</div>');
                decode.append('<div><span class="uk-label">'+"Ник: " +  pars.rooms[q].messages[i].nick +'</span>'+ " Сообщение: "+ code(pars.rooms[q].messages[i].textChat, key.value, true)+'</div>');
                pole.scrollTop(1000000);
                decode.scrollTop(1000000);

                }
            }
    })  
})


 










