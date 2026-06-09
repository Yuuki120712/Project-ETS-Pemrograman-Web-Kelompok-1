<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "login_page");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ==================== PROSES AUTHENTICATION ====================

// REGISTER
if (isset($_POST['register'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username atau Email sudah digunakan!');</script>";
    } else {
        mysqli_query($conn, "INSERT INTO users(nama,username,email,password) VALUES('$nama','$username','$email','$password')");
        
        // Login otomatis setelah daftar
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;

        echo "<script>
        alert('Registrasi Berhasil!');
        window.location='login_page.php';
        </script>";
    }
}

// LOGIN
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $data['username'];
        
        header("Location: login_page.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login_page.php");
    exit();
}


// ==================== PROSES CRUD FORUM (JIKA SUDAH LOGIN) ====================
if (isset($_SESSION['username'])) {
    
    // 1. TAMBAH KOMENTAR (CREATE)
    if (isset($_POST['kirim_komentar'])) {
        $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);
        $username = $_SESSION['username'];
        $nama = $_SESSION['nama'];

        if (!empty(trim($pesan))) {
            mysqli_query($conn, "INSERT INTO komentar (username, nama, pesan) VALUES ('$username', '$nama', '$pesan')");
            header("Location: login_page.php");
            exit();
        }
    }

    // 2. EDIT KOMENTAR (UPDATE)
    if (isset($_POST['update_komentar'])) {
        $id_komentar = intval($_POST['id_komentar']);
        $pesan_baru = mysqli_real_escape_string($conn, $_POST['pesan_baru']);
        $username = $_SESSION['username'];

        // Pastikan komentar yang diedit adalah milik user yang sedang login
        mysqli_query($conn, "UPDATE komentar SET pesan='$pesan_baru' WHERE id=$id_komentar AND username='$username'");
        header("Location: login_page.php");
        exit();
    }

    // 3. HAPUS KOMENTAR (DELETE)
    if (isset($_GET['hapus_komentar'])) {
        $id_hapus = intval($_GET['hapus_komentar']);
        $username = $_SESSION['username'];

        // Pastikan komentar yang dihapus adalah milik user yang sedang login
        mysqli_query($conn, "DELETE FROM komentar WHERE id=$id_hapus AND username='$username'");
        header("Location: login_page.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi & Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e0e2bc4294.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="desain.css">
    
    <style>
        /* Styling tambahan agar Forum selaras dengan tema Olive/Cream website Anda */
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #f5f2e4; /* Cream background */
            padding-top: 100px;
        }
        .navbar {
            background-color: #3d4a1f !important; /* Olive dark navbar */
        }
        .navbar .nav-link, .navbar .navbar-brand {
            color: #ffffff !important;
        }
        .card-forum {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #ece8d4;
        }
        .chat-container {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 10px;
        }
        .bubble {
            background-color: #f8f9fa;
            border-left: 4px solid #7a9132;
            border-radius: 0 12px 12px 12px;
            padding: 10px 15px;
            margin-bottom: 12px;
        }
        .bubble.me {
            background-color: #fdfaf0;
            border-left: 4px solid #c8a84b; /* Gold border untuk chat sendiri */
        }
        .wa-banner {
            background-color: #e6f4ea;
            border: 1px dashed #28a745;
            border-radius: 12px;
        }
        .btn-olive {
            background-color: #3d4a1f;
            color: white;
        }
        .btn-olive:hover {
            background-color: #5a6e27;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="prolog.html"><img src="element/logo-1.png" alt="logo" width="80px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <img class="offcanvas-title" id="offcanvasNavbarLabel" src="element/logo-1.png" alt="logo" width="80px">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="prolog.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="content.php">Content</a></li>
                            <li class="nav-item"><a class="nav-link" href="conclusion.html">Conclusion</a></li>
                            <li class="nav-item"><a class="nav-link" href="our-team.html">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link active" href="login_page.php">Forum Diskusi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-5">
        
        <?php if (isset($_SESSION['username'])) { ?>
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded shadow-sm">
                        <div>
                            <h4 class="mb-0 fw-bold" style="font-family: 'Playfair Display', serif;">Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</h4>
                            <small class="text-muted">@<?php echo htmlspecialchars($_SESSION['username']); ?></small>
                        </div>
                        <a href="?logout=true" class="btn btn-outline-danger btn-sm rounded-pill px-3"><i class="fa-solid fa-sign-out-alt"></i> Logout</a>
                    </div>

                    <div class="wa-banner p-3 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <i class="fa-brands fa-whatsapp fa-2x text-success me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold text-success">Gabung Komunitas WhatsApp Resmi</h6>
                                <small class="text-muted">Mari berdiskusi lebih intens mengenai Ketahanan Pangan bersama anggota lainnya.</small>
                            </div>
                        </div>
                        <a href="https://chat.whatsapp.com/ContohLinkGrupAnda" target="_blank" class="btn btn-success btn-sm rounded-pill px-3">
                            Join Grup WA <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="card card-forum p-4">
                        <h5 class="fw-bold border-bottom pb-2 mb-3"><i class="fa-solid fa-comments text-success me-2"></i>Public Discussion Board</h5>
                        
                        <div class="chat-container mb-4" id="chatBox">
                            <?php 
                            $ambil_komentar = mysqli_query($conn, "SELECT * FROM komentar ORDER BY id ASC");
                            if (mysqli_num_rows($ambil_komentar) == 0) {
                                echo "<p class='text-muted text-center my-4'>Belum ada diskusi dimulai. Jadilah yang pertama berkomentar!</p>";
                            }
                            while ($row = mysqli_fetch_assoc($ambil_komentar)) {
                                $isMe = ($row['username'] === $_SESSION['username']);
                            ?>
                                <div class="bubble <?php echo $isMe ? 'me' : ''; ?>">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <div>
                                            <strong class="text-dark"><?php echo htmlspecialchars($row['nama']); ?></strong> 
                                            <small class="text-muted">(@<?php echo htmlspecialchars($row['username']); ?>)</small>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;"><?php echo date('d M Y, H:i', strtotime($row['waktu'])); ?></small>
                                    </div>

                                    <p class="mb-2 text-secondary"><?php echo nl2br(htmlspecialchars($row['pesan'])); ?></p>

                                    <?php if ($isMe) { ?>
                                        <div class="text-end">
                                            <a href="?edit=<?php echo $row['id']; ?>#inputArea" class="text-warning me-2 text-decoration-none" style="font-size:0.85rem;">
                                                <i class="fa-solid fa-pen"></i> Edit
                                            </a>
                                            <a href="?hapus_komentar=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')" class="text-danger text-decoration-none" style="font-size:0.85rem;">
                                                <i class="fa-solid fa-trash"></i> Hapus
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>

                        <div id="inputArea" class="border-top pt-3">
                            <?php 
                            // Jika user mengklik tombol edit, form berubah fungsi menjadi form update
                            if (isset($_GET['edit'])) { 
                                $id_edit = intval($_GET['edit']);
                                $username_aktif = $_SESSION['username'];
                                $cari_edit = mysqli_query($conn, "SELECT * FROM komentar WHERE id=$id_edit AND username='$username_aktif'");
                                if (mysqli_num_rows($cari_edit) > 0) {
                                    $data_edit = mysqli_fetch_assoc($cari_edit);
                            ?>
                                    <form method="POST" action="login_page.php">
                                        <input type="hidden" name="id_komentar" value="<?php echo $data_edit['id']; ?>">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-warning"><i class="fa-solid fa-pen"></i> Edit Komentar Anda:</label>
                                            <textarea class="form-control" name="pesan_baru" rows="3" required><?php echo htmlspecialchars($data_edit['pesan']); ?></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="login_page.php" class="btn btn-secondary btn-sm rounded-pill px-3">Batal</a>
                                            <button type="submit" name="update_komentar" class="btn btn-warning btn-sm rounded-pill px-3 text-white">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                <?php } ?>
                            <?php } else { ?>
                                <form method="POST" action="login_page.php">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-secondary">Tulis Komentar Baru :</label>
                                        <textarea class="form-control" name="pesan" rows="3" placeholder="Ketik pendapat Anda mengenai ketahanan pangan di sini..." required style="border-radius:10px;"></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" name="kirim_komentar" class="btn btn-olive rounded-pill px-4">
                                            Kirim Pesan <i class="fa-solid fa-paper-plane ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>

            <script>
                // Otomatis scroll chat box ke bagian bawah agar pesan terbaru kelihatan
                var chatBox = document.getElementById("chatBox");
                chatBox.scrollTop = chatBox.scrollHeight;
            </script>

        <?php } else { ?>
            
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card p-4 shadow-sm border-0" style="border-radius:15px; background: #ffffff;">
                        
                        <?php if (isset($_GET['page']) && $_GET['page'] == 'register') { ?>
                            <h3 class="text-center fw-bold mb-4" style="color: #3d4a1f; font-family: 'Playfair Display', serif;">Daftar Akun Forum</h3>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="contoh@email.com" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                                </div>
                                <button type="submit" name="register" class="btn btn-olive w-100 py-2 mt-2 rounded-pill fw-bold">Daftar Sekarang</button>
                            </form>
                            <div class="text-center mt-3">
                                <small class="text-muted">Sudah punya akun? <a href="login_page.php" class="text-success fw-bold text-decoration-none">Login di sini</a></small>
                            </div>

                        <?php } else { ?>
                            <h3 class="text-center fw-bold mb-4" style="color: #3d4a1f; font-family: 'Playfair Display', serif;">Halaman Login Forum</h3>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-olive w-100 py-2 mt-2 rounded-pill fw-bold">Masuk</button>
                            </form>
                            <div class="text-center mt-3">
                                <small class="text-muted">Belum punya akun? <a href="?page=register" class="text-success fw-bold text-decoration-none">Daftar di sini</a></small>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>