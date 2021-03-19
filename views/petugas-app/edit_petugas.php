<?php include "templates/dashboard/header.php"; ?>
<?php include "../../config/petugas.php"; ?>

<?php 


    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }

    if ($_SESSION['level'] != "admin") {
        header("location: index.php");
    }

    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $sql = "SELECT * FROM petugas WHERE id_petugas=$id";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);

    }

    if (isset($_POST['submit'])) {

        $id = $_GET['id'];
        
        if (updatePetugas($id) > 0) {
            header("location: list_petugas.php?pesan=sukses");
        }else {
            header('location: list_petugas.php?pesan=gagal');
        }
        
    }

?>

<div class="col">

    <h2 class="h2">Form edit data petugas</h2>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_petugas" value="<?= $data['id_petugas']; ?>">
        <div class="form-group">
            <label for="nama">Nama petugas</label>
            <input id="nama" class="form-control" type="text" name="nama_petugas" required autocomplete="off" autofocus value="<?= $data['nama_petugas']; ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" class="form-control" type="text" name="username" required autocomplete="off" value="<?= $data['username']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="off" value="<?= $data['password']; ?>">
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input id="telp" class="form-control" type="number" name="telp" required autocomplete="off" value="<?= $data['telp']; ?>">
        </div>
        <input type="hidden" name="level" value="<?= $data['level']; ?>">
        <input type="submit" value="Update" name="submit" class="btn btn-primary">
        <a href="list_petugas.php" class="btn btn-danger">Kembali</a>
    </form>

</div>

<?php include "templates/dashboard/footer.php"; ?>