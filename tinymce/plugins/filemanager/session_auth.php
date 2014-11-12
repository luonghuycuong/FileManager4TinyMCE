<?php
//auth prepare
session_start();
if($_SESSION["verify"] != "FileManager4TinyMCE") die('forbidden');