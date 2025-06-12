//ejercicio 1, buscar un personaje en la api y devolver normbre
let personaje1={
    "id": 2,
    "name": "Morty Smith",
    "status": "Alive",
    "species": "Human",
    "type": "",
    "gender": "Male",
    "origin": {
      "name": "Earth",
      "url": "https://rickandmortyapi.com/api/location/1"
    },
    "location": {
      "name": "Earth",
      "url": "https://rickandmortyapi.com/api/location/20"
    },
    "image": "https://rickandmortyapi.com/api/character/avatar/2.jpeg",
    "episode": [
      "https://rickandmortyapi.com/api/episode/1",
      "https://rickandmortyapi.com/api/episode/2",
      // ...
    ],
    "url": "https://rickandmortyapi.com/api/character/2",
    "created": "2017-11-04T18:50:21.651Z"
}
console.log(personaje1.name);

//ejercicio 2 buscar otro y devolver quien tiene mas episodios
let personaje2={    	
    "id": 24,
    "name": "Armagheadon",
    "status": "Alive",
    "species": "Alien",
    "type": "cromulon",
    "gender": "Male",
    "origin": {
      "name": "Signus 5 Expanse",
      "url": "https://rickandmortyapi.com/api/location/22"
    },
    "location": {
      "name": "Signus 5 Expanse",
      "url": "https://rickandmortyapi.com/api/location/22"
    },
    "image": "https://rickandmortyapi.com/api/character/avatar/24.jpeg",
    "episode": [
        "https://rickandmortyapi.com/api/episode/16"
    ],
    "url": "https://rickandmortyapi.com/api/character/24",
    "created": "2017-11-05T08:48:30.776Z"}

    if (personaje1.episode.length > personaje2.episode.length) {
        console.log(personaje1.name+' tiene mas episodios')
    }
    if (personaje1.episode.length < personaje2.episode.length) {
        console.log(personaje2.name+' tiene mas episodios')
    }