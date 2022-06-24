<?php
//Incluit o arquivo de conexãp sempre que precisar acessar o SGBD
include 'conecta.php';
echo "<br>";

// consulta em SQL que será executada ba base de dados
$sql = "SELECT * FROM alunos";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

while($linha = mysqli_fetch_assoc($resultado)) {
echo "id: " . $linha["id"]. "<br>";
echo "nome: " . $linha["nome"]. "<br>";
echo "curso: " . $linha["curso"]. "<br>";
echo "idade: " . $linha["idade"]. "<br>";
}
} else {
    echo"0 resultados";
}

mysqli_close($conexao);

?>