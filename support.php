<!DOCTYPE HTML>
<?PHP
	session_start();
	require 'functions.php';
	$fingerprint = fingerprint();
	$db_link = connect();
?>
<html>
	<?PHP includeHead('CTS Software') ?>

	<body>
		<!-- MENU -->
		<?PHP
				includeMenu(8);
		?>
		<div class="content_center" style="width:100%; margin-top:15em">

		<!-- LEFT SIDE: greenweb Logo -->
		<div class="content_left" style="width:50%; padding-right:5em; text-align:right;">
			<img src="ico/greenweb_l.png" style="width:75%;">
		</div>

		<!-- RIGHT SIDE: Login Form -->
		<div class="content_right" style="width:50%; padding-left:5em; text-align:left;">

			<p class="heading" style="margin:0; text-align:left;">Technical Support Details</p>

			<form action="login.php" method="post">
				<table id="tb_fields" style="margin:0; border-spacing:0em 1.25em;">
					<tr>
						<td>
							Developer : <a href="http://batte.paxol.cloud" target="_blank">Batte Akhsam</a>
						</td>
					</tr>
					<tr>
						<td>
							Contact : <a href="tel://0708379861">+256-708-379-861</a>
						</td>
					</tr>
					<tr>
						<td>
							Email : <a href="mailto:batteakhsam2016@gmail.com"> batteakhsam2016@gmail.com</a>
						</td>
					</tr>
				</table>
			</form>
				<small>Powered by Axoblade</small>
		</div>
	</body>
</html>