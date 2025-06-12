let NombreUno, NombreDos
let ImagenUno, ImagenDos
let AtaqueUno = 0
let defensaUno = 0
let AtaqueDos = 0
let defensaDos = 0


document.getElementById('IngresoPokemon').addEventListener('click', 

async function() {
    let PokemonUno = document.getElementById('PokemonUno').value.toLowerCase();
    let PokemonDos = document.getElementById('PokemonDos').value.toLowerCase();

    console.log(PokemonUno)

    await PrimerPokemon(PokemonUno)
    await SegundoPokemon(PokemonDos)
    let restoUno =  AtaqueUno - defensaDos; 
    let restoDos =  AtaqueDos - defensaUno; 
    PokemonGanador(restoUno, restoDos)
})


async function PrimerPokemon(IdPokemonUno) {
    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${IdPokemonUno}`)
    const data = await response.json()

    NombreUno = document.getElementById('TituloPokemonUno').innerHTML = (data.name)
    ImagenUno = document.getElementById('ImagenPokemonUno').src = data.sprites.front_default

    for (let i = 0; i < data.stats.length; i++) {
        if (data.stats[i].stat.name === 'attack') { 
            document.getElementById('listaPokemonUno').innerHTML = (' attack: '+ data.stats[i].base_stat)
            AtaqueUno = data.stats[i].base_stat;
        }
        if (data.stats[i].stat.name === 'defense') { 
            document.getElementById('listaPokemonUnodef').innerHTML = (' defense: '+ data.stats[i].base_stat)
            defensaUno = data.stats[i].base_stat;
        }
    }
}

async function SegundoPokemon(IdPokemonDos) {
    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${IdPokemonDos}`)
    const data = await response.json()

    NombreDos = document.getElementById('TituloPokemonDos').innerHTML = (data.name)
    ImagenDos = document.getElementById('ImagenPokemonDos').src = data.sprites.front_default

    for (let i = 0; i < data.stats.length; i++) {
        if (data.stats[i].stat.name === 'attack') { 
            document.getElementById('listaPokemonDos').innerHTML = (' Attack: '+ data.stats[i].base_stat)
        
            AtaqueDos = data.stats[i].base_stat;
        }
        if (data.stats[i].stat.name === 'defense') { 
            document.getElementById('listaPokemonDosdef').innerHTML = (' defense: '+ data.stats[i].base_stat)
            defensaDos = data.stats[i].base_stat;
        }        
    }
}


async function PokemonGanador(restoUno, restoDos) {

    if (restoUno > restoDos) {
        document.getElementById('TituloPokemonGanador').innerHTML = (NombreUno)
        document.getElementById('ImagenPokemonGanador').src = (ImagenUno)
        document.getElementById('listaPokemonGanador').innerHTML = (' Daño: '+ restoUno)
    } else if (restoUno < restoDos) {
        document.getElementById('TituloPokemonGanador').innerHTML = (NombreDos)
        document.getElementById('ImagenPokemonGanador').src = (ImagenDos)
        document.getElementById('listaPokemonGanador').innerHTML = (' Daño: '+ restoDos)
    } else {
        document.getElementById('TituloPokemonGanador').innerHTML = ('EMPATE')
        document.getElementById('listaPokemonGanador').innerHTML = ('Elige otro pokemon')
        //POKEMON PARA EMPATE: 300 y 299
    }
}





