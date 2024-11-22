// Validação simples do formulário antes de enviar
document.getElementById('form-contato').addEventListener('submit', function(event) {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let mensagem = document.getElementById('mensagem').value;

    if (!nome || !email || !mensagem) {
        alert("Por favor, preencha todos os campos.");
        event.preventDefault(); // Evita o envio do formulário
    }
});
