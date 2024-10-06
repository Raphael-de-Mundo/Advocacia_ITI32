<!DOCTYPE html>
<html lang="en">
<head>
    <title>Criar Orçamento</title>    
    <meta charset="utf-8">

<!-- REFERÊNCIAS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="images/demo/balanca png.png" />
<script src="Mascara.js"></script>

<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="estilo.css" rel="stylesheet">

</head>
<body>
<form name="formCadastrar" action="orcamento_salvar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Criar Orçamento</h2>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtCPF">
                        </div>

                        <div class="form-group">
                            <label>Nome Completo</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtnomecompleto">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtEmail">
                        </div>

                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtelefone">
                        </div>

                        <div class="form-group">
                            <label>Turno de Contato</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txturno">
                        </div>

                        <div class="form-group">
                            <label>Vara Processual</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtvara">
                        </div>

                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" required="" placeholder="" name="txtdescricao">
                        </div>

                        <div class="form-group">

                            <input type="submit" value="Criar" class="btn btn-info" name="btCriar"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>
</body>
</html>