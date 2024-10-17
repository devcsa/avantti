<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar</title>
</head>

<style>
input {
  width: 100px;
  height: 35px;
}
</style>

<body>
  <label for="id-post">Informe ID</label>
  <input id="id-post" type="text" placeholder="id Post">
  <button onclick="criarPagina()">Criar Pagina</button>
</body>

<script>
function criarPagina() {
  let postID = document.getElementById("id-post").value
  window.location.href = "../../../generate.php?postID=" + postID;
}
</script>

</html>