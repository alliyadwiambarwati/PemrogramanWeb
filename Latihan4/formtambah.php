<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <form action="insert.php" method="GET">
        <label for="npm">Npm</label>
        <input type="text" name="npm"/><br/>
        <label for="nama">Nama</label>
        <input type="text" name="nama"/><br/>
        <label for="prodi">Prodi</label>
        <select name="prodi" id="">
            <option value="Sistem Informasi">Sistem Informasi(S1)</option>
            <option value="Tekni Informatika">Tekni Informatika(S1)</option>
            <option value="Manajemen Informatika">Manajemen Infromatika(D3)</option> 
        </select>
        <br>
        <input type="submit" VALUES= "Tambah"/>
    </form>
</body>
</html>