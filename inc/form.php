<?php
if(!$conn){ 
    echo 'Error: ' . mysqli_connect_error();
} 

if (isset($_POST['submit'])){ 

$firstName= mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName= mysqli_real_escape_string($conn, $_POST['lastName']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];
$sql = "INSERT INTO USERS(firstName, lastName, email)
        VALUES('$firstName', '$lastName', '$email')";

if(empty($firstName)){
    $errors['firstNameError'] = 'الرجاء إدخال الأسم الأول'; 
} 

if(empty($lastName)){
    $errors['lastNameError'] = 'الرجاء إدخال الأسم الأخير';
} 

if(empty($email)){
    $errors['emailError'] = 'الرجاء إدخال البريد الألكتروني';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'الرجاء إدخال بريد ألكتروني صحيح';
} 

if(!array_filter($errors)) {
if(mysqli_query($conn, $sql)){
    header('Location: ' . $_SERVER['PHP_SELF']);
} else {
    echo 'Error: ' . mysqli_connect_error($conn);

}
}

}

?>