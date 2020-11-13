@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Siswa create
              <a href="{{ URL::route('index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-primary text-white">
                          <th scope="col">#</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jenis kelamin</th>
                          <th scope="col">Minat</th>
                          <th scope="col">Status Kelas</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>@fat</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry the Bird</td>
                          <td>Larry the Bird</td>
                          <td>@twitter</td>
                          <td>@twitter</td>
                          <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
