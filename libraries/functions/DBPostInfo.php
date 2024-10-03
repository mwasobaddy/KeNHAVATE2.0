<?php

    require_once 'IncludeAll.php'; // Ensure this file includes connect.php and initializes $con

    

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'signUp') {
        header('Content-Type: application/json');
        
        // Retrieve POST data
        $firstName = $_POST['firstName'] ?? '';
        $otherNames = $_POST['otherNames'] ?? '';
        $email = $_POST['email'] ?? '';
        $mobileNumber = $_POST['mobileNumber'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $accountType = $_POST['accountType'] ?? '';
        $accountStatus = $_POST['accountStatus'] ?? '';
        $directorate = $_POST['directorate'] ?? '';
        $department = $_POST['department'] ?? '';
        $designation = $_POST['designation'] ?? '';
        $lastLogin = $_POST['lastLogin'] ?? '';

        $codeOTP = generateOTP();
        $sessionID = generateSessionId($con);
        $UUID = generateUUID($con);
        
        $key = getKey();
        

        // Check if the email or mobile number already exists
        $emailExists = checkEmailSignUp($con, $email);
        $mobileExists = checkMobileSignUp($con, $mobileNumber);
        
        // Perform server-side validation (always validate on the server as well)
        $errors = [];
        
        if (!preg_match('/^[a-zA-Z\s]{2,50}$/', $firstName)) {
            $errors[] = 'Invalid first name';
        }
        
        if ($otherNames && !preg_match('/^[a-zA-Z\s]{2,50}$/', $otherNames)) {
            $errors[] = 'Invalid other names';
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email address';
        }
        
        if (!preg_match('/^[0-9]{10}$/', $mobileNumber)) {
            $errors[] = 'Invalid mobile number';
        }
        
        if (!in_array($gender, ['male', 'female'])) {
            $errors[] = 'Invalid gender';
        }
    
        if ($emailExists || $mobileExists) {
            $errors[] = 'An account with similar details exists! Please login!';
        }
        
        if (!empty($errors)) {
            echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
            exit;
        }
        
        try {

            // encrypt data
            $encFirstName = encryptData($firstName, $key);
            $encOtherNames = encryptData($otherNames, $key);
            $encEmail = encrypt($email, $key);
            $encMobileNumber = encrypt($mobileNumber, $key);
            $encGender = $gender;
            $encAccountType = encryptData($accountType, $key);
            $encAccountStatus = encryptData($accountStatus, $key);
            $encDirectorate = encryptData($directorate, $key);
            $encDepartment = encryptData($department, $key);
            $encDesignation = encryptData($designation, $key);
            $encLastLogin = encryptData($lastLogin, $key);
            

            $encCodeOTP = encrypt($codeOTP, $key);
            $encSessionID = encrypt($sessionID, $key);
            $encUUID = encrypt($UUID, $key);


            $dateTime = new DateTime(); // Gets the current date and time
            $dateTime->setTimezone(new DateTimeZone('UTC')); // Optional: Set timezone if needed
            $encTimeAccountCreated = $dateTime->format('Y-m-d H:i:s.u'); // 'u' for microseconds

            // Insert into the database
            $query = "INSERT INTO users_table (uuid, session_id, first_name, other_names, email, mobile_no, gender, account_type, account_status, directorate, department, designation, OTP_code, last_login, time_account_created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            if ($stmt = $con->prepare($query)) {
                // Bind parameters to the query
                $stmt->bind_param("sssssssssssssss", $encUUID, $encSessionID, $encFirstName, $encOtherNames, $encEmail, $encMobileNumber, $encGender, $encAccountType, $encAccountStatus, $encDirectorate, $encDepartment, $encDesignation, $encCodeOTP, $encLastLogin, $encTimeAccountCreated);
                
                // Execute the query
                if ($stmt->execute()) {
                    echo json_encode(['success' => true, 'message' => 'User added successfully.']);
                    exit;
                } else {
                    error_log("Error executing statement: " . $stmt->error);
                    echo json_encode(['success' => false, 'message' => 'Failed to add user.']);
                    exit;
                }

                $stmt->close();
            } else {
                error_log("Error preparing statement: " . $con->error);
                echo json_encode(['success' => false, 'message' => 'Failed to prepare SQL statement.']);
                exit;
            }

        } 
        catch (\Throwable $th) {
            // Log exception details
            error_log("Exception caught: " . $th->getMessage());
            echo json_encode(['success' => false, 'message' => 'An error occurred.'. $th->getMessage() .'Email' . $emailExists . 'Mobile' . $mobileExists . 'well']);
            exit;
        }
    }
?>