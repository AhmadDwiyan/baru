@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">D A T A - P E N J U A L A N</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <br>
        &nbsp
        <a href="{{route('penjualan.create')}}" class="btn btn-primary">TAMBAH DATA</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>KODE BARANG</th>
                <th>JUMLAH</th>
                <th>TOTAL HARGA</th>
                <?php if(session::get('hak_akses')=="admin"){?>
                <th>AKSI</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center">
                    <!-- <td>{{ $no++ }}</td> -->
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kd_barang }}</td>
                    <td>{{ $datas->jml }}</td>
                    <td>{{ $datas->total_barang }}</td>                <?php if(session::get('hak_akses')=="admin"){?>

                    <td>
                        <form action="{{ route('penjualan.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('penjualan.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            <?php } ?>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection