<div class="form-group">
    <label for="nik">Kode</label>
    <input type="text" name="kode" class="form-control" value="{{ old('kode', $hospital->kode ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $hospital->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $hospital->alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="spesialis">Hp</label>
    <input type="text" name="hp" class="form-control" value="{{ old('hp', $hospital->hp ?? '') }}">
</div>
<div class="form-group">
    <label for="spesialis">Pemilik</label>
    <input type="text" name="pemilik" class="form-control" value="{{ old('pemilik', $hospital->pemilik ?? '') }}">
</div>
<div class="form-group">
    <label for="spesialis">Kelas</label>
    <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $hospital->kelas ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
