<?php
function updateContact($id, $name, $email, $whatsapp, $description)
{
  global $pdo;
  $stmt = $pdo->prepare("UPDATE leads SET name = :name, email = :email, whatsapp = :whatsapp, description = :description WHERE id = :id");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':whatsapp', $whatsapp);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}