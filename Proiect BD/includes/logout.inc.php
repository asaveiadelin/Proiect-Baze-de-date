<?php

session_start();
session_unset(); //stergere cont
session_destroy();
header("Location: ../index.php");