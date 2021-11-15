   <!-- ROTAGE PLUGIN -->
    <script type="text/javascript" src="/assets_2/Scripts/rotate.js"></script>

<div class="c-layout-page">
<style>
    .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media        screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media        screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 50px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;


        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }
        
        
        
        
        
    .nickdaquay{position:fixed;
    z-index:9999;
    bottom:170px;
    right:0px;
    max-width: 15%;
    min-width: 120px;
    min-height: 120px;}
    .anhbymanh{position:fixed;
    z-index:9999;
    bottom:80px;
    left:0px;
    max-width: 29%;
    min-height: 20px;}
    .napthebymanh{position:fixed;
    z-index:9999;
    bottom:100px;
    right:0px;
    max-width: 15%;
    min-height: 40px;
    min-width: 100px;
    }
    .flex-list .item {
        width: 50%;
        padding: 0 30px;
    }
        .rotation {
        text-align: center;
    }
    section {
        padding: 30px 0;
    }
        .rotation .play-spin {
        width: 100%;
        position: relative;
        margin: 0 auto;
    }
    .rotation .play-spin .ani-zoom {
        position: absolute;
        display: block;
        width: 110px;
        z-index: 5;
        top: calc(50% - 70px);
        left: calc(50% - 55px);
    }
    .ani-zoom {
        -webkit-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -ms-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
    }
    img {
        max-width: 100%;
    }
    img {
        vertical-align: middle;
    }
    img {
        border: 0;
    }
    .text-center {
        text-align: center;
    }
    li{
        list-style: none;
    }

    .form-notication-bottom {
    position: fixed;
    bottom: 20px;
    left: 10px;
    width: 330px;
    height: auto;
    background-color: #fff;
    border-radius: 40px;
    z-index: 1;
    box-shadow: 2px 2px 10px 2px hsla(0,0%,60%,.2);
    animation: example 8s infinite;
    max-width: calc(90% - 10px);
    overflow: hidden;
}


@keyframes    example{0%{bottom: -100px;}25%{bottom: 20px;} 50%{bottom: 20px;}100%{bottom: -100px;}}

li {
    list-style-type: none
}
.history {
    width: 40% !important;
}
@media    only screen and (max-width: 800px) {
    .c-content-client-logos-slider-1 .item {
        width: 90%;
        margin:auto;
    }
    
    #rotate-play {
        width: 100% !important;
        max-width: 100% !important;
    }
    .rotation .play-spin .ani-zoom img {
        width: 85% !important;
    }
    .history {
        width: 100% !important;
    }
}
.c-content-box.c-size-md{
    padding: 0
}
.pd50{
    padding-top: 50px;
}
.list-roll{
    margin-top: 30px;
    margin-bottom: 30px;
}

@media    screen and (min-width: 800px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 400px;
        overflow-y: scroll;
        margin:0 auto;
    }
}

@media    screen and (min-width: 1100px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 600px;
        overflow-y: scroll;
        margin:0 auto;
    }
}
.btn-top{
    display: flex;
    justify-content: center;
    margin-bottom: 30px
}
.btn-top .btn{
    margin-left: 15px;
    margin-right: 15px;
    padding: 6px 20px;
}
.btn-top span{
    font-size: 25px;
}
@media    screen and (max-width: 640px) {
    .btn-top span{
        font-size: 17px;
    }
}
</style>











