<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas - X PPLG 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body { font-family: 'Nunito', sans-serif; background-color: #f8f9fc; }
        .sidebar { background-color: #4e73df; min-height: 100vh; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,.8); border-bottom: 1px solid rgba(255,255,255,.1); }
        .sidebar .nav-link:hover { color: white; }
        .card-header { background-color: #f8f9fc; border-bottom: 1px solid #e3e6f0; }
        .btn-primary { background-color: #4e73df; border: none; }
        .table-thead { background-color: #4e73df; color: white; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar shadow">
            <div class="sidebar-sticky pt-3">
                <h4 class="text-center mb-4"><i class="fas fa-laugh-wink"></i> X PPLG <sup>1</sup></h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="../index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active text-white" href="kelas.php"><i class="fas fa-graduation-cap mr-2"></i> Data Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="../jurusan/jurusan.php"><i class="fas fa-list mr-2"></i> Data Jurusan</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-10 ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-gray-800">Manajemen Data Kelas</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <span class="text-muted">Admin / Kelas</span>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kelas</h6>
                    <a href="#" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kelas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>X PPLG 1</td>
                                    <td>Bpk. Budi Santoso</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>XI PPLG 1</td>
                                    <td>Ibu Siti Aminah</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto py-3">
                        <span>Copyright &copy; X PPLG 1 2026</span>
                    </div>
                </div>
            </footer>
        </main>
    </div>
</div>

</body>
</html>