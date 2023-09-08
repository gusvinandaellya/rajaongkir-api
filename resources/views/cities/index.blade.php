<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kota</title>
</head>
<body>
<h1>Daftar Kota</h1>
<ul>
    @foreach ($cities as $city)
        <li><a href="{{ route('cities.show', $city->city_id) }}">{{ $city->city_name }}</a></li>
    @endforeach
</ul>
</body>
</html>
