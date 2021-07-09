<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
  header('Access-Control-Allow-Methods: GET');
  header('Content-Type: application/json; charset=utf-8');


  // $secret = file_get_contents("../.env");
  // $params = explode("\n", $secret);
  // define("DSN", $params[0]);
  // define("USERNAME", $params[1]);
  // define("PASSWORD", $params[2]);
  //   // mysql:host=localhost;dbname=fork_playlist;charset=utf8
  //   // nakamura-lab
  //   // n1k2m3r4fms
  // define("OPTIONS", [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4']);



  //   try {
  //       $pdo = new PDO(DSN, USERNAME, PASSWORD);
  //       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   } catch (PDOException $e) {
  //       exit($e->GETMessage());
  //   }



  //   $answer_list = [];
  //   $sql = "SELECT * FROM `answer_table`";
  //     $stmt = $pdo -> prepare($sql);
  //     $stmt->execute();
  //     foreach ($stmt as $row) {
  //       $answer_list[] = [
  //           'id'       => $row['id'],
  //           'uid'      => $row['uid'],
  //           'qid'      => $row['qid'],
  //           'answer'      => $row['answer'],
  //       ];
  //     }

  //   echo json_encode($answer_list);

  echo "Hello, PHP!"
 ?>