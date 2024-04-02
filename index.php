<?php
$location = getenv("EOL_URL", true);

header("HTTP/1.1 301 Moved Permanently");
header("Location: " . $location);

exit;
?>
