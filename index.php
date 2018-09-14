<?php 
   include 'classes/classCadastrar.php';

   if($_POST){
     $cadastro = new Confirmacao();
     $cadastro->cadastrar($_POST['nome'], $_POST['cpf_cnpj'], $_POST['nascimento'], $_POST['endereco'], $_POST['cidade'], $_POST['estado'], $_POST['telefone'], $_POST['email'], $_POST['senha']);
   }
?>
<form action="index.php" method="post" class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Nome</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Insira seu nome" id="example-text-input" name="nome">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">CPF/CNPJ</label>
  <div class="col-10">
    <input class="form-control" type="search" placeholder="Insira seu sobrenome" id="example-search-input" name="cpf_cnpj">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Nascimento</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="nascimento">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Endereço</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Insira seu endereço" id="example-number-input" name="endereco">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Cidade</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Insira sua cidade" id="example-number-input" name="cidade">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Estado</label>
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Insira seu estado" id="example-number-input" name="estado">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telefone</label>
  <div class="col-10">
    <input class="form-control" type="tel" placeholder="(55)-555-5555" id="example-tel-input" name="telefone">
  </div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" placeholder="exemplo@exemplo.com" id="example-email-input" name="email">
  </div>
</div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Senha</label>
  <div class="col-10">
    <input class="form-control" type="password" palceholder="Insira sua senha" id="example-password-input" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form><br>
