function ultimaLetraMayus (){
    let pal1 = document.querySelector('#punto1i').value 
    let aux1 = pal1[pal1.length-1].toLocaleUpperCase()
    alert(aux1)
}
function letraAMayuscula (){
    let letra1 = document.querySelector('#punto2i').value
    let aux2 = letra1.toLocaleUpperCase()
    alert(aux2)
}
function mayorDe5 (num1,num2,num3,num4,num5) {
    let mayor = num1
    if (mayor < num2){mayor = num2}  
    if (mayor < num3){mayor = num3} 
    if (mayor < num4){mayor = num4} 
    if (mayor < num5){mayor = num5}  
    alert('el numero mayor es: '+ mayor)
}
function mayorDeArray (numeros){
    let mayor1
    for (let i = 0; i < numeros.length; i++) {
        if (i === 0){mayor1 = numeros[0]}
        else {
            if (mayor1 < numeros[i]){
                mayor1 = numeros[i]
            }
        }
    }
    alert('el numero mayor es: '+ mayor1)
}
function hayAmarillo (colores){
    let amarillo = false
    for (let i2 = 0; i2 < colores.length; i2++){
        for (let i3 = 0; i3 < colores[i2].length; i3++){
            if (colores[i2][i3].toLocaleUpperCase() === 'AMARILLO'){
                amarillo = true
            }
        }
    }
    if (amarillo === true) {
        alert('hay amarillo')
    } else {
        alert('no hay amarillo')
    }
}