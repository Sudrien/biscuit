(function() {

	var Cookie = Class.create(Hash, {
		set: function(key, value, max_age, path, domain, secure) {
		
			if (key == undefined) new Error('No key');
			if (value == undefined) new Error('No value');
			
			to_set =  key + "=" + value;
			
			if (max_age != undefined) {
				to_set += ";max-age=" + max_age;
				}
			if (path != undefined) {
				to_set += ";path=" + path;
				}
			if (domain != undefined) {
				to_set += ";path=" + domain;
				}
			if (secure != undefined) {
				to_set += ";secure";
				}
			
			
			document.cookie = to_set;

			return this._object[key] = value;
			},
			
		get: function(key) {
			if (this._object[key] !== Object.prototype[key])
			return decodeURIComponent(this._object[key]);
			},
			
		inspect: function () {
			return '#<Cookie:{' + this.map(function(pair) {
				return pair.map(Object.inspect).join(': ');
				}).join(', ') + '}>';
			}


			});

	function cookies() {
		cook = new Cookie;
		document.cookie.split("; ").invoke('split', '=', 2).each(function(val) { cook.set(val[0],val[1]); });
		return cook;
		}

	Object.extend(document, {
		cookies: cookies
		});

})();