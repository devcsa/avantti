<?php

include "./core/connection.php";


$sql = "SELECT users.*,
                type_user.type AS type_user,
                status_user.status AS status_user
        FROM users
        INNER JOIN type_user ON users.type_user_id = type_user.id
        INNER JOIN status_user ON users.status_user_id = status_user.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<table class='table table-striped'>";
  echo "<thead class='thead-inverse'><tr><th>Nome</th><th>E-mail</th><th>Status</th><th>Perfil</th><th>Ações</th></tr></thead>";

  // Saída de dados de cada linha
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td hidden class='userId'>" . $row["id"] . "</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["status_user"] . "</td>";
    echo "<td>" . $row["type_user"] . "</td>";
    echo "<td>";
    echo "<div class='dropdown'>";
    echo "<button class='btn btn-outline-primary dropdown-toggle type='button' id='dropdownMenu' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Ações</button>";
    echo "<div class='dropdown-menu dropdown-menu-dark' aria-labelledby='dropdownMenu'>";
    echo "<button id='user-update' class='userUpdate dropdown-item' type='button'><i class='color-blue fa fa-edit'></i> Alterar</button>";
    echo "<button id='user-delete' class='userDelete dropdown-item' type='button'><i class='color-red fa fa-remove'></i> Excluir</button>";
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
