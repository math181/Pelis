document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // Aquí podrías agregar código para enviar los datos del formulario a un servidor para procesar el pago
    
    // Simulando un tiempo de espera antes de mostrar el mensaje de transacción exitosa
    setTimeout(function() {
        document.getElementById('mensaje').classList.remove('hidden');
        document.getElementById('btn-volver').classList.remove('hidden');
    }, 2000);
});

document.getElementById('btn-volver').addEventListener('click', function() {
    window.location.href = 'pelis.html'; // Cambia 'index.html' por la URL de tu página principal
});
