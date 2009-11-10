<?

	setcookie("cookie1", "value1", time()+60*60*24*30);
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
			$('dump1').update(document.cookies().inspect().escapeHTML());
			
			var myDate=new Date();
			myDate.setHours(myDate.getHours()+5);
			
			if(document.cookies().get('v')) {
				document.cookies().set('v', parseInt( document.cookies().get('v')) + 1, {'expires': myDate} );
				}
			else {
				document.cookies().set('v', 1, {'expires': myDate} );
				}
			document.cookies().set('cookie2','new value2');
			document.cookies().unset('cookie1');
			$('dump2').update(document.cookie.inspect().escapeHTML());
			$('dump3').update(document.cookies().inspect().escapeHTML());
			$('dump4').update(document.cookies().get('cookie2'));
			});
// ]]>
		</script>
	</head>
	<body>
		<p id="static">Get you cookies here, folks.</p>
		<p id="dump1"></p>
		<p id="dump2"></p>
		<p id="dump3"></p>
		<p id="dump4"></p>
	</body>
</html>