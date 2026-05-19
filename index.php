<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulario</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="POST">
      <input type="text" name="name" placeholder="Digite seu nome">
      <input type="password" name="senhay" placeholder="Digite sua senha">
      <input type="email" name="emaio"placeholder= "Digite seu email">
      <button type="submit">submit</button>


   </form>
   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $nome = $_POST["name"];
  $mail= filter_input(INPUT_POST,"emaio", FILTER_VALIDATE_EMAIL);
   $senha = $_POST["senhay"];

   if (empty($nome)) {
   echo"Digite seu nome <br>";
 }
 if (empty($mail)) {
   echo "Email invalido <br>";
 }
 if (empty($senha)) {
   echo "Digite sua senha ";
 }

 if (!empty($nome) && $mail && !empty($senha)) {
   echo "cadastro enviado com sucesso";
   echo"Nome:"  . $nome .  "<br>";
   echo "email" . $mail . "<br>";
 }
}


 
   ?>
</body>
</html>