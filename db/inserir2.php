<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div class="titulo">Inserir dados usando formulário</div>
<?php 
if(count($_POST) > 0){//SE O ARRAY DE BANCO DE DADOS NAO ESTIVER VAZIO...
    $dados = $_POST;
    $erros = [];

    if(trim($dados['nome']) === ""){ //SE O NOME FOR IGUAL A VAZIO...
        $erros['nome'] =  'nome é obrigatório!'; 
    }

    if(isset($dados['nascimento'])){ 
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']); 
        if(!$data){ 
            $erros['nascimento'] = 'a data deve estar no padrão dd/mm/aaaa';
        }
    }
    if(!filter_var($dados['email'])){ 
        $erros['email'] ='email inválido ou não preenchido!' ;
    }

    if(!filter_var($dados['site'])){ 
        $erros['site'] ='site inválido ou não preenchido!' ;
     }

     $filhosconfig = [ "options" => ["min_range" => 0, "max_range" => 20]]; 
     if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosconfig) && $dados['filhos'] != 0){ 
        $erros['filhos'] ='quantidade inaceitável de filhos!';
     }

     $salarioconfig = ['options' => ['decimal' => ',']]; 
     if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioconfig)){
        $erros['salario'] = 'salário inválido!';
    }

    if(count($erros) == 0){
        require_once "conexao.php";
        $sql= "INSERT INTO cadastro 
        (nome,nascimento,email,site,filhos,salario) VALUES 
        (?,?,?,?,?,?)";

        $conexao = novaconexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
        ];
        $stmt->bind_param("ssssid", ...$params); //string, string, string,string,int,float ->variaveis colocadas na funçao bind_param

        if($stmt->execute()){
            unset($dados);
        }
    }

}   
?>


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
            name="nome" placeholder="Insira o nome" value="<?= $dados['nome'] ?>"> <!-- esse POST é pra manter os campos preenchidos mesmo dps de apertar o botao enviar!-->  
            <div class="invalid-feedback"><?= $erros['nome']?></div>
        </div>
        <div class="form-group col-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" 
            name="nascimento" placeholder="nascimento"  value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" 
            name="email" placeholder="Insira o email"  value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" 
            name="site" placeholder="site"  value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site']?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" 
            name="filhos" placeholder="Insira a quantidade de filhos"  value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos']?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" 
            name="salario" placeholder="Salário"  value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario']?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
    </form>