class Animal {
    nombre;
    raza;
    color;
    edad;

    constructor(nombre, raza){
        this.nombre = nombre;
        this.raza = raza;
    }

    hablar(){
        return 'guau';
    }
}

let perro1 = new Animal('Nilo','perro');
    perro2 = new Animal('Roma', 'perro');
    gato1 = new Animal('Ñery', 'gato');

perro.hablar();

perro.nombre = 'Russo';