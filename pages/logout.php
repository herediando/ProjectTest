

<?php
session_start();
session_destroy();
echo 'Ha terminado la sesion';
?>
<script>
location.href = "../";
</script>
