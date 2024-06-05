<?php
require 'conexao.php';
?>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Listagem de medicamentos</title>
</head>
<body>
<a href="index.html">Início</a>
<a href="cadastrarmedicamento.html">Cadastro</a>
<h4>medicamentos cadastrados</h4>
<table>
<thead>
<tr>
<th>ID</th>
<th>nomeMedicamento</th>
<th>fabricante</th>
<th>formaUso</th>
<th>quantidade</th>
<th>formaUso</th>
<th>quantidade</th>
<th>validade</th>
<th>armazenamento</th>
</tr>
</thead>
<tbody>
<?php
$consulta = "SELECT * FROM medicamentos";
$executaConsulta = mysqli_query($conexao, $consulta);
if (mysqli_num_rows($executaConsulta) > 0) {
foreach ($executaConsulta as $medicamentos) {
?>
<tr>
<td><?= $medicamentos['id']; ?></td>
<td><?= $medicamentos['nomeMedicamento']; ?></td>
<td><?= $medicamentos['fabricante']; ?></td>
<td><?= $medicamentos['formaUso']; ?></td>
<td><?= $medicamentos['quantidade']; ?></td>
<td><?= $medicamentos['validade']; ?></td>
<td><?= $medicamentos['armazenamento']; ?></td>
</tr>
<?php
}
} else {
echo "Nenhum cliente cadastrado.";
}
?>
</tbody>
</table>
</body>
</html>