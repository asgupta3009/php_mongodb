<?php
//https://data-flair.training/blogs/mongodb-php-tutorial/

/*$client = new MongoDB\Client(
    'mongodb+srv://school:abc@123@cluster0.olgo3.mongodb.net/school?retryWrites=true&w=majority');

$db = $client->test;*/

 
 
 $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
 
 
//insert document	 
	$bulk = new MongoDB\Driver\BulkWrite;
	
	$doc = ['student_id' => 6, 'name' => 'Santosh'];
	$bulk->insert($doc);
	
	$bulk->insert(['student_id' => 3, 'name' => 'Manish']);
	$bulk->insert(['student_id' => 4, 'name' => 'Saurabh']);

	$manager->executeBulkWrite('school.student', $bulk);
 
 //fetch document
 $query = new MongoDB\Driver\Query([]);
 
 $cursor = $manager->executeQuery("school.student", $query);
 
 	foreach($cursor as $document)
 	{
		//var_dump($document);
		echo $document->name.'<br>';
	}
 
 
?>