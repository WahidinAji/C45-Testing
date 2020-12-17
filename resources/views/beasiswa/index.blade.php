@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              C45
              <a href="{{ URL::route('beasiswa.create') }}" class="btn btn-primary">Tambah
                  <span></span>
              </a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-primary text-white">
                          <th scope="col">#</th>
                          <th scope="col">KKS</th>
                          <th scope="col">MTK</th>
                          <th scope="col">B. INDO</th>
                          <th scope="col">B. INGGRIS</th>
                          <th scope="col">MAPEL PRODUKTIF</th>
                          <th scope="col">PNEGHASILAN ORANG TUA</th>
                          <th scope="col">Beasiswa</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($beasiswa as $item)
                          <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $item->kks }}</td>
                              <td>{{ $item->mtk }}</td>
                              <td>{{ $item->b_indo }}</td>
                              <td>{{ $item->b_inggris }}</td>
                              <td>{{ $item->mapel_produktif }}</td>
                              <td>{{ $item->penghasilan_ortu }}</td>
                              <td>{{ $item->beasiswa }}</td>
                              <td>
                                  <a href="{{ URL::route('beasiswa.edit',$item->id) }}" class="btn btn-outline-primary">Edit</a>
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
                          @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
