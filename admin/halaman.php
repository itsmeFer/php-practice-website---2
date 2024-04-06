<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin company profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="container">
    <header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Admin Halaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin Tutors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin Partner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <main>
        <?php 
        $katakunci = (isset($_GET['katakunci'])) ?$_GET['katakunci']:"";
        ?>
        <h1>Halaman Admin</h1>
        <p><a href="halaman_input.php">
            <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
        </a>
    </p>
    <form class="row g-3" method="get">
        <div class="col-auto">
            <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
        </div>
        <div class="col-auto">
            <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary">
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-1">#</th>
                <th>Judul</th>
                <th>Kutipan</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, tenetur!</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td><span class="badge bg-warning text-dark">Edit</span>
                <span class="badge bg-danger">Delete</span></td>

            </tr>
        </tbody>
    </table>
    </main>
    <footer class="bg-light">
        <div class="text-center p-3" style="background:#CCCCCC">Coppyright 2024 ferdi</div>
        
    </footer>
</body>
</html>