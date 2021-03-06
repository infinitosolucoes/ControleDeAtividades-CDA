<?php
	include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Atividade</title>
	<link rel="stylesheet" type="text/css" href="../css/atividade.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min_4.0.css" />

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<form method="GET" action="tarefa_view_2.php" >
		<div class="form-group">
			<div class="container-fluid">
				<div class="row">
					<div class="col" id="inp_descricao_edit">
						<label >Descrição</label>
						<input type="text" class="form-control" id="inp_descricao_edit_" name="descricao" placeholder="Descricao da Atividade" required="true" />
					</div>
				</div>
				<div class="row">
					<div class="col" id="inp_setor_edit">
						<label id="lb_setor">Setor </label><br/>
						<!--Select de Setor-->
						<select id="sel_setor" class="form-control box3D" name="setor" required="true">
							<option>Selecione...</option>
							<?php //cria as opcoes da TAG <select> com dados do DB  
								#seleciona os dados da tabela setor
								$res = mysqli_query($con,"SELECT id, nome FROM setor");
								$total = mysqli_num_rows($res);

								for($i=0; $i<$total; $i++){
									$dados = mysqli_fetch_row($res);
									$id = $dados[0];
									$nome = $dados[1]; 
									echo "<option value=\"$nome\">$nome</option>";
								} 
							?>
						</select><br/>
					</div>
				</div>
				<div class="row">
					<input  type="hidden" name="tabela" value="atividade" />
					<button type="submit" value="cadastrar" id="bt_cadastrar_atividade" name="acao" class="btn btn-primary box3D" >Salvar</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>