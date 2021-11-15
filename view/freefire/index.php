<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

$condition = "";
if(isset($_POST['loc'])) {



    if($_POST['maso']) {
        $condition .= " AND `id`='".$_POST['maso']."'";
    }

    if($_POST['price']) {

        switch ($_POST['price']) {
            case 'duoi-50k':
                $condition .= " AND `giatien`<= 50000";
                break;
            case 'tu-50k-200k':
                $condition .= " AND `giatien` >= 50000 AND `giatien` <= 200000 ";
                break;
            case 'tu-500k-1-trieu':
                $condition .= " AND `giatien` >= 500000 AND `giatien` <= 1000000";
                break;
            case 'tren-1-trieu':
                $condition .= " AND `giatien` >= 1000000";
                break;
            case 'tren-5-trieu':
                $condition .= " AND `giatien` >= 5000000";
                break;
            case 'tren-10-trieu':
                $condition .= " AND `giatien`>= 1000000";
                break;
        }

    }

    if($_POST['rank']) {
        $condition .= " AND `rank`='".$_POST['rank']."'";
    }

    if($_POST['nhanvat']) {
        $condition .= " AND `nhanvat`='".$_POST['nhanvat']."'";
    }

    if($_POST['pet']) {
        $condition .= " AND `pet`='".$_POST['pet']."'";
    }

}

$sql = "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition." ORDER BY time DESC LIMIT $start, $kmess";

 $result = mysqli_query($kun->connect_db(), $sql);
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition));
?>


<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->



    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert">
                    <h2 class="alert-heading" style="color:#000">NICK FREE FIRE GIÁ RẺ</h2>
                    <p></p><p><strong>Game&nbsp;<a href="https://ff.garena.vn/" target="_blank"><span style="color:#f1c40f">Free Fire</span></a>&nbsp;Thuộc Thể Loại Game Mobile Nhập Vai Do&nbsp;<a href="https://www.garena.vn/" target="_blank"><span style="color:#f1c40f">GARENA</span></a>&nbsp;Độc Quyền Phát Hành Tại Việt Nam.</strong></p>

<h2><span style="color:#27ae60"><strong>Nick Free Fire Giá Rẻ</strong></span></h2>

<p><strong>100%&nbsp;Nick Đúng Mật Khẩu Trắng Thông Tin</strong></p>

<p><strong>Chú Ý&nbsp;Gỡ Bỏ Tất Cả Tài Khoản Trên Ứng Dụng Facebook Sau Đó Đăng Nhập Nick Bằng Mạng 3G 4G Để Hạn Chế Bị Xác Minh Danh Tính</strong></p>

<p><strong>Đa Phần Các Nick Đều Có Mã Xác Nhận ở Phần Thông Tin Bổ Sung Nick Để Tránh Bị Checkpoin</strong></p>

<p><strong>Khách Hàng Không Được Thay Đổi&nbsp;Email ( Vì Đó Là&nbsp;&nbsp;Email Ảo Không Ảnh Hưởng Gì) Chỉ Cần Đổi Mật Khẩu</strong></p>

                </div>
            </div>
        </div>

<style type="text/css">
    .form-control {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    box-shadow: none;
    outline: none;
    font-weight: 300;
    background: black;
    border-color: #d0d7de;
}

</style>


        <div class="row" style="margin-bottom: 15px">
            <div class="m-l-10 m-r-10">
                <form class="form-inline m-b-10" role="form" method="post" action="">

                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Mã số</span>
                            <input type="text" class="form-control c-square" placeholder="Mã số" name="maso" style="height: 43px;">

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Giá tiền</span>
                                <select style="" class="form-control c-square" name="price">
                                <option value="">Không Chọn</option>
                                <option value="duoi-50k">Dưới 50K</option>
                                <option value="tu-50k-200k">Từ 50K - 200K</option>
                                <option value="tu-200k-500k">Từ 200K - 500K</option>
                                <option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
                                <option value="tren-1-trieu">Trên 1 Triệu</option>
                                <option value="tren-5-trieu">Trên 5 Triệu</option>
                                <option value="tren-10-trieu">Trên 10 Triệu</option>
                                </select>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Trạng thái</span>
                                <select name="rank" class="form-control c-square">
                                                                        <option value="">Không Chọn</option>
                                                                        <option value="1">Rank Đồng</option>
                                                                        <option value="2">Rank Bạc</option>
                                                                        <option value="3">Rank Vàng</option>
                                                                        <option value="4">Rank Bạch Kim</option>
                                                                        <option value="5">Rank Kim Cương</option>
                                                                        <option value="6">Rank Huyền Thoại</option>
                                                                        <option value="7">Rank Thách Đấu</option>
                                </select>

                        </div>
                    </div>


                    
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Nhân Vật</span>
<select name="nhanvat" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">Không Chọn</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
</select>
</div>
            </div>
                    
        
            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
<div class="input-group c-square">
<span class="input-group-addon">Pet</span>
<select name="pet" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">Không Chọn</option>
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
</select>
</div>
            </div>

<div class="col-md-3 col-sm-4 p-5 no-radius">
<button style="height: 42px;" type="submit" name="loc" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
</div>
                </form>
            </div>
        </div>

                    <div class="row row-flex  item-list">

<?php 
while ($row = mysqli_fetch_array($result)) { ?>


<div class="col-sm-6 col-md-3">
     <div class="classWithPad">
        <div class="image">
            <a target="_blank" href="/nickfreefire/nick-<?php echo $row['id'];?>.html">
              <img style="position: absolute;max-width: 50%;height: auto;top: -7px;right: -9px;z-index: 100;width:79px;height:75px" src="/images/sales.png">
               <!-- <a href="/nickfreefire/nick-<?php echo $row['id'];?>.html"> -->
                  <img src="<?php echo $kun->get_thumb_freefire($row['id']);?>">
                          <span class="ms">Acc: #<?php echo $row['id'];?></span>
                       </a>
                        </div>
                            <div class="description"></div>
                                <div class="attribute_info">
                                    <div class="row">
                                        <div class="col-xs-6 a_att">
                                        Đăng ký: <b>Facebook</b>
                                    </div>
                                   <div class="col-xs-6 a_att">
                                        Pet: <b>Có</b>
                                    </div>
                                   <div class="col-xs-6 a_att">Rank: <b></b>
                                    </div>
                        <div class="col-xs-6 a_att">
                            Ghi chú: <b><?php echo $row['noibat'];?></b>
                        </div>
                        </div>
                         </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="price_item">
                                              <span style="text-decoration: line-through;color: #666"><?php echo number_format($row['giatien']);?>đ</span></div>
                                        </div>
                                        <div class="col-xs-6 ">
                                            <div class="view">
                                            <a target="_blank" href="/nickfreefire/nick-<?php echo $row['id'];?>.html">Chi tiết</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


<?php } ?>

                            </div>
        
                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                    <?php
                    if ($tong > $kmess){
                    echo '<center>' . $kun->phantrang('/nickff/', $start, $tong, $kmess) . '</center>';
                    }
                    ?>
                        </div>


        
    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.load-modal').each(function (index, elem) {
                $(elem).unbind().click(function (e) {
                    e.preventDefault();
                    e.preventDefault();
                    var curModal = $('#LoadModal');
                    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                    curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
                });
            });
        });
    </script>


<!-- END: PAGE CONTENT -->
</div>