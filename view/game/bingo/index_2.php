<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
.btn + .btn{
        margin-left: 0!important;
    }
    .pd50{padding-top:50px} 
    .btn-right .btn{
        float: left;
        width: 100%;
        background: #fb236a;
        font-size: 13px;
        color: #ffffff;
        text-align: center;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        border: 2px solid #fb236a;
        padding: 11px 0;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }
section {
    padding: unset!important;
}
    .btn-right .btn:hover{
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }
    .square{
        width: 100%;
    }
    #squaredesktop .box{
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/
        padding: 10px;
    }
    #squaremobile .box{
        padding: 5px;
    }
    .box img.active{

          box-shadow:
            0 0  5px #fff, 
            0 0  10px #fff, 
            0 0  15px #fff, 
            0 0  20px #49fff7, 
            0 0  35px #49fff7
    }
    .outer-btn{
        width: 100%
    }
    .outer-btn:hover{
        opacity: 0.7
    }
    #squaremobile .outer-btn{
        margin-bottom: -50px;
    }
    .nopadding{
        padding: 0;
    }
</style>
<style>
@import  url('https://fonts.googleapis.com/css?family=Roboto');
@import  url('https://fonts.googleapis.com/css?family=Roboto+Mono');
a{
    color: #283593;
    text-decoration: none;
}
h3{
    margin-top: 12px;
}
*{
    margin:0px;
}
.game-list{
    width: 580px;
    margin: 0 auto;
}
@media  screen and (max-width: 580px) {
    .game-list {
        width: 345px;
        height: 269px;
        background:url('https://upanh.cf/7gl70txbrk.png') no-repeat;
        background-size: 345px 269px;
        position: relative;
    }
    main {
        background: transparent;
        border-radius: 5px !important;
        margin-top: 45px !important;
        padding-top: 110px !important;
        padding-bottom: 98px !important;
        padding-left: unset;
        margin-left: 51px !important;
        width: 100%;
    }
    #Slots{
        background:transparent !important;
    }

        section#Gira {
        position: absolute;
        /* width: 170px; */
        /* height: 70px; */
        /* background: url(https://shopchinhthuc.vn/bingo/play.png) no-repeat; */
        /* background-size: 170px 70px; */
        left: 0;
        bottom: -81px;
    }


  
#slot1, #slot2, #slot3 {
    display: inline-block;
    margin-top: 60px !important;
    margin-left: 6px !important;
    margin-right: 14px !important;
    background-size: 60px 60px !important;
    width: 60px !important;
    height: 60px !important;
}
}

main{
 background: transparent;
border-radius: 5px;
margin-top: 50px;
padding-top: 324px;
padding-bottom: 20px;
padding-left: unset;
width: 100%;
}
section#Slots{
    border-radius: 15px;
    background-color: #FAFAFA;
}


section#info{
    background-color: #616161;
    padding-left: 12px;
    padding-bottom: 12px;
    border-radius: 5px;
    overflow: hidden;
    animation-duration: 1s;
    color: #BDBDBD;
    margin-top: 50px;
    margin-left: 30%;
    margin-right: 30%;
    display: none;
}
#slot1, #slot2, #slot3{
    display: inline-block;
    margin-top: 5px;
    margin-left: 15px;
    margin-right: 21px;
    background-size: 150px 150px;
    width: 150px;
    height: 150px;
}

    .a8{
        background-image: url("");
    }


        .a7{
        background-image: url("");
    }


        .a6{
        background-image: url("https://upanh.cf/uo111nwc4f.png");
    }


        .a5{
        background-image: url("https://upanh.cf/75bnkmyd2o.png");
    }


        .a4{
        background-image: url("https://upanh.cf/javydkmf6j.png");
    }


        .a3{
        background-image: url("https://upanh.cf/1mizfzmbwi.png");
    }


        .a2{
        background-image: url("https://upanh.cf/xkjgjcoqtw.png");
    }


        .a1{
        background-image: url("https://upanh.cf/dr8n7h2l11.png");
    }


    @media  screen and (min-width: 580px) {
   .game-list{
        width: 720px;
        height: 630px;
        background:url('https://upanh.cf/7gl70txbrk.png') no-repeat;
        background-size: 720px 630px;
        position: relative;
    } 
    main {
    background: transparent;
    border-radius: 5px;
    margin-top: 30px;
    padding-top: 273px;
    padding-bottom: 18px;
    /* padding-left: 170px; */
    margin-left: 122px;
    width: 100%;
    }
    #Slots{
        background:transparent !important;
    }
        section#Gira {
        position: absolute;
        /* width: 170px; */
        /* height: 70px; */
        /* background: url(https://shopchinhthuc.vn/bingo/play.png) no-repeat; */
        /* background-size: 170px 70px; */
        left: 103px;
        bottom: -93px;
    }

