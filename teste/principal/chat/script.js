$(document).ready(function(){

    showMensagem();

});

function showMensagem(){
    $("#conteiner_chat").html("");
  
   
        $.get("../getmensagem.php", 
           
        function(data, status){
                  
        data = JSON.parse(data);

        for(i = 0; i < data.length; i++){
        
            var text = '<div class = "conteiner_msg">';
            
        if(data[i].user == "enviar")
            text += '<div class = "msg enviar">';
        else
            text += '<div class = "msg receber">';

        text += '<div class = "usuario">'  + data[i].username + '</div>'+
        '<div class = "texto">'+ data[i].texto +'</div>'+
        '<div class = "horario"> '+ data[i].horario +'</div>'+
        '<div class = "dia">' + data[i].dia + '</div>'+
        '</div> </div>';
                
        
           
             }
        }
    );


 
}


