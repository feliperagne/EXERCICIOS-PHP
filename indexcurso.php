<?php
session_start();
if($_COOKIE['usuario']){ //TESTE PRA VER SE EXISTE UM USUARIO LOGADO NO COOKIE
	$_SESSION['usuario'] = $_COOKIE['usuario'];
}


if(!$_SESSION['usuario']){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<title>Projeto em PHP</title>
</head>
<body>
<header class="cabecalho" style="padding-left:38.5rem; padding-right:38.5rem;">
	<h1 style="margin-top:14px;">Projeto De PHP</h1>
	<h2>Índice dos exercícios</h2>
</header>
<nav class="navegacao">
       <span class="usuario">Usuário Logado: <?= $_SESSION['usuario']?></span>
	   <a href="logout.php" class="vermelho" style="margin-left:60rem;">Sair</a> 
    </nav>
<main class="principal">
	<div class="conteudo">
		<nav class="modulos">
			<div class="modulo verde">
				<h3>1. Básico</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=basico&file=ola">
							Olá PHP
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=basico&file=html">
							Integração HTML
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=basico&file=css">
							Integração CSS
						</a>
					</li>
					
					<li>
						<a href="exercicio.php?dir=basico&file=comentarios">
							Comentarios PHP
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=basico&file=desafio">
							Desafio	
						</a>
					</li>
					
				</ul>

			</div>
			<div class="modulo vermelho">
				<h3>2. Tipos</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=tipos&file=int">
							Tipo Inteiro
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=float">
							Tipo Foat
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=aritmeticas">
							Operações Aritmeticas
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=desafio_precedencia">
							Desafio de Precedencia
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=string">
							Tipo String
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=booleano">
							Tipo Booleano
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tipos&file=conversoes">
							Conversoes
						</a>
					</li>
					
				</ul>

			</div>
			<div class="modulo azul">
				<h3>3. Variaveis</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=variaveis&file=basico">
							Variaveis
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=variaveis&file=atribuicoes">
							Atribuições
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=variaveis&file=interpolacao">
							Interpolação
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">
							Variaveis Variaveis
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=variaveis&file=valor_referencia">
							Valor vs Referencia
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=variaveis&file=constantes">
							Constantes
						</a>
					</li>
</ul>
			</div>
			<div class="modulo roxo">
				<h3>4. Controle</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=controle&file=if_else">
							If e Else
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=controle&file=operadores_logicos">
							Operadores logicos e como fazer formulario
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=controle&file=operador_ternario">
							Operador Ternário
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=controle&file=switch">
							Switch
						</a>
					</li>
</ul>
			</div>
			<div class="modulo laranja">
				<h3>5. Array</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=array&file=basicoarray">
							Arrays
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=array&file=mapa">
							Mapa
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=array&file=operaçoesarray">
							Operações com Array
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=array&file=multidimensional">
							Array multidimensionais
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=array&file=constante">
							Array constante
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=array&file=$_GET e $_POST">
							$_GET e $_POST
						</a>
					</li>
				</ul>
			</div>
			<div class="modulo verde-escuro">
				<h3>6. Repetições</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=repeticoes&file=for">
							For
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=repeticoes&file=foreach">
							Foreach
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=repeticoes&file=break_continue">
							Break/Continue
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=repeticoes&file=while/dowhile">
							While/Do While
						</a>
					</li>
				</ul>
			</div>
					<div class="modulo vermelho-escuro">
				<h3>7. Funções</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=funções&file=escopo">
							Escopo e função
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=argumento_retorno">
							Argumentos e retorno
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=args_variaveis">
							Argumentos Variaveis
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=arg_padrao">
							Argumentos Padrão
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=usando_tipos">
							Usando tipos
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=funcao_anonima">
							Função anonima
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=closure">
							Closure e Callable
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=funções&file=recursividade">
							Recursividade
						</a>
					</li>
				
				<li>
					<a href="exercicio.php?dir=funções&file=retornando_funcao">
						Retornando uma Função
					</a>
				</li>
				<li>
					<a href="exercicio.php?dir=funções&file=map_filter">
						Funções Map e Filter
					</a>
				</li>
				</ul>
					</div>
					<div class="modulo azul-escuro">
				<h3>8. POO</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=classe">
							Classes e Objeto
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">
							Construtor e Destrutor
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=heranca">
							Herança
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=visibilidade">
							Visibilidade
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=static">
							Membros Estáticos
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=interface">
							Interface
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=classeabstrata">
							Classe abstrata
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=desafio7erros">
							Desafio dos 7 erros
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=modificador_final">
							Modificador final
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=traits">
							Traits
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=traits02">
							Traits pt.2
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=metodosmagicos">
							Métodos mágicos
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=classes_objetos&file=polimorfismo">
							Polimorfismo
						</a>
					</li>
</ul>
					</div>
					<div class="modulo roxo-escuro">
				<h3>9. Includes</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=includes&file=include">
							Include
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=includes&file=include_funcao">
							Include em Funções
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=includes&file=include_require">
							Include vs Require
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=includes&file=require_return">
							Require com Return
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=includes&file=include_once">
							Include e Require ONCE
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=includes&file=teste">
						Teste de require com pessoa.php e usuario.php
						</a>
					</li>
				</ul>
					</div>
					<div class="modulo laranja-escuro">
				<h3>10. Namespace</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=namespace&file=basico">
							Básico sobre namespace
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=namespace&file=sub_namespace">
							Sub-namespaces
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=namespace&file=use_as">
							Use\As com namespace
						</a>
					</li>
				</ul>
					</div>
					<div class="modulo verde">
				<h3>11. Tratamento de erro</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=tratamento_erro&file=try_catch">
							Try/Catch
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">
							Erros Personalizados
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">
							Desafio intdiv com o arquivo "desafio_intdiv.php"						
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">
							gerenciador de erro - erro handler						
						</a>
					</li>
				</ul>
					</div>
					<div class="modulo vermelho">
				<h3>12. Sessão</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=sessao&file=sessao_basico">
							Básico sobre Sessão
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=sessao&file=gerenciando_sessao">
							Gerenciamento de Sessões
						</a>
					</li>
</ul>
					</div>
					<div class="modulo azul">
				<h3>13. API</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=api&file=datas_01">
							Datas #01
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=datas_02">
							Datas #02
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=escrever_arquivo">
							Escrever arquivos 
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=ler_arquivo">
							Ler arquivos 
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=upload">
							Upload de arquivos
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=download">
							Download de arquivos
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=api&file=desafio_imagens">
							Desafio(download apenas com imagens)
						</a>
					</li>
				</ul>
					</div>
					<div class="modulo roxo">
				<h3>14. Formulários</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=formularios&file=formulario">
							Criando um Formulário com validação de erro
						</a>
					</li>
				</ul>
					</div>
					<div class="modulo laranja">
				<h3>15. Banco de dados</h3>
				<ul>
					<li>
						<a href="exercicio.php?dir=db&file=criar_banco">
							Criando o banco de dados
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=criar_tabelas">
							Criando tabelas
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=inserir1">
							Inserir dados em tabelas #01
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=consultar">
							Consultar dados em tabelas
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=excluir1">
							Excluir dados em tabelas #01
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=excluir2">
							Excluir dados em tabelas #02
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=inserir2">
							Inserir dados usando formulario
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=alterar">
							Alterar dados usando formulario
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=inserir_pdo">
							Inserindo dados usando PDO
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=consultar_pdo">
							Consultar dados usando PDO
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=excluir_pdo">
							Excluir dados usando PDO 
						</a>
					</li>
					<li>
						<a href="exercicio.php?dir=db&file=alterar_pdo">
							Alterar dados usando PDO 
						</a>
					</li>
				</ul>
					</div>
		</nav>
	</div>
</main>
<footer class="rodape">
	Felipe Silveira @ <?= date('Y') ?> Todos os direitos reservados.
</footer>


</body>
</html>