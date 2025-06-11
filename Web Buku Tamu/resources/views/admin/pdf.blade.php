<h2>Data Buku Tamu</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Instansi</th>
        <th>No HP</th>
        <th>Keperluan</th>
        <th>Waktu</th>
    </tr>
    @foreach ($guests as $guest)
        <tr>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->institution }}</td>
            <td>{{ $guest->phone }}</td>
            <td>{{ $guest->purpose }}</td>
            <td>{{ $guest->visit_time }}</td>
        </tr>
    @endforeach
</table>
