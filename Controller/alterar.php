<?php 
require('../vendor/autoload.php');
$registros = new Registro();
$_SESSION['registros']=$registros->selectRegistros();
$registros=$_SESSION['registros'];
echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
		  	<th><h2>ID</h2></th>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
			<th><h2>Data</h2></th>
        </tr>
        </thead>");
          foreach($registros as $indice=>$value){
                echo '<tr>';
				print_r('<td>' . $value['id'] . '</td>');
                print_r('<td>' . $value['tipo'] . '</td>');
                print_r('<td>' . $value['valor'] . '</td>');
                print_r('<td>' . $value['descricao'] . '</td>');
				print_r('<td>' . $value['data'] . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");



if(isset($_POST['botao'])){
    if($_POST['id']!='' && !empty($_POST['valor']) && !empty($_POST['data']) &&  !empty($_POST['descricao'])){
    alterar($_POST['id'],$_POST['valor'],$_POST['data'],$_POST['descricao']);
    }
}


function alterar($id,$valor,$data,$descricao){
    $registroAlterar = new Registro();
    $registroAlterar->alterar($id,$valor,$data,$descricao);
    header('Location:../View/alterar.php');
}






?>