<!DOCTYPE html>
<html>
<head>
    <title>Daftar Provinsi</title>
</head>
<body>
<h1>Daftar Provinsi</h1>
<ul>
    @foreach ($provinces as $province)
        <li><a href="{{ route('provinces.show', $province->province_id) }}">{{ $province->province }}</a></li>
    @endforeach
</ul>
</body>
</html>
