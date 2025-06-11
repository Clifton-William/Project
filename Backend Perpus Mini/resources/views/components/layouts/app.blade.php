<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href={{ asset('assets/admin-dashboard.css') }}>
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 0;
            width: 250px;
            background-color: #343a40;
            overflow-x: hidden;
            overflow-y: auto;
            transition: transform 0.3s ease-in-out;
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease-in-out;
        }

        .main-content.full-width {
            margin-left: 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }
        }

        .menu-toggle {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 101;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('components.layouts.sidebar')

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
                @include('components.layouts.navigasi')

                {{ $slot }}
                {{-- <div id="members" class="mt-5">
                    <h2>Manage Members</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Member data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="books" class="mt-5">
                    <h2>Manage Books</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Year</th>
                                    <th>ISBN</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Book data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="loans" class="mt-5">
                    <h2>Manage Loans</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Member Name</th>
                                    <th>Book Title</th>
                                    <th>Loan Date</th>
                                    <th>Return Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loan data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="returns" class="mt-5">
                    <h2>Manage Returns</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Loan ID</th>
                                    <th>Return Date</th>
                                    <th>Fine</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Return data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="categories" class="mt-5">
                    <h2>Manage Categories</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Category data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="staff" class="mt-5">
                    <h2>Manage Staff</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Staff data will go here -->
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
</body>

</html>
