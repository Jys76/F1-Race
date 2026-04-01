
<?php
    require_once __DIR__ . '/core/path_config.php';

    session_start();
    session_destroy();
    header("Location: " . HOME_URL);
