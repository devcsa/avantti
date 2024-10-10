<?php

session_id("admBlog");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ./");
  exit;
}
