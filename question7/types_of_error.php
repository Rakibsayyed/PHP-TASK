<?php
//// MYSQL ERROR
///
//$host = 'localhost';
//$user = 'root';
//$pass = 'root';
//$db = 'magentoo';
//
//// Attempt to connect to MySQL
//$conn = new mysqli($host, $user, $pass, $db);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//// The code below will not be reached if the connection fails
//echo "Connected successfully";
//
//// Close the connection
//$conn->close();


// UNDEFINED INDEX ERROR

// Create an array
//$myArray = array('key1' => 'value1', 'key2' => 'value2');
//
//// Check if the index exists before accessing it
//$index = 'key3';
//if (array_key_exists($index, $myArray)) {
//    echo $myArray[$index];
//} else {
//    echo "Index '$index' is undefined.";
//}


//// EXECUTION TIME EXCEEDED
//// Set a very short execution time limit (e.g., 1 second)
//set_time_limit(1);
//
//// Simulate a time-consuming task that exceeds the time limit
//while (true) {
//    // This loop will continue indefinitely, causing the script to exceed the time limit
//}



// MEMORY LIMIT EXCEEDED
//// Set a very low memory limit (e.g., 2 megabytes)
//ini_set('memory_limit', '2M');
//
//// Create a large array to exceed the memory limit
//$largeArray = range(1, 1000000);
//
//// This line will not be executed due to the memory limit
//echo "This line will not be reached.";



//// INVALID QUERY SYNTAX
//$host = 'localhost';
//$user = 'root';
//$pass = 'root';
//$db = 'magento';
//
//// Attempt to connect to MySQL
//$conn = new mysqli($host, $user, $pass, $db);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// Attempt to execute an invalid SQL query
////$query = "SELECT * FROM catalog_product_entity WHERE entity_id = 16";
//$query = "SELECT * FROM catalog_product_entityrakib WHERE entity_id = 16";
//$result = $conn->query($query);
//
//// Check for errors in the query
//if (!$result) {
//    die("Invalid query: " . $conn->error);
//}
//
//// The code below will not be reached if the query has errors
//echo "Query executed successfully";
//
//// Close the connection
//$conn->close();


// SYNTAX ERROR
//// Intentional syntax error
//$variable1 = "Hello" //this lines shows the syntax error because i missed semi-column (;)
//$variable2 = "World!";
//
//// Concatenate and display the variables
//$message = $variable1 . " " . $variable2;
//echo $message;


//LOGICAL ERROR
//$num1 = 30;
//$numr2 = 50;
//
//// Incorrect calculation of average
//$average = $num1 + $numb2 / 2;
//
//// correct calculation of average
////$average = ($num1 + $num2) / 2;
//
//// Display the result
//echo "The average is: " . $average;





////UNDEFINED VARIBALE
//// Attempt to access an array element that does not exist
//$array = array("one" => 1, "two" => 2);
//echo $array["three"];
//echo $rakib;



