let thisdivId = document.querySelector('#this')
let thisdiv = document.createElement('p')
thisdiv.textContent = 'Bienvenido '+ username + ' - Edicion del inventario';

thisdivId.appendChild(thisdiv);



function buscar(){
    let type = document.querySelector('input[name="idName"]:checked')
    let buscado
    if (type.value == 'id'){
        let auxBusqueda = document.querySelector('#porId').value
        for (i=0; i < datos.length; i++){
            if (datos[i].id_producto == auxBusqueda){
                buscado = datos[i];
            }
        }
    }
    if (type.value == 'name'){
        let auxBusqueda = document.querySelector('#porNom').value
        for (i=0; i < datos.length; i++){
            if (datos[i].nombre_producto == auxBusqueda){
                buscado = datos[i];
            }
        }
    }   
    let debajo = document.querySelector('#debajo')
    debajo.removeChild(debajo.firstChild)
    

    let producto = document.createElement('div');
    producto.setAttribute('class','producto')
    let divData = document.createElement('div')
    divData.setAttribute('class','data')
    let id = document.createElement('p')
    id.textContent = 'ID: ' + buscado.id_producto
    let nameAux = document.createElement('p')
    nameAux.textContent = 'Nombre del producto:'
    let name = document.createElement('p')
    name.textContent = buscado.nombre_producto
    let prePro = document.createElement('p')
    prePro.textContent = 'Precio: $' + buscado.precio_producto
    let cantPro = document.createElement('p')
    cantPro.textContent = 'Cantidad disponible: ' + buscado.cantidad_producto
    let enVenta = document.createElement('p')
    enVenta.textContent = 'En venta: ' + buscado.en_venta
    let auxLink = document.createElement('p')
    auxLink.textContent = 'Nombre del archivo:'
    let link = document.createElement('p')
    link.textContent = buscado.url_imagen
    let divImg = document.createElement('div')
    divImg.setAttribute('class','divImg')
    let img = document.createElement('img')
    img.setAttribute('src', '../imagenes/' + buscado.url_imagen)
    img.setAttribute('id','laImagen')
    let des = document.createElement('p')
    des.textContent = 'Descripcion: ' + buscado.descripcion
    


    divData.appendChild(id)
    divData.appendChild(nameAux)
    divData.appendChild(name)
    divData.appendChild(prePro)
    divData.appendChild(cantPro)
    divData.appendChild(enVenta)
    divData.appendChild(auxLink)
    divData.appendChild(link)
    divImg.appendChild(img)
    producto.appendChild(divImg)
    producto.appendChild(divData)
    producto.appendChild(des)
    debajo.appendChild(producto)
}



let productosId = document.querySelector('#productos');
for (i = 0; i < datos.length; i++){
    let producto = document.createElement('div');
    producto.setAttribute('class','producto')
    let divData = document.createElement('div')
    divData.setAttribute('class','data')
    let id = document.createElement('p')
    id.textContent = 'ID: ' + datos[i].id_producto
    let name = document.createElement('p')
    name.textContent = 'Nombre del producto: ' + datos[i].nombre_producto
    name.setAttribute('class','name')
    let prePro = document.createElement('p')
    prePro.textContent = 'Precio: $' + datos[i].precio_producto
    let cantPro = document.createElement('p')
    cantPro.textContent = 'Cantidad disponible: ' + datos[i].cantidad_producto
    let enVenta = document.createElement('p')
    enVenta.textContent = 'En venta: ' + datos[i].en_venta
    let auxLink = document.createElement('p')
    auxLink.textContent = 'Nombre del archivo:'
    let link = document.createElement('p')
    link.textContent =  datos[i].url_imagen
    let divImg = document.createElement('div')
    divImg.setAttribute('class','divImg')
    let img = document.createElement('img')
    img.setAttribute('src', '../imagenes/' + datos[i].url_imagen)
    


    divData.appendChild(id)
    divData.appendChild(name)
    divData.appendChild(prePro)
    divData.appendChild(cantPro)
    divData.appendChild(enVenta)
    divData.appendChild(auxLink)
    divData.appendChild(link)
    divImg.appendChild(img)
    producto.appendChild(divImg)
    producto.appendChild(divData)
    productosId.appendChild(producto)
}

