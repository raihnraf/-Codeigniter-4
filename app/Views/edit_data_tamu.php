<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
         <h1>Edit Buku Tamu</h1>
    <form action="<?= base_url('proses_edit_tamu') ?>" method="POST">
    <input type="hidden" class="form-control" id="id_tamu" name="id_tamu" value="<? $data_tamu->id ?>">
    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
            <input type="text" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" value="<?= $data_tamu->tgl_berkunjung ?>">
   </div>
   <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $data_tamu->nama_tamu ?>">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $data_tamu->no_telepon ?>">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_tamu->alamat ?>">
  </div>
  <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $data_tamu->keperluan ?>">
  </div>
  <div class="mb-3">
       <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
  

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


