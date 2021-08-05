<?php require_once('../config/connection.php');
if (isset($_GET['id'])) {
        
    if (isset($_POST['update'])) {
        $id = number_format($_GET['id']);
        
        $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $disease = filter_var($_POST['disease'], FILTER_SANITIZE_STRING);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        $sql = "UPDATE patient SET fullname=?,
                                    email=?,
                                    age=?,
                                    address=?,
                                    disease=?,
                                    description=?
                                    WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssisss', $fullname, $email, $age, $address, $disease, $description);
        $stmt->execute();
        header("Location: ../../PUBLIC/Pages/patients.php");
    }
    
}


?>