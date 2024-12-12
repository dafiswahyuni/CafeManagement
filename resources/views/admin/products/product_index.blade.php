<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product.name }}</td>
                <td>{{ $product.price }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>