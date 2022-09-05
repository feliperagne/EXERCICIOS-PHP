console.log(Math.ceil(6.1))

const obj1 = {}
obj1.nome = 'felipe'
obj1['nome'] = 'felipe2' //SOBRESCREVEU O NOME
console.log(obj1.nome)

function obj(nome){
    this.nome = nome
    this.exec = function(){
        console.log('executando...')
    }
}

const obj2 = new obj('cadeira')
const obj3 = new obj('mesa') //SÃO 2 INSTANCIAS DIFERENTES
console.log(obj2.nome)
console.log(obj3.nome)
obj3.exec() 



