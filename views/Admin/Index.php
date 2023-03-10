<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/cc/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="libraries/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Libraries/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Admin/Index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="Admin/Blog">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Blog</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           <li class="nav-item active">
                <a class="nav-link" href="Admin/Message">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Messages</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Test Admin</span>
                                <img class="img-profile rounded-circle" src="Libraries/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List Of Blogs</h1>
                    </div>


                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SN</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Writer</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = 1;
                                        while ($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <input type="hidden" name="id" value=<?= $row['bid']; ?> class="bid">
                                                <td class=""><?php echo $sn; ?></td>
                                                <td class="title"><?php echo $row['title']; ?></td>
                                                <td class="description"><?php echo $row['description']; ?></td>
                                                <td class="writer"><?php echo $row['writer']; ?></td>
                                                <?php $image = "http://localhost/cc/libraries/images/" . $row['image']; ?>
                                                <td><img src="<?php echo $image; ?>" width="70" height="70" /> </td>





                                                <td>
                                                    <a class="btn btn-danger" href="Admin/DeleteBlog?bid=<?php echo $row['bid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
                                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#blog">update</button> -->
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#updateModal" onclick="fillData(this)"> Update </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $sn++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <!-- Button trigger modal -->


                <!-- Modal to -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="Admin/Bupdate" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Blog</h5>
                                </div>
                                <div class="modal-body">

                                    <input type="hidden" name="bid" id="bid">
                                    <div class="modal-body border-none">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="company name">Title:</label>
                                                        <input type="text" class="form-control" required="" id="title" name="title" maxlength="30" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="Description">Description:</label>
                                                        
                                                        <textarea id="description" name="description" class="form-control">

                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="writer">Writer:</label>
                                                        <input type="text" class="form-control" required="" id="writer" name="writer" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="updateblog" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="libraries/admin/vendor/jquery/jquery.min.js"></script>
    <script src="libraries/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="libraries/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="libraries/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="libraries/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="libraries/admin/js/demo/chart-area-demo.js"></script>
    <script src="libraries/admin/js/demo/chart-pie-demo.js"></script>
    <script>
        CKEDITOR.replace('description', {
            toolbar: [{
                    name: 'forms',
                    items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles', 'cleanup'],
                    items: ['Bold', 'Italic']
                },
                {
                    name: 'paragraph',
                    groups: ['list'],
                    items: ['NumberedList', 'BulletedList', '-', '-', 'CreateDiv', '-']
                },
            ],
            enterMode: CKEDITOR.ENTER_P,
            shiftEnterMode: CKEDITOR.ENTER_BR
        });


        function fillData(elm) {
            $row = $(elm).closest('tr');
            $title = $row.find('.title').html();
            $description = $row.find('.description').html();
            $writer = $row.find('.writer').html();
            $bid = $row.find('.bid').val();
            $('#title').val($title);
            $('#description').val($description);
            $('#writer').val($writer);
            $('#bid').val($bid);
        }
    </script>

</body>

</html>