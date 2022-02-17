 <!-- tela de atualização de informações -->
<?php
//incluindo conexão com  localhost
include "connect.php";
//pegando o numero do id desejavel para edição e alocando em uma variavel 
$id=$_GET['updateid'];
//escrevendo linha execuavel e alocando na variavel sql 
$sql="select * from `crud` where id=$id";

//fazer consulta no sql e executar linha.
$result=mysqli_query($con,$sql);
//executar consulta e retornar linha solicitada aramazenada
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];//pegar id listado no banco e armazenar na variavel id.
    $email=$row['email'];//pegar email listado no banco e armazenar na variavel email.
    $mobile=$row['mobile'];//pegar mobile listado no banco e armazenar na variavel mobile.
    $password=$row['password'];//pegar password listado no banco e armazenar na variavel password.

//se tiver informações contidas em update existir então :
if(isset($_POST['update'])){
  //atualizar variaveis com os dados atualizados
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];
    
    //realizando a atualização no DB
    $sql= "update `crud` set id='$id', name='$name', email='$email', mobile='$mobile', password='$password'
    where id='$id'";
    //realizando consulta no sql
    $result=mysqli_query($con,$sql);
    //se a consulta retornar true então 
    if($result){
       //redirecionar para a tabela de dados armazenados atualizados
       header('location:display.php');
    }else {
      //se não, retornar erro contido ao fazer a conxão com o DB
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
    <form method="post" >
  <div class="mb-3">
    <label>Name</label>
    <!-- apresentando dados armazenados sem atualização -->
    <input type="text" class="form-control"
    placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>  
  <div class="mb-3">
    <label>Email</label>
    <!-- apresentando dados armazenados sem atualização -->
    <input type="email" class="form-control"
    placeholder="Enter your Email" name="email"autocomplete="off"value=<?php echo $email;?>>
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <!-- apresentando dados armazenados sem atualização -->
    <input type="text" class="form-control"
    placeholder="Enter your Mobile" name="mobile"autocomplete="off"value=<?php echo $mobile;?>>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <!-- apresentando dados armazenados sem atualização -->
    <input type="password" class="form-control"
    placeholder="Enter your password" name="password"autocomplete="off"value=<?php echo $password;?>>
  </div>

  <button type="update" name="update" class="btn btn-primary">Update</button>
</form>
    </div>

    
  </body>
</html>