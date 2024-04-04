<?php
session_start();

// Hủy phiên đăng nhập
session_unset();
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập
header("Location: index1.php");


