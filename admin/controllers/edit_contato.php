<?php
require "../../db_config.php";
require "../../functions/update.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $whatsapp = $_POST['whatsapp'];
  $description = $_POST['description'];

  updateContact($id, $name, $email, $whatsapp, $description);
  header('Location: ../dashboard.php');
  exit();
}
