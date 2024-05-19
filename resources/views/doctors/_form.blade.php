<div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik', $doctor->nik ?? '') }}">
</div>
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $doctor->nama ?? '') }}">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $doctor->alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="spesialis">Spesialis</label>
    <input type="text" name="spesialis" class="form-control" value="{{ old('spesialis', $doctor->spesialis ?? '') }}">
</div>
<button type="submit" class="btn btn-success">{{ $submitButtonText }}</button>
