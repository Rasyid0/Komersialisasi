{{ session()->get('pesan') }}
@include('layout.master')

    <div class="col-md-10">
    <div class="container mt-3">
        <div class="row">
          <div class="col-12">

          <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Tabel Order</h2>
            <a href="{{ route('cleans.create') }}" class="btn btn-primary">Tambah Order</a>
          </div>

          @if (session()->has('pesan'))
              <div class="alert alert-success">
                  {{ session()->get('pesan') }}
              </div>
          @endif

          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>No. Antrian</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jenis</th>
                <th>No. telp</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($cleans as $clean)
              <tr>
                <th>{{$loop->iteration}}</th>
                <td><a href="{{ url('/cleans/'.$clean->id) }}">{{$clean->no_antrian}}</td>
                <td>{{$clean->nama}}</td>
                <td>{{$clean->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                <td>{{$clean->jenis}}</td>
                <td>{{$clean->no_telepon}}</td>
                <td>{{$clean->alamat == '' ? 'N/A' : $clean->alamat}}</td>
              </tr>
              @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
              @endforelse
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
