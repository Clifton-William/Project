<div>
    <div class="card">
        <div class="card-header">
            Pinjam Buku
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Member</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pinjam as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->buku->judul }}</td>
                                <td>{{ $data->user ? $data->user->nama : '-' }}</td>
                                <td>{{ $data->tgl_pinjam }}</td>
                                <td>{{ $data->tgl_kembali }}</td>
                                <td>{{ $data->status }}</td>
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
                {{ $pinjam->links() }}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Tambah Buku</a>
        </div>
    </div>
    {{-- Tambah --}}
    <div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pinjam Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <select wire:model="buku" class="form-control" style="width: 100%;">
                                <option value="">--Pilih--</option>
                                @foreach ($book as $data)
                                    <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                @endforeach
                            </select>
                            @error('buku')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Anggota</label>
                            <select wire:model="user" class="form-control" style="width: 100%;">
                                <option value="">--Pilih--</option>
                                @foreach ($member as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('user')
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
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pinjam Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <select wire:model="buku" class="form-control" style="width: 100%;">
                                <option value="">--Pilih--</option>
                                @foreach ($book as $data)
                                    <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                @endforeach
                            </select>
                            @error('buku')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Member</label>
                            <select wire:model="user" class="form-control" style="width: 100%;">
                                <option value="">--Pilih--</option>
                                @foreach ($member as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('user')
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
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pinjam Buku</h5>
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

    <div class="row">
        <div class="col-md-5">
            <div class="card progress-card">
                <div class="card-header  mb-2">
                    <p>Data Buku yang Tersedia</p>
                </div>
                <div class="bar-container">
                    <div class="bar">
                        <span class="label">Novel</span>
                        <div class="progress green1" style="width: 80%;"></div>
                    </div>
                    <div class="bar">
                        <span class="label">Komik</span>
                        <div class="progress green2" style="width: 65%;"></div>
                    </div>
                    <div class="bar">
                        <span class="label">Ensiklopedia</span>
                        <div class="progress green3" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card progress-card">
                <div class="card-header  mb-2">
                    <p>Data Buku yang Dipinjam</p>
                </div>
                <div class="bar-container">
                    <div class="bar">
                        <span class="label">Biografi</span>
                        <div class="progress green4" style="width: 45%;"></div>
                    </div>
                    <div class="bar">
                        <span class="label">Majalah</span>
                        <div class="progress green5" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            font-family: sans-serif;
        }

        /* Khusus untuk card progress bar */
        .progress-card {
            width: 360px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .card-header p {
            margin: 4px 0 20px;
            font-size: 12px;
            color: #888;
        }

        .bar-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .label {
            flex: 0 0 100px;
            font-size: 14px;
            color: #555;
        }

        .progress {
            flex-grow: 1;
            height: 10px;
            border-radius: 8px;
            transition: width 0.8s ease;
        }

        .green1 {
            background: #6EE7B7;
        }

        .green2 {
            background: #34D399;
        }

        .green3 {
            background: #10B981;
        }

        .green4 {
            background: #059669;
        }

        .green5 {
            background: #047857;
        }
    </style>

    {{--
      <style>


      </style> --}}


</div>
