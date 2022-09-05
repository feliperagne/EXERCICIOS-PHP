const valores = [7.7 , 8.9 , 9.0 , 7.8]
console.log(valores[1] , valores[3])

valores[4] = 10
console.log(valores)
console.log(valores.length) //ver o tamanho do array

valores.push({id:3}, false , null , 'teste')
console.log(valores)
console.log(valores.length)

console.log(valores.pop()) //remove o ultimo elemento do array, nesse caso remove o "teste"
delete valores[0]
console.log(valores)

