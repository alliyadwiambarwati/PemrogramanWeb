<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <form action="<?='update.php?id='.$_GET['id'];?>" method ="POST">
    <label for="npm">Npm</label>
    <input type="text" name="npm" value="<?=$row['npm'];?>"/><br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?=$row['nama'];?>"/><br>
    <label for="prodi">Prodi</label>
    <select name="prodi" id="">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Tekni Informatika">Tekni Informatika</option>
        <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select>
    <br>
    <input type="submit" value="update"/>
    </form>
</body>
</html>