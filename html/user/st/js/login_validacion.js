document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const alertType = urlParams.get("alert");
    
    const mensajeParrafo = document.getElementById("mensaje"); 

    if (alertType === "error") {
        mensajeParrafo.textContent = "Datos erroneos";
        mensajeParrafo.style.color = "red"; 

    }
});
