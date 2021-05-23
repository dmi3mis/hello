<html>

<head>
<title>Hello World!</title>
</head>

<body>

<?php echo "Hello World!"; ?>
<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?>

<?php if($_ENV["COLOR"]) {?><h3>This site has color: <?php echo $_ENV["COLOR"]; ?>

</body>
</html>
