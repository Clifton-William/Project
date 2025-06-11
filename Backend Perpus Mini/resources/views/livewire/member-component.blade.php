<div>
    <div class="card">
        <div class="card-header">
            Kelola Anggota
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
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>{{ $data->email }}</td>
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
                {{ $member->links() }}
            </div>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPage">Tambah Anggota</a>
        </div>
    </div>
    {{-- Tambah --}}
    <div wire:ignore.self class="modal fade" id="addPage" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
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
                            <label>Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon" value="{{ @old('telepon') }}">
                            @error('telepon')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                                    <textarea wire:model="alamat" class="form-control" cols="30" rows="10">{{@old('alamat') }}</textarea>
                            @error('alamat')
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
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Anggota</h5>
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
                            <label>Nama</label>
                            <input type="text" class="form-control" wire:model="nama" value="{{ @old('nama') }}">
                            @error('nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon" value="{{ @old('telepon') }}">
                            @error('telepon')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                                    <textarea wire:model="alamat" class="form-control" cols="30" rows="10">{{@old('alamat') }}</textarea>
                            @error('alamat')
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
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Anggota</h5>
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
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Anggota</div>
                <div class="card-body">
                    <h5 class="card-title">150</h5>
                    <p class="card-text">Jumlah seluruh anggota terdaftar</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Anggota Aktif</div>
                <div class="card-body">
                    <h5 class="card-title">5</h5>
                    <p class="card-text">Jumlah anggota yang aktif</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Anggota Baru Bulan Ini</div>
                <div class="card-body">
                    <h5 class="card-title">5</h5>
                    <p class="card-text">Anggota yang baru bergabung bulan ini</p>
                </div>
            </div>
        </div>
    </div>


</div>

