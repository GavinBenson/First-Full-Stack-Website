<?php
//Adding inserts
$sql = "INSERT INTO alien_abduction
    VALUES(
      null,
      '$fname',
      '$lname',
      '$when_it_happened',
      '$how_long',
      '$how_many',
      '$alien_description',
      '$what_they_did',
      '$other_abductees',
      '$abductee_description',
      '$other',
      '$email',
      null
    )";

if($conn->query($sql) === true) {
  echo "<br>New record created successfully";
} else {
  echo "<br />Error: ".$sql. "<br>".$conn->error;
}
