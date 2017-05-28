<div id="footer-wrapper">

			<div class="container">

				<div class="row">

					<div class="8u 12u(mobile)"></div>

					<div class="4u 12u(mobile)"></div>

				</div>

				<div class="row">

					<div class="12u">

						<div id="copyright"> Copyright © 2017 BomberBot |	Powered by UAIC/2B3/VMMMteam </div>

					</div>

				</div>

			</div>

		</div>

		<script>

			function showHint(str) {

				if (str.length == 0) { 

					document.getElementById("txtHint").innerHTML = "";

					return;

				} else {

					var xmlhttp = new XMLHttpRequest();

					xmlhttp.onreadystatechange = function() {

						if (this.readyState == 4 && this.status == 200) {

							document.getElementById("txtHint").innerHTML = this.responseText;

						}

					};

					xmlhttp.open("GET", "gethint.php?q=" + str, true);

					xmlhttp.send();

				}

			}

		</script>

	</body>

</html>