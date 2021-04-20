<?php
include_once 'person.php';
header('Content-Type: JSON');

class Api{

    public function getData(){

      $obj=new Person();
      $result=$obj->getData();
      $posts_arr = array();
      
    $persons['data'] = array();
    while($row = mysqli_fetch_assoc($result)) {
      $person = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'student_id' => $row['student_id'],
        'cgpa' => $row['cgpa']
      );

      array_push($persons, $person);
    }
      echo json_encode($persons);
    }
}

$person=new Api();
$results=$person->getData();

