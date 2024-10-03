<?php

    session_start(); // Start the session


    //php mailer
    include __DIR__ . '/../mailer/PHPMailer.php';
    include __DIR__ . '/../mailer/SMTP.php';
    include __DIR__ . '/../mailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    // Enable exceptions for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Encryption function that generates similar encrypted characters for the same word
    function encrypt($message, $key) {
        $encrypted = "";
        $key_length = strlen($key);
    
        // Ensure $message is a string
        $message = strval($message);
    
        // Encrypt each character of the message
        for ($i = 0; $i < strlen($message); $i++) {
            // Get ASCII value of the character and key
            $char_value = ord($message[$i]);
            $key_value = ord($key[$i % $key_length]);
    
            // Encrypt character value with key value
            $encrypted_char = ($char_value + $key_value) % 256; // Ensure within byte range
    
            // Append encrypted character to result
            $encrypted .= chr($encrypted_char);
        }
    
        // Encode the result in Base64
        $base64_encoded = base64_encode($encrypted);
    
        // Replace URL-unsafe characters
        $url_safe_encoded = strtr($base64_encoded, '+/=', '-_.');
    
        return $url_safe_encoded;
    }    

    // Decryption function for the above encryption
    function decrypt($encrypted_message, $key) {
        $key_length = strlen($key);
    
        // Replace URL-safe characters back to original
        $base64_encoded = strtr($encrypted_message, '-_.', '+/=');
    
        // Decode Base64
        $decoded = base64_decode($base64_encoded);
    
        $decrypted = "";
    
        // Decrypt each character of the message
        for ($i = 0; $i < strlen($decoded); $i++) {
            // Get ASCII value of the character and key
            $char_value = ord($decoded[$i]);
            $key_value = ord($key[$i % $key_length]);
    
            // Decrypt character value with key value
            $decrypted_char = ($char_value - $key_value + 256) % 256; // Ensure positive value and within byte range
    
            // Append decrypted character to result
            $decrypted .= chr($decrypted_char);
        }
    
        return $decrypted;
    }    

    // Encryption function that generates different encrypted characters for the same word
    function encryptData($data, $key) {
        $cipher = 'AES-128-CTR';
        $key = hash('sha256', $key, true); // Convert the key to binary

        // Generate a random IV securely
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

        // Encrypt the data with AES and return the encrypted string along with the IV
        $encryptedData = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);
        $result = base64_encode($iv . $encryptedData);

        // Replace URL-unsafe characters
        $url_safe_result = strtr($result, '+/=', '-_.');

        return $url_safe_result;
    }

    // Decryption function for the above encryption
    function decryptData($encryptedData, $key) {
        $cipher = 'AES-128-CTR';
        $key = hash('sha256', $key, true); // Convert the key to binary

        // Replace URL-safe characters back to original base64 characters
        $result = strtr($encryptedData, '-_.', '+/=');

        // Decode the base64-encoded encrypted data to retrieve IV and encrypted content
        $decodedData = base64_decode($result);

        // Extract the IV from the data
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = substr($decodedData, 0, $ivlen);

        // Extract the encrypted content
        $encryptedContent = substr($decodedData, $ivlen);

        // Decrypt the data with AES and return the original string
        $decryptedData = openssl_decrypt($encryptedContent, $cipher, $key, OPENSSL_RAW_DATA, $iv);

        return $decryptedData;
    }

    // generate otp function
    function generateOTP() {
        return random_int(100000, 999999);
    }

    // generate uuid function
    function generateUUID($con) {
        // Define the prefix for the UUID
        $prefix = 'kenhavate-user-';
        
        // Initialize the UUID number
        $number = 1;
        $count = 0;
        $key = getKey();

        while (true) {
            // Generate the UUID with the current number
            $uuid = $prefix . str_pad($number, 4, '0', STR_PAD_LEFT);
            $encrypteduuid = encrypt($uuid, $key);

            // Check if the UUID already exists in the database
            $query = "SELECT COUNT(*) FROM users_table WHERE uuid = ?";
            if ($stmt = $con->prepare($query)) {
                $stmt->bind_param("s", $encrypteduuid);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();

                // If the UUID does not exist, return it
                if ($count == 0) {
                    return $uuid;
                }
            } else {
                error_log("Error preparing statement: " . $con->error);
            }

            // Increment the number and try again
            $number++;
        }
    }

    // generate session id function
    function generateSessionId($con) {
        // Define the prefix for the session id
        $prefix = 'kenhavate-user-session-';
        
        // Initialize the session id number
        $number = 1;
        $count = 0;
        $key = getKey();

        while (true) {
            // Generate the session id with the current number
            $sessionId = $prefix . str_pad($number, 4, '0', STR_PAD_LEFT);
            $encryptedsessionId = encrypt($sessionId, $key);

            // Check if the session id already exists in the database
            $query = "SELECT COUNT(*) FROM users_table WHERE session_id = ?";
            if ($stmt = $con->prepare($query)) {
                $stmt->bind_param("s", $encryptedsessionId);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();

                // If the session id does not exist, return it
                if ($count == 0) {
                    return $sessionId;
                }
            } else {
                error_log("Error preparing statement: " . $con->error);
            }

            // Increment the number and try again
            $number++;
        }
    }



    // key is constant cases
    function getKey() {
        $key = 'coded-by-wanjohi-kelvin-mwangi';
        return $key;
    }











    //for sign up



    function isValidName($name) {
        // Regular expression for names (2 to 50 letters and spaces)
        return preg_match('/^[a-zA-Z\s]{2,50}$/', $name);
    }
    
    function isValidEmail($email) {
        // Regular expression for validating email format
        return preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email);
    }
    
    function isValidMobileNumber($number) {
        // Regular expression for 10-digit mobile number
        return preg_match('/^[0-9]{10}$/', $number);
    }
    
    
    function checkEmailSignUp($con, $email) {
        $key = getKey();
        $encryptedemail = encrypt($email, $key);
    
        $query = "SELECT email FROM users_table WHERE email = ?";
        $emailExists = false;
    
        if ($stmt = $con->prepare($query)) {
            $stmt->bind_param("s", $encryptedemail);
            $stmt->execute();
            $stmt->store_result(); // Store the result to check the number of rows
    
            // Check if the email exists
            if ($stmt->num_rows > 0) {
                $emailExists = true;
            }
    
            $stmt->close();
        } else {
            error_log("Error preparing statement: " . $con->error);
        }
    
        return $emailExists;
    }

    
    
    function checkMobileSignUp($con, $mobile_no) {
        $key = getKey();
        $encryptedmobile_no = encrypt($mobile_no, $key);
    
        $query = "SELECT mobile_no FROM users_table WHERE mobile_no = ?";
        $mobile_noExists = false;
    
        if ($stmt = $con->prepare($query)) {
            $stmt->bind_param("s", $encryptedmobile_no);
            $stmt->execute();
            $stmt->store_result(); // Store the result to check the number of rows
    
            // Check if the email exists
            if ($stmt->num_rows > 0) {
                $mobile_noExists = true;
            }
    
            $stmt->close();
        } else {
            error_log("Error preparing statement: " . $con->error);
        }
    
        return $mobile_noExists;
    }











    //for sign in

    
    

    // Function to fetch existing challenges
    function fetchExistingChallenges($con, $limit = 5, $offset = 0) {
        $query = "SELECT challenge_id, author_uuid, challenge_uuid, title, description, deadline, upload_name, day_uploaded, time_stamp FROM posted_challenges LIMIT ? OFFSET ?";

        if ($stmt = $con->prepare($query)) {
            $stmt->bind_param("ii", $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            $challenges = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            return $challenges;
        } else {
            error_log("Error preparing statement: " . $con->error);
            return [];
        }
    }

    // Check if 'action' is set in the query parameters
    if (isset($_GET['action']) && $_GET['action'] === 'fetchChallenges') {
        // Fetch the challenges with default limit and offset
        $challenges = fetchExistingChallenges($con);
        
        // Set the content type to JSON
        header('Content-Type: application/json');
        
        // Output the challenges as JSON
        echo json_encode($challenges);
    }


    function totalChallenges($con) {
        $query = "SELECT COUNT(*) as total FROM posted_challenges";
        $total = 0;
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($total);
            $stmt->fetch();
            $stmt->close();
            return $total;
        } else {
            error_log("Error preparing statement: " . $con->error);
            return 0; // Return 0 if there's an error
        }
    }


    function totalIdeas($con) {
        $query = "SELECT COUNT(*) as total FROM submitted_ideas";
        $total = 0;
    
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($total);
            $stmt->fetch();
            $stmt->close();
            return $total;
        } else {
            error_log("Error preparing statement: " . $con->error);
            return 0; // Return 0 if there's an error
        }
    }
    
    function totalSubmissions($con) {
       return totalChallenges($con) + totalIdeas($con);
    }


    function totalUsers($con) {
        $query = "SELECT COUNT(*) as total FROM users_table";
        $total = 0;
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($total);
            $stmt->fetch();
            $stmt->close();
            return $total;
        } else {
            error_log("Error preparing statement: " . $con->error);
            return 0; // Return 0 if there's an error
        }
    }
    
    function checkEmail($con, $email) {
        $key = getKey();
        $encryptedemail = encrypt($email, $key);
        
        $query = "SELECT * FROM users_table WHERE email = ? LIMIT 1";
        $resultData = null;
        
        if ($stmt = $con->prepare($query)) {
            $stmt->bind_param("s", $encryptedemail);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                
                // Decrypt the data
                $decryptedUUID = decrypt($row['uuid'], $key);
                $decryptedSessionId = decrypt($row['session_id'], $key);
                $decryptedFirstName = decryptData($row['first_name'], $key);
                $decryptedOtherNames = decryptData($row['other_names'], $key);
                $decryptedEmail = decrypt($row['email'], $key);
                $decryptedMobileNumber = decrypt($row['mobile_no'], $key);
                $decryptedGender = $row['gender'];
                $decryptedAccountType = decryptData($row['account_type'], $key);
                $decryptedAccountStatus = decryptData($row['account_status'], $key);
                $decryptedDirectorate = decryptData($row['directorate'], $key);
                $decryptedDepartment = decryptData($row['department'], $key);
                $decryptedDesignation = decryptData($row['designation'], $key);
                $decryptedCodeOTP = decrypt($row['OTP_code'], $key);
                $decryptedLastLogin = decryptData($row['last_login'], $key);
                $decryptedTimeAccountCreated = $row['time_account_created'];
    
                // Set cookies
                $expiration = time() + 600; // 10 minutes from now
                setcookie('OTPCode', $row['OTP_code'], $expiration, '/', '', false, false); // Path set to '/', HttpOnly true
                setcookie('accountType', $decryptedAccountType, $expiration, '/', '', false, false);
                setcookie('accountStatus', $decryptedAccountStatus, $expiration, '/', '', false, false);

                //send otp
                $recipientEmail = $decryptedEmail;
                $subject = 'KeNHAVATE OTP Code';
                $head = 'OTP Verification Code';
                $body = $decryptedCodeOTP;


                // Call the function
                sendEmail($recipientEmail, $subject, $head, $body);
    
                $resultData = [
                    'uuid' => $decryptedUUID,
                    'sessionId' => $decryptedSessionId,
                    'firstName' => $decryptedFirstName,
                    'otherNames' => $decryptedOtherNames,
                    'email' => $decryptedEmail,
                    'mobileNumber' => $decryptedMobileNumber,
                    'gender' => $decryptedGender,
                    'accountType' => $decryptedAccountType,
                    'accountStatus' => $decryptedAccountStatus,
                    'directorate' => $decryptedDirectorate,
                    'department' => $decryptedDepartment,
                    'designation' => $decryptedDesignation,
                    'codeOTP' => $decryptedCodeOTP,
                    'lastLogin' => $decryptedLastLogin,
                    'timeAccountCreated' => $decryptedTimeAccountCreated
                ];
                

                //fetch session_id from the db and encrypt it to make it more secure
                
                $doubleEncryptedSessionId = encrypt($row['session_id'], $key);

                $_SESSION['doubleEncryptedSessionId'] = $doubleEncryptedSessionId;
            }
            else {
                error_log("No account found for email: " . $email);
            }
            
            $stmt->close();
        } else {
            error_log("Error preparing statement: " . $con->error);
        }
        
        return [
            'total' => ($resultData ? 1 : 0),
            'data' => $resultData ? [$resultData] : []
        ];
    }
    
    function sendEmail($recipientEmail, $subject, $head, $body, $fromEmail = 'noreply@kenhainnovation.com', $fromName = 'KeNHAVATE') {
        $mail = new PHPMailer(true);
    
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kenhainnovation@gmail.com';
            $mail->Password = 'frnehuvdnrvennph'; // Consider moving this to a secure place
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
    
            // Sender info
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($recipientEmail);
            $mail->addReplyTo($fromEmail, 'No Reply');
    
            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>OTP Verification</title>
                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <style>
                            body {
                                background-color: #f5f5f5;
                                font-family: Arial, sans-serif;
                                padding: 20px;
                            }
                            .container {
                                border: 0.5px groove black;
                                border-radius: 5px;
                                -webkit-box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1);
                                -moz-box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1);
                                box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1);
                                padding: 20px;
                                margin: 0 auto;
                                max-width: 600px;
                            }
                            .otp-box {
                                background-color: #fff3cd;
                                border: 2px solid #ffeeba;
                                border-radius: 5px;
                                padding: 20px;
                                margin-bottom: 20px;
                            }
                            .otp-code {
                                font-size: 24px;
                                font-weight: bold;
                                color: #343a40;
                                text-align: center;
                                margin-bottom: 20px;
                            }
                            .otp-info {
                                font-size: 16px;
                                color: #343a40;
                                text-align: center;
                                margin-bottom: 20px;
                            }
                            .btn {
                                background-color: #ffc107;
                                color: #343a40;
                                border: none;
                                border-radius: 5px;
                                padding: 10px 20px;
                                font-size: 16px;
                                cursor: pointer;
                                text-decoration: none;
                            }
                            .btn:hover {
                                background-color: #ffca2c;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container" style="border: 0.5px groove black; border-radius: 5px; -webkit-box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 67px rgba(0, 0, 0, 0.1); padding: 20px; margin: 20px auto; max-width: 600px;">
                        <h5 style="text-align: center; color: #343a40; font-size: xx-large;"><strong>KENHAVATE PORTAL</strong></h5>
                            <div class="otp-box">
                            <h3 style="text-align: center; color: #343a40;">' . htmlspecialchars($head) . '</h3>
                                <p class="otp-info">As part of our enhanced security measures, 
                                    we have the one-time password (OTP) verification process. 
                                    To proceed, please access the online portal at <u style="color: blue;"><b><i>http://kenhavate.kenha.co.ke/KeNHAVATE</i></b></u>
                                    and enter the below code. This unique code is time-sensitive 
                                    and should be entered promptly to ensure a seamless verification experience. 
                                    Do not share the code with anyone.
                                </p>
                                <p class="otp-code">Your OTP: <strong>' . htmlspecialchars($body) . '</strong></p>
                            </div>
                            <p style="font-size: 14px; text-align: center; color: #6c757d;">This is an automated message. Do not reply.</p>
                        </div>
                    </body>
                </html>
            ';
    
            // Send the email
            $mail->send();
    
            return json_encode(['status' => 'success', 'message' => 'Email sent successfully.']);
        } catch (Exception $e) {
            return json_encode(['status' => 'error', 'message' => 'Email could not be sent. Error: ' . $mail->ErrorInfo]);
        }
    }
















    //function to check if user is logged in
    function checkSession($con) {
        if (!isset($_SESSION['doubleEncryptedSessionId'])) {
            error_log("No session set for this PC");
            $_SESSION['doubleEncryptedSessionId'] = "";
            return [
                'total' => 0,
                'data' => []
            ];
        }

        
        $resultData = [];
    
        try {
            $key = getKey();
            $sessionId = $_SESSION['doubleEncryptedSessionId'];
            $decryptDoubleEncryptedSessionId = decrypt($sessionId, $key);
    
            $query = "SELECT * FROM users_table WHERE session_id = ? LIMIT 1";
            $stmt = $con->prepare($query);
    
            if (!$stmt) {
                throw new Exception('Failed to prepare the SQL statement.');
            }
    
            $stmt->bind_param("s", $decryptDoubleEncryptedSessionId);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $resultData = [
                    'uuid' => decrypt($row['uuid'], $key),
                    'sessionId' => decrypt($row['session_id'], $key),
                    'firstName' => decryptData($row['first_name'], $key),
                    'otherNames' => decryptData($row['other_names'], $key),
                    'email' => decrypt($row['email'], $key),
                    'mobileNumber' => decrypt($row['mobile_no'], $key),
                    'gender' => $row['gender'],
                    'accountType' => decryptData($row['account_type'], $key),
                    'accountStatus' => decryptData($row['account_status'], $key),
                    'directorate' => decryptData($row['directorate'], $key),
                    'department' => decryptData($row['department'], $key),
                    'designation' => decryptData($row['designation'], $key),
                    'codeOTP' => decrypt($row['OTP_code'], $key),
                    'lastLogin' => decryptData($row['last_login'], $key),
                    'timeAccountCreated' => $row['time_account_created']
                ];
            }
    
            $stmt->close();
        } 
        catch (Exception $e) {
            error_log('Error: ' . $e->getMessage());
            $_SESSION['doubleEncryptedSessionId'] = "";
            return [
                'total' => 0,
                'data' => []
            ];
        }
    
        return [
            'total' => $resultData ? 1 : 0,
            'data' => $resultData ? [$resultData] : []
        ];
    }
    





    function getChallenges($con, $page = 1, $perPage = 12) {
        $start = ($page - 1) * $perPage;
        $challenges = [];
        $total = 0;
    
        try {
            // Base query
            $sql = "SELECT * FROM posted_challenges ORDER BY day_uploaded DESC LIMIT ?, ?";
    
            // Prepare and execute the main query
            $stmt = $con->prepare($sql);
    
            if (!$stmt) {
                throw new Exception('Failed to prepare the SQL statement for challenges.');
            }
    
            $stmt->bind_param('ii', $start, $perPage);
            $stmt->execute();
            $result = $stmt->get_result();
    
            while ($row = $result->fetch_assoc()) {
                $challenges[] = $row;
            }
    
            // Get total number of challenges for pagination
            $countSql = "SELECT COUNT(*) as total FROM posted_challenges";
            $countStmt = $con->prepare($countSql);
    
            if (!$countStmt) {
                throw new Exception('Failed to prepare the SQL statement for count.');
            }
    
            $countStmt->execute();
            $countResult = $countStmt->get_result();
            $total = $countResult->fetch_assoc()['total'];
    
            $stmt->close();
            $countStmt->close();
        } catch (Exception $e) {
            error_log('Error: ' . $e->getMessage());
            return [
                'challenges' => [],
                'total' => 0
            ];
        }
    
        return [
            'challenges' => $challenges,
            'total' => $total
        ];
    }
    
?>