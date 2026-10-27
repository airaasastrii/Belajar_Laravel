@extends('belajar')
@section('content')

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
    <h1>Hasil nya adalah</h1>
@endsection
