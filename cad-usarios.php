<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Document</title>
</head>
<body>
    <section> class="card-form">
        <div class="form-header">
            <h2><i class="fa-solid fa-user-plus"></i>Novo Usuário</h2>
            <p>Preencha os dados a baixo para registrar um novo acesso.</p>
        </div>

        <form action="processa.php" method="POST">
            <div class="form-group">
                <label for="none">Nome Completo</label>
                <input type="text" id="none" placeholder="Ex Yasmin Neves" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
            </div>
            <div> class="<form-row>
                <div class="form-group flex-1">
                <label for="senha">Senha</label>
                <input type="password" id="senha" required>
            <div class="form-group flex-1">
                <label for="nivel">Nível</label>
                <select name="nível" id="nivel">
                    <option value="1">Usuário</option>
                    <option value="2">Administrador</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button> type="submit" class</button>
        </div>
    </form>
    </section>
</body>
</html>