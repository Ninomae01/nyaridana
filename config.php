<?php

$conn = new mysqli("remotemysql.com", "StsEOIPvHe", "VwhiNDIL0k", "StsEOIPvHe");

if ($conn === false) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>