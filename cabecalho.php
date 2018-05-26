<html>
<head>
    <title>ProjetoIntegrador</title>

    <link rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script>
        $(function () {
            $('#telefone').mask('(99) 9999-9999');
            $('#celular').mask('(99) 9999-9999');
            $('#cpf').mask('999.999.999-99');
            $('#rg').mask('9999999');
            $('#cep').mask('999.999-99');
        })
    </script>
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../Imagens/logo.PNG" width="60" alt="100"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../festa/index.php">Sua Festa!!!</a></li>
                <li><a href="../cliente/index.php">Cliente</a></li>
                <li><a href="../funcionario/index.php">Trabalhe Conosco</a></li>
                <li><a href="../especialidade/index.php">Especialidade</a></li>
                <li><a href="../musica/index.php">Músicas</a></li>
                <li><a href="../tipofesta/index.php">Nova Festa</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 60px;">