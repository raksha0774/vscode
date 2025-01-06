<?php
$expiration = time() + (60 * 60 * 24 * 30); 
setcookie('last_visited', date('Y-m-d H:i:s'), $expiration);

$lastVisitedDateTime = $_COOKIE['last_visited'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html>

<head>
<title>Last Visited Date-Time</title>
</head>
<body>
<h2>Last Visited Date-Time</h2>
<p>
<?php
if ($lastVisitedDateTime !== 'Unknown') {
echo 'Last visited on: ' . $lastVisitedDateTime;
} else {
echo 'Welcome! This is your first visit.';
}
?>
</p>
</body>

</html>
