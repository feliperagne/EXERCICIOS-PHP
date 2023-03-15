var numero = 1
{
    let numero = 2
    console.log('dentro = ',numero)
}
console.log('fora = ',numero)


//USANDO LET EM LOOP

for (let i = 0; i < 10; i++){
    console.log(i)
}
console.log('i = ', i) //FORA DO LOOP A VARIAVEL NAO ESTA DISPONIVEL 


//PRA FUNCIONAR O CODIGO ABAIXO PRECISA COMENTAR O CODIGO ACIMA
const funcs = []
for(let i = 0; i < 10; i++){
    funcs.push(function(){
        console.log(i)
    })
}
funcs[2]()
funcs[8]()