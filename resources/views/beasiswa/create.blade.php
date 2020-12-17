@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Beassiwa create
              <a href="{{ URL::route('beasiswa.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ URL::route('beasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="kks" class="form-label">KKS</label>
                      <input type="text" class="form-control @error('kks') is-invalid @enderror" id="kks" aria-describedby="emailHelp" name="kks" value="{{ old('kks') }}">
                    </div>
                    <div class="mb-3">
                      <label for="mtk" class="form-label">MTK</label>
                      <input type="text" class="form-control @error('mtk') is-invalid @enderror" id="mtk" aria-describedby="emailHelp" name="mtk" value="{{ old('mtk') }}">
                    </div>
                    <div class="mb-3">
                      <label for="b_indo" class="form-label">B. Indo</label>
                      <input type="text" class="form-control @error('b_indo') is-invalid @enderror" id="b_indo" aria-describedby="emailHelp" name="b_indo" value="{{ old('b_indo') }}">
                    </div>
                    <div class="mb-3">
                      <label for="b_inggris" class="form-label">B. Inggris</label>
                      <input type="text" class="form-control @error('b_inggris') is-invalid @enderror" id="b_inggris" aria-describedby="emailHelp" name="b_inggris" value="{{ old('b_inggris') }}">
                    </div>
                    <div class="mb-3">
                      <label for="mapel_produktif" class="form-label">Mapel Produktif</label>
                      <input type="text" class="form-control @error('mapel_produktif') is-invalid @enderror" id="mapel_produktif" aria-describedby="emailHelp" name="mapel_produktif" value="{{ old('mapel_produktif') }}">
                    </div>
                    <div class="mb-3">
                      <label for="penghasilan_ortu" class="form-label">Penghasilan Orang tua</label>
                      <input type="text" class="form-control @error('penghasilan_ortu') is-invalid @enderror" id="penghasilan_ortu" aria-describedby="emailHelp" name="penghasilan_ortu" value="{{ old('penghasilan_ortu') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
