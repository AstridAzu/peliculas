document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("reservaForm");
    const mensaje = document.getElementById("mensaje");
    const btnMapa = document.getElementById("btnMapa");
    
    // Manejo del envío del formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita el envío tradicional
        
        // Obtener valores de los campos
        const nombre = document.getElementById("nombre").value.trim();
        const email = document.getElementById("email").value.trim();
        const fecha = document.getElementById("fecha").value.trim();
 
        // Validar que los campos no estén vacíos
        if (nombre === "" || email === "" || fecha === "") {
            mostrarMensaje("Todos los campos son obligatorios."+nombre + email+fecha, "error");
            return;
        }
        
        // Validar el formato del correo electrónico
        if (!validarEmail(email)) {
            mostrarMensaje("Correo electrónico no válido.", "error");
            return;
        }
        
        // Enviar datos mediante AJAX (fetch API)
        const formData = new FormData(form);
        
        fetch("procesar_reserva.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Convertir respuesta a JSON
        .then(data => {
            if (data.success) {
                mostrarMensaje(data.success, "success"); // Mostrar mensaje de éxito
                form.reset(); // Limpiar formulario
            } else {
                mostrarMensaje(data.error, "errormessage"); // Mostrar mensaje de error
            }
        })
        .catch(error => mostrarMensaje("Error en la conexión.", "errormessage"));
    });
    
    // Función para validar formato de correo electrónico
    function validarEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
    
    // Función para mostrar mensajes de éxito o error
    function mostrarMensaje(texto, tipo) {
        mensaje.textContent = texto;
        mensaje.className = tipo;
        setTimeout(() => { 
            mensaje.textContent = ""; 
            mensaje.className = "errormessage"; }, 3000);
    }
    
    // Simulación de botones de redes sociales
    document.querySelectorAll(".btn-redes").forEach(boton => {
        boton.addEventListener("click", function () {
            alert("Redirección a " + this.dataset.red);
        });
    });
    
    // Funcionalidad para abrir Google Maps en una nueva pestaña
    btnMapa.addEventListener("click", function () {
        window.open("https://www.google.com/maps", "_blank");
    });
});
