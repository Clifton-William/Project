@extends('back.layout.template')

@section('title', 'List Categories - Admin')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
            {{-- <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div> --}}
        </div>

        <div class="nt-3">
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>


            @if ($errors->any())
                <div class="my-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if (session('success'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
            @endif


            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created at</th>
                        <th>Function</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <div class="text-center">
                                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

        <!-- Modal create -->
        @include('back.category.create-modal')

        <!-- Modal update -->
        @include('back.category.update-modal')

        <!-- Modal delete -->
        @include('back.category.delete-modal')

     {{-- <!-- Container Chart + Label -->
<div style="display: flex; align-items: center; margin-top: 30px;">

    <!-- Chart di Kiri -->
    <div style="flex: 1; display: flex; justify-content: center;">
      <canvas id="bookChart" style="max-width: 250px; max-height: 250px;"></canvas>
    </div>

    <!-- Label di Kanan -->
    <div style="flex: 1; padding-left: 20px;">
      <ul style="list-style: none; padding: 0; font-size: 18px;">
        <li>
          <span class="bg-primary" style="display: inline-block; width: 16px; height: 10px; margin-right: 8px;"></span>
          Total Buku
        </li>
        <li>
          <span class="bg-success" style="display: inline-block; width: 16px; height: 10px; margin-right: 8px;"></span>
          Dipinjam
        </li>
        <li>
          <span class="bg-info" style="display: inline-block; width: 16px; height: 10px; margin-right: 8px;"></span>
          Tersedia
        </li>
      </ul>
    </div>

  </div>

  <!-- Chart.js CDN + Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var ctx = document.getElementById('bookChart').getContext('2d');
      new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Total Buku', 'Dipinjam', 'Tersedia'],
          datasets: [{
            label: 'Kelola Buku',
            data: [120, 45, 75], // Data contoh
            backgroundColor: [
              getComputedStyle(document.querySelector('.bg-primary')).backgroundColor,
              getComputedStyle(document.querySelector('.bg-success')).backgroundColor,
              getComputedStyle(document.querySelector('.bg-info')).backgroundColor
            ],
            borderColor: [
              'white',
              'white',
              'white'
            ],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              enabled: true
            }
          }
        }
      });
    });
  </script>
   --}}
    </main>
@endsection
