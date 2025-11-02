gerar.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefone = htmlspecialchars($_POST['telefone'] ?? '');
    $endereco = htmlspecialchars($_POST['endereco'] ?? '');
    $resumo = htmlspecialchars($_POST['resumo'] ?? '');
    
    $data_nascimento = htmlspecialchars($_POST['data_nascimento'] ?? '');
    $idade = htmlspecialchars($_POST['idade'] ?? '');

    $exp_cargos = $_POST['exp_cargo'] ?? [];
    $exp_empresas = $_POST['exp_empresa'] ?? [];
    $exp_periodos = $_POST['exp_periodo'] ?? [];
    $exp_descricoes = $_POST['exp_descricao'] ?? [];

    $form_instituicoes = $_POST['form_instituicao'] ?? [];
    $form_cursos = $_POST['form_curso'] ?? [];
    $form_periodos = $_POST['form_periodo'] ?? [];

    $ref_nomes = $_POST['ref_nome'] ?? [];
    $ref_contatos = $_POST['ref_contato'] ?? [];
    $ref_relacoes = $_POST['ref_relacao'] ?? [];

} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $nome; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/curriculo-style.css">
</head>
<body>

    <div class="container text-center my-4 d-print-none">
        <button onclick="window.print()" class="btn btn-primary btn-lg">
            Salvar como PDF / Imprimir
        </button>
    </div>

    <div class="container curriculo shadow-sm p-4 p-md-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary"><?php echo $nome; ?></h1>
            <p class="lead">
                <?php if ($idade): ?>
                    <?php echo $idade; ?> anos | 
                <?php endif; ?>
                <?php echo $telefone; ?> | 
                <?php echo $email; ?>
            </p>
            <p><?php echo $endereco; ?></p>
        </header>

        <?php if ($resumo): ?>
        <section class_="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Resumo Profissional</h2>
            <p class="text-muted"><?php echo nl2br($resumo); ?></p>
        </section>
        <?php endif; ?>

        <?php if (!empty($exp_cargos)): ?>
        <section class="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Experiência Profissional</h2>
            <?php foreach ($exp_cargos as $index => $cargo): ?>
                <div class="item mb-4">
                    <h3 class="h5 fw-bold"><?php echo htmlspecialchars($cargo); ?></h3>
                    <h4 class="h6 text-primary fw-bold">
                        <?php echo htmlspecialchars($exp_empresas[$index]); ?> | 
                        <span class="text-muted fw-normal"><?php echo htmlspecialchars($exp_periodos[$index]); ?></span>
                    </h4>
                    <p><?php echo nl2br(htmlspecialchars($exp_descricoes[$index])); ?></p>
                </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>

        <?php if (!empty($form_cursos)): ?>
        <section class="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Formação Acadêmica</h2>
            <?php foreach ($form_cursos as $index => $curso): ?>
                <div class="item mb-3">
                    <h3 class="h5 fw-bold"><?php echo htmlspecialchars($curso); ?></h3>
                    <h4 class="h6 text-primary fw-bold">
                        <?php echo htmlspecialchars($form_instituicoes[$index]); ?> | 
                        <span class="text-muted fw-normal"><?php echo htmlspecialchars($form_periodos[$index]); ?></span>
                    </h4>
                </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>

        <?php if (!empty($ref_nomes)): ?>
        <section class="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Referências</h2>
            <?php foreach ($ref_nomes as $index => $nome_ref): ?>
                <div class="item mb-3">
                    <h3 class="h5 fw-bold"><?php echo htmlspecialchars($nome_ref); ?></h3>
                    <p class="mb-0">
                        <?php echo htmlspecialchars($ref_relacoes[$index]); ?> | 
                        <?php echo htmlspecialchars($ref_contatos[$index]); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>

    </div>
</body>
</html>