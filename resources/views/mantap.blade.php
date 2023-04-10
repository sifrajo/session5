<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Compact --}}
    {{-- <h1>Mantap</h1>
    @foreach ($arrMahasiswa as $mhs)
        <h2>{{ $mhs }}</h2>
    @endforeach --}}

    {{-- With --}}
    <h1>Mantap</h1>
    @foreach ($mhs as $m)
        <h2>{{ $m }}</h2>
    @endforeach
</body>
</html>
