<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('admin/admin/assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/admin/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/admin/assets/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin/admin/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="/beranda" class="logo">
                        <img src="{{ asset ('/fotoo.png')}}" alt="navbar brand" class="navbar-brand"
                            height="100%" weight="100%" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item" id="nav-beranda">
                            <a href="/beranda">
                                <i class="fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item" id="nav-pengguna">
                            <a href="/pengguna">
                                <i class="fas fa-users"></i> <!-- Ikon untuk pengguna -->
                                <p>Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item submenu" id="nav-lamaran">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" data-bs-target="#sidebarLayouts">
                                <i class="fas fa-briefcase"></i>
                                <p>Apply Lamaran</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li id="nav-pending">
                                        <a href="/pending">
                                            <i class="fas fa-hourglass-half"></i> <!-- Ikon untuk pelamar pending -->
                                            <span class="sub-item">Data Pelamar Pending</span>
                                        </a>
                                    </li>
                                    <li id="nav-diterima">
                                        <a href="/diterima">
                                            <i class="fas fa-check-circle"></i> <!-- Ikon untuk pelamar diterima -->
                                            <span class="sub-item">Data Pelamar Diterima</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" id="nav-management">
                            <a href="/managementweb">
                                <i class="fas fa-cogs"></i> <!-- Ikon untuk management website -->
                                <p>Management Website</p>
                            </a>
                        </li>
                        <li class="nav-item" id="nav-input-lowongan">
                            <a href="/applyer">
                                <i class="fas fa-plus-circle"></i> <!-- Ikon untuk input lowongan -->
                                <p>Input Lowongan</p>
                            </a>
                        </li>
                        <li class="nav-item" id="nav-input-posisi">
                            <a href="/posisi">
                                <i class="fas fa-file-alt"></i> <!-- Ikon untuk input posisi -->
                                <p>Input Posisi</p>
                            </a>
                        </li>
                        <li class="nav-item" id="nav-profile">
                            <a href="/profileadmin">
                                <i class="fas fa-building"></i> <!-- Ikon untuk profil perusahaan -->
                                <p>Profil Perusahaan</p>
                            </a>
                        </li>
                        <li class="nav-item" id="nav-profile">
                            <a href="/logout">
                                <i class="fas fa-building"></i> <!-- Ikon untuk profil perusahaan -->
                                <p>Logout</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item" id="nav-profile">
                            @if(auth()->check())
                                <a href="{{ url('profileadmin', ['id' => auth()->user()->id]) }}">
                                    <i class="fas fa-building"></i> <!-- Ikon untuk profil perusahaan -->
                                    <p>Profil Perusahaan</p>
                                </a>
                            @else
                                <p>User not logged in</p> <!-- Tampilkan pesan jika pengguna belum login -->
                            @endif
                        </li> --}}
                    </ul>
                </div>
            </div>

            <script>
                // Dapatkan URL saat ini
                const currentUrl = window.location.pathname;

                // Hapus kelas 'active' dari semua item menu terlebih dahulu
                document.querySelectorAll('.nav-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Tambahkan kelas 'active' hanya pada menu atau submenu yang sesuai dengan URL
                document.querySelectorAll('.nav-item').forEach(item => {
                    const link = item.querySelector('a').getAttribute('href');

                    if (link === currentUrl) {
                        // Tambahkan kelas 'active' pada item menu utama
                        item.classList.add('active');

                        // Jika item ada dalam submenu, pastikan elemen induk (submenu) juga terbuka dan aktif
                        const parentMenu = item.closest('.submenu');
                        if (parentMenu) {
                            parentMenu.classList.add('active');
                            parentMenu.querySelector('.collapse').classList.add('show'); // Buka submenu
                        }
                    }
                });
            </script>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../index.html" class="logo">
                            <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <!-- End Navbar -->
            </div>
            <div class="container">
                @yield('content')
            </div>

        </div>

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeLogoHeaderColor"
                                data-color="dark"></button>
                            <button type="button" class="selected changeLogoHeaderColor"
                                data-color="blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor"
                                data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor"
                                data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="icon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('admin/admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin/admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/admin/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('admin/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('admin/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('admin/admin/assets/js/kaiadmin.min.js') }}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ asset('admin/admin/assets/js/setting-demo2.js') }}"></script>
    <script>
        $(document).ready(function () {
          $("#basic-datatables").DataTable({});

          $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function () {
              this.api()
                .columns()
                .every(function () {
                  var column = this;
                  var select = $(
                    '<select class="form-select"><option value=""></option></select>'
                  )
                    .appendTo($(column.footer()).empty())
                    .on("change", function () {
                      var val = $.fn.dataTable.util.escapeRegex($(this).val());

                      column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                    });

                  column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                      select.append(
                        '<option value="' + d + '">' + d + "</option>"
                      );
                    });
                });
            },
          });

          // Add Row
          $("#add-row").DataTable({
            pageLength: 5,
          });

          var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

          $("#addRowButton").click(function () {
            $("#add-row")
              .dataTable()
              .fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action,
              ]);
            $("#addRowModal").modal("hide");
          });
        });
      </script>
    <script>
        function handleAccept() {
            if (confirm("Apakah Anda yakin ingin menerima?")) {
                $.ajax({
                    url: '/terima', // Ganti dengan URL endpoint yang sesuai
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        // id: idData // Ganti dengan ID yang sesuai jika perlu
                    },
                    success: function(response) {
                        alert("Anda telah menerima!");
                        // Lakukan tindakan tambahan di sini, seperti merefresh daftar
                    },
                    error: function(xhr) {
                        alert("Terjadi kesalahan: " + xhr.responseText);
                    }
                });
            }
        }

        function handleReject() {
            if (confirm("Apakah Anda yakin ingin menolak?")) {
                $.ajax({
                    url: '/tolak', // Ganti dengan URL endpoint yang sesuai
                    type: 'DELETE', // Menggunakan metode DELETE untuk penghapusan
                    data: {
                        _token: '{{ csrf_token() }}',
                        // id: idData // Ganti dengan ID yang sesuai jika perlu
                    },
                    success: function(response) {
                        alert("Data telah dihapus!");
                        // Hapus elemen dari DOM atau reload daftar
                        // Contoh: $('#row-' + idData).remove(); // Jika Anda memberi ID pada row
                    },
                    error: function(xhr) {
                        alert("Terjadi kesalahan: " + xhr.responseText);
                    }
                });
            }
        }
    </script>


</body>

</html>
