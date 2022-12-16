<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DNS Lookup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<header>
		<div class="hodlu">
			<div class="dlulo  pt-4 pb-4 text-white bg-dark text-center">
				<h3>DNS Lookup</h3>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="dlubsf">
			<form action="get-lookup.php" method="get">
				<div class="form-group mt-5 mb-3">
					<input type="text" value="ghostak.com" name="doamin" placeholder="Enter Domain (eg: ghostak.com)" id="domain" class="form-control">
				</div>
				<div class="form-group text-center">
					<input type="submit" value="Check DNS" class="btn btn-primary">
				</div>
			</form>
		</div>
		<div class="dlubc mt-5 mb-5">
			<div class="dlucs row">
				<div class="col-lg-4">
					<div class="card" style="width: 18rem;">
						<div class="card-header">
							Recent Websites
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Ghostak.com</li>
							<li class="list-group-item">Cryptographicsolutions.in</li>
							<li class="list-group-item">Shoppingsei.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card" style="width: 18rem;">
						<div class="card-header">
							Popular Websites
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Ghostak.com</li>
							<li class="list-group-item">Cryptographicsolutions.in</li>
							<li class="list-group-item">Shoppingsei.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card" style="width: 18rem;">
						<div class="card-header">
							Promoted Websites
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Ghostak.com</li>
							<li class="list-group-item">Cryptographicsolutions.in</li>
							<li class="list-group-item">Shoppingsei.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<?php
$DNS = json_encode(dns_get_record("ghostak.com", DNS_ALL));
// print_r($DNS);
$jj = json_decode($DNS);
// print_r($jj);
echo $DNS;
// echo $jj[0]->ip;
?>
		<table class="table table-responsive table-striped mt-5 mb-5 p-2">
			<tr>
				<th colspan="2">DNS Showing For Testing.com</th>
			</tr>
			<tr>
				<td>A</td>
				<td><?php 
						echo $jj[0]->ip;?></td>
			</tr>
			<tr>
				<td>AAAA</td>
				<td>sdfsadg.sgfas.sdgasdg</td>
			</tr>
			<tr>
				<td>CNAME</td>
				<td></td>
			</tr>
			<tr>
				<td>HINFO</td>
				<td></td>
			</tr>
			<tr>
				<td>CAA</td>
				<td></td>
			</tr>
			<tr>
				<td>MX</td>
				<td></td>
			</tr>
			<tr>
				<td>NS</td>
				<td></td>
			</tr>
			<tr>
				<td>TXT</td>
				<td></td>
			</tr>
			<tr>
				<td>SRV</td>
				<td></td>
			</tr>
			<tr>
				<td>ALL</td>
				<td></td>
			</tr>
		</table>

		<?php
			if(isset($_GET['domain'])){
				echo '
						get found
				';
			}
			else{
				echo	'
					get not found
				';
			}
		?>
	</div>
</body>
</html>