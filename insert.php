<?php
  // connect to mongodb
  $m = new MongoClient();
  echo "Connection to database successfully";

  // select a database
  $db = $m->examplesdb;
  echo "Database examplesdb selected";
  $collection = $db->examplescol;
  echo "Collection selected succsessfully";

  $document = array( 
  "title" => "MongoDB", 
  "description" => "database", 
  "likes" => 100,
  "url" => "http://www.data-flair.training/mongodb/",
  "by" => "data flair"
 );

$collection->insert($document);
echo "Document inserted successfully";
?>