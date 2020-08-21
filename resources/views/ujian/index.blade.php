<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS - Ujian tengah Semester</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-3 mb-3 text-center">Data Penyewaan Motor </h3>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                Data Berhasil di simpan
            </div>
        @endif
        {{-- <button class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#exampleModal" >Tambah Data</button> --}}
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID Penyewaan</th>
                <th scope="col">Nama Kustomer</th>
                <th scope="col">Jenis Motor</th>
                <th scope="col">Tgl Penyewaan</th>
                <th scope="col">Tgl Pengembalian</th>
                <th scope="col">user</th>
                <th scope="col">created at</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->nanaCustomer}}</td>
                        <td>{{$item->jenisMotor}}</td>
                        <td>{{$item->tglPenyewaan}}</td>
                        <td>{{$item->tglPengembalian}}</td>
                        <td>{{$item->user}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Ubah</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>



    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Soal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/ujian/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Matakulaih</label>
                        <input type="text" name="nama_mk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" name="dosen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Soal</label>
                        <input type="number" name="jumlah_soal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>keterangan</label>
                        <textarea class="form-control" name="keterangan" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
