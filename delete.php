<!-- botão de deletar uma coluna da tabela -->
<?php
//realização de conexão com o DB
include 'connect.php';
//se houver dados no id de deleted id
if(isset($_GET['deleteid'])) {
    //var id assumir valor 
    $id=$_GET['deleteid'];
    //executar linha sql
    $sql="delete from `crud` where id=$id";
    
    $result=mysqli_query($con,$sql);
    if($result) {
        //echo "Deleted successfull";
        header('location:display.php');
    }else {
        die(mysqli_error($con));
    }
}
?>