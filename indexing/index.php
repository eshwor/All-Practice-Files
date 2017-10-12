<?Php
$contentPage  =  isset( $_GET['_page']) ?  $_GET['_page'] : "home";
?>
<!DOCTYPE>
<head>
<title>This is first page</title>
</head>

<body>
<div id="menu">
<a href="index.php?_page=home">Home</a>&nbsp;|&nbsp;
<a href="index.php?_page=service">Service</a>&nbsp;|&nbsp;
<a href="index.php?_page=contact">Contact</a>
</div>

<hr />
<div>
<?Php include_once("$contentPage.php"); ?>
</div>

