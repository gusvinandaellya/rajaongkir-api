<!DOCTYPE html>
<html>
<head>
    <title>Detail Kota</title>
</head>
<body>
<h1>Detail Kota</h1>
<p><strong>ID Kota:</strong> {{ $city->city_id }}</p>
<p><strong>Nama Kota:</strong> {{ $city->city_name }}</p>
<p><strong>Provinsi:</strong> {{ $city->province }}</p>
<p><strong>Kode Pos:</strong> {{ $city->postal_code }}</p>
</body>
</html>
