<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to index.php after destroying the session
header("Location: " . __DIR__ . "/index.php");
exit;
?>

<script>
    setTimeout(function() {
        window.location.reload();
    }, 1000);
</script>