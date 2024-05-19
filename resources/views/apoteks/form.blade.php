<div class="form-group">
    <label for="nik">Kode</label>
    <input type="text" name="kode" class="form-control" value="{{ old('kode', $apotek->kode ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $apotek->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $apotek->alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="spesialis">Hp</label>
    <input type="text" name="hp" class="form-control" value="{{ old('hp', $apotek->hp ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
