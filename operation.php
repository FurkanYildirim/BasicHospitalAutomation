<?php
ob_start();
session_start();
include 'connect.php';


if(isset($_POST['sign_up'])) {
   $user_in = isset($_POST['user_in']) ? $_POST['user_in'] : null;
   $user_namesurname = isset($_POST['user_namesurname']) ? $_POST['user_namesurname'] : null;
   $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : null;

   $query = $db->prepare('INSERT INTO user SET
        user_in = ?,
        user_namesurname = ?,
        user_password = ?
   
   ');
   $add = $query->execute([
        $user_in, $user_namesurname, $user_password 
   ]);

   if($add) {
    header ('location:index.php?status=successful');
   }
   else{
    $error = $query->errorInfo();
    echo 'MYSQL ERROR' .$error[2];
   }

}

if(isset($_POST['sign_in'])) {
     $user_in = $_POST['user_in'];
     $user_password = $_POST['user_password'];

     $query_user = $db->prepare("SELECT * FROM user WHERE user_in=:user_in and user_password=:user_password");
     $query_user->execute([
          'user_in' => $user_in,
          'user_password' => $user_password
     ]);

     $counter = $query_user->rowCount();
     if($counter==1) {
          $_SESSION['muser_in']=$user_in;
          header('location:homepage.php?status=successful');
          exit;
     }
     else {
          header('location:index.php?status=failed');
          exit;
     }
}

if(isset($_POST['save_appointment'])) {
     $appointment_city = isset($_POST['appointment_city']) ? $_POST['city'] : null;
     $appointment_hospital = isset($_POST['appointment_hospital']) ? $_POST['hospital'] : null;
     $appointment_doctor = isset($_POST['appointment_doctor']) ? $_POST['doctor'] : null;
     $appointment_date = isset($_POST['appointment_date']) ? $_POST['date'] : null;
     $appointment_clinic = isset($_POST['appointment_clinic']) ? $_POST['clinic'] : null;
     $appointment_patient_id = isset($_POST['appointment_patient_id']) ? $_POST['patient_id'] : null;

     $save=$db->prepare("INSERT INTO appointment SET
          appointment_city = ?,
          appointment_hospital = ?,
          appointment_doctor = ?,
          appointment_date = ?,
          appointment_clinic = ?,
          appointment_patient_id = ?
     
     ");

     $insert=$save->execute([
          $appointment_city, $appointment_hospital, $appointment_doctor, $appointment_date, $appointment_clinic, $appointment_patient_id
     ]);

     if($insert) {
          header("location:homepage.php?register_successful");
     }
     else {
          header("location:homepage.php?register;failed");
     }

}



?>