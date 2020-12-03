<?php

function db_connect() {
   $result = new mysqli('localhost', 'bookorama', 'bookorama123', 'bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>