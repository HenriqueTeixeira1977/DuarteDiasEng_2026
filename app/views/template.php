<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?? 'Site' ?></title>

    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/style.css">
</head>
<body>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<script src="<?= BASE_URL ?>public/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>public/assets/js/script.js"></script>
</body>
</html>
