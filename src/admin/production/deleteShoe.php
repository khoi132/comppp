<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/shoeRepository.php");
    $shoeRepository = new ShoeRepository();
    $shoeRepository->deleteById($_GET['id']);
    echo "<script>alert('Successful delete');
        window.location.href='shoe.php';
        </script>";
?>