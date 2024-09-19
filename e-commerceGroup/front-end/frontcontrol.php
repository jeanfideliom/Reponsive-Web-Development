<?php

session_start();
include ("../includes/sqlconnection.php");

if (isset($_POST['checkoutComplete'])) {

    $sql = "DELETE FROM addcart";

    if ($conn->query($sql) === TRUE) {
        unlink("images/products/$products[category]/$product[photo]");
        $_SESSION['status'] = "Deleted Successfully.";
        header('location: home.php');
    } else {
        $_SESSION['status'] = "Insertion Failed.";
        header('location: home.php');
    }
    $conn->close();

}
?>