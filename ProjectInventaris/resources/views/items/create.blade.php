<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
    
</head>
<body>
    <h2>Formulir Tambah Barang Inventaris Kantor</h2>
    <!-- panggil kondisi bawaan laravel jika data berhasil disimpan ,uncul pesan success -->
    @if(@session('success'))
        <div>{{session('success')}}

    @endif
     <form action="{{route('item.store')}}" method="post">

        @csrf
        <label>Kode Barang:</label>
        <input type="text" name="code" require placeholder="contoh: Inv-001">
        <br>

        <label >Nama Barang:</label>
        <input type="text" name="item_name" require placeholder="Contoh:Laptop">
        <br>
        
        <label> Kategori:</label>
        <input type="text" name="category" require placeholder="Contoh:Elektronik">
        <br>
        
        <label> Stok:</label>
        <input type="number" name="stock" require value="1">
        <br>
        
        <label> Kondisi:</label>
        <select name="condition">
            <option value="baik">Baik</option>
            <option value="rusak_ringan">Rusak Ringan</option>
            <option value="rusak_parah">Rusak Parah</option>
        </select>
        <br>
        
        
        
        <label> Lokasi Ruangan:</label>
        <input type="text" name="room_location" placeholder="Contoh:Ruang IT Lt 3">
        <br>
        
        <button type="submit">Simpan Barang</button>
        <br>
        </form>
    </body>
</html>