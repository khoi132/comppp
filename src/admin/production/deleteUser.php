<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/userRepository.php");
    $userRepository = new UserRepository();
    $userRepository->deleteById($_GET['id']);
    echo "<script>alert('Successful delete');
        window.location.href='user.php';
        </script>";
?>