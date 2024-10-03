<?php
    require_once 'IncludeAll.php'; // Ensure this file includes connect.php and initializes $con
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'checkEmail') {
        $email = $_GET['email'] ?? '';
    
        if ($email) {

            $response = checkEmail($con, $email);
    
            header('Content-Type: application/json');
            echo json_encode($response);
        }
        else {
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Email parameter missing']);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'encryptInputOTP') {
        $inputOTP = $_GET['inputOTP'] ?? '';
    
        $key = getKey();
        if ($inputOTP) {

            $response = encrypt($inputOTP, $key);
    
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Decrypting OTP error']);
        }
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getChallenges') {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 12;
    
        // Ensure page number is always positive
        $page = max($page, 1);
    
        // Fetch challenges from the database
        $result = getChallenges($con, $page, $perPage);
        $challenges = $result['challenges'];
        $total = $result['total'];
    
        // Calculate total pages
        $totalPages = ceil($total / $perPage);
    
        // Ensure totalPages is at least 1 if there are challenges
        $totalPages = max($totalPages, 1);
    
        // Ensure the current page is within the valid range
        $currentPage = min(max($page, 1), $totalPages);
    
        $response = [
            'challenges' => $challenges,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage
        ];
    
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
?>