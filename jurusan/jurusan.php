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
                    <li class="nav-item"><a class="nav-link active text-white" href="#"><i class="fas fa-graduation-cap mr-2"></i> Data Kelas</a></li>
                <li class="nav-item"><a class="nav-link" href="../jurusan/jurusan.php"><i class="fas fa-list mr-2"></i> Data Jurusan</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-10 ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-gray-800">Manajemen Data Jurusan (Dummy)</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <span class="text-muted">Admin / Jurusan</span>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Jurusan</h6>
                    <button class="btn btn-sm btn-primary shadow-sm" onclick="showModal()"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kelas</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead class="table-thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jurusan</th>
                                    <th>Kepala Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="modal fade" id="kelasModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="editIndex">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" id="namaKelas" class="form-control" placeholder="Contoh: X PPLG 1">
                </div>
                <div class="form-group">
                    <label>Kepala Jurusan</label>
                    <input type="text" id="waliKelas" class="form-control" placeholder="Nama Guru">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="saveData()">Simpan Data</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Data Dummy Awal
    let dataJurusan = [
        { nama: "X PPLG 1", kepala: "Bpk. Budi Santoso" },
        { nama: "XI PPLG 1", kepala: "Ibu Siti Aminah" }
    ];

    function renderTable() {
        const tbody = document.getElementById('tableBody');
        tbody.innerHTML = '';
        dataJurusan.forEach((item, index) => {
            tbody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.nama}</td>
                    <td>${item.kepala}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editData(${index})"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(${index})"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            `;
        });
    }

    function showModal() {
        document.getElementById('modalTitle').innerText = "Tambah Jurusan";
        document.getElementById('editIndex').value = "-1";
        document.getElementById('namaJurusan').value = "";
        document.getElementById('kepalaJurusan').value = "";
        $('#jurusanModal').modal('show');
    }

    function saveData() {
        const index = document.getElementById('editIndex').value;
        const nama = document.getElementById('namaJurusan').value;
        const wali = document.getElementById('kepalaJurusan').value;

        if(!nama || !wali) return alert("Isi semua field!");

        if (index === "-1") {
            dataKelas.push({ nama, wali });
        } else {
            dataKelas[index] = { nama, wali };
        }

        $('#kelasModal').modal('hide');
        renderTable();
    }

    function editData(index) {
        document.getElementById('modalTitle').innerText = "Edit Kelas";
        document.getElementById('editIndex').value = index;
        document.getElementById('namaKelas').value = dataJurusan[index].nama;
        document.getElementById('waliKelas').value = dataJurusan[index].wali;
        $('#kelasModal').modal('show');
    }

    function deleteData(index) {
        if (confirm("Hapus data ini?")) {
            dataJurusan.splice(index, 1);
            renderTable();
        }
    }

    // Inisialisasi tampilan awal
    renderTable();
</script>

</body>
</html>