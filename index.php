<?php
if (isset($_GET['download'])) {
    $file = __DIR__ . 'public/delta-setup.exe';
    if (file_exists($file)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="delta-setup.exe"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}
?>
