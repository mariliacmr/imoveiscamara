<?php
    session_start();
    if(($_SESSION['pri'] == "Master" || $_SESSION['pri'] == "Usuario") && $_SESSION['acesso'] == 1){
?>

<!DOCTYPE html>
<html>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
	<title>Imoveis Câmara</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="container">

    <div class="d-flex justify-content-center h-100">
		<div class="card">
        <div class="card-body">
            </br>
            <div class="form-group">
                            <center>
                            <button type="button" name="fincluir" onclick="f_incluir();" class="btn float-right login_btn">Incluir</button>
                            <button type="button" name="fexcluir" onclick="f_excluir();" class="btn float-right login_btn">Excluir</button>
                            <button type="button" name="falterar" onclick="f_alterar();" class="btn float-right login_btn">Alterar</button>
                            <button type="button" name="fconsultar" onclick="f_consultar();" class="btn float-right login_btn">Consultar</button>
                            </center>
            </div>

            </br>
        </div>


			<div class="card-header">
				<h3><center>Sistema de Cadastramento</center></h3>
			</div>
			<div class="card-body">
				<form name="form_usuario" method="post" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" id="email" name="email" placeholder="Informe o Email" required>
						
					</div>

                    <div class="form-group">
                            <center>
                            <button type="button" name="fincluir" onclick="f_incluir();" class="btn float-right login_btn">Incluir</button>
                            <button type="button" name="fexcluir" onclick="f_excluir();" class="btn float-right login_btn">Excluir</button>
                            <button type="button" name="falterar" onclick="f_alterar();" class="btn float-right login_btn">Alterar</button>
                            <button type="button" name="fconsultar" onclick="f_consultar();" class="btn float-right login_btn">Consultar</button>
                            </center>
                    </div>
                    
				</form>
			</div>

		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

    <script type="text/javascript" language="javascript">
    function f_consultar(){
        if(document.form_usuario.email.value==''){
            alert("Necessário preencher o campo LOGIN");
        }
        else{
            document.form_usuario.action = "cadastro_consultar.php";
            document.form_usuario.submit();
        }
    }

    function f_incluir(){
        if(document.form_usuario.email.value==''){
            alert("Necessário preencher o campo LOGIN");
        }
        else{
            document.form_usuario.action = "cadastro.php";
            document.form_usuario.submit();
        }
    }

    function f_alterar(){
        if(document.form_usuario.email.value==''){
            alert("Necessário preencher o campo LOGIN");
        }
        else{
            document.form_usuario.action = "cadastro_alterar.php";
            document.form_usuario.submit();
        }
    }

    function f_excluir(){
        if(document.form_usuario.email.value==''){
            alert("Necessário preencher o campo LOGIN");
        }
        else{
            document.form_usuario.action = "cadastro_excluir.php";
            document.form_usuario.submit();
        }
    }
    </script>

<?php
}
else {
    echo "<script> alert(Favor informar seu login e Senha');</script>";
    echo "<script> window.location='index.php';</script>";
}
?>

