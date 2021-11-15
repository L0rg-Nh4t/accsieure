<?php
if($_SESSION['token']) {
    die('<meta http-equiv="refresh" content="0;URL=/home"/>');
}
?>
<link rel="stylesheet" href="/assets_2/Scripts/toastr/toastr.min.css"/>
<o id="result"></o>
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
<div class="container content-black">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng ký thành viên</p>

                <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>

                <div class="form-group has-feedback  ">
                    <input type="text" class="form-control" id="name" value="" placeholder="Họ Và Tên">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                </div>

                <div class="form-group has-feedback  ">
                    <input type="text" class="form-control" id="username" value="" placeholder="Tài khoản">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="email" placeholder="Email" >
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="repassword" placeholder="Xác nhận mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>


                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;" id="submit">Đăng ký</button>
                    </div>
                    <!-- /.col -->
                </div>


            <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>
                
                
                
                <a href="/signin.html" class="btn  btn-social btn-facebook btn-flat d-inline-block"><i class="fa fa-sign-in"></i>Đăng nhập</a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</div>
    <style>
    	input[type="text"] {
		    color: #000 !important;
		}
        .login-box, .register-box {
           
            padding: 20px;border: 1px solid #cccccc;
        }
		        .login-box-body {
           
             width: 400px;
            margin: 7% auto;
        }

        @media (max-width: 767px){
            .login-box, .register-box {width: 100%;}
			.login-box-body {width: 100%;}

        }

        .login-box-msg, .register-box-msg {
            margin: 0;color:#fff;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .box-custom{
            padding: 20px;
            color: #666;
        }
    </style>
<!-- END: PAGE CONTENT -->
</div>




<script src="/assets_2/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang kiểm tra";

    $.ajax({
        type: "POST",
        url: 'system/user',
        data: {
            type : 'register',
            name: $("#name").val(),   
            username: $("#username").val(),         
            email: $("#email").val(),
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Đăng kí";

           $("#result").html(result);
        }
    });

});

});

    $(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#submit').click();
    }
});
</script>


<script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };

    });
</script>


   
</body>
</html>
