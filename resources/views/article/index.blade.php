@extends('layouts.app')

@section('content')
    <a href="{{ route('article.create') }}" class="btn btn-info btn-sm">Artikel Baru</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <p>Cari Data Artikel:</p>
    <form action="/article/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Artikel .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>

    <br/>

    <table class="table table-responsive martop-sm">
        <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>
                <td>
                    <form action="{{ route('article.destroy', $article->id) }}" method="post">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br/>
    Halaman : {{ $articles->currentPage() }} <br/>
    Jumlah Data : {{ $articles->total() }} <br/>
    Data Per Halaman : {{ $articles->perPage() }} <br/>

    {{ $articles->links() }}

@endsection