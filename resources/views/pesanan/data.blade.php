<h1>Customer List</h1>
<table>
  <thead>
    <tr>
      <th>Nama </th>
      <th>Kuantitas</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $customer)
      <tr>
        <td>{{ $customer->nama_baku }}</td>
        <td>{{ $customer->kuantitas }}</td>
        <td>{{ $customer->keterangan }}</td>
      </tr>
    @endforeach
  </tbody>
</table>