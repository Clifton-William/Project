<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tabel Data Sederhana</title>
        <!-- Memasukkan Bootstrap dari CDN -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-center">Tabel Data Sederhana</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Usia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id</td>
                        <td>Andi</td>
                        <td>25</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Memasukkan script Bootstrap dari CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
