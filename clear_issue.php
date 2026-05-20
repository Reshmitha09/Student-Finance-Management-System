<?php
include "db.php";
$id =
$_GET["id"];
$conn->query(
"DELETE FROM issues
WHERE issue_id='$id'"
);
header(
"Location:view_issues.php"
);
?>