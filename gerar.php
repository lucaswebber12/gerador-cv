gerar.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $resumo = htmlspecialchars($_POST['resumo']);

    $cargos = $_POST['exp_cargo'] ?? [];
    $empresas = $_POST['exp_empresa'] ?? [];
    $periodos = $_POST['exp_periodo'] ?? [];
    $descricoes = $_POST['exp_descricao'] ?? [];


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
    <link rel="stylesheet" href="curriculo-style.css"> 
</head>
<body>

    <div class="curriculo">
        <header>
            <h1><?php echo $nome; ?></h1>
            <div class="contato">
                <p><?php echo $email; ?></p>
                <p><?php echo $telefone; ?></p>
                <p><?php echo $endereco; ?></p>
            </div>
        </header>

        <section class="resumo">
            <h2>Resumo Profissional</h2>
            <p><?php echo nl2br($resumo); ?></p>
        </section>

        <section class="experiencia">
            <h2>Experiência Profissional</h2>
            
            <?php
            if (!empty($cargos)) {
                foreach ($cargos as $index => $cargo) {
                    $cargo_limpo = htmlspecialchars($cargo);
                    $empresa_limpa = htmlspecialchars($empresas[$index]);
                    $periodo_limpo = htmlspecialchars($periodos[$index]);
                    $descricao_limpa = htmlspecialchars($descricoes[$index]);

                    echo '<div class="item">';
                    echo '<h3>' . $cargo_limpo . '</h3>';
                    echo '<h4>' . $empresa_limpa . ' (' . $periodo_limpo . ')</h4>';
                    echo '<p>' . nl2br($descricao_limpa) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Nenhuma experiência profissional adicionada.</p>';
            }
            ?>
        </section>

        </div>

</body>
</html>