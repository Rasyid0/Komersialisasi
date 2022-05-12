{{ session()->get('pesan') }}
@include('layout.master')

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit Order</h1>
      <hr>

      <form action="{{ route('cleans.update',['clean' => $clean->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="no_antrian">No. Antrian</label>
          <input type="text"
          class="form-control @error('no_antrian') is-invalid @enderror"
          id="no_antrian" name="no_antrian" value="{{ old('no_antrian') ?? $clean->no_antrian }}">
          @error('no_antrian')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text"
          class="form-control @error('nama') is-invalid @enderror"
          id="nama" name="nama" value="{{ old('nama') ?? $clean->nama }}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="laki_laki" value="L"
              {{ (old('jenis_kelamin') ?? $clean->jenis_kelamin)
              == 'L' ? 'checked': '' }} >
              <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="perempuan" value="P"
              {{ (old('jenis_kelamin') ?? $clean->jenis_kelamin)
              == 'P' ? 'checked': '' }} >
              <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            @error('jenis_kelamin')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" name="jenis" id="jenis">
              <option value="Fast Cleaning"
              {{ (old('jenis') ?? $clean->jenis)==
              'Fast Cleaning' ? 'selected': '' }} >
              Fast Cleaning
              </option>
              <option value="Deep Cleaning"
              {{ (old('jenis') ?? $clean->jenis)==
              'Deep Cleaning' ? 'selected': '' }} >
              Deep Cleaning
              </option>
              <option value="Hard Cleaning"
              {{ (old('jenis') ?? $clean->jenis)==
              'Hard Cleaning' ? 'selected': '' }} >
              Hard Cleaning
              </option>
              <option value="Reglue"
              {{ (old('jenis') ?? $clean->jenis)==
              'Reglue' ? 'selected': '' }} >
              Reglue
              </option>
              <option value="Recolour"
              {{ (old('jenis') ?? $clean->jenis)==
              'Recolour' ? 'selected': '' }} >
              Recolour
              </option>
              <option value="Repaint"
              {{ (old('jenis') ?? $clean->jenis)==
              'Repaint' ? 'selected': '' }} >
              Repaint
              </option>
              <option value="Bag Cleaning"
              {{ (old('jenis') ?? $clean->jenis)==
              'Bag Cleaning' ? 'selected': '' }} >
              Bag Cleaning
              </option>
            </select>
            @error('jurusan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

        <div class="form-group">
            <label for="no_telepon">No. telp</label>
            <input type="text"
            class="form-control @error('') is-invalid @enderror"
            id="no_telepon" name="no_telepon" value="{{ old('no_telepon') ?? $clean->no_telepon }}">
            @error('no_telepon')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3"
          name="alamat">{{ old('alamat') ?? $clean->alamat}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
