<?php
session_start();
if (empty($_SESSION['CSRF_TOKEN'])) {
    $_SESSION['CSRF_TOKEN'] = bin2hex(random_bytes(32));
}
