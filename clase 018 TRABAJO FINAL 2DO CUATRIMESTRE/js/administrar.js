let thisdivId = document.querySelector('#this')
let thisdiv = document.createElement('p')
thisdiv.textContent = 'Bienvenido '+ username;

thisdivId.appendChild(thisdiv);

function buscar(){
    let type = document.querySelector('input[name="idName"]:checked')
    let buscado = false
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
    if (buscado == false){
        let debajo = document.querySelector('#debajo')
        debajo.removeChild(debajo.firstChild)

        let sorry = document.createElement('p')
        sorry.textContent = 'No existe una cuenta con esa ID o Nombre en la base de datos; datos mal ingresado o fue eliminada.'
        sorry.setAttribute('class','sorry')
        debajo.appendChild(sorry)
    } else {
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
}

let expoUsuarios = document.querySelector('.usuExp')
for (i = 0 ; i < datos.length; i++){
    if (i == 0) {
        let divaux = document.createElement('div')
        divaux.setAttribute('class','flex usuario')
        let id_usuarioaux = document.createElement('p')
        id_usuarioaux.textContent = 'ID de Usuario'
        let usernameaux = document.createElement('p')
        usernameaux.textContent = 'Nombre de usuario'
        let permisoaux = document.createElement('p')
        permisoaux.textContent = 'Permiso de la cuenta'



        divaux.appendChild(id_usuarioaux)
        divaux.appendChild(usernameaux)
        divaux.appendChild(permisoaux)
        expoUsuarios.appendChild(divaux)
    }
    let usuario = document.createElement('div')
    usuario.setAttribute('class','flex usuario')
    let id_usuario = document.createElement('p')
    id_usuario.textContent = datos[i].id_usuario
    let username = document.createElement('p')
    username.textContent = datos[i].username
    let permiso = document.createElement('p')
    permiso.textContent = datos[i].permiso



    usuario.appendChild(id_usuario)
    usuario.appendChild(username)
    usuario.appendChild(permiso)
    expoUsuarios.appendChild(usuario)
}

let expoModificaciones = document.querySelector('.modExp')
for (i = 0 ; i < datos2.length; i++){
    if (i == 0) {
        modificaionaux = document.createElement('div')
        modificaionaux.setAttribute('class', 'flex modificacion')
        id_modificacionaux = document.createElement('p')
        id_modificacionaux.textContent = 'Numero de modificacion'
        id_usuarioaux = document.createElement('p')
        id_usuarioaux.textContent = 'ID del editor'
        id_productoaux = document.createElement('p')
        id_productoaux.textContent = 'ID del producto'
        fecha_horaaux = document.createElement('p')
        fecha_horaaux.textContent = 'Fecha de modificacion'



        modificaionaux.appendChild(id_modificacionaux)
        modificaionaux.appendChild(id_usuarioaux)
        modificaionaux.appendChild(id_productoaux)
        modificaionaux.appendChild(fecha_horaaux)
        expoModificaciones.appendChild(modificaionaux)
    }
    let modificaion = document.createElement('div')
    modificaion.setAttribute('class','flex modificacion')
    let id_modificacion = document.createElement('p')
    id_modificacion.textContent = datos2[i].id_modificacion
    let id_usuario = document.createElement('p')
    id_usuario.textContent = datos2[i].id_usuario
    let id_producto = document.createElement('p')
    id_producto.textContent = datos2[i].id_producto
    let fecha_hora = document.createElement('p')
    fecha_hora.textContent = datos2[i].fecha_hora



    modificaion.appendChild(id_modificacion)
    modificaion.appendChild(id_usuario)
    modificaion.appendChild(id_producto)
    modificaion.appendChild(fecha_hora)
    expoModificaciones.appendChild(modificaion)
}