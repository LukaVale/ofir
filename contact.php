<?php

if(isset($_POST['submit'])){
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $pitanje = $_POST['pitanje'];
    $query = $_POST['query'];

    $test = new mysqli('localhost', 'root', '', 'mojastranica');
    if($test->connect_error){
		echo "$test->connect_error";
		die("Connection Failed : ". $test->connect_error);
	}
    else {
		$stmt = $test->prepare("insert into kontakt(ime, email, pitanje, query) values(?,?,?,?)");
		$stmt->bind_param("ssss", $ime, $email, $pitanje, $query);
		$execval = $stmt->execute();
		echo $execval;
	  	echo "Vaš upit je uspješno zaprimljen";
		$stmt->close();
		$test->close();
	}
}

?>