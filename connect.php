 <!-- informações de conexão com o localhost -->
 <?php
//variavel con -> informações de localhost do xamp 
$con= new mysqli('localhost', 'raquel', 'Ncpacpl@304', 'crudoperation');
//Se não existir variavel icon,então retornar error no mysql
if(!$con){
    die(mysqli_error($con));
}

?>