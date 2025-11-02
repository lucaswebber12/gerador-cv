$(document).ready(function() {
    
    $('#btn-add-exp').click(function() {
        
        var novosCampos = `
            <div class="experiencia-item">
                <hr>
                
                <div class="campo-grupo">
                    <label>Cargo:</label>
                    <input type="text" name="exp_cargo[]" required>
                </div>
                
                <div class="campo-grupo">
                    <label>Empresa:</label>
                    <input type="text" name="exp_empresa[]" required>
                </div>

                <div class="campo-grupo">
                    <label>Período (Ex: 2020 - 2022):</label>
                    <input type="text" name="exp_periodo[]">
                </div>
                
                <div class="campo-grupo">
                    <label>Descrição das Atividades:</label>
                    <textarea name="exp_descricao[]" rows="3"></textarea>
                </div>
            </div>
        `;
        
        $('#experiencias-wrapper').append(novosCampos);
    });

});