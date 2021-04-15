// var iconoMenu = document.getElementById('icono-menu')
// var accion = document.getElementById('submenu')

// var boolAccion = false
// iconoMenu.addEventListener('click', function() {
//     if (boolAccion == false) {
//         accion.classList.add('mostrar')
//         boolAccion = true
//     } else if (boolAccion == true) {
//         accion.classList.remove('mostrar')
//         boolAccion = false
//     }
// })

var iconoMenu = document.getElementById('icono-menu')
var accion = document.getElementById('menu')
var boolAccion = false

iconoMenu.addEventListener('click', function() {
    if (boolAccion == false) {
        accion.classList.add('mostrar')
        boolAccion = true
    } else if (boolAccion == true) {
        accion.classList.remove('mostrar')
        boolAccion = false
    }
})