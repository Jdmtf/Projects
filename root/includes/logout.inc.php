<?php 

session_start();
session_unset(); //takes session variabes that are created when logged in, and deletes them from the session variables
session_destroy();

header("Location: ../index.php?logout=success");

