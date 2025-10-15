<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Robert Gomez Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark justify-content-between">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>
      <div class="time-container text-center">
        <div class="time" id="time">23:44</div>
        <div class="date" id="date">Mon, 02 June 2025</div>
      </div>

      <!-- Right navbar links -->
      <ul class="navbar-nav ">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset("assets/admin/img/user1-128x128.jpg") }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset("assets/admin/img/user3-128x128.jpg") }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset("assets/admin/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./{{ route('admin.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
            <li class="nav-item">
              <a href="{{ route('admin.index') }}" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assignments.html" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Assignments
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="admin-CMS.html" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Admin CMS
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Accounting
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Reports
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="settings.html" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Settings
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  ProLink
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Forms
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">
                <p>
                  Downloads
                </p>
              </a>
            </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
            <div class="dashboard-content">
                <div class="view-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="">
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="check1" class="custom-label">Exclude Assignment Creation Date Range and Search All</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="checkbox" name="" id="check1" class="custom-check">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="check2" class="custom-label">Search By Appointment Dates</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="checkbox" name="" id="check2" class="custom-check">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Date Range</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <div class="d-flex gap-5 flex-wrap">
                                            <div class="w-100">
                                                <input type="date" class="custom-input form-control">
                                            </div>
                                            <div class="w-100">
                                                <input type="date" class="custom-input form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="check3" class="custom-label">Show Completed</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="checkbox" name="" id="check3" class="custom-check">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Assignments</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <div class="d-flex gap-5 radio-wrap flex-wrap">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor" class="" name="two-factor-auth" checked="">
                                                <label for="factor">All</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor2" class="" name="two-factor-auth">
                                                <label for="factor2">Assigned</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor3" class="" name="two-factor-auth">
                                                <label for="factor3">UnAssigned</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Include Status: Files Submitted</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <div class="d-flex gap-5 radio-wrap flex-wrap">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor4" class="" name="two-factor-auth2" checked="">
                                                <label for="factor4">Yes</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor5" class="" name="two-factor-auth2">
                                                <label for="factor5">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Include Supplements</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <div class="d-flex gap-5 radio-wrap flex-wrap">
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor6" class="" name="two-factor-auth3" checked="">
                                                <label for="factor6">Yes</label>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" id="factor7" class="" name="two-factor-auth3">
                                                <label for="factor7">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="check4" class="custom-label">Show Appraisers</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="checkbox" name="" id="check4" class="custom-check">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Zip</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="number" class="custom-input form-control">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Radius</label>
                                    </div>
                                    <div class="fieldWrapper">
                                        <input type="number" class="custom-input form-control">
                                    </div>
                                </div>
                                <div class="admin-flex-wrapper">
                                    <div class="labelwrapper">
                                        <label for="" class="custom-label">Appraisers</label>
                                    </div>
                                    <div class="fieldWrapper">
                                          <select id="multiple" class="js-states form-control" multiple>
                                          <option>Selected1</option>
                                          <option>Selected2</option>
                                          <option>Selected3</option>
                                          <option>Selected4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-5">
                                    <div class="col-4 text-center"><button class="map-filter-btn" type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2025 <a href="javascript:;"> AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="dist/js/pages/dashboard2.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $("#multiple").select2({
  placeholder: "None Selected",
  allowClear: true,
});

</script>

<script>
  function initMap() {
    const usaCenter = { lat: 39.8283, lng: -98.5795 };

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4.5,
      center: usaCenter,
    });

    const locations = [
      {
        lat: 40.8094502,
        lng: -74.0669268,
        title: "1 American Dream Way, East Rutherford, NJ",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "John Doe",
        zipcode: "07073",
        pending: "3",
        software: "CCC1",
        notes: "Lorem ipsum dolor sit amet."
      },
      {
        lat: 40.649997,
        lng: -74.339167,
        title: "125 E. Broad Street, Westfield, NJ",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Jane Smith",
        zipcode: "07090",
        pending: "5",
        software: "CCC1",
        notes: "Dolor sit amet, consectetur."
      },
      {
        lat: 40.758667,
        lng: -73.918933,
        title: "31‑75 Steinway Street, Astoria, NY",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Mike Johnson",
        zipcode: "11103",
        pending: "2",
        software: "CCC1",
        notes: "Nisi ut aliquip ex ea commodo."
      },
      {
        lat: 40.742,
        lng: -73.992,
        title: "1001 Sixth Avenue (37th‑38th St), New York, NY",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Sarah Lee",
        zipcode: "10018",
        pending: "6",
        software: "CCC1",
        notes: "Duis aute irure dolor in reprehenderit."
      },
      {
        lat: 40.869,
        lng: -73.075167,
        title: "1759 Middle Country Road, Centereach, NY",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Chris Evans",
        zipcode: "11720",
        pending: "1",
        software: "CCC1",
        notes: "Excepteur sint occaecat cupidatat non proident."
      },
      {
        lat: 40.574627,
        lng: -73.96093,
        title: "224‑236 Brighton Beach Ave, Brooklyn, NY",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Emily Davis",
        zipcode: "11235",
        pending: "4",
        software: "CCC1",
        notes: "Sunt in culpa qui officia deserunt mollit."
      },
      {
        lat: 33.155373,
        lng: -96.818733,
        title: "12025 E University Drive, Frisco, TX",
        icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
        name: "Robert Gomez",
        zipcode: "75035",
        pending: "2",
        software: "CCC1",
        notes: "Anim id est laborum."
      }
    ];

    locations.forEach((loc) => {
      const marker = new google.maps.Marker({
        position: { lat: loc.lat, lng: loc.lng },
        map,
        title: loc.title,
        icon: {
          url: loc.icon,
          scaledSize: new google.maps.Size(40, 40)
        }
      });

const infoWindowContent = `
  <div style="
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #e0e0e0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    background: linear-gradient(135deg, #ffffff, #f7f9fc);
    color: #333;
    max-width: 250px;
  ">
    <div style="font-weight: 600;color: #0d47a1; margin-bottom: 0px;">Name: ${loc.name}</div>
    <div><strong>Zipcode:</strong> ${loc.zipcode}</div>
    <div><strong>Pending Assignments:</strong> ${loc.pending} Assignments</div>
    <div><strong>Estimating Software Type:</strong> ${loc.software}</div>
    <div><strong>Notes:</strong> ${loc.notes}</div>
  </div>
`;

      const infoWindow = new google.maps.InfoWindow({
        content: infoWindowContent
      });

      marker.addListener("click", () => {
        infoWindow.open(map, marker);
      });
    });
  }
</script>


<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28UEoebX1hKscL3odt2TiTRVfe5SSpwE&callback=initMap"></script>




</body>
</html>
