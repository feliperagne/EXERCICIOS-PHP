function rand({ min = 0, max = 1000}){
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor) 
}
console.log(rand({max: 50, min:40})) //*VAI GERAR UM NUMERO ALEATORIO ENTRE 40 E 50


function aleatorio({min = 0, max = 1000}){
    if(min>max) [min,max] = [max,min]
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}   
console.log(aleatorio([100,500]))