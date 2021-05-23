<html>

<head>
<title>Hello World!</title>
</head>

<body>

<?php echo "Hello World!"; ?>
<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?>
<?php echo "This site is "; ?> 
<?php echo $_ENV["COLOR"]; ?> <br /><br />

?>

</body>
</html>
