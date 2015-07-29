<?php 
session_start();
if(!isset($_SESSION["FileManager4TinyMCE"]) || !$_SESSION["FileManager4TinyMCE"])
    die('forbidden');