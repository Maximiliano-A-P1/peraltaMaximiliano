function sumar(aux1, aux2){
    let valor = aux1 + aux2;
    return valor;
} 
console.log(sumar(2,5));
persona1 = {
    nombre: 'Luca',
    apellido: 'Torre',
    edad: 28,
    dni: 24567890,
    colores: ['rojo','azul','amarillo']
}
persona2 = {
    nombre: 'Maria',
    apellido: 'Barra',
    edad: 32,
    dni: 21567342, 
    colores: ['verde','naranja','violeta']
}

function mayor(dude1, dude2) {
    var myr = null;
    azul = false;
    color = 'no le gusta el azul'
    if (dude1.edad > dude2.edad){
        var myr = dude1.nombre+' '+dude1.apellido
        for (i=0; i < 2; i++){
            if (dude1.colores[i] == 'azul'){
                azul=true
            }
        }
    }
    if (dude1.edad < dude2.edad){
        var myr = dude2.nombre+' '+dude2.apellido
        for (i=0; i < 2; i++){
            if (dude2.colores[i] == 'azul'){
                azul=true
            }
        }
    }
    if (azul == true) {color="le gusta el azul"}
    return console.log('La persona mayor es: ',myr,' y ',color)
}
mayor(persona1,persona2)