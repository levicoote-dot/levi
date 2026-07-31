<?php
require 'config.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql = "INSERT INTO loans (item_name, borrower_name, borrowed_date, due_back)
        	VALUES (:item, :borrower, :borrowed, :due)";
 
	$stmt = $pdo->prepare ($sql);
	$stmt-> $stmt->execute ([
    	':item' 	=> $_POST['item_name'],
    	':borrower' => $_POST['borrower_name'],
    	':borrowed' => date('Y-m-d'),
    	':due'  	=> $_POST['due_back'],
	]);
 
	header('Location: view_loans.php');
	exit;
}
 
?>
 

