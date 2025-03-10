<?php
$db = new Database();
$design = $db->read("design", "*", "id = 1");

$errors = [];
$success = "";

if (isset($_POST['update']) && $_GET['p'] === 'design') {
    $data = [
        'track_order' => $_POST['track_order'],
        'cart' => $_POST['cart'],
        'faq' => $_POST['faq'],
        'intro' => $_POST['intro'],
        'facebook' => $_POST['facebook'],
        'github' => $_POST['github']
    ];

    $uploadDir = __DIR__ . "/../../uploads/icons/"; 
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg', 'image/webp'];

    if (!empty($_FILES['big_profile']['tmp_name'])) {
        $fileTmp = $_FILES['big_profile']['tmp_name'];
        $fileName = $_FILES['big_profile']['name'];
        $fileType = mime_content_type($fileTmp);
        
        if (in_array($fileType, $allowedTypes)) {
            $filePath = $uploadDir . $fileName;
            move_uploaded_file($fileTmp, $filePath);
            $data['front_shop'] = $fileName;
        } else {
            $errors[] = "Invalid front shop image format.";
        }
    }

    if (!empty($_FILES['small_profile']['tmp_name'])) {
        $fileTmp = $_FILES['small_profile']['tmp_name'];
        $fileName = $_FILES['small_profile']['name'];
        $fileType = mime_content_type($fileTmp);
        
        if (in_array($fileType, $allowedTypes)) {
            $filePath = $uploadDir . $fileName;
            move_uploaded_file($fileTmp, $filePath);
            $data['back_shop'] = $fileName;
        } else {
            $errors[] = "Invalid back shop image format.";
        }
    }

    // Update database if no errors
    if (empty($errors)) {
        if ($db->update("design", $data, "id = 1")) {
            $success = "Design updated successfully!";
        } else {
            $errors[] = "Failed to update design.";
        }
    }
}

