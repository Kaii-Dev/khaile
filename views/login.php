<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>

    <?php include './common/header.php'; ?>
    <!-- Header -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <a class="navbar-brand mg-r" href="#">
            <img src="https://iweb.tatthanh.com.vn/pic/3/service/images/logo-cafe-dep(23).jpg" class="web-logo" alt="web logo">
        </a>
        <div class="d-flex align-items-center"> -->
            
            <!-- Menu Bar -->
            <!-- <ul class="navbar-nav mr-auto font-size ">
                <li class="nav-item active mg-r">
                    <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mg-r">
                    <a class="nav-link" href="#">Khuyến Mãi</a>
                </li>
                <li class="nav-item mg-r">
                    <a class="nav-link" href="#">Chính Sách</a>
                </li>
                </li>
            </ul>
            <div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                    <div class="searchbar mr-3">
                        <input class="search_input" type="text" name="" placeholder="Search...">
                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                    </div>
                </div>
        </div> -->
    <!--end menu bar-->


    <!-- </nav> -->

    <!-- End Header -->
    
    <main>
        <div class="container d-flex justify-content-center align-items-center pt-5 pb-5">   
            <div id="loginbox">                    
                <div class="card card-bg">
                    <h5 class="card-header">Đăng Nhập</h5>
                    <div class="card-body">
                        <form id="loginform" class="form-horizontal" role="form">
                                        
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập hoặc Mật khẩu">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                                
                            <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Lưu Mật Khẩu
                                        </label>
                                    </div>
                            </div>
    
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <a id="btn-login" href="#" class="btn btn-success">Đăng Nhập  </a>
                                </div>
                            </div>
    
    
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Chưa Có Tài Khoản?! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Đăng Ký Ngay
                                        </a>
                                    </div>
                                </div>
                            </div>   
    
                        </form>    
                    </div> <!--End Card Body-->
                </div> <!--End Card-->
            </div>
            <div id="signupbox" style="display:none;">
                <div class="card card-bg">
                    <h5 class="card-header">
                            Đăng Ký 
                    </h5>
                    <div class="card-body">
                        <form id="signupform" class="form-horizontal" role="form">
                                
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>
    
                            <div class="form-group">
                                <label for="username" class="control-label">Tên Đăng Nhập</label>
                                <input type="text" class="form-control" name="username" placeholder="Hãy nhập vào Tên Đăng Nhập">
                            </div>
                                
                            <div class="form-group">
                                <label for="firstname" class="control-label">Họ</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Hãy nhập vào Họ">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="control-label">Tên</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Hãy nhập vào Tên">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Mật Khẩu</label>
                                <input type="password" class="form-control" name="passwd" placeholder="Hãy nhập Mật Khẩu">
                            </div>
                                
                            <div class="form-group">
                                <label for="location" class="control-label">Địa Chỉ</label>
                                <input type="text" class="form-control" name="location" placeholder="Hãy nhập Địa Chỉ thường trú">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone" class="control-label">Số Điện Thoại </label>
                                <input type="text" class="form-control" name="phone" placeholder="Hãy nhập sđt">
                            </div>
    
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3">
                                    <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Đăng Ký</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Đã Có Tài Khoản?! 
                                        <a href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">
                                        Đăng Nhập
                                        </a>
                                    </div>
                                </div>
                            </div>   
                            
                            <!-- <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng Nhập</a></div> -->
                            
                        </form>  
                    </div> <!--End Card Body-->
                </div> <!--End Card-->
            </div> 
        </div> <!--End Container-->
    </main>
    

    <?php include './common/footer.php'; ?>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>