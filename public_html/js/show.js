(function() {
        const mas = document.getElementById("mas"),
            precio = document.getElementById("precio"),
            menos = document.getElementById("menos"),
            cantidad = document.getElementById("cantidad"),
            total = document.getElementById("total");
            _precio = Number(precio.value);
            n = Number(cantidad.value) * _precio;
        total.value = n;
        
        
        function m_s(){
            n = Number(cantidad.value) + 1;
            cantidad.value = n;
            n = Number(cantidad.value) * _precio;
            total.value = n;
        }
        function m_r(){
            n = Number(cantidad.value) - 1;
            cantidad.value = n < 1 ? 1 : n;
            n = Number(cantidad.value) * _precio;
            total.value = n;
        }
        function cambio(){
            cantidad.value = cantidad.value < 1 ? 1 : cantidad.value;
            n = Number(cantidad.value) * _precio;
            total.value = n;
        } 
        mas.addEventListener("click", m_s);
        cantidad.addEventListener("change", cambio);
        menos.addEventListener("click", m_r);
   })();
