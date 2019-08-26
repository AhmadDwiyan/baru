@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">D A T A - K A B U P A T E N</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        
        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>CODE</th>
                <th>DESCRIPTION</th>
                <th>REACTION</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center">
                    <!-- <td>{{ $no++ }}</td> -->
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->code }}</td>
                    <td>{{ $datas->description }}</td>
                    <td>
                        <form action="{{ route('kabupaten.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('kabupaten.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection