<?php
// unset session
setcookie("username", null, time()-3600);

// redirect to login page
header("location:index.html");
?>