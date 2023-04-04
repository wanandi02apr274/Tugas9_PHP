<?php
include_once 'top.php';
include_once 'menu.php';

?>
<div>
    <div class="container-fluid px-4">
        <h1>Selamat Dtang di Halaman Admin</h1>
        <head>
	<title>Menu</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>

	<table>
		<tr>
			<th>Menu</th>
		</tr>
		<tr>
			<td><a href="about.html">About</a></td>
		</tr>
		<tr>
			<td><a href="contact.html">Contact</a></td>
		</tr>
		<tr>
			<td><a href="data.html">Data</a></td>
		</tr>
	</table>

</body>
</div>
</div>
<?php
 include_once 'bottom.php';
?>