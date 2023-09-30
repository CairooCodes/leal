<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$description = $_POST['description'];
$sql = "INSERT INTO leads (name, email, whatsapp, description) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $whatsapp, $description]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado, em breve entraremos em contato');
</script>
");
