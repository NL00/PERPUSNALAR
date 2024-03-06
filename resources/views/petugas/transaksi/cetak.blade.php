<html>
<head>
 <title>LAPORAN</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <style type="text/css">
 table tr td,
 table tr th{
 font-size: 9pt;
 }
 </style>
 <center>
 <h5>LAPORAN PEMINJAMAN</h4>

 </center>
 
 <table class="table table-hover text-nowrap">
    <thead>
    <tr>
        <th width="10%">No</th>
        <th>Kode Pinjam</th>
        <th>Buku</th>
        <th>Lokasi</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Denda</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($transaksi as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->kode_pinjam}}</td>
            <td>
                <ul>
                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                    <li>{{$detail_peminjaman->buku->judul ?? ''}}</li>
                    @endforeach
                </ul>
            </td>
           <td>
                <ul>
                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                    <li>{{$detail_peminjaman->buku->rak->lokasi ?? '' }}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{$item->tanggal_pinjam}}</td>
            <td>{{$item->tanggal_kembali}}</td>
            <td>{{$item->denda}}</td>
            <td>
                @if ($item->status == 1)
                    <span class="badge bg-indigo">Belum Dipinjam</span>
                @elseif ($item->status == 2)
                    <span class="badge bg-olive">Sedang Dipinjam</span>
                @else
                    <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                @endif
            </td>
           @if (!$selesai_dipinjam)
                <td>
                    @if ($item->status == 1)
                        <span wire:click="pinjam({{$item->id}})" class="btn btn-sm btn-success mr-2">Pinjam</span>
                    @elseif ($item->status == 2)
                        <span wire:click="kembali({{$item->id}})" class="btn btn-sm btn-primary mr-2">Kembali</span>
                    @endif
                </td>
           @endif
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

<script>
    window.print();

</script>