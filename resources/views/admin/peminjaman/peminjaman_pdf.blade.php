<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF Peminjaman Buku Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Peminjaman Buku Member</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>ID Transaksi</th>
				<th>ID Member</th>
                <th>ID Status</th>
				<th>ID Buku</th>
				<th>Judul Buku</th>
                <th>ISBN Buku</th>
                <th>Penerbit Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
			</tr>
		</thead>
		<tbody>
			@foreach($transaksi as $a)
			    <tr>
			    	<td>{{ $a->id_transaksi }}</td>
			    	<td>{{ $a->id }}</td>
			    	<td>{{ $a->id_status }}</td>
			    	<td>{{ $a->id_buku }}</td>
			    	<td>{{ $a->judul_buku }}</td>
			    	<td>{{ $a->isbn }}</td>
                    <td>{{ $a->penerbit }}</td>
                    <td>{{ $a->tgl_pinjam }}</td>
                    <td>{{ $a->tgl_kembali }}</td>
			    </tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>