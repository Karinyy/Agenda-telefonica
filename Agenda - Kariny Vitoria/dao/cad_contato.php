<?php
include "../config.php";

$sql = "INSERT INTO agenda(
nome,
email,
telefone
)
VALUES (
'".$_POST["nome"]."',
'".$_POST["email"]."',
'".$_POST['telefone']."'
)";

$query = mysqli_query($con, $sql);

if ($query == true) {
  echo "<script>alert('usuário cadastrado com sucesso');</script>";
  echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";


}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>