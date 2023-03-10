// Define uma variável global para armazenar as mensagens do mural
var mensagens = [];

// Define a função que adiciona as mensagens no mural
function atualizarMural() {
  var mural = document.getElementById('mensagens');
  mural.innerHTML = '';
  for (var i = 0; i < mensagens.length; i++) {
    var mensagem = mensagens[i];
    var item = document.createElement('div');
    item.className = 'mensagem';
    item.innerHTML = '<h3>' + mensagem.titulo + '</h3><p>' + mensagem.texto + '</p>';
    mural.appendChild(item);
  }
}

// Define a função que é chamada quando o formulário é enviado
function enviarMensagem(event) {
  event.preventDefault(); // Previne o envio padrão do formulário
  var titulo = document.getElementById('titulo').value;
  var texto = document.getElementById('texto').value;
  if (titulo && texto) { // Verifica se os campos não estão vazios
    var mensagem = { titulo: titulo, texto: texto };
    mensagens.push(mensagem); // Adiciona a nova mensagem ao array de mensagens
    atualizarMural(); // Atualiza o mural com as novas mensagens
    document.getElementById('titulo').value = ''; // Limpa o campo do título
    document.getElementById('texto').value = ''; // Limpa o campo do texto
  }
}

// Adiciona um tratador de eventos para lidar com a submissão do formulário
var formulario = document.getElementById('formulario');
formulario.addEventListener('submit', enviarMensagem);

// Chama a função de atualização do mural pela primeira vez
atualizarMural();
