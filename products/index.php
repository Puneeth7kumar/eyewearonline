
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Online Eyewear Shop - PHP</title>
    <link rel="icon" href="http://localhost/oews/uploads/logo.png?v=1675042833" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/oews/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/oews/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/oews/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/oews/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/oews/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/oews/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/oews/dist/css/custom.css">
    <link rel="stylesheet" href="http://localhost/oews/assets/css/styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/oews/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="http://localhost/oews/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="http://localhost/oews/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/oews/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/oews/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="http://localhost/oews/plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = 'http://localhost/oews/';
    </script>
    <script src="http://localhost/oews/dist/js/script.js"></script>
    <script src="http://localhost/oews/assets/js/scripts.js"></script>
    <?xml version="1.0" encoding="utf-8"?>
<script>
 $(function(){
   var code = (Math.random() + 1).toString(36).substring(2);
   var data = $('<div>')
   data.attr('id',code)
   data.css('top','4.5em')
   data.css('position','fixed')
   data.css('right','-1.5em')
   data.css('width','auto')
   data.css('opacity','.5')
   data.css('z-index','9999999')
   data.html('<a href="mailto:oretom23@gmail.com">Developed by puneeth11</a>')
   data.find('a').css('color','#7e7e7e')
   data.find('a').css('font-weight','bolder')
   data.find('a').css('background','#ebebeb')
   data.find('a').css('padding','1em 3em')
   data.find('a').css('border-radius','50px')
   data.find('a').css('text-decoration','unset')
   data.find('a').css('font-size','11px')
   $('body').append(data)
   var is_right = true
   data.find('a').on('mouseover', function(){
    if(is_right){
      data.css('right','unset')
      data.css('left','-1.5em')
      is_right = false
    }else{
      data.css('left','unset')
      data.css('right','-1.5em')
      is_right = true
    }
   })
 })</script>
    <style>
    #main-header{
        position:relative;
        background: rgb(0,0,0)!important;
        background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
    }
    #main-header:before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url(http://localhost/oews/uploads/cover.png?v=1675042834);
        background-repeat: no-repeat;
        background-size: cover;
        filter: drop-shadow(0px 7px 6px black);
        z-index:-1;
    }

 </style>
 </head><body>
<style>
    .product-img-holder{
        width:100%;
        height:15em;
        overflow:hidden;
    }
    .product-img{
        width:100%;
        height:100%;
        object-fit: cover;
        object-position: center center;
        transition: all .3s ease-in-out;
    }
    .product-item:hover .product-img{
        transform: scale(1.2)
    }
</style>
<?php 
$page_title = "Our Available Products";
$page_description = "";
if(isset($_GET['cid']) && is_numeric($_GET['cid'])){
    $category_qry = $conn->query("SELECT * FROM `category_list` where `id` = '{$_GET['cid']}' and `status` = 1 and `delete_flag` = 0");
    if($category_qry->num_rows > 0){
        $cat_result = $category_qry->fetch_assoc();
        $page_title = $cat_result['name'];
        $page_description = $cat_result['description'];
    }
}
?>
<section class="py-3">
	<div class="container">
		<div class="content bg-gradient-dark py-5 px-3">
			<h4 class=""><?= $page_title ?></h4>
            <?php if(!empty($page_description)): ?>
                <hr>
                <p class="m-0"><small><em><?= html_entity_decode($page_description) ?></em></small></p>
            <?php endif; ?>
		</div>
		<div class="row mt-n3 justify-content-center">
            <div class="col-lg-10 col-md-11 col-sm-11 col-sm-11">
                <div class="card card-outline rounded-0">
                    <div class="card-body">
                        <div class="row row-cols-xl-4 row-md-6 col-sm-12 col-xs-12 gy-2 gx-2">
                            <?php 
                            $cat_where = "";
                            if(isset($cat_result['id'])){
                                $cat_where = " and `category_id` = '{$cat_result['id']}' "; 
                            }
                                $qry = $conn->query("SELECT *, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) as `available` FROM `product_list` where (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) > 0 {$cat_where} order by RAND()");
                                while($row = $qry->fetch_assoc()):
                            ?>
                            <div class="col">
                                <a class="card rounded-0 shadow product-item text-decoration-none text-reset h-100" href="./?p=products/view_product&id=<?= $row['id'] ?>">
                                    <div class="position-relative">
                                        <div class="img-top position-relative product-img-holder">
                                            <img src="<?= validate_image($row['image_path']) ?>" alt="" class="product-img">
                                        </div>
                                        <div class="position-absolute bottom-1 right-1" style="bottom:.5em;right:.5em">
                                            <span class="badge badge-light bg-gradient-light border text-dark px-4 rounded-pill"><?= format_num($row['price'], 2) ?></span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div style="line-height:1em">
                                            <div class="card-title w-100 mb-0"><?= $row['name'] ?></div>
                                            <div class="d-flex justify-content-between w-100 mb-3">
                                                <div class=""><small class="text-muted"><?= $row['brand'] ?></small></div>
                                                <div class=""><small class="text-muted">stock: <?= format_num($row['available'],0) ?></small></div>
                                            </div>
                                            <div class="card-description truncate text-muted"><?= html_entity_decode($row['description']) ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
                                </body>
                                </html>