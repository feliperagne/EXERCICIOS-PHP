<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="titulo">Criando um Formulário</div>

<h2>Cadastro</h2>
<?php 
if(count($_POST) > 0){//SE O ARRAY DE BANCO DE DADOS NAO ESTIVER VAZIO...
    $erros = [];

    if(!filter_input(INPUT_POST, "nome")){ //VALIDANDO SE O CAMPO "NOME" DO FORMULARIO FOI PREENCHIDO
        $erros['nome'] =  'nome é obrigatório!'; //ATRIBUI A DESCRICAO DOS ERROS PARA CADA PARTE DO FORMULARIO USANDO A VARIAVEL "ERROS"
    }

    if(filter_input(INPUT_POST, "nascimento")){ //VALIDANDO SE O CAMPO "NASCIMENTO" DO FORMULARIO FOI PREENCHIDO
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']); //COLOCANDO A DATA EM FORMATO DIA, MES E ANO NO CAMPO NASCIMENTO DO POST
        if(!$data){ //SE A DATA NAO ESTIVER NO FORMATO DIA MES E ANO, COLOCAR O AVISO 
            $erros['nascimento'] = 'a data deve estar no padrão dd/mm/aaaa';
        }
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ //VALIDANDO SE O CAMPO "EMAIL" DO FORMULARIO FOI PREENCHIDO
        $erros['email'] ='email inválido ou não preenchido!' ;
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){ //VALIDANDO SE O CAMPO "SITE" DO FORMULARIO FOI PREENCHIDO
        $erros['site'] ='site inválido ou não preenchido!' ;
     }

     $filhosconfig = [ "options" => ["min_range" => 0, "max_range" => 20]]; //COLOCANDO O NUMERO DE FILHOS MINIMO EM 0 E MAXIMO EM 20 USANDO 2 ARRAYS
     if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosconfig) && $_POST['filhos'] != 0){ //VALIDANDO SE O CAMPO "filhos" DO FORMULARIO FOI PREENCHIDO, MAS DESSA VEZ USANDO A VARIAVEL QUE CONTÉM O ARRAY
        $erros['filhos'] ='quantidade inaceitável de filhos!';
     }

     $salarioconfig = ['options' => ['decimal' => ',']]; //COLOCANDO O SALARIO PRAS CASAS DECIMAIS SEREM COM VIRGULA
     if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioconfig)){ //VALIDANDO SE O CAMPO "SALARIO" DO FORMULARIO FOI PREENCHIDO, MAS DESSA VEZ USANDO A VARIAVEL QUE CONTÉM O ARRAY
        $erros['salario'] = 'salário inválido!';
    }
}   
?>

<!-- PODE SER EXIBIDO OS ERROS USANDO O METODO ABAIXO, MAS O JEITO ESCOLHIDO ESTÁ NA ULTIMA DIV E NO INPUT DE CADA CAMPO DO FORMULARIO -->

<?php foreach($erros as $erro): ?> <!-- EXIBINDO OS ERROS DENTRO DE UMA CLASSE BOOSTRAP -->
   <!-- <div class="alert alert-danger" role="alert"> -->
        <?= ''//$erro ?> <!-- AQUI ELE VAI EXIBIR OS ERROS COLOCADOS NOS "IF" ACIMA  -->
   <!-- </div> -->
    <?php endforeach ?>



<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" 
            name="nome" placeholder="Insira o nome" value="<?= $_POST['nome'] ?>"> <!-- esse POST é pra manter os campos preenchidos mesmo dps de apertar o botao enviar!-->  
            <div class="invalid-feedback"><?= $erros['nome']?></div>
        </div>
        <div class="form-group col-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" 
            name="nascimento" placeholder="nascimento"  value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" 
            name="email" placeholder="Insira o email"  value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" 
            name="site" placeholder="site"  value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" 
            name="filhos" placeholder="Insira a quantidade de filhos"  value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" 
            name="salario" placeholder="Salário"  value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario']?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
    </form>