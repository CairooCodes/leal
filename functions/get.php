<?php
function getContacts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM contact order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
