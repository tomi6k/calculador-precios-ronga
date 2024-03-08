document.addEventListener("DOMContentLoaded", function() {
    const precioContadoInput = document.getElementById("precioContado");
    const resultsContainer = document.getElementById("resultsContainer");

    // Función para formatear números con separadores de miles
    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    precioContadoInput.addEventListener("input", function() {
        const precioContado = parseFloat(precioContadoInput.value);

        if (!isNaN(precioContado)) {
            fetch("backend.php", {
                method: "POST",
                body: new URLSearchParams({
                    precioContado: precioContado
                })
            })
            .then(response => response.json())
            .then(data => {
                let resultsHTML = "";
                for (const [tarjeta, precio] of Object.entries(data)) {
                    const precioFormateado = formatNumber(precio.toFixed(2));
                    resultsHTML += `<p><strong>${tarjeta}:</strong> $${precioFormateado}</p>`;
                }
                resultsContainer.innerHTML = resultsHTML;
            })
            .catch(error => console.error("Error al obtener cotizaciones:", error));
        } else {
            resultsContainer.innerHTML = "";
        }
    });
});
