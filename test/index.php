<?

	setcookie("cookie1", "value1");
	setcookie("cookie2", "value2");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Biscuit Test</title>
		<script type="text/javascript" src="prototype.js"></script>
		<script type="text/javascript" src="../src/biscuit.js"></script>
		<script type="text/javascript">
// <![CDATA[
		document.observe("dom:loaded", function() {
			$('dump1').update(document.cookie.inspect().escapeHTML());
			$('dump2').update(document.cookies().inspect().escapeHTML());
			});
// ]]>
		</script>
	</head>
	<body>
		<p id="static">Get you cookies here, folks.</p>
		<p id="dump1"></p>
		<p id="dump2"></p>
	</body>
</html>