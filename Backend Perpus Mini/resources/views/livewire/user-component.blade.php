<div>
    <div class="card">
        <div class="card-header">
            Kelola Pengguna
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
                            <th scope="col">Email</th>
                            <th scope="col">Jenis</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->jenis }}</td>
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
                {{ $user->links() }}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Tambah Pengguna</a>
        </div>
    </div>
    {{-- Tambah --}}
    <div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
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
                            <label>Email</label>
                            <input type="text" class="form-control" wire:model="email" value="{{ @old('email') }}">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" wire:model="password"
                                value="{{ @old('password') }}">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" wire:click="store" class="btn btn-primary"
                        data-dismiss="modal">Simpan</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pengguna</h5>
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
                            <label>Email</label>
                            <input type="text" class="form-control" wire:model="email" value="{{ @old('email') }}">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" wire:model="password"
                                value="{{ @old('password') }}">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" wire:click="update" class="btn btn-primary"
                        data-dismiss="modal">Simpan</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pengguna</h5>
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

    <div class="row  mt-2 col-md-8">
        <div class="card mt-4 col-md-4" style="background-color: #0a0a5b; border-radius: 16px; padding: 20px; color: #ffffff; width: 250px; margin-right: 16px;">
            <h2 style="font-size: 48px; margin: 0;">5</h2>
            <p style="margin: 0; color: #b0b0d0;">Total Pengguna</p>
            <div style="margin-top: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: center; color: #b0b0d0; font-size: 14px;">
                    <span>3 Baru</span>
                    <span>16%</span>
                </div>
                <div style="background-color: #eee; border-radius: 10px; height: 8px; margin-top: 8px; overflow: hidden;">
                    <div style="width: 16%; background: linear-gradient(90deg, #ff1744, #f44336); height: 100%;"></div>
                </div>
            </div>
        </div>

        <div class="card mt-4 col-md-4" style="background-color: #0a0a5b; border-radius: 16px; padding: 20px; color: #ffffff; width: 250px; margin-right: 16px;">
            <h2 style="font-size: 48px; margin: 0;">7</h2>
            <p style="margin: 0; color: #b0b0d0;">Total Pengguna</p>
            <div style="margin-top: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: center; color: #b0b0d0; font-size: 14px;">
                    <span>2 Lama</span>
                    <span>8%</span>
                </div>
                <div style="background-color: #eee; border-radius: 10px; height: 8px; margin-top: 8px; overflow: hidden;">
                    <div style="width: 8%; background: linear-gradient(90deg, #ff1744, #f44336); height: 100%;"></div>
                </div>
            </div>
        </div>
    </div>

</div>
