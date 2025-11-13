let thisdivId = document.querySelector('#this')
let thisdiv = document.createElement('p')
thisdiv.textContent = 'Bienvenido '+ username;

thisdivId.appendChild(thisdiv);


let productosId = document.querySelector('#productos');
function buscar(clasificacion){
    while (productosId.firstChild) {
        productosId.removeChild(productosId.firstChild)
    }
    for (i = 0; i < datos.length; i++){
        if (datos[i].clasificacion == clasificacion && datos[i].en_venta == 'si'){
            let producto = document.createElement('div');
            producto.setAttribute('class','producto')
            let name = document.createElement('p')
            name.textContent = datos[i].nombre_producto
            name.setAttribute('class','name')
            let expo = document.createElement('div')            
            expo.setAttribute('class','expo')
            let divImg = document.createElement('div')
            divImg.setAttribute('class','divImg')
            let img = document.createElement('img')
            img.setAttribute('src', 'imagenes/' + datos[i].url_imagen)
            let divData = document.createElement('div')
            divData.setAttribute('class','data')
            let prePro = document.createElement('p')
            prePro.textContent = 'Precio: $' + datos[i].precio_producto
            let cantPro = document.createElement('p')
            cantPro.textContent = 'Cantidad disponible: ' + datos[i].cantidad_producto
            let des = document.createElement('p')
            des.textContent = 'Descripcion: ' + datos[i].descripcion
            


            producto.appendChild(name)
            producto.appendChild(expo)
            expo.appendChild(divImg)
            divImg.appendChild(img)
            divImg.appendChild(prePro)
            divImg.appendChild(cantPro)
            expo.appendChild(divData)
            divData.appendChild(des)
            productosId.appendChild(producto)
        }
    }
}