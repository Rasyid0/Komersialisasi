@include('layout.master')

    <div class="col-md-10">
    <div class="container mt-3">
        <div class="row">
          <div class="col-12">

          <div class="pt-3 d-flex justify-content-end align-items-center">
            <h1 class="h2 mr-auto">Biodata {{$clean->nama}}</h1>
            <a href="{{ route('cleans.edit',['clean' => $clean->id]) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('cleans.destroy',['clean' => $clean->id]) }}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger ml-3">Hapus</button>
            </form>
          </div>
          <hr>
          @if (session()->has('pesan'))
              <div class="alert alert-success" role="alert">
                  {{ session()->get('pesan') }}
              </div>
          @endif

        <ul>
            <li>No Antrian: {{$clean->no_antrian}} </li>
            <li>Nama: {{$clean->nama}} </li>
            <li>Jenis Kelamin:
                {{$clean->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}
            </li>
            <li>Jenis: {{$clean->jenis}} </li>
            <li>No telp: {{$clean->no_telepon}} </li>
            <li>Alamat:
                {{$clean->alamat == '' ? 'N/A' : $clean->alamat}}
            </li>
        </ul>
          </div>
         </div>
    </div>
    </div>

</body>
</html>
