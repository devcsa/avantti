<?php

if ($_SESSION["type_user_id"] !== "1") {
  header("location: home");
  exit;
}
