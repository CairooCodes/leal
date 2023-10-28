<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$sql = "INSERT INTO contact (name, email, whatsapp) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $whatsapp]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado, em breve entraremos em contato');
</script>
");
