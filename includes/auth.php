<?php
session_start();

if (!isset($_SESSION['CURRENT_ID'])) {
	header('Location:' . $siteurl . 'index.php');
} 