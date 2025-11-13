let thisdivId = document.querySelector('#this')
let thisdiv = document.createElement('p')
thisdiv.textContent = 'Bienvenido '+ username;

thisdivId.appendChild(thisdiv);

function buscar(){
    let type = document.querySelector('input[name="idName"]:checked')
    let buscado
    if (type.value == 'id'){
        let auxBusqueda = document.querySelector('#porId').value
        for (i=0; i < datos.length; i++){
            if (datos[i].id_usuario == auxBusqueda){
                buscado = datos[i];
            }
        }
    }
    if (type.value == 'name'){
        let auxBusqueda = document.querySelector('#porNom').value
        for (i=0; i < datos.length; i++){
            if (datos[i].username == auxBusqueda){
                buscado = datos[i];
            }
        }
    }   
    let debajo = document.querySelector('#debajo')
    debajo.removeChild(debajo.firstChild)
    

    let usuario = document.createElement('div');
    usuario.setAttribute('class', 'buscado')
    let id_usuario = document.createElement('p')
    id_usuario.textContent = 'ID: ' + buscado.id_usuario
    let username = document.createElement('p')
    username.textContent = 'Usuario: ' + buscado.username
    let permiso = document.createElement('p')
    permiso.textContent = 'Permiso: ' + buscado.permiso 



    usuario.appendChild(id_usuario)
    usuario.appendChild(username)
    usuario.appendChild(permiso)
    debajo.appendChild(usuario)
}

let expoUsuarios = document.querySelector('.usuExp')
for (i = 0 ; i < datos.length; i++){
    let usuario = document.createElement('div')
    usuario.setAttribute('class','flex usuario')
    let id_usuario = document.createElement('p')
    id_usuario.textContent = 'ID: ' + datos[i].id_usuario
    let username = document.createElement('p')
    username.textContent = 'Usuario: ' + datos[i].username
    let permiso = document.createElement('p')
    permiso.textContent = 'Permiso: ' + datos[i].permiso



    usuario.appendChild(id_usuario)
    usuario.appendChild(username)
    usuario.appendChild(permiso)
    expoUsuarios.appendChild(usuario)
}

let expoModificaciones = document.querySelector('.modExp')
for (i = 0 ; i < datos2.length; i++){
    let modificaion = document.createElement('div')
    modificaion.setAttribute('class','flex modificacion')
    let id_modificacion = document.createElement('p')
    id_modificacion.textContent = 'Nro: ' + datos2[i].id_modificacion
    let id_usuario = document.createElement('p')
    id_usuario.textContent = 'ID_usuario: ' + datos2[i].id_usuario
    let id_producto = document.createElement('p')
    id_producto.textContent = 'ID_producto: ' + datos2[i].id_producto
    let fecha_hora = document.createElement('p')
    fecha_hora.textContent = 'Fecha: ' + datos2[i].fecha_hora



    modificaion.appendChild(id_modificacion)
    modificaion.appendChild(id_usuario)
    modificaion.appendChild(id_producto)
    modificaion.appendChild(fecha_hora)
    expoModificaciones.appendChild(modificaion)
}