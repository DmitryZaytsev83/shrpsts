<?php
require APPROOT . '/views/inc/header.php';
echo '<h1>' . $data['title'] . '</h1>';
echo '<p>' . $data['description'] . '</p>';
echo '<p>Version: <strong>' . APPVERSION . '</strong></p>';
require APPROOT . '/views/inc/footer.php';