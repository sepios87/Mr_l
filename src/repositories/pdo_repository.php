<?php
class PdoRepository
{
  private static $instance = null;
  private $pdo;

  private function __construct()
  {
    $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
  }

  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function getAll($table)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById($table, $id)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getByField($table, $field, $value)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $field = :$field");
    $stmt->execute([$field => $value]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($table, $data)
  {
    $keys = array_keys($data);
    $values = array_values($data);
    $placeholders = implode(',', array_fill(0, count($keys), '?'));

    $stmt = $this->pdo->prepare("INSERT INTO $table (" . implode(',', $keys) . ") VALUES ($placeholders)");
    $stmt->execute($values);
    return $this->pdo->lastInsertId();
  }

  public function update($table, $id, $data)
  {
    $set = [];
    foreach ($data as $key) {
      $set[] = "$key = ?";
    }
    $values = array_values($data);
    $values[] = $id;

    $stmt = $this->pdo->prepare("UPDATE $table SET " . implode(',', $set) . " WHERE id = ?");
    $stmt->execute($values);
    return $stmt->rowCount();
  }

  public function delete($table, $id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->rowCount();
  }
}
