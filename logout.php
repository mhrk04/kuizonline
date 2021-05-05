<?php
//mula session
session_start();
session_destroy();
//ke login  balik
header("location:login.php");
