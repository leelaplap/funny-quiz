
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('storage/admins/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('storage/admins/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('storage/admins/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admins.index')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> Admin Funny Quiz</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
            </a>
            <!-- Dropdown - User Information -->
            <div class=" dropdown-menu-right shadow " aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading mt-3">
            Category
        </div>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admins.getTables')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>List Category</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('quizzes.basic')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Tạo Quiz</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('questions.create')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Tạo câu hỏi</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('quizzes.basic')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Gắn câu hỏi vào Quiz</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="{{route('admins.getLogin')}}">Login</a>
                    <a class="collapse-item" href="{{route('admins.getRegister')}}">Register</a>
                    <a class="collapse-item" href="{{route('admins.getForgotPassword')}}">Forgot Password</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid pt-4">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <div class="col-12">
                                    <div class="row p-5">
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="text-center">Add question to Quiz</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"><h5>Quiz</h5></label>
                                                            <div class="col-sm-10">
                                                                <h3><input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                                           value="">{{$quiz->name}}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"><h5>Desc</h5></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                                       value="">{{$quiz->desc}}
                                                            </div>
                                                        </div>
                                                        <h5>Các câu hỏi đã có trong Quiz :</h5>
                                                        <div class="p-3 ">
                                                            @foreach($questions as $question)
                                                                @if($question->quiz_id === $quiz->id)
                                                                    <div class="form-group form-check pl-5">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                        <label class="form-check-label"
                                                                               for="exampleCheck1">{{$question->title}}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="pull-right">
                                                            <button type="submit" class="btn btn-danger">Remove</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="text-center">List question</h3>
                                                </div>
                                                <div class="card-body parent">
                                                    <form class="form-inline my-2 my-lg-0">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                    </form>


                                                    <form method="post" action="{{route('questions.updateQuiz',$quiz->id)}}">
                                                        @csrf
                                                        <div class="p-3 ">
                                                            @foreach($listQuestion as $question)
                                                                @if($question->quiz_id==null)
                                                                    <input type="text" class="form-check-input" id="exampleCheck1"
                                                                           style="display: none" name="title" value="{{$question->title}}">
                                                                    <div class="form-group form-check pl-5">
                                                                        <input name="id" value="{{$question->id}}">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                                               name="question" value="{{$quiz->id}}">
                                                                        <label class="form-check-label"
                                                                               for="exampleCheck1">{{$question->title}}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="pull-right child">
                                                            <button type="submit" class="btn btn-success">Add</button>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
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
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.blade.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('storage/admins/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('storage/admins/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('storage/admins/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('storage/admins/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('storage/admins/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('storage/admins/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('storage/admins/js/demo/datatables-demo.js')}}"></script>
{!! toastr()->render() !!}
</body>

</html>


