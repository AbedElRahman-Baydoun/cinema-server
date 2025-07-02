<?php
require_once __DIR__ . '/connection/connection.php';
require_once __DIR__ . '/models/Model.php';

Model::setConnection($conn);
?>