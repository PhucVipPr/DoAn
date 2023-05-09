
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<div class="wrapper">
    <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/5364/5364136.png">
    </div>
    <div class="text-center mt-4 name">
       ROUSE
    </div>
    <form class="p-3 mt-3" method="POST" >
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input type="email" name="email" id="userName" placeholder="Email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Mật khẩu">
        </div>
        <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Bạn quên mật khẩu?</a> hay <a href="/register">Đăng ký</a>
    </div>
</div>
</html>

