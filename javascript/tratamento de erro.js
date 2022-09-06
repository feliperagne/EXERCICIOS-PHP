function tratarErroElancar(erro){
    //throw new Error("deu merda aki!")
    throw{
        nome: erro.name,
        msg: erro.message,
        date: new Date
    }
}

function gritar(obj){
    try{
    console.log(obj.name.toUpperCase() + '!!!');
    } catch(e){
        tratarErroElancar(e)
    } finally{
        console.log("fim do processo!") //*O FINALLY É SEMPRE EXECUTADO
    }
}
const obj = {nome:'felipe'}
gritar(obj)