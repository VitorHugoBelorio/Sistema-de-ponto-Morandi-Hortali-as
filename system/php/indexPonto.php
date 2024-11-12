<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylePonto.css">
    <title>Ponto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ponto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="indexHomeFuncionario.php">Home</a>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div id="relogio"></div>
        <form>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
    </div>

    <script>
        function atualizarRelogio() {
            const agora = new Date();
            const horas = String(agora.getHours()).padStart(2, '0');
            const minutos = String(agora.getMinutes()).padStart(2, '0');
            const segundos = String(agora.getSeconds()).padStart(2, '0');
            document.getElementById('relogio').textContent = `${horas}:${minutos}:${segundos}`;
        }

        setInterval(atualizarRelogio, 1000);
        atualizarRelogio(); // Chama uma vez para não esperar 1 segundo
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>