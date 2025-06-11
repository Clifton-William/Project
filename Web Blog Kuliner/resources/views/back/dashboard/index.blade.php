@extends('back.layout.template')

@section('title', 'Dashboard - Admin')

<style>
    .icon-image {
        position: absolute;
        bottom: 10px;
        /* Jarak dari bawah */
        right: 10px;
        /* Jarak dari kanan */
        width: 50px;
        /* Sesuaikan ukuran */
        height: auto;
        /* Menjaga proporsi gambar */
        opacity: 0.8;
        /* Transparansi jika diperlukan */
    }
</style>

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        {{-- tabel berwarna --}}
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-6">
                <div class="card text-bg-primary mb-3" style="max-width: 100%;">
                    <div class="card-header">Total articles</div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $total_articles }} articles</h4>
                        <p class="card-text">
                            <a href="{{ url('article') }}" class="btn btn-warning text-white">
                                View
                            </a>
                        </p>
                        <!-- Tambahkan gambar PNG -->
                        {{-- <img src="{{ asset('storage/back/') }}" alt="icon" class="icon-image"> --}}
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card text-bg-secondary mb-3" style="max-width: 100%;">
                    <div class="card-header">Total categories</div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $total_categories }} categories</h4>
                        <p class="card-text">
                            <a href="{{ url('categories') }}" class="btn btn-warning text-white">
                                View
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        {{-- tabel tidak berwarna --}}
        <div class="row">
            <div class="col-6">
                <h4>Latest articles</h4>
                <table class="table table-striped table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Create at</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($latest_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->Category->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ url('article/' . $item->id) }}" class="btn text-white" style="background-color: #e41f7b;">detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <h4>Popular articles</h4>
                <table class="table table-striped table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($latest_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->Category->name }}</td>
                                <td>{{ $item->views}}x</td>
                                <td class="text-center">
                                    <a href="{{ url('article/' . $item->id) }}" class="btn text-white" style="background-color: #e41f7b;">detail</a>
                                    {{-- <a href="{{ url('article/' . $item->id) }}"  class="btn btn-warning text-white ">detail</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