#slot1, #slot2, #slot3 {
    display: inline-block;
    margin-top: 117px;
    margin-left: -19px;
    margin-right: 43px;
    background-size: 150px 150px;
    width: 150px;
    height: 150px;
}
}

@media screen and (min-width: 580px){
.dropdownlist {
    position: absolute;
    left: 0;
    bottom: -7px;
    width: 100%;
    padding: 0 70px;
    text-align: center;
}

}

@media screen and (max-width: 580px){
.dropdownlist {
    position: absolute;
    left: 0;
    bottom: -28px;
    width: 100%;
    padding: 0 0px;
    text-align: center;
}
}

</style>
<meta name="csrf-token" content="iOsiuXmOOmN7pVnmWNIaHlS2bYGChPQUYNGz4K8w">

<div class="container">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:white">MÁY XÈNG ONE SHOT M1014</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<div class="col-lg-1 col-md-hidden"></div>
<div id="boxfull" class="col-lg-6 col-md-12" >
    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

        <div class="row-flex-safari game-list" style="margin-bottom: 100px">
            <main>
                <section id="status"></section>
                <section id="Slots">
                    <div id="slot1" class="a1"></div>
                    <div id="slot2" class="a1"></div>
                    <div id="slot3" class="a1"></div>
                </section>
                <section id="Gira"><img src="https://shopchinhthuc.vn/bingo/KrXulXHcdj_1593765231.gif" id="choi">

              </section>
<div class="clearfix"></div>
              <section class="dropdownlist" style="color: black;">
                    <select style="width:50%;color: black;margin: auto;padding:5px 10px;border: 1px solid #144ed7;" id="x" name="x">
                                                <option value="1">Mua X1 - 19K / 1 Lần Quay</option>


                            <option value="3">Mua X3 - 50K / 1 Lần Quay</option>


                            <option value="5">Mua X5 - 80K / 1 Lần Quay</option>


                            <option value="7">Mua X7 - 110K / 1 Lần Quay</option>


                            <option value="10">Mua X10 - 160K / 1 Lần Quay</option>


    

                    </select>

<div style="position:relative;z-index:100;margin:auto;    
"><a class="num-play-try btn btn-primary" data-vong="QUAY16">Chơi thử</a></div>


</div>



<style type="text/css">
    .list-roll-inner {
    width: 85%;
    margin-top: 30px;
    max-height: 380px;
    overflow-y: scroll;
    margin: 0 auto;
}
</style>
<div class="col-lg-6 col-md-6 col-xs-12 list-roll">
    <div class="btn-top">
        <a href="/user/rutkimcuong" class="uytin btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            Rút Quà
        </a>
        <a href="/user/lichsugiaodich" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            Lịch Sử
        </a>
    </div>

<div class="list-roll-inner">
<table class="table table-hover table-custom-res">
                        <thead>
                        <tr>
                            <th>STT</th>                            
                            <th>Username</th>
                            <th>Phần thưởng</th>
                            <th>Thời Gian</th>
                        </tr>
                        </thead>
                        <tbody>
<?php 
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Bingo FreeFire' AND `action_name`='Bingo FreeFire' ORDER BY `time` DESC LIMIT 0, 50");
while ($row = mysqli_fetch_array($res)) {
    ?>
                            <tr>
                                <td>#<?php echo $row['id'];?></td>                                
                                <td><?php echo $kun->compact_string($row['username'], 7, '***');?></td>
                                <td><?php echo $row['mota'];?></td>      
                                <td><?php echo date('H:i d/m', $row['time']);?></td>                              
                            </tr>
    <?php } ?>                        
                        </tbody>
                    </table>
</div>
</div>

    </div>
</div>



<!-- END: PAGE CONTAINER -->

         </div>
        </div>
        <?php
        for($i=1; $i <= 8; $i++) { 
echo '<img style="display: none;" src="/assets_2/img/bingo/'.$i.'.gif">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "Đang Kiểm Tra!";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/bingo', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay!";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "Đang Quay";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, msg) {

    var items = [1,2,3,4,5,6,7,8];  // name of img random images

    var stop_bingo_1 = 100; // 10s
    var stop_bingo_2 = 130; // 13s
    var stop_bingo_3 = 160; // 16s


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*100 );}

// Bingo 1
for (let i=1; i<=stop_bingo_2; i++) {setTimeout( function timer(){
 var item_2 = items[Math.floor(Math.random() * items.length)];
 change_img("role_2", item_2);
  if(i == stop_bingo_2) {
  change_img("role_2", role_2); 
  return
 }
 }, i*100 );}

// Bingo 1
for (let i=1; i<=stop_bingo_3; i++) {setTimeout( function timer(){
 var item_3 = items[Math.floor(Math.random() * items.length)];
 change_img("role_3", item_3);
  if(i == stop_bingo_3) {
  change_img("role_3", role_3);
  return
 }
 }, i*100 );}


setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";   
         reload_money();
 }, 16500 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo/'+img_name+'.gif';
}



</script>