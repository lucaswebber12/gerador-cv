index.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <main class="container">
        <h1>Gerador de Currículo</h1>
        <p>Preencha os campos abaixo para gerar seu currículo em HTML.</p>

        <form action="gerar.php" method="POST">

            <fieldset>
                <legend>Dados Pessoais</legend>
                
                <div class="campo-grupo">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                
                <div class="campo-grupo">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="campo-grupo">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone">
                </div>

                <div class="campo-grupo">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Ex: Rua, Nº, Bairro, Cidade - UF">
                </div>
                
                <div class="campo-grupo">
                    <label for="resumo">Resumo Profissional:</label>
                    <textarea name="resumo" id="resumo" rows="5"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Experiência Profissional</legend>
                
                <div id="experiencias-wrapper">
                    </div>
                
                <button type="button" id="btn-add-exp" class="btn-add">
                    + Adicionar Experiência
                </button>
            </fieldset>

            <fieldset>
                <legend>Formação Acadêmica</legend>
                
                <div id="formacao-wrapper">
                    </div>
                
                <button type="button" id="btn-add-formacao" class="btn-add">
                    + Adicionar Formação
                </button>
            </fieldset>

            <input type="submit" value="Gerar Currículo" class="btn-submit">

        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script src="scripts.js"></script>
</body>
</html>
