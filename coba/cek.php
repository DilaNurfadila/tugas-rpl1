<?php 
	if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $telepon = $_POST['telepon'];
        $kota = $_POST['kota'];

        $error = array();
        if(empty($nama)){
            $error['nama'] = 'Nama Tidak boleh kosong';
        } if(empty($agama)){
            $error['agama'] = 'Agama Tidak boleh kosong';
        } if(empty($telepon)){
            $error['telepon'] = 'Telepon Tidak boleh kosong';
        } if(empty($kota)){
            $error['kota'] = 'Kota Tidak boleh kosong';
        }
	?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
                <p style="color: red;"><?php echo ($error['nama']) ? ($error['nama']) : '';?></p>
			</tr>
            <tr>
				<td>Agama</td>
				<td><input type="text" name="agama"></td>
                <p style="color: red;"><?php echo ($error['agama']) ? ($error['agama']) : '';?></p>
			</tr>
            <tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
                <p style="color: red;"><?php echo ($error['telepon']) ? ($error['telepon']) : '';?></p>
			</tr>
            <tr>
				<td>Kota</td>
				<td><input type="text" name="kota"></td>
                <p style="color: red;"><?php echo ($error['kota']) ? ($error['kota']) : '';?></p>
			</tr>						
		</table>
    </body>
</html>