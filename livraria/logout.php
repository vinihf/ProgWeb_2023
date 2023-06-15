<?php
session_start();
unset($_SESSION);
header("location: formLogin.html");