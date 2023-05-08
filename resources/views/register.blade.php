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
        Đăng ký tài khoản
    </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="userName" id="userName" placeholder="Tên người dùng">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Mật khẩu">
        </div>
        <button class="btn mt-3">Xác nhận</button>
    </form>
    <div class="text-center fs-6">
        <a href="/login">Bạn đã có tài khoản? Đăng nhập ngay</a>
    </div>
</div>
</html>
