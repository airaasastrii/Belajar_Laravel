<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Belajar Laravel' }}</title>
</head>
<body>
    <h1>Belajar Matematika Dasar</h1>
    {{-- url, route, /nama-route --}}
    <a href="{{ route('tambah') }}">Tambah-tambahan</a>
    <a href="{{ route('pengurangan') }}">Pengurangan</a>
    <a href="{{ route('bagi') }}">Bagi-bagian</a>
    <a href="{{ route('perkalian') }}">Perkalian</a>

    <a href="{{ url()->previous() }}">Kembali</a>

    <br><br>
    <form action="{{ route('actionTambah') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Angka 1</label>
            <input type="number" name="angka1" placeholder="Masukkan angka">
        </div>
        <br>
        <div class="form-group">
            <label for="">Angka 2</label>
            <input type="number" name="angka2" placeholder="Masukkan angka">
        </div>
        <br>
        <div class="form-group">
            <button type="submit">Jumlahkan</button>
        </div>
    </form>
    <br>
    <h1>Hasilnya adalah {{ $jumlah ?? 0 }}</h1>
</body>
</html>

