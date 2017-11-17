<?php
session_start();
unset($_SESSION['username']);
    print"<script type='text/javascript'>window.location='http://localhost/nsbmblog/login.php';</script>";
?>