<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resource/icon.png" />
    <title>New Tech | Sign Up</title>
</head>

<body class="body">
    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 d-none d-lg-block background2" style="height: 100vh;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="resource/index1.gif" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="resource/index2.gif" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="resource/index3.gif" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 fs-2 text-center title1">Welcome to NEW TECH !</div>
                    </div>
                    <div class="col-12 col-lg-6 background1" id="signup">
                        <div class="row">
                            <div class="col-12 text-center mt-5">
                                <img src="resource/icon.png" style="height: 100px;" />
                            </div>
                            <div class="col-12 text-center text-dark fw-bold">Welcome to Our E - Outlet</div>
                            <div class="col-12 text-center fs-1">Sign Up</div>
                            <div class="col-12 p-3">
                                <div class="row">
                                    <div class="col-12 col-lg-6 p-lg-1 ps-lg-3">
                                        <label class="form-label col-12">First Name</label>
                                        <input type="text" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 p-lg-1 pe-lg-3">
                                        <label class="form-label col-12">Last Name</label>
                                        <input type="text" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 p-lg-1 ps-lg-3">
                                        <label class="form-label col-12">Mobile Number</label>
                                        <input type="text" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 p-lg-1 pe-lg-3">
                                        <label class="form-label col-12">Gender</label>
                                        <select class="col-12 form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Email</label>
                                        <input type="email" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Password</label>
                                        <input type="password" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-1 pt-lg-3 ps-lg-3">
                                        <button class="col-12 btn btn-primary" onclick="changePage();">Sign Up</button>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-1 pt-lg-3 ps-lg-3">
                                        <button onclick="changePage();" class="col-12 btn btn-primary">Already have an Account? Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 background1 justify-content-center d-none" id="signin">
                        <div class="row" style="margin-top: 10%;">
                            <div class="col-12 p-3">
                                <button class="btn btn-outline-success text-dark rounded-end rounded-start col-2 offset-10" style="border-radius: 10px;" onclick="changePage1();">Admin</button>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <img src="resource/icon.png" style="height: 100px;" />
                            </div>
                            <div class="col-12 text-center text-dark fw-bold">Welcome to Our E - Outlet</div>
                            <div class="col-12 text-center fs-1">Sign In</div>
                            <div class="col-12 p-3">
                                <div class="row">
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Email</label>
                                        <input type="email" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Password</label>
                                        <input type="password" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-3 ps-lg-3">
                                        <button class="col-12 btn btn-primary" onclick="window.location = 'home.php'">Sign In</button>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-3 ps-lg-3">
                                        <button onclick="changePage();" class="col-12 btn btn-primary">New User? Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 background1 justify-content-center d-none"  id="admin">
                        <div class="row" style="margin-top: 10%;">
                            <div class="col-12 text-center mt-5">
                                <img src="resource/icon.png" style="height: 100px;" />
                            </div>
                            <div class="col-12 text-center text-dark fw-bold">Welcome to Our E - Outlet</div>
                            <div class="col-12 text-center fs-1">Admin Sign In</div>
                            <div class="col-12 p-3">
                                <div class="row">
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Email</label>
                                        <input type="email" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 p-lg-1 pe-lg-3 ps-lg-3">
                                        <label class="form-label col-12">Password</label>
                                        <input type="password" class="col-12 form-control" />
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-3 ps-lg-3">
                                        <button class="col-12 btn btn-primary" onclick="window.location = 'adminPanel.php'">Sign In</button>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid pt-3 ps-lg-3">
                                        <button onclick="changePage1();" class="col-12 btn btn-primary">I am not an Admin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>