@extends('buku.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Periksa Semua Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('buku.create') }}"> Tambah Buku</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Deskripsi</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($buku as $buku)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul_buku }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->deskripsi }}</td>
            <td>
                <form action="{{ route('buku.destroy',$buku->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('buku.show',$buku->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('buku.edit',$buku->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $buku->links() !!}
      
@endsection