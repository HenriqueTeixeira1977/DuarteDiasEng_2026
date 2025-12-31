<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Duarte Dias Engenharia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Fale Conosco</h1>

        <?php if (!empty($erros)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?= htmlspecialchars($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($sucesso)): ?>
            <div class="alert alert-success"><?= htmlspecialchars($sucesso) ?></div>
        <?php endif; ?>

        <form action="/contato/enviar" method="POST">
            <div class="mb-3"><input type="text" name="nome" class="form-control" placeholder="Nome completo" required></div>
            <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="E-mail" required></div>
            <div class="mb-3"><input type="tel" name="telefone" class="form-control" placeholder="Telefone"></div>
            <div class="mb-3"><input type="text" name="assunto" class="form-control" placeholder="Assunto"></div>
            <div class="mb-3"><textarea name="mensagem" class="form-control" rows="5" placeholder="Sua mensagem" required></textarea></div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
    </div>
</body>
</html>