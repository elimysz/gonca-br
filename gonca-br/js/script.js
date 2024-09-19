document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('processa-formulario.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        document.getElementById('responseMessage').innerText = result;
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        console.error('Erro:', error);
        document.getElementById('responseMessage').innerText = 'Ocorreu um erro ao enviar a mensagem.';
    });
});