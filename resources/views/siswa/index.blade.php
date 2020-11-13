@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Siswa
              <a href="{{ URL::route('create') }}" class="btn btn-primary">Tambah
                  <span></span>
              </a>
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
                          @forelse ($siswa as $item)
                          <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->minat }}</td>
                              <td>{{ $item->status_kelas }}</td>
                              <td>
                                  <button class="btn btn-outline-primary">Edit</button>
                                  <button class="btn btn-outline-danger">Hapus</button>
                              </td>
                          </tr>
                          @empty
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
                          @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
