<?php
ob_start();
include "../views/$controller.php";
$body = ob_get_contents();
ob_end_clean();