<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['is_admin']);
header('location: ../');