?>
<?php
require("conexao.php");
$nomeMedicamento = $_POST['nomeMedicamento'];
$fabricante = $_POST['fabricante'];
$formaUso = $_POST['formaUso'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];
$armazenamento = $_POST['armazenamento'];

$cadastrarmedicamento = "INSERT INTO medicamentos(nomeMedicamento, fabricante,formaUso, quantidade, validade, armazenamento) VALUES
('$nomeMedicamento','$fabricante','$formaUso','$quantidade','$validade','$armazenamento')";
$operacaoSQL = mysqli_query($conexao, $cadastrarmedicamento);
if (mysqli_affected_rows($conexao) != 0) {
echo "medicamento cadastrado com Sucesso!";
// header("Location: listamedicamento.php");
} else {
echo " O medicamento não foi cadastrado com Sucesso!";
// header("Location: listamedicamento.php");
}
