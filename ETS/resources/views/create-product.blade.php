

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5025211048 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle bg-dark bg-gradient text-light rounded">
            <form method="POST" action="{{ route('createProduk') }}" class="p-5" enctype="multipart/form-data"> 
                @csrf
                <div class="text-center fw-bold mb-5">
                    INPUT PRODUK
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Nama Produk</span>
                    <input type="text" class="form-control" placeholder="Masukan Nama" aria-describedby="nama" id="nama" name="nama">
                    @error('nama')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Masukan Jenis Produk (ID)</span>
                    <input type="int" class="form-control" placeholder="Masukan Kode Jenis Produk" aria-describedby="jenis_products_id" id="jenis_products_id" name="jenis_products_id">
                    @error('jenis_products_id')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Kondisi</span>
                    <input type="text" class="form-control" placeholder="Masukan Kondisi" aria-describedby="kondisi" id="kondisi" name="kondisi">
                    @error('kondisi')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Deskripsi</span>
                    <input type="text" class="form-control fs-6" placeholder="Desc." aria-describedby="deskripsi" id="deskripsi" name="deskripsi">
                    @error('deskripsi')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Kecacatan</span>
                    <input type="text" class="form-control fs-6" placeholder="Desc. Cacat" aria-describedby="kecacatan" id="kecacatan" name="kecacatan">
                    @error('kecacatan')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Jumlah</span>
                    <input type="int" class="form-control fs-6" placeholder="Jumlah" aria-describedby="jumlah" id="jumlah" name="jumlah">
                    @error('jumlah')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <span class="input-group-image">Image</span>
                    <input type="file" class="form-control fs-6" accept="image/" id="gambar" name="gambar">
                    @error('gambar')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>