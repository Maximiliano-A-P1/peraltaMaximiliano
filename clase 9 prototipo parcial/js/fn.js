sessionStorage.setItem('cantidad',0)
sessionStorage.setItem('mayor',0)
sessionStorage.setItem('elMayor',0)

async function buscar(){
    num = document.querySelector('#num').value
    if (num < 2 || num > 5) {
        alert('El numero deve ser entre 2 y 5 inclusives')
    }
    if (num >= 2 && num <= 5){
        for (let i = 0; i < num; i++ ) {
            let aux = await fetch(`https://randomuser.me/api?format=json/?results=${num}/`)
            .catch(error => alert(error.message))
            /*
            hecho en un for porque la api esta con un error en el cual results no se puede usar junto
            con format y sin format no devuelev json
            */

            let personas = await aux.json()
            let divContenedor = document.querySelector('#personas')

            let cadaPersona = document.createElement('div')
            let cantidad = sessionStorage.getItem('cantidad')
            cantidad++
            let laId = 'div'+ cantidad
            sessionStorage.setItem('cantidad',cantidad)
       
            cadaPersona.setAttribute('id', laId)
            cadaPersona.setAttribute('class', 'expo')
            console.log(cadaPersona)

            let nombre = document.createElement('p')
            nombre.textContent = 'Nombre: '+personas.results[0].name.first
            let apellido = document.createElement('p')
            apellido.textContent = 'Apellido: '+personas.results[0].name.last
            let foto = document.createElement('img')
            foto.setAttribute('src', personas.results[0].picture.large)
            let edad = document.createElement('p')
            edad.textContent = 'Edad: '+ personas.results[0].dob.age
            let residencia = document.createElement('p')
            residencia.textContent = 'Residencia: '+ personas.results[0].location.city + ' - ' + personas.results[0].location.country
            let genero = document.createElement('p')
            genero.textContent = 'Genero: '+  personas.results[0].gender

            //let auxfus = document.createElement('p')
            //auxfus.textContent = cantidad

            cadaPersona.appendChild(foto)
            cadaPersona.appendChild(apellido)
            cadaPersona.appendChild(nombre)
            cadaPersona.appendChild(edad)
            cadaPersona.appendChild(residencia)
            cadaPersona.appendChild(genero)
            //cadaPersona.appendChild(auxfus)

            divContenedor.appendChild(cadaPersona)
            //console.log(personas)

            let mayor = sessionStorage.getItem('mayor') 
            let elMayor
            if (mayor < personas.results[0].dob.age) {
                mayor = personas.results[0].dob.age
                sessionStorage.setItem('mayor',mayor)
                elMayor = sessionStorage.getItem('cantidad')
                sessionStorage.setItem('elMayor',elMayor)
            }   
        }
    }
}
async function resaltar(){
    let mayor1 = sessionStorage.getItem('elMayor')
    let mayorId = 'div'+mayor1
    let mayorDiv = document.querySelector('#'+mayorId)
    mayorDiv.setAttribute('class','expo mayor')
    console.log(mayorDiv)
}

//notas de la clase
//resaltar el mayor 
//mensajes de errores
