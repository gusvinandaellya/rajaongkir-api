<!DOCTYPE html>
<html>
<head>
    <title>Detail Provinsi</title>
</head>
<body>
<h1>Detail Provinsi</h1>
<h2>{{ $province->province_name }}</h2>
<p>id: {{ $province->province_id }}</p>
<p>created_at: {{ $province->created_at }}</p>
<p>update_at: {{ $province->updated_at }}</p>
</body>
</html>