<?php
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` WHERE `id`='".$_GET['id']."' AND `status`='true'"));
if(!$row['id']) die("<center><h1>Không Tìm Thấy Vòng Quay!</center>");
?>
<?php //echo $kun->compact_string('kun', 5, '***');?>

<input type="hidden" id="document" value="<?php echo $_GET['id'];?>">
<form id="form"></form>

<div class="container">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold"><?php echo $row['name'];?></h3>
    <center><b><font color="red">Chú ý : <?php echo $kun->compact_number($row['giatien']);?>/1 lần quay </font></b></center>
    <div class="c-line-center c-theme-bg"></div>
</div>



<div class="col-lg-6 col-md-12">
    <div class="c-content-box c-size-md">
        <!-- <div class="container"> -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl" style="background: transparent;">
                
                <div class="row row-flex-safari game-list" style="display: flex; flex-wrap: wrap">
                    <div class="item item-left">

                      <section class="rotation">
                        <div class="play-spin">
                            <a class="ani-zoom" id="start"><img src="/assets_2/img/btn-quay.png" alt="Play Center"></a>
                            <img style="width: 80%;max-width: 80%;opacity: 1;" src="<?php echo $kun->vongquaykimcuong_image($_GET['id'], 'image');?>" id="rotate">  
                        </div>

<style type="text/css">
.c-font-white {
    color: #e5ff0b !important;
}</style>

                        <div class="text-center">           
                            <h3 class="num-play c-font-white">Chú ý : <?php echo $kun->compact_number($row['giatien']);?>/1 lần quay</h3>
                            <li><a style="display: none" class="ani-zoom btn-img deposit-btn disabled" href="/nap-the" data-toggle="modal" data-target="#modalBuy"><img src="assets/frontend/vongquay/image/mualuot.png" alt=""></a></li>
                        </div>
                      </section>    
                    </div>
                </div>

                <div class="table-body scrollbar-inner">
                  <table class="table table-bordered">
                     <tbody></tbody>
                  </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<div class="col-lg-6 col-md-12 list-roll">
    <div class="btn-top">
        <a href="#" class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Thể Lệ</span>
            </span>
        </a>
                <a href="/user/rutkimcuong" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Rút Quà</span>
            </span>
        </a>
                <a href="/user/lichsugiaodich" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Lịch sử quay</span>
            </span>
        </a>
    </div>
        <div class="c-content-title-1" style="margin: 0 auto">
        <h3 class="c-center c-font-uppercase c-font-bold">LƯỢT QUAY GẦN ĐÂY</h3>
    </div>
    <div class="list-roll-inner">
        
        <table cellpadding="10" class="table table-striped">
            <tbody>
                <tr>
                    <th>Tài khoản</th>
                    <th>Giải thưởng</th>
                    <th>Thời gian</th>
                </tr>
            </tbody>
<tbody>
<?php 
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Vòng Quay FreeFire' AND `action_name`='".$row['name']."' ORDER BY `time` DESC LIMIT 0, 50");
while ($row = mysqli_fetch_array($res)) {
    ?>
 <tr>
<td><?php echo $kun->compact_string($row['username'], 7, '***');?></td>
<th><?php echo $row['mota'];?></th>
<th><?php echo date('H:i d/m', $row['time']);?></th>
</tr>    
<?php } ?>


</tbody>
        </table>
    </div>
    <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <p style="text-align:center"><span style="color:#f39c12"><strong>KHI BẠN CÓ ĐỦ 17,999K&nbsp;BẠN SẼ ĐƯỢC 1 LƯỢT QUAY&nbsp;</strong><br>
<strong>-KHI KIM QUAY DỪNG Ở Ô NÀO BẠN SẼ NHẬN ĐƯỢC SỐ KIM CƯƠNG&nbsp; NGẪU NHIÊN CỦA &nbsp;<br>
VÍ DỤ BẠN QUAY VÀO Ô NHẬN ĐƯỢC CÓ GIÁ TRỊ NHẬN ĐƯỢC TỪ 15-50 SẼ NHẬN ĐƯỢC RANDOM&nbsp;<br>
SỐ KIM CƯƠNG TRONG KHOẢNG 15-50&nbsp;</strong><br>
<strong>BẠN SẼ CÓ CƠ HỘI NHẬN ĐƯỢC 999&nbsp;KC ,3.999 KC, 6.000KC&nbsp;HOẶC 9999 KC</strong><br>
<strong>CHÚC CÁC BẠN MAY MẮN</strong></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
    });
</script>
<div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>



</div>

    
    <style type="text/css">
        #start-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
            margin:auto;
        }
    </style>


<script src="/assets_2/Scripts/client_0x2165x1.js"></script>


<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function _quay(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:10000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

        swal("Thành công!", awar, type);
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }

    $('#start').click(function (){

        if(bRotate)return;

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/vongquaykimcuong', 
        data: {
            csrf: $('#csrf').val()
        }, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");          
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
            }else if(json.status == 1) {
                if(json.item > 0 && json.item < 9) {
   _quay(json.location, json.msg, "success");    
}else {
    swal("Lỗi!", "Lỗi hệ thống!", "error"); 
}

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });

});
</script>


<!--     <script type="text/javascript">
        $(document).ready(function(){
            $('#noticeModal').modal('show')
        });
    </script> -->
<!-- END: PAGE CONTENT -->
</div>