@extends('layouts.main')
@section('content')
<div class="content bg-dark" style="padding: 1%">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              C45
              <a href="{{ URL::route('c45.create') }}" class="btn btn-primary">Tambah
                  <span></span>
              </a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-primary text-white">
                          <th scope="col">#</th>
                          <th scope="col">outlook</th>
                          <th scope="col">windy</th>
                          <th scope="col">humidity</th>
                          <th scope="col">play</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($c45 as $item)
                          <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $item->outlook }}</td>
                              <td>{{ $item->windy }}</td>
                              <td>{{ $item->humidity }}</td>
                              <td>{{ $item->play }}</td>
                              <td>
                                  <a href="{{ URL::route('c45.edit',$item->id) }}" class="btn btn-outline-primary">Edit</a>
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
                          {{-- @forelse ($hasil as $item)
                          <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $item->outlook }}</td>
                              <td>{{ $item->windy }}</td>
                              <td>{{ $item->humidity }}</td>
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
                          @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
