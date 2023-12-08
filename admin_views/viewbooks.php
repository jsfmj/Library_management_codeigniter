<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View books</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');?>">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css2/bootstrap.min.css');?>">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css2/style.css');?>">
    <style>
      .btn-available {
            background-color: green;
            border: none;
            color: white;
            width: 80px;
            height: 30px;
            transition: 0.4s ease;
        }
        .btn-delete {
            background-color: red;
            border: none;
            color: white;
            width: 60px;
            height: 30px;
            transition: 0.4s ease;
        }
         .btn-delete:hover {
            scale: 110%;
        }


        .btn-unavailable {
            background-color: red;
            border: none;
            color: white;
            width: 100px;
            height: 30px;
            transition: 0.4s ease;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo base_url('index.php/admin/data');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?php echo base_url('index.php/admin/addbook');?>" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Add book</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View books</a>
                    <a href="<?php echo base_url('index.php/admin/req');?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Requests</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">My profile</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="<?php echo base_url('index.php/admin/logout');?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Book details</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Book name</th>
                                    <th scope="col">Book author</th>
                                    <th scope="col">Count</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                   foreach ($views as $view) : ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?= $view['id']; ?></td>
                                    <td><img style="width:20%; height:20%;" src="<?= $view['image']; ?>" alt=""></td>
                                    <td><?= $view['book_name']; ?></td>
                                    <td><?= $view['book_author']; ?></td>
                                    <td><?= $view['count']; ?></td>
                                    <td>
                                       <?php if ($view['count'] > 0) : ?>
                                       <button class="btn-available" data-user-id="<?= $view['id']; ?>" data-status-id="<?= $view['status']; ?>">Available</button>
                                       <?php else : ?>
                                       <button class="btn-unavailable" data-user-id="<?= $view['id']; ?>" disabled>Unavailable</button>
                                       <?php endif; ?>
                                    </td>
                                    <td><button class="btn-delete" data-user-id="<?= $view['id']; ?>">Delete</button></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/chart/chart.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/easing/easing.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/waypoints/waypoints.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/tempusdominus/js/moment.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/tempusdominus/js/moment-timezone.min.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js');?>">

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js2/main.js');?>"></script>
    <script>
        $(document).ready(function () {
            $(".btn-delete").on("click", function () {
            var button = $(this);
            var userId = button.data("user-id");
            var isConfirmed = confirm("Are you sure you want to delete this user?");

            if (isConfirmed) {
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>index.php/Admin/deletebook",
                data: {
                    userId: userId,
                },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        button.closest("tr").remove();
                    } else {
                        alert('Error deleting user: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                }
            });
          }     
        });
    });
    </script>
</body>

</html>