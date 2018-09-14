<?php 
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
$db_user = 'root';
$db_pass = ''; 

if ($_POST) {
    try {
      $email = $_POST["email"];
      $db = new PDO($dsn, $db_user, $db_pass);
  
      $id = $db->prepare("SELECT * FROM registro where email = :email");
      $id->execute([
          ":email" => $email
      ]);
      $ids = $id->fetch(PDO::FETCH_ASSOC);
        if ($id->rowCount() > 0) {
            $password = $_POST['senha'];
          $senha = $db->prepare("SELECT senha FROM registro where senha= :senha");
          $senha->execute([
            ":senha" => $password
          ]);
          $senhas = $senha->fetch(PDO::FETCH_ASSOC);
          if ($senha->rowCount() > 0) {
              ?><script>
              alert('Usuario logado com sucesso!');
              </script>
              <?php
              include "usuario.php";
            }
          }else{
            echo "Senha ou usuário incorretos";
          }
        } catch (PDOException $Exception) {
          echo $Exception->getMessage();
        }
    }
?>
<form actio="login.php" method="post">
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Email" placeholder="email@example.com" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="senha">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Logar</button>
</form>