$(document).ready(function() {

    
    $('#data_nascimento').change(function() {
        var dataNasc = $(this).val();
        
        if (dataNasc) {
            var hoje = new Date();
            var nascimento = new Date(dataNasc);
            
            var idade = hoje.getFullYear() - nascimento.getFullYear();
            
            var mes = hoje.getMonth() - nascimento.getMonth();
            if (mes < 0 || (mes === 0 && hoje.getDate() < nascimento.getDate())) {
                idade--;
            }
            
            $('#idade').val(idade);
        }
    });


    $('#btn-add-exp').click(function() {
        var novosCampos = `
            <div class="item-dinamico p-3 mb-3 border rounded">
                <div class="mb-3">
                    <label class="form-label">Cargo:</label>
                    <input type="text" name="exp_cargo[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Empresa:</label>
                    <input type="text" name="exp_empresa[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Período:</label>
                    <input type="text" name="exp_periodo[]" class="form-control" placeholder="Ex: 2020 - 2022">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição:</label>
                    <textarea name="exp_descricao[]" rows="3" class="form-control"></textarea>
                </div>
                </div>
        `;
        
        $('#experiencias-wrapper').append(novosCampos);
    });


    $('#btn-add-formacao').click(function() {
        var novosCampos = `
            <div class="item-dinamico p-3 mb-3 border rounded">
                <div class="mb-3">
                    <label class="form-label">Instituição:</label>
                    <input type="text" name="form_instituicao[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Curso/Título:</label>
                    <input type="text" name="form_curso[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Período:</label>
                    <input type="text" name="form_periodo[]" class="form-control" placeholder="Ex: 2018 - 2022">
                </div>
            </div>
        `;
        $('#formacao-wrapper').append(novosCampos);
    });



    $('#btn-add-ref').click(function() {
        var novosCampos = `
            <div class="item-dinamico p-3 mb-3 border rounded">
                <div class="mb-3">
                    <label class="form-label">Nome da Referência:</label>
                    <input type="text" name="ref_nome[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contato (Telefone/Email):</label>
                    <input type="text" name="ref_contato[]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Relação (Ex: Ex-gestor):</label>
                    <input type="text" name="ref_relacao[]" class="form-control">
                </div>
            </div>
        `;
        $('#referencias-wrapper').append(novosCampos);
    });

});