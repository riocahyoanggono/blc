<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION["akun_online"])) {
    header("location: ./login/");
} else {
    header("location: ./" . $_SESSION["akun_online"] . "/");
}
