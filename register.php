<?php
// Check if the registration form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the form values
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

	// Validate the form values
	if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirmpassword)) {
		echo "All fields are required.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format.";
	} elseif ($password != $confirmpassword) {
		echo "Passwords do not match.";
	} else {
		// Registration successful, redirect to login page
		header('Location: login.php');
		exit();
	}
} else {
	// Redirect to registration page if form was not submitted
	header('Location: index.php');
	exit();
}
