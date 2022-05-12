@include('layout.master')

    <div class="col-md-10">
            <div class="container pt-4 bg-white">
            <div class="row">
              <div class="col-md-8 col-xl-6">
                <h1>Order</h1>
                <hr>

                <form action="{{ route('cleans.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="no_antrian">No. Antrian</label>
                    <input type="text"
                    class="form-control @error('no_antrian') is-invalid @enderror"
                    id="no_antrian" name="no_antrian" value="{{ old('no_antrian') }}">
                    @error('no_antrian')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text"
                    class="form-control @error('nama') is-invalid @enderror"
                    id="nama" name="nama" value="{{ old('nama') }}">
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
                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                        id="perempuan" value="P"
                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
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
                        {{ old('jenis')=='Fast Cleaning' ? 'selected': '' }} >
                        Fast Cleaning
                        </option>
                        <option value="Deep Cleaning"
                        {{ old('jenis')=='Deep Cleaning' ? 'selected': '' }} >
                        Deep Cleaning
                        </option>
                        <option value="Hard Cleaning"
                        {{ old('jenis')=='Hard Cleaning' ? 'selected': '' }} >
                        Hard Cleaning
                        </option>
                        <option value="Reglue"
                        {{ old('jenis')=='Reglue' ? 'selected': '' }} >
                        Reglue
                        </option>
                        <option value="Recolour"
                        {{ old('jenis')=='Recolour' ? 'selected': '' }} >
                        Recolour
                        </option>
                        <option value="Repaint"
                        {{ old('jenis')=='Repaint' ? 'selected': '' }} >
                        Repaint
                        <option value="Bag Cleaning"
                        {{ old('jenis')=='Bag Cleaning' ? 'selected': '' }} >
                        Bag Cleaning
                        </option>
                        </option>
                      </select>
                      @error('jenis')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                  <div class="form-group">
                      <label for="no_telepon">no_telepon</label>
                      <input type="text"
                      class="form-control @error('no_telepon') is-invalid @enderror"
                      id="No_telepon" name="no_telepon" value="{{ old('no_telepon') }}">
                      @error('no_telepon')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3"
                    name="alamat">{{ old('alamat') }}</textarea>
                  </div>

                  <br>
                  <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                  <a href="{{ route('cleans.index') }}" class="btn btn-warning">Kembali</a>
                </form>

              </div>
            </div>
        </div>
    </div>
</body>
</html>
