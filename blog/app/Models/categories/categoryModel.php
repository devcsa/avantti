<?php

include "./core/connection.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<table class='table table-striped'>";
  echo "<thead class='thead-inverse'><tr><th>Categoria</th><th>Data</th><th>Status</th><th>Ações</th></tr></thead>";

  // Saída de dados de cada linha
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td hidden class='categoryId'>" . $row["id"] . "</td>";
    echo "<td class='category-name'>" . $row["name"] . "</td>";

    $formatted_date = date("d/m/y H:i", strtotime($row["updated_at"]));

    echo "<td>" . $formatted_date . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "<td>";
    echo "<div class='dropdown'>";
    echo "<button class='btn btn-outline-primary dropdown-toggle type='button' id='dropdownMenuCategory' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Ações</button>";
    echo "<div class='dropdown-menu dropdown-menu-dark' aria-labelledby='dropdownMenu'>";
    echo "<button id='category-update' class='categoryUpdate dropdown-item' type='button'>Alterar</button>";
    echo "<button id='category-delete' class='categoryDelete dropdown-item' type='button'>Excluir</button>";
    echo "</div>";
    echo "</div>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "Nenhum registro encontrado.";
}

$conn->close();
