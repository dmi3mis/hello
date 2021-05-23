<html>

<head>
<title>Hello World!</title>
</head>

<body>

<?php echo "Hello World!" ; ?>
<?php echo 'This site is: ' .$_ENV["COLOR"] . '!'; ?>

<?php if($_ENV["HOSTNAME"]) {?><h3>My test string with hostname is <?php echo .$_ENV["HOSTNAME"]. ; ?><br /><br />

</body>
</html>
