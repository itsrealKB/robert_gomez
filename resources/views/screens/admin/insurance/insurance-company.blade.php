<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robert Gomez Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.css">
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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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
                                <img src="{{ asset("assets/admin/img/user1-128x128.jpg") }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
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
                                <img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
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
                                <img src="{{ asset("assets/admin/img/user3-128x128.jpg") }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
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
                <img src="{{ asset("assets/admin/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

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
            <section class="content" style="min-height: 100vh;">
                <div class="container-fluid">
                    <div class="dashboard-content">
                        <h1 class="dashboard-hd">Insurance Company</h1>
                        <div class="category-btn-wrapper">
                            <button type="button" class="cat-btn" id="addRowBtn">add new category</button>
                            <button type="button" class="cat-btn">download</button>
                        </div>
                        <table id="companyAdmins">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Point of Contact</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2121212</td>
                                    <td>Rizena7</td>
                                    <td>Robert</td>
                                    <td>Keena</td>
                                    <td>Keena</td>
                                    <td>No</td>
                                    <td class="action-cell position-relative">
                                        <i class="fa-solid fa-ellipsis-vertical action-toggle"
                                            style="cursor: pointer;"></i>
                                        <div class="action-menu"
                                            style="display: none; position: absolute; right: 0; background: #343a40; border: 1px solid #555; z-index: 1000;">
                                            <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                            </div>
                                            <div class="action-item delete-item px-3 py-2 text-danger"
                                                style="cursor: pointer;">Delete</div>
                                        </div>
                                    </td>

                                </tr>
                                 <tr>
                                    <td>2121212</td>
                                    <td>Rizena7</td>
                                    <td>Robert</td>
                                    <td>Keena</td>
                                    <td>Keena</td>
                                    <td>No</td>
                                    <td class="action-cell position-relative">
                                        <i class="fa-solid fa-ellipsis-vertical action-toggle"
                                            style="cursor: pointer;"></i>
                                        <div class="action-menu"
                                            style="display: none; position: absolute; right: 0; background: #343a40; border: 1px solid #555; z-index: 1000;">
                                            <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                            </div>
                                            <div class="action-item delete-item px-3 py-2 text-danger"
                                                style="cursor: pointer;">Delete</div>
                                        </div>
                                    </td>

                                </tr>
                                 <tr>
                                    <td>2121212</td>
                                    <td>Rizena7</td>
                                    <td>Robert</td>
                                    <td>Keena</td>
                                    <td>Keena</td>
                                    <td>No</td>
                                    <td class="action-cell position-relative">
                                        <i class="fa-solid fa-ellipsis-vertical action-toggle"
                                            style="cursor: pointer;"></i>
                                        <div class="action-menu"
                                            style="display: none; position: absolute; right: 0; background: #343a40; border: 1px solid #555; z-index: 1000;">
                                            <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                            </div>
                                            <div class="action-item delete-item px-3 py-2 text-danger"
                                                style="cursor: pointer;">Delete</div>
                                        </div>
                                    </td>

                                </tr>
                                 <tr>
                                    <td>2121212</td>
                                    <td>Rizena7</td>
                                    <td>Robert</td>
                                    <td>Keena</td>
                                    <td>Keena</td>
                                    <td>No</td>
                                    <td class="action-cell position-relative">
                                        <i class="fa-solid fa-ellipsis-vertical action-toggle"
                                            style="cursor: pointer;"></i>
                                        <div class="action-menu"
                                            style="display: none; position: absolute; right: 0; background: #343a40; border: 1px solid #555; z-index: 1000;">
                                            <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                            </div>
                                            <div class="action-item delete-item px-3 py-2 text-danger"
                                                style="cursor: pointer;">Delete</div>
                                        </div>
                                    </td>

                                </tr>
                                 <tr>
                                    <td>2121212</td>
                                    <td>Rizena7</td>
                                    <td>Robert</td>
                                    <td>Keena</td>
                                    <td>Keena</td>
                                    <td>No</td>
                                    <td class="action-cell position-relative">
                                        <i class="fa-solid fa-ellipsis-vertical action-toggle"
                                            style="cursor: pointer;"></i>
                                        <div class="action-menu"
                                            style="display: none; position: absolute; right: 0; background: #343a40; border: 1px solid #555; z-index: 1000;">
                                            <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                            </div>
                                            <div class="action-item delete-item px-3 py-2 text-danger"
                                                style="cursor: pointer;">Delete</div>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>

                        </table>
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
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function () {
            $("#companyAdmins").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                    data: "ID",
                },
                {
                    data: "Company Name",
                },
                {
                    data: "Point of Contact",
                },
                {
                    data: "Phone",
                },
                {
                    data: "Email",
                },
                {
                    data: "Status",
                },
                {
                    data: "Action",
                },
                ],
            });
        });
    </script>




    <!-- Add New Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content dark-mode">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label>ID</label>
                                <input type="number" class="form-control" name="id" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Company Name</label>
                                <input type="text" class="form-control" name="company" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Point of Contact</label>
                                <input type="text" class="form-control" name="poc" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Phone</label>
                                <input type="number" class="form-control" name="phone" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No" selected>No</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary add-btn w-100 text-center">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        let editIndex = -1; // To track the row being edited

        // Open Modal on Button Click
        $('#addRowBtn').click(function () {
            $('#addCategoryModal').modal('show');
            editIndex = -1; // Reset edit index for new entry
        });

        // Add Row to Table
        $('#addCategoryForm').on('submit', function (e) {
            e.preventDefault();

            // Get values from inputs
            const id = $('input[name="id"]').val();
            const company = $('input[name="company"]').val();
            const poc = $('input[name="poc"]').val();
            const phone = $('input[name="phone"]').val();
            const email = $('input[name="email"]').val();
            const status = $('select[name="status"]').val();

            if (editIndex === -1) {
                // Append new row to table
                $('#companyAdmins tbody').append(`
                    <tr>
                      <td>${id}</td>
                      <td>${company}</td>
                      <td>${poc}</td>
                      <td>${phone}</td>
                      <td>${email}</td>
                      <td>${status}</td>
                      <td class="action-cell position-relative">
                        <i class="fa-solid fa-ellipsis-vertical action-toggle" style="cursor: pointer;"></i>
                      </td>
                    </tr>
                `);
            } else {
                // Update existing row
                $('#companyAdmins tbody tr').eq(editIndex).html(`
                    <td>${id}</td>
                    <td>${company}</td>
                    <td>${poc}</td>
                    <td>${phone}</td>
                    <td>${email}</td>
                    <td>${status}</td>
                    <td class="action-cell position-relative">
                      <i class="fa-solid fa-ellipsis-vertical action-toggle" style="cursor: pointer;"></i>
                    </td>
                `);
            }

            // Reset form and close modal
            $('#addCategoryForm')[0].reset();
            $('#addCategoryModal').modal('hide');
        });

        // Show action menu on three dots click
        $(document).on('click', '.action-toggle', function () {
            const $row = $(this).closest('tr');
            const $actionMenu = $('<div class="action-menu" style="background: #343a40; border: 1px solid #555; z-index: 1000; position: absolute; right: 0;">' +
                '<div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit</div>' +
                '<div class="action-item delete-item px-3 py-2 text-danger" style="cursor: pointer;">Delete</div>' +
                '</div>');

            $row.append($actionMenu);

            // Handle edit action
            $actionMenu.on('click', '.edit-item', function () {
                editIndex = $row.index(); // Get the index of the row to edit
                const cells = $row.children();

                // Set values in the modal
                $('input[name="id"]').val(cells.eq(0).text());
                $('input[name="company"]').val(cells.eq(1).text());
                $('input[name="poc"]').val(cells.eq(2).text());
                $('input[name="phone"]').val(cells.eq(3).text());
                $('input[name="email"]').val(cells.eq(4).text());
                $('select[name="status"]').val(cells.eq(5).text());

                // Show the modal for editing
                $('#addCategoryModal').modal('show');

                // Remove action menu after clicking edit
                $actionMenu.remove();
            });

            // Handle delete action
            $actionMenu.on('click', '.delete-item', function () {
                $row.remove();
                $actionMenu.remove(); // Remove action menu after deletion
            });

            // Close action menu on clicking outside
            $(document).on('click', function (e) {
                if (!$(e.target).closest($actionMenu).length && !$(e.target).closest('.action-toggle').length) {
                    $actionMenu.remove();
                }
            });
        });
    });
</script>
<script>
      $(document).ready(function () {
        $('.cat-btn:contains("download")').click(function () {
            let table = document.getElementById('companyAdmins');

            // Clone table
            let clone = table.cloneNode(true);

            // Remove last column from all rows
            for (let row of clone.rows) {
                if (row.cells.length > 0) {
                    row.deleteCell(-1); // Remove last cell
                }
            }

            // Convert table to CSV
            let worksheet = XLSX.utils.table_to_sheet(clone);
            let csv = XLSX.utils.sheet_to_csv(worksheet);

            // Create CSV blob and trigger download
            let blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            let link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.setAttribute('download', 'CompanyAdmins.csv');
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
</body>

</html>
