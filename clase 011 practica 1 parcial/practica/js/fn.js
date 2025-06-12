
async function datos (){
    let aux = await fetch("datos.json")
    let data = await aux.json()
    //console.log(data)
    return data
    }

async function punto1 (){
    let aux1 = await datos()
    let cantidad = aux1.results.length
    console.log('La cantidad de personas es de '+cantidad)
}

async function punto2 (){
    let aux2 = await datos()
    let personas = aux2.results
    let cantidad = 0
    for (i = 0; i < personas.length; i++){
        if (personas[i].gender == 'male') {
            cantidad++
        }
    }
    console.log('la cantidad de personas con genero = a male es de '+cantidad)
}

async function punto3 (){
    let aux3 = await datos()
    let personas = aux3.results
    let cantidad = 0
    for (i = 0; i < personas.length; i++){
        if (personas[i].gender == 'female') {
            cantidad++
        }
    }
    console.log('la cantidad de personas con genero = a female es de '+cantidad)
}

async function punto4 (){
    let aux4 = await datos()
    let personas1 = aux4.results
    let edad = 0
    for (i = 0; i < personas1.length; i++){
        edad = edad + personas1[i].dob.age
    }
    edad = edad/ personas1.length
    console.log('el promedio de edad es de '+edad+' años')
}

async function punto5 (){
    let aux5 = await datos()
    let personas2 = aux5.results
    let cantidad1 = 0
    for (i = 0; i < personas2.length; i++){
        if (personas2[i].dob.age < 28) {
            cantidad1++
        }
    }
    console.log('la cantidad de personas menores a 28 años es de '+cantidad1)
}