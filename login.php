<?php
// Start a session to store the user's first name
session_start();

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the form values
	$email = $_POST['loginemail'];
	$password = $_POST['loginpassword'];

	// Validate the form values
	if (empty($email) || empty($password)) {
		echo "Both fields are required.";
	} else {
		// TODO: Authenticate the user against a database or other data source
		// For this example, assume the email is the username and the password is 'password'

		if ($email == 'test@example.com' && $password == 'password') {
			// Login successful, redirect to welcome page and store first name in
