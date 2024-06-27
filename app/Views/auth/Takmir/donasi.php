<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MASIGI: Takmir</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/public/temp2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/public/temp2/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/public/temp2/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" integrity="sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  </head>
  <body>
    <div class="container-scroller">

		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <h1 class="navbar-brand brand-logo" id="welcome">Selamat Datang, Takmir!</h1>
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="/public/img/logo-black-shadow.png" alt="logo"/></a>

            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Muslimin Syaid</span>
                    <span class="online-status"></span>
                    <img src="/public/img/takmir.jpeg" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
<!-- navbar -->
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <!-- Dashbord -->
              <li class="nav-item">
                <a class="nav-link" href="/app/Views/auth/Takmir/layout2.html">
                  <i class='bx bxs-dashboard menu-icon'></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <!--Takmir Masjid-->
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/takmirMasjid.html" class="nav-link">
                    <i class='bx bxs-user-detail menu-icon'></i>
                    <span class="menu-title">Takmir Masjid</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!-- Jadwal Sholat Jumat-->
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/sholatJumat.html" class="nav-link">
                    <i class='bx bxs-time menu-icon'></i>                
                    <span class="menu-title"> Jadwal Sholat Jumat</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!--Laporan Keuangan-->              
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/laporanKeuangan.html" class="nav-link">
                    <i class='bx bxs-report menu-icon'></i>
                    <span class="menu-title">Laporan Keuangan</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!--Donasi-->
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/donasi.html" class="nav-link">
                    <i class='bx bxs-donate-heart menu-icon'></i>
                    <span class="menu-title">Donasi</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!--Zakat-->
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/zakat.html" class="nav-link">
                    <i class='bx bx-table menu-icon'></i>
                    <span class="menu-title">Zakat</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!--Qurban-->
              <li class="nav-item">
                  <a href="/app/Views/auth/Takmir/qurban.html" class="nav-link ">
                    <i class='fa-solid fa-cow'></i>
                    <i class="menu-icon"></i>
                    <span class="menu-title">Qurban</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
            </ul>
        </div>
      </nav>
    </div>

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
          <h2 class="font-weight-bold text-center">DATA DONASI</h2>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAMA</th>
                      <th>NOMINAL</th>
                      <th>NOMOR HP</th>
                      <th>EMAIL</th>
                      <th>ALAMAT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Anita</td>
                      <td>Rp. 500.000</td>
                      <td>081234567890</td>
                      <td>anita@example.com</td>
                      <td>Jl. Mawar No. 10</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Budi</td>
                      <td>Rp. 1.000.000</td>
                      <td>087654321098</td>
                      <td>budi@example.com</td>
                      <td>Jl. Anggrek No. 15</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Citra</td>
                      <td>Rp. 750.000</td>
                      <td>081345678901</td>
                      <td>citra@example.com</td>
                      <td>Jl. Melati No. 20</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Dian</td>
                      <td>Rp. 2.000.000</td>
                      <td>085678901234</td>
                      <td>dian@example.com</td>
                      <td>Jl. Dahlia No. 5</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Edo</td>
                      <td>Rp. 300.000</td>
                      <td>089012345678</td>
                      <td>edo@example.com</td>
                      <td>Jl. Kenanga No. 30</td>
                    </tr>
                  </tbody>
                  </table>  
            </div>
        </div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © MASIGI 2024</span>
            </div>
          </div>
        </footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="/public/temp2/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/public/temp2/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="/public/temp2/vendors/chart.js/Chart.min.js"></script>
    <script src="/public/temp2/vendors/progressbar.js/progressbar.min.js"></script>
		<script src="/public/temp2/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="/public/temp2/vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="/public/temp2/vendors/justgage/justgage.js"></script>
    <script src="/public/temp2/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="/public/temp2/js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>