const peso1 = 1.0
const peso2 = Number('2.0')

console.log(peso1, peso2)
console.log(Number.isInteger(peso1))
console.log(Number.isInteger(peso2))

const avaliacao = 9.645
const avaliacao2 = 6.4524

const total = avaliacao * peso1 + avaliacao2 * peso2
const media = total / (peso1+peso2)
console.log(media.toFixed(2)) //COLOQUEI PRA SER APENAS 2 CASAS DECIMAIS 
console.log(media.toString(2))  //CONVERTE PRA BINÁRIO

console.log(typeof media)


//CUIDADOS NAS OPERAÇÕES COM NUMEROS
console.log(7/0)
console.log("10" / 2 )
console.log("11" + 4) //O + VAI JUNTAR , E NAO SOMAR OS NUMEROS
console.log("11" - 4) //O - VAI SUBTRAIR NORMAL 
console.log("show!" / 2 )
console.log(0.1/0.7)
//console.log(10.toString()) //NAO PODE
console.log((10.5378).toFixed(2))
