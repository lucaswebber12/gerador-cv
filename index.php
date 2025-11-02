index.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo - APO UNIPAR</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gerador de CV - APO UNIPAR</a>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                
                <div class="card shadow-sm border-light">
                    <div class="card-body p-4 p-md-5">

                        <h1 class="h3 mb-3 fw-normal">Dados do Currículo</h1>
                        <p class="mb-4 text-muted">Preencha os campos para gerar seu currículo.</p>

                        <form action="gerar.php" method="POST">

                            <fieldset class="mb-4">
                                <legend class="h5 mb-3 border-bottom pb-2">Dados Pessoais</legend>
                                
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome Completo:</label>
                                    <input type="text" name="nome" id="nome" class="form-control" required>
                                </div>
                                
                                <div class="row g-2 mb-3">
                                    <div class="col-md">
                                        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                                        <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="idade" class="form-label">Idade:</label>
                                        <input type="text" name="idade" id="idade" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="telefone" class="form-label">Telefone:</label>
                                    <input type="tel" name="telefone" id="telefone" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="endereco" class="form-label">Endereço:</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Ex: Rua, Nº, Bairro, Cidade - UF">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="resumo" class="form-label">Resumo Profissional:</label>
                                    <textarea name="resumo" id="resumo" rows="5" class="form-control"></textarea>
                                </div>
                            </fieldset>

                            <fieldset class="mb-4">
                                <legend class="h5 mb-3 border-bottom pb-2">Experiência Profissional</legend>
                                
                                <div id="experiencias-wrapper">
                                    </div>
                                
                                <button type="button" id="btn-add-exp" class="btn btn-success btn-sm mt-2">
                                    + Adicionar Experiência
                                </button>
                            </fieldset>

                            <fieldset class="mb-4">
                                <legend class="h5 mb-3 border-bottom pb-2">Formação Acadêmica</legend>
                                <div id="formacao-wrapper">
                                    </div>
                                <button type="button" id="btn-add-formacao" class="btn btn-success btn-sm mt-2">
                                    + Adicionar Formação
                                </button>
                            </fieldset>

                            <fieldset class="mb-4">
                                <legend class="h5 mb-3 border-bottom pb-2">Referências Pessoais</legend>
                                <div id="referencias-wrapper">
                                    </div>
                                <button type="button" id="btn-add-ref" class="btn btn-success btn-sm mt-2">
                                    + Adicionar Referência
                                </button>
                            </fieldset>

                            <input type="submit" value="Gerar Currículo" class="btn btn-primary btn-lg w-100">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="js/scripts.js"></script>
</body>
</html>