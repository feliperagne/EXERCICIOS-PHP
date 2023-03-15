const imprimirSoma = function(a,b){
    console.log(a*b)
}
imprimirSoma(2,5)

const soma = (a,b) => {
    return(a+b)
}
console.log(soma(2,4))


const subtracao = (a,b) => a-b //RETORNEI O A-B IMPLICITAMENTE!
console.log(subtracao(2,10))


const imprimir2 = a => console.log(a) //DECLARANDO E IMPRIMINDO UMA FUNCAO COM APENAS 1 PARAMETRO
imprimir2('até que ta legal...')
