<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
  header('Access-Control-Allow-Methods: GET');
  header('Content-Type: application/json; charset=utf-8');


  define("DSN", "mysql:host=mysql:3306;dbname=".getenv('MYSQL_DATABASE'));
  define("USERNAME", getenv('MYSQL_USER'));
  define("PASSWORD", getenv('MYSQL_PASSWORD'));
  define("OPTIONS", [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4']);


  try {
    $connection = new PDO(DSN, USERNAME, PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = "SELECT * FROM `answers`";

    $stmt = $connection->query($q);
    $result_json = array();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $temp= array('id'  => $result['id'],
                      'uid'    => $result['uid'],
                      'qid'    => $result['qid'],
                      'answer'    => $result['answer']);
        array_push($result_json, $temp);
    }
    echo json_encode($result_json);
    $connection = null;

  } catch (PDOException $e) {
      echo '[ Connection failed ] <br/>' .$e->getMessage();
  }
