<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";

   // select a database
   $db = $m->examplesdb;
   echo "Database examplesdb selected";
   $collection = $db->examplescol;
   echo "Collection selected succsessfully";

   // now update the document
   $collection->update(array("name"=>"MongoDB"), 
   array('$set'=>array("name"=>"MongoDB Tutorial")));
   echo "Document updated successfully";

   // now display the updated document
   $cursor = $collection->find();

   // iterate cursor to display title of documents
   echo "Updated document";

   foreach ($cursor as $document) {
   echo $document["name"] . "\n";
 }
?>