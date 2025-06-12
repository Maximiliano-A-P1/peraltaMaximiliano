//lenguajes/dom 
//document hace referencia al html al que esta trabajando, cada js solo esta enlazado a un documento; solo uno


// consigna 1, modificar el h1 
let H1 = document.querySelector('#saludo')

H1.innerText = 'Hola mundo'


// consigna 2, funcion de saludar 
function saludar(){
    let H1 = document.getElementById('Bloque_A')
    
    H1.innerHTML = '<b>Hola mundo</b>'
    
    alert(H1.textContent)
}

//addEventListener consigna 3

//consigna 4 = DOS imputs text  de tipo number, en (html); ponerle 2 numeros y un boton para que busque los datos de los pokemons  y calcule el que mas atk tiene

async function pelea(){
    let aux1 = await fetch(`https://pokeapi.co/api/v2/pokemon/${document.querySelector('#p1').value}`)
    let pk1 = await aux1.json()
    let atkpk1 = pk1.stats[1].base_stat

    let aux2 = await fetch(`https://pokeapi.co/api/v2/pokemon/${document.querySelector('#p2').value}`)
    let pk2 = await aux2.json()
    let atkpk2 = pk2.stats[1].base_stat

    console.log(pk1)
    
    let ganador 
    if (atkpk1 > atkpk2) {
        ganador = 'El gandor es '+ pk1.name
    } 
    if (atkpk1 < atkpk2) {
        ganador = 'El gandor es '+ pk2.name
    }
    if (atkpk1 === atkpk2) {
        ganador = 'Los pokemones empatan'
    }
    let auxP = document.querySelector('#ganador')
    auxP.textContent = ganador
}
