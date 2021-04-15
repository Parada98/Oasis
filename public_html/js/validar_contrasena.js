(function() {
    document
        .getElementById("formulario")
        .addEventListener("submit", function(e) {
            if (
                document.getElementById("contrasena1").value !=
                document.getElementById("contrasena2").value
            ) {
                alert("Contraseñas no conciden");
                e.preventDefault();
            }
        });
})();