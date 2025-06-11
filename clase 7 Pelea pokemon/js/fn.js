sessionStorage.setItem('dadosT',0)
sessionStorage.setItem('contar1',0)
sessionStorage.setItem('contar2',0)
sessionStorage.setItem('chek1',0)
sessionStorage.setItem('chek2',0)
sessionStorage.setItem('puntaje1',0)
sessionStorage.setItem('puntaje2',0)

function tirarDados1(){
    let contar1 = sessionStorage.getItem('contar1')
    if (contar1 < 2) {
        let dado1 = document.querySelector('#dado1')
        let dado2 = document.querySelector('#dado2')

        numero1 = Math.floor(Math.random()*6 + 1)
        numero2 = Math.floor(Math.random()*6 + 1)
        dado1.textContent = numero1
        dado2.textContent = numero2

        contar1++
        sessionStorage.setItem('contar1',contar1)

        let puntaje1 = numero1 + numero2
        console.log(puntaje1)
        sessionStorage.setItem('puntaje1',puntaje1)
        sessionStorage.setItem('chek1',1)
        chekear()
    }
}
function tirarDados2(){
    let contar2 = sessionStorage.getItem('contar2')
    if (contar2 < 2) {
        let dado3 = document.querySelector('#dado3')
        let dado4 = document.querySelector('#dado4')

        numero3 = Math.floor(Math.random()*6 + 1)
        numero4 = Math.floor(Math.random()*6 + 1)
        dado3.textContent = numero3
        dado4.textContent = numero4

        contar2++
        sessionStorage.setItem('contar2',contar2)

        let puntaje2 = numero3 + numero4
        console.log(puntaje2)
        sessionStorage.setItem('puntaje2',puntaje2)
        sessionStorage.setItem('chek2',1)
        chekear()
    }
}

function chekear(){
    let chek1 = sessionStorage.getItem('chek1')
    let chek2 = sessionStorage.getItem('chek2')
    if (chek1 == 1 && chek2 == 1 ){
        sessionStorage.setItem('dadosT',1)
    }
}

let dadosT
let puntaje1
let puntaje2

async function comenzarPelea(dadosT, puntaje1, puntaje2) {
    dadosT = sessionStorage.getItem('dadosT')
    if (dadosT == 0) {
        let alerta = 'Primero tire los dados'
        alert(alerta)
    }
    else if (dadosT == 1) {
        //let pokemonesId = [];                                           forma funcional
        /*
        for (let i = 0; i < 6; i++) {
        pokemonesId.push(document.querySelector('#poke${i+1}').value)
        } forma solo posible en fetch
        */
        /*
        pokemonesId[0]=document.querySelector('#poke1').value
        pokemonesId[1]=document.querySelector('#poke2').value
        pokemonesId[2]=document.querySelector('#poke3').value
        pokemonesId[3]=document.querySelector('#poke4').value
        pokemonesId[4]=document.querySelector('#poke5').value
        pokemonesId[5]=document.querySelector('#poke6').value
        */
        /*                                                                  forma funcional
        for (let i = 0; i < 6; i++) {
           pokemonesId.push(document.querySelector('#poke'+(i+1)).value)
        }
        */
        let pokemones = []
        for (let i = 0; i < 6; i++) {
            let pokemon = await fetch(`https://pokeapi.co/api/v2/pokemon/${document.querySelector('#poke'+(i+1)).value}`)
            pokemones.push(await pokemon.json())
        }
        let atk1 = pokemones[0].stats[1].base_stat + pokemones[1].stats[1].base_stat + pokemones[2].stats[1].base_stat
        let def1 = pokemones[0].stats[2].base_stat + pokemones[1].stats[2].base_stat + pokemones[2].stats[2].base_stat
        let atk2 = pokemones[3].stats[1].base_stat + pokemones[4].stats[1].base_stat + pokemones[5].stats[1].base_stat
        let def2 = pokemones[3].stats[2].base_stat + pokemones[4].stats[2].base_stat + pokemones[5].stats[2].base_stat
        
        console.log(pokemones[0])

        let poke1img = document.querySelector('#poke1img')
        poke1img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[0].id}.png`)
        let poke1atk = document.querySelector('#atk1')
        poke1atk.textContent = 'ATK: ' + pokemones[0].stats[1].base_stat
        let poke1def = document.querySelector('#def1')
        poke1def.textContent = 'DEF: ' + pokemones[0].stats[2].base_stat

        let poke2img = document.querySelector('#poke2img')
        poke2img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[1].id}.png`)
        let poke2atk = document.querySelector('#atk2')
        poke2atk.textContent =  'ATK: ' + pokemones[1].stats[1].base_stat
        let poke2def = document.querySelector('#def2')
        poke2def.textContent = 'DEF: ' + pokemones[1].stats[2].base_stat

        let poke3img = document.querySelector('#poke3img')
        poke3img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[2].id}.png`)
        let poke3atk = document.querySelector('#atk3')
        poke3atk.textContent =  'ATK: ' + pokemones[2].stats[1].base_stat
        let poke3def = document.querySelector('#def3')
        poke3def.textContent = 'DEF: ' + pokemones[2].stats[2].base_stat

        let poke4img = document.querySelector('#poke4img')
        poke4img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[3].id}.png`)
        let poke4atk = document.querySelector('#atk4')
        poke4atk.textContent =  'ATK: ' + pokemones[3].stats[1].base_stat
        let poke4def = document.querySelector('#def4')
        poke4def.textContent = 'DEF: ' + pokemones[3].stats[2].base_stat

        let poke5img = document.querySelector('#poke5img')
        poke5img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[4].id}.png`)
        let poke5atk = document.querySelector('#atk5')
        poke5atk.textContent =  'ATK: ' + pokemones[4].stats[1].base_stat
        let poke5def = document.querySelector('#def5')
        poke5def.textContent = 'DEF: ' + pokemones[4].stats[2].base_stat

        let poke6img = document.querySelector('#poke6img')
        poke6img.setAttribute('src', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/shiny/${pokemones[5].id}.png`)
        let poke6atk = document.querySelector('#atk6')
        poke6atk.textContent =  'ATK: ' + pokemones[5].stats[1].base_stat
        let poke6def = document.querySelector('#def6')
        poke6def.textContent = 'DEF: ' + pokemones[5].stats[2].base_stat
        
        let resto1 = atk1 - def2 
        if (resto1 < 0 ) {resto1 = 0} 
        let resto2 = atk2 - def1 
        if (resto2 < 0 ) {resto2 = 0}
        if (resto1 > resto2){ 
            setTimeout(() => {
                alert('El equipo azul gana!') 
            }, 3000)
        }
        if (resto1 < resto2){ 
             setTimeout(() => {
                alert('El equipo rojo gana!') 
            }, 3000)
        }
        puntaje1 = sessionStorage.getItem('puntaje1')
        puntaje2 = sessionStorage.getItem('puntaje2')
        if (resto1 === resto2){
            if (puntaje1 > puntaje2) {
                setTimeout(() => {
                    alert('El equipo azul gana por dados!') 
                }, 3000)
            }
            if (puntaje1 < puntaje2) {
                setTimeout(() => {
                    alert('El equipo rojo gana por dados!') 
                }, 3000)
            }
            if (puntaje1 === puntaje2) {
                setTimeout(() => {
                    alert('Empatan tanto en combate como en dados!') 
                }, 3000)
                setTimeout(() => {
                    alert('It is a trap!!!') 
                }, 10000)
            }
        }
    }
}
