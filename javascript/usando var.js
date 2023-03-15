{
  {
    {
      {
        var loko = "sou loko";
      }
    }
  }
}
console.log(loko)

function teste(){
    var local = 123
    console.log(local)
}
teste()
//console.log(local) //NAO PODE CHAMAR A VARIAVEL FORA DO CORPO DA FUNCAO


var numero = 1
{
    var numero = 2
    console.log('dentro =', numero)
}
console.log('fora = ', numero) //vai sempre imprimir a variavel que foi declarada por ultimo


//USANDO VAR EM LOOP

for (var i = 0; i < 10; i++){
    console.log(i)
}
console.log('i = ', i)


const funcs = []
for(var i = 0; i < 10; i++){
    funcs.push(function(){
        console.log(i)
    })
}
funcs[2]()
funcs[8]()