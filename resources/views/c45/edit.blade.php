@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              C45 create
              <a href="{{ URL::route('c45.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ URL::route('c45.update',$c45->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                      <label for="outlook" class="form-label">Outlook</label>
                      <input type="text" class="form-control @error('outlook') is-invalid @enderror" id="outlook" aria-describedby="emailHelp" name="outlook" value="{{ $c45->outlook }}">
                    </div>
                    <div class="mb-3">
                      <label for="windy" class="form-label">windy</label>
                      <input type="text" class="form-control @error('windy') is-invalid @enderror" id="windy" aria-describedby="emailHelp" name="windy" value="{{ $c45->windy }}">
                    </div>
                    <div class="mb-3">
                      <label for="humidity" class="form-label">humidity</label>
                      <input type="text" class="form-control @error('humidity') is-invalid @enderror" id="humidity" aria-describedby="emailHelp" name="humidity" value="{{ $c45->humidity }}">
                    </div>
                    {{-- <div class="mb-3">
                      <label for="play" class="form-label">play</label>
                      <input type="text" class="form-control @error('play') is-invalid @enderror" id="play" aria-describedby="emailHelp" name="play" value="{{ old('play') }}">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
