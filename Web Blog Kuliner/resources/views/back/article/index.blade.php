@extends('back.layout.template')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
@endpush

@section('title', 'List Articles - Admin')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Articles</h1>
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
            <a href="{{ url('article/create') }}" class="btn btn-success mb-2">Create</a>


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

            {{-- alert sukses --}}
            <div class="swal" data-swal="{{ session('success') }}"></div>

            <table class="table table-striped table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Publish Date</th>
                        <th>Function</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>


    <div class="row my-4 ">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Article</div>
                <div class="card-body">
                    <h5 class="card-title">10</h5>
                    <p class="card-text">All article</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Published Article</div>
                <div class="card-body">
                    <h5 class="card-title">8</h5>
                    <p class="card-text">Published articles recently</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Private Article</div>
                <div class="card-body">
                    <h5 class="card-title">2</h5>
                    <p class="card-text">Private articles recently</p>
                </div>
            </div>
        </div>
    </div>


        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
    </main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- alert berhasil --}}
    <script>
        const swal = $('.swal').data('swal');

        if (swal) {
            Swal.fire({
                'title': 'success',
                'text': swal,
                'icon': 'success',
                'showConfirmButton': false,
                'timer': 1500
            })
        }

        function deleteArticle(e) {
            let id = e.getAttribute('data-id');

            Swal.fire({
                title: 'Delete article',
                text: "Are You Sure.?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: '/article/' + id,
                        dataType: "json",
                        success: function(response) {
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: 'success',
                            }).then((result) => {
                                window.location.href = '/article';
                            })
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    });
                }
            })
        }
    </script>

    {{-- datatable --}}
    <script>
        new DataTable('#dataTable', {
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'category_id',
                    name: 'category_id'
                },
                {
                    data: 'views',
                    name: 'views'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'publish_date',
                    name: 'publish_date'
                },
                {
                    data: 'button',
                    name: 'button'
                },
            ]
        });
    </script>

    {{-- salah jir --}}
    {{-- <script>
        new DataTable('#dataTable') {
            processing: true,
            serverside: true,
            ajax: '{{ url()->current() }}',
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'title',
                    name: 'titlw',
                },
            ]
        };
    </script> --}}
@endpush
