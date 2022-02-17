 <!-- tabela de informações solicitadas -->
<?php
//incluindo login no xamp
include "connect.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">
                Add user
            </a>
        </button> 
        <table class="table">
  <thead>
    <tr>
        <th ecope="col">ID</th>
        <th ecope="col">NAME</th>
        <th ecope="col">EMAIL</th>
        <th ecope="col">MOBILE</th>
        <th ecope="col">PASSWORD</th>
        <th ecope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
     <?php
     //Linha para execução do sql
     $sql="Select * from `crud`";
     //fazer consula no sql
     $result=mysqli_query($con,$sql);
     //Se a consulta for bem sucedida então
     if($result) {
         //retornar as matriz existentes da linha solicitada
         //enquanto realizar a consulta no sql, observar os dados armazenados, enquanto houver dados então:
         while($row=mysqli_fetch_assoc($result)){
         $id=$row['id']; //pegar id listado no banco e armazenar na variavel id.
         $name=$row['name']; //pegar name listado e armazenar na variavel name.
         $email=$row['email']; //pegar email listado e armazenar na variavel email.
         $mobile=$row['mobile']; //pegar mobile listado  e arazenas na variavel mobile.
         $password=$row['password']; //pegar password listdo e armazenas na variavel password.

         //então exibir
         //updateid = id's cadastrados.
         echo '<tr>
         <th scope="row">'.$id.'</th> 
         <td colspan="2" class="table-active">'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         <td>'.$password.'</td>
         <td>
         <button class="btn btn-primary">
         <a href="update.php?
         updateid='.$id.'"
          class="text-light">Update</a>
          </button>
         <button class="btn btn-danger">
         <a href="delete.php?
         deleteid='.$id.'" 
         class="text-light">Delete</a>
         </button>
       </td>
       </tr>
       ';
     }
    }
     ?>

     
  </tbody> 
</table>     
    </div>
    
</body>
</html>