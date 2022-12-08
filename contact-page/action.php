<!DOCTYPE html>
<html>
	<head></head>
	<body onload="run()">
		<p>Redirecting in<p id="counter">5</p>
		</p>
	</body>
	<script type="text/javascript">
		var counterText = document.getElementById("counter");
		var counter = 5;
		function countdown(var count){
			var count = count;
			count--;
			counterText.innerHTML = count;
		}
		function run(){
			setInterval(countdown(counter),1000);
		}
	</script>
</html>