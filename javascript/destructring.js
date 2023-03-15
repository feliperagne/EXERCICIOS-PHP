const pessoa = {
    nome: 'ana',
    idade: 50,
    endereco: {
        logradouro: 'rua abc',
        numero: 1000
    }
}
const {nome, idade} = pessoa
console.log(nome,idade)

const {nome:n , idade:i} = pessoa
console.log(n,i)

const {sobrenome, bemHumorada = true} = pessoa
console.log(sobrenome,bemHumorada)

const { endereco: {logradouro, numero, cep} } = pessoa
console.log(endereco,numero,cep)

