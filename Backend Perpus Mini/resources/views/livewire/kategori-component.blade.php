<div>
    <div class="card">
        <div class="card-header">
            Kelola Kategori Buku
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <input type="text" wire:model.live="cari" class="form-control w-50" placeholder="cari...">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <a href="#" wire:click="edit({{ $data->id }})" class="btn btn-sm btn-info"
                                        data-toggle="modal" data-target="#editPage">Ubah</a>
                                    <a href="#" wire:click="confirm({{ $data->id }})" data-toggle="modal"
                                        data-target="#deletePage" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $kategori->links() }}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Tambah Kategori</a>
        </div>
    </div>
    {{-- Tambah --}}
    <div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" wire:model="nama" value="{{ @old('nama') }}">
                            @error('nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea wire:model="deskripsi" class="form-control" cols="30" rows="10">{{ @old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" wire:click="store" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit --}}
    <div wire:ignore.self class="modal fade" id="editPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" wire:model="nama" value="{{ @old('nama') }}">
                            @error('nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea wire:model="deskripsi" class="form-control" cols="30" rows="10">{{ @old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" wire:click="update" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Delete --}}
    <div wire:ignore.self class="modal fade" id="deletePage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin mau di hapus nih?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" wire:click="destroy" class="btn btn-danger"
                        data-dismiss="modal">Yakin</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <canvas id="kategoriChart" height="100"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxKategori = document.getElementById('kategoriChart').getContext('2d');
        const kategoriChart = new Chart(ctxKategori, {
            type: 'bubble',
            data: {
                datasets: [{
                        label: 'Novel',
                        data: [{
                            x: 100,
                            y: 300,
                            r: 30
                        }],
                        backgroundColor: '#e57373'
                    },
                    {
                        label: 'Komik',
                        data: [{
                            x: 250,
                            y: 400,
                            r: 25
                        }],
                        backgroundColor: '#f44336'
                    },
                    {
                        label: 'Ensiklopedia',
                        data: [{
                            x: 400,
                            y: 500,
                            r: 35
                        }],
                        backgroundColor: '#d32f2f'
                    },
                    {
                        label: 'Biografi',
                        data: [{
                            x: 550,
                            y: 250,
                            r: 20
                        }],
                        backgroundColor: '#c62828'
                    },
                    {
                        label: 'Majalah',
                        data: [{
                            x: 700,
                            y: 350,
                            r: 28
                        }],
                        backgroundColor: '#b71c1c'
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                        min: 0,
                        max: 800, // <- supaya lebih lega
                        ticks: {
                            stepSize: 100
                        }
                    },
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 700
                    }
                },
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20 // <-- ini yang bikin jarak antar kategori
                        }
                    }
                }
            }
        });
    </script>


</div>
