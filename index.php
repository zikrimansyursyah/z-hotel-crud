<?php
include './auth/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>z-Hotel by Zikri Mansyursyah</title>
</head>

<body>
  <nav class="fixed-top d-flex align-items-center justify-content-between px-5">
    <a href="/z-hotel-crud" class="logo fs-4 d-inline-flex gap-3">z-Ĥotel.<span class="logo-title d-inline-flex">Designed
        by <br> Zikri Mansyursyah</span> </a>
    <div class="menu fs-5 fw-light d-flex gap-3">
      <a href="#produk" class="menu-list px-3 py-1">Produk</a>
      <a href="#daftar-harga" class="menu-list px-3 py-1">Daftar Harga</a>
      <a href="#tentang-kami" class="menu-list px-3 py-1">Tentang Kami</a>
      <a href="#pesan-kamar" class="menu-list px-3 py-1">Pesan Kamar</a>
    </div>
  </nav>

  <main>
    <div id="produk" class="produk content">
      <div class="container-xl d-flex justify-content-center align-items-center gap-5">
        <div class="card" style="width: 18rem;">
          <img src="./assets/img/standar-room.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Standart Room</h5>
            <p class="card-text">Ruangan yang nyaman dengan view langsung menuju ke perkotaan dengan berbagai macam pelayanan terbaik</p>
            <a href="#pesan-kamar" class="btn btn-primary">Book Now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="./assets/img/deluxe-room.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">Ruangan yang nyaman dengan view langsung menuju ke perkotaan dengan berbagai macam pelayanan terbaik</p>
            <a href="#pesan-kamar" class="btn btn-primary">Book Now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="./assets/img/executive-room.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Executive Room</h5>
            <p class="card-text">Ruangan yang nyaman dengan view langsung menuju ke perkotaan dengan berbagai macam pelayanan terbaik</p>
            <a href="#pesan-kamar" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
    <div id="daftar-harga" class="daftar-harga content">
      <div class="container-xl d-flex justify-content-center align-items-center">
        <div class="table-content card-board h-auto">
          <div class="table-head px-4 pt-3 pb-1 border-bottom">
            <h1>Daftar Harga</h1>
          </div>
          <div class="table-data p-4">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tipe Kamar</th>
                  <th scope="col">Harga per Malam</th>
                  <th scope="col">Fasilitas</th>
                  <th scope="col">Promo</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM tb_room;");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td class="datalist"><?php echo $data['tipe_kamar'] ?></td>
                    <td class="datalist"><?php echo $data['harga'] ?></td>
                    <td class="datalist"><?php echo $data['fasilitas'] ?></td>
                    <td class="datalist"><?php echo $data['promo'] ?></td>
                    <td class="datalist text-center">
                      <a href="#pesan-kamar" class="btn btn-edit">Pesan&nbsp;Kamar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <nav class="pagination-head h-auto">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div id="tentang-kami" class="tentang-kami content">
      <div class="d-flex align-items-center justify-content-center">
        <div class="container-xl mt-5">
          <div class="card-board d-flex align-items-center justify-content-center py-3">
            <h3>About Us</h3>
          </div>
          <div class="mt-5 d-flex">
            <div class="maps card-board d-flex align-items-center">
              <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.170264026406!2d106.65204637617941!3d-6.130109198104078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a026dbe16ab9f%3A0x63f30751c239bf25!2sParkiran%201A%20Bandara%20Soetta%20Kedatangan!5e1!3m2!1sid!2sid!4v1639725945992!5m2!1sid!2sid" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="about card-board ms-5 p-5 d-flex flex-column gap-4">
              <div>
                <h3>z-Hotel</h3>
                3,6 km dari Indonesia Convention Exhibition, menyediakan akomodasi dengan restoran, parkir pribadi
                gratis, pusat kebugaran, dan lounge bersama. Akomodasi ini menyediakan kamar keluarga dan teras. Akomodasi
                ini memiliki resepsionis 24 jam,
                antar-jemput bandara, layanan kamar, dan Wi-Fi gratis di seluruh areanya.
              </div>
              <div>
                <h6>Location</h6>
                Jl. BSD Boulevard Utara SC II No. 2, BSD City, 10350 Serpong, Indonesia
              </div>
              <div>
                <h6>No. Telp</h6>
                +62 8473 7382
              </div>
              <div>
                <h6>Email</h6>
                hotelhotel@hotel.com
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="pesan-kamar" class="content pesan-kamar">
      <div class="container-xl h-auto">
        <h1 class="w-100 text-center fw-light">Pesan Kamar</h1>
        <div class="hotel d-flex py-4 pe-5 ps-4 mt-5">
          <a data-bs-target="#video" data-bs-toggle="modal" class="hotel-img first"></a>
          <div class="hotel-detail pt-3 d-flex flex-column justify-content-between">
            <div class="hotel-title d-flex align-items-center justify-content-between">
              <h3>Standart Room</h3>
              <div class="rating px-3 py-2">4.8</div>
            </div>
            <div class="hotel-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis culpa repudiandae voluptatem facilis,
              nostrum, quo illo aliquid aspernatur libero,
              tempore nulla! Facilis autem nostrum quidem! Animi nam temporibus quaerat! Magnam?
            </div>
            <div class="tombol text-end">
              <button class="px-4 py-2 btn-pesan" data-bs-target="#pesan" data-bs-toggle="modal" onclick="setRoom('Standart',2000000)">Pesan
                Kamar</button>
            </div>
          </div>
        </div>
        <div class="hotel d-flex py-4 pe-5 ps-4 mt-5">
          <a data-bs-target="#video" data-bs-toggle="modal" class="hotel-img second"></a>
          <div class="hotel-detail pt-3 d-flex flex-column justify-content-between">
            <div class="hotel-title d-flex align-items-center justify-content-between">
              <h3>Deluxe Room</h3>
              <div class="rating px-3 py-2">5.0</div>
            </div>
            <div class="hotel-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis culpa repudiandae voluptatem facilis,
              nostrum, quo illo aliquid aspernatur libero,
              tempore nulla! Facilis autem nostrum quidem! Animi nam temporibus quaerat! Magnam?
            </div>
            <div class="tombol text-end">
              <button class="px-4 py-2 btn-pesan" data-bs-target="#pesan" data-bs-toggle="modal" onclick="setRoom('Deluxe',5000000)">Pesan Kamar</button>
            </div>
          </div>
        </div>
        <div class="hotel d-flex py-4 pe-5 ps-4 mt-5">
          <a data-bs-target="#video" data-bs-toggle="modal" class="hotel-img third"></a>
          <div class="hotel-detail pt-3 d-flex flex-column justify-content-between">
            <div class="hotel-title d-flex align-items-center justify-content-between">
              <h3>Executive Room</h3>
              <div class="rating px-3 py-2">4.9</div>
            </div>
            <div class="hotel-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis culpa repudiandae voluptatem facilis,
              nostrum, quo illo aliquid aspernatur libero,
              tempore nulla! Facilis autem nostrum quidem! Animi nam temporibus quaerat! Magnam?
            </div>
            <div class="tombol text-end">
              <button class="px-4 py-2 btn-pesan" data-bs-target="#pesan" data-bs-toggle="modal" onclick="setRoom('Executive',10000000)">Pesan Kamar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container-xl py-4">
      <div class="footer-body d-flex align-items-center gap-5 text-white">
        <div class="ft-content">
          <h3 class="logo"><a href="/">z-Ĥotel.</a></h3>
          <div class="ft-desc">z-Ĥotel merupakan aplikasi pemesanan Kamar Hoter Terbaik sejagad raya, dibuat dan
            dikembangkan dengan Cinta dan Passion oleh
            Zikri Mansyursyah</div>
          <div class="media-sosial">
            <a href="https://github.com/zikrimansyursyah" target="_blank" title="My Github"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
              </svg></a>
            <a href="https://www.linkedin.com/in/zikrimansyursyah/" target="_blank" title="My LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
              </svg></a>
            <a href="https://zikrimansyursyah.com" target="_blank" title="My Portfolio"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
              </svg></a>
            <a href="https://www.facebook.com/zikrimansyursyah" target="_blank" title="My Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg></a>
          </div>
        </div>
        <div class="ft-content">
          <h2 class="sub-footer">Popular</h2>
          <a href="#" class="ft-desc link">Deluxe Room 2Day</a>
          <a href="#" class="ft-desc link">Standart Room 2 Pax</a>
          <a href="#" class="ft-desc link">Meeting Room</a>
          <a href="#" class="ft-desc link">Executif Room</a>
        </div>
      </div>
    </div>
    <div class="footnote">
      <div class="container-xl h-100 d-flex align-items-center justify-content-between">
        <div>All Rights Reserved &copy; Crafty by Zikri </div>
        <div>Design and Created with &nbsp;<i class="bi bi-heart-fill" style="font-size: 12px;"></i>&nbsp; and
          Passion -
          Zikri Mansyursyah - 2021</div>
      </div>
    </div>
  </footer>

  <!-- modal pesan -->
  <div class="modal" id="pesan" tabindex="-1">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pesan Kamar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">
          <form method="POST" action="./services/addPesanan.php">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
              <label for="nama_pemesan">Nama Pemesan</label>
            </div>
            <label for="" class="jenis-kelamin">Jenis Kelamin</label>
            <div class="d-flex gap-4 mb-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" checked>
                <label class="form-check-label" for="laki-laki">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="nik" name="nik" maxlength="16" required>
              <label for="nik">Nomor Identitas</label>
            </div>
            <label for="" class="jenis-kelamin">Tipe Kamar</label>
            <div class="kategori input-group mb-3">
              <select class="form-select" id="tipe_kamar" name="tipe_kamar" style="height:3rem;" onchange="changeTipe()">
                <option selected class="title" value="Standar">Standar</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Executive">Executive</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" value="" id="harga" name="harga" readonly>
              <label for="harga">Harga</label>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
              <label for="tanggal_pesan">Tanggal Pesan</label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" value="1" required>
              <label for="durasi_menginap">Durasi Menginap (hari)</label>
            </div>
            <label for="breakfast" class="jenis-kelamin">Breakfast?</label>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="breakfast" name="breakfast"">
              <label class=" form-check-label" for="breakfast">
              Ya
              </label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="total_bayar" name="total_bayar" readonly required>
              <label for="total_bayar">Total Bayar</label>
            </div>
            <div class="d-flex justify-content-between">
              <a class="btn btn-primary" onclick="hitungBayar()">Hitung Bayar</a>
              <button type="submit" id="submit-pesan" class="btn btn-primary" name="submit"">Simpan</button>
              <button class=" btn btn-primary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal Video -->
  <div class="modal" id="video" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content w-auto">
        <div class="modal-header">
          <h5 class="modal-title">Room Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">
          <iframe id="yt-video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- modal Validasi -->
  <!-- <div class="modal" id="validasi" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content w-auto">
        <div class="modal-header">
          <h5 class="modal-title">Pesanan Telah Masuk ke Database</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">

        </div>
      </div>
    </div>
  </div> -->

  <!-- Bootstrap JS -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    //jika id tersebut terdapat perubahan maka total harga akan dihitung ulang
    $("#durasi_menginap, #breakfast, #nik, #tanggal_pesan, #tipe_kamar").change(() => {
      hitungBayar()
    })

    function changeTipe() {
      let tipe = document.getElementById("tipe_kamar").value
      console.log('yes', tipe);
      if (tipe == 'Standar') {
        $("#harga").attr("value", 2000000)
      } else if (tipe == 'Deluxe') {
        $("#harga").attr("value", 5000000)
      } else if (tipe == 'Executive') {
        $("#harga").attr("value", 10000000)
      }

    }

    //untuk menambahkan atribut onclick pada class terkait untuk dapat menampilkan video ruangan
    $(".hotel-img.first").attr("onclick", "setVideo('https://www.youtube.com/embed/V0ZmEre9PIU')")
    $(".hotel-img.second").attr("onclick", "setVideo('https://www.youtube.com/embed/6T-ZAVkdtI8?start=120')")
    $(".hotel-img.third").attr("onclick", "setVideo('https://www.youtube.com/embed/9AYKS4DVIqU?start=120')")

    //fungsi untuk merubah value modal video sesuai video ruangan
    function setVideo(link) {
      $("#yt-video").attr("src", link)
    }

    //untuk membuat value dari tipe kamar dan harga otomatis terisi sesuai dengan kamar yang dipilih
    function setRoom(name, price) {
      $("#tipe_kamar").attr("value", name)
      $("#harga").attr("value", price)
    }

    //fungsi untuk menghitung total bayar 
    function hitungBayar() {
      const nik = document.getElementById("nik").value
      const harga = Number(document.getElementById("harga").value)
      const durasi = Number(document.getElementById("durasi_menginap").value)
      const isBreakfast = document.getElementById("breakfast").checked
      let breakfast

      isBreakfast ? breakfast = 80000 : breakfast = 0

      let total_harga = (harga * durasi) + (breakfast * durasi)

      durasi >= 3 ? total_harga = total_harga - (total_harga * 10 / 100) : total_harga
      document.getElementById("total_bayar").setAttribute("value", total_harga)
      document.getElementById("submit-pesan").style.display = "block"

      if (nik.length != 16) {
        alert('isian salah..data harus 16 digit')
        document.getElementById("submit-pesan").style.display = "none"
      }
    }

    //fungsi untuk men trigger ketika modal form ditutup maka form di reset value nya
    $('#pesan').on('hidden.bs.modal', function() {
      $(this).find('form').trigger('reset');
      document.getElementById("total_bayar").setAttribute("value", "")
    })
  </script>
</body>

</html>