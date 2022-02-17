 <!-- Tela de inserção de informações -->
<?php
//incluindo login no xamp
include "connect.php";
//se existir informações ao apertar o botão submit
if(isset($_POST['submit'])){

  //obs:Metodo POST obtem os dados inseridos sem constar na URL do navegador.

    $name=$_POST["name"]; //variavel name assumirá o valor contido no input name.
    $email=$_POST["email"]; //variavel email assumira o valor contido no input email.
    $mobile=$_POST["mobile"]; //variavel mobile assumira o valor contido no input mobile.
    $password=$_POST["password"]; //variavel password assumira o valor contido em password

    //variavel sql -> comandos SLQ a serem executados
    $sql="insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    //mysqli_query -> fazer consulta no sql
    //variavel result = ao fazer consulta no sql, realizar conexão com localhost e executar comandos.
    $result=mysqli_query($con,$sql);
    //se a variavel result retornar true então 
    if($result){
       //echo "Data inserted sucessfull";
       //redirecionar para a localidade display.php
       header('location:display.php');
    }else {
        //se não, acabar e retornar mensagem de erro contida ao tentar fazer login no xamp 
        die(mysqli_error($con));
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
      <!-- Definindo o metodo para transporte de informações -->
    <form method="post" >
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your Name" name="name" autocomplete="off">
  </div>  
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control"
    placeholder="Enter your Email" name="email"autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control"
    placeholder="Enter your Mobile" name="mobile"autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control"
    placeholder="Enter your password" name="password"autocomplete="off">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    
  </body>
</html>