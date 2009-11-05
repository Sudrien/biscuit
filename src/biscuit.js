(function() {

	function cookies() {
		cook = new Hash;
		document.cookie.split("; ").invoke('split', '=', 2).each(function(val) { cook.set(val[0],val[1]); });
		return cook;
		}

	Object.extend(document, {
		cookies: cookies.methodize()
		});

})();