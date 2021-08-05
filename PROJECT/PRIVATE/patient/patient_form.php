<?php require_once('../config/connection.php');

if (isset($_POST['submit'])) {
    
    // ================ DATA FILTER AND SANITIZE ================
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $patient_no = filter_var($_POST['patient_number'], FILTER_VALIDATE_INT);
    $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $disease = filter_var($_POST['disease'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $gender = $_POST['gender'];
    // ================ DATA FILTER AND SANITIZE ================
    
    // ================ CHECK IF PATIENT EXISTS ================
    $success = true;
    if ($success == true) {
        $sql = "SELECT * FROM patient WHERE email='$email' OR patient_no='$patient_no' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) { $success = 0; }
    }
    // ================ CHECK IF PATIENT EXISTS ================

            
    // ================ IMAGE UPLOAD ================
    if ($success == true) {
        $target_folder = "images/";
    	$image_status = true;
    	$uploadOk = true;
    	
        // Change_image_name;
    	$target_file = $target_folder . basename($_FILES['fileToUpload']['name']);
    	$extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $_FILES['fileToUpload']['name'] = $patient_no . '.' . $extension;
        $image_name = $_FILES['fileToUpload']['name'];
        $target_file = $target_folder . basename($image_name);
            
        // Checking File
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if ($check !== false) { $uploadOk = true; } else { $uploadOk = false; }
        
        // FILE SANITIZATION
        if (file_exists($target_file)) { $uploadOk = 0; }
        if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif") {	$uploadOk = 0; }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $image_status = false;
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                
                $image_status = true;
            } else {
                $image_status = false;
            }
        }
    // ================ IMAGE UPLOAD ================
            
    // ================ STORING DATA IN DB ================
        $sql = "INSERT INTO patient (fullname, email, patient_no, age, address, disease, description, gender)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssiissss', $fullname, $email, $patient_no, $age, $address, $disease, $description, $gender);
        $stmt->execute();
    // ================ STORING DATA IN DB ================
    }
    
    // Redirecting
    header("Location: ../../PUBLIC/Pages/patient-form.php?success=true");
    
        
}

?>

