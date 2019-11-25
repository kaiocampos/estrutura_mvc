<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar'; ?>" method="post">
    Nome: <input type="text" name="Nome" id="Nome"><br>
    Sexo:
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade: <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Cadastrar">
</form>


<hr>

<h1>SELEÇÃO DE DADOS</h1>
<form name="FormSelect" id="FormSelect" action="<?php echo DIRPAGE.'cadastro/seleciona'; ?>" method="post">
    Nome: <input type="text" name="Nome" id="Nome"><br>
    Sexo:
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade: <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Pesquisar">
</form>

<!-- Será responsável por receber a tabela de pesquisa-->
<div class="Resultado" style="width: 100%; height: 500px; background: pink;"></div>

<hr>
<br><br>
<h1>Formulário de Atualizações</h1>
<div class="ResultadoFormulario" style="width: 100%; height: 300px;"></div>
