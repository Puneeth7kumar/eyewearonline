
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
<?php
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT p.*, c.name as `category`, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = p.id), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = p.id), 0)) as `available`  from `product_list` p inner join `category_list` c on p.category_id = c.id where p.id = '{$_GET['id']}' and p.delete_flag = 0 ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }else{
		echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
	}
}else{
	echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>
<style>
	#product-img{
		max-width:100%;
		max-height:35em;
		object-fit:scale-down;
		object-position:center center;
	}
</style>
<section class="py-3">
	<div class="container">
		<div class="content py-5 px-3 bg-gradient-dark">
			<h2><b>Product Details</b></h2>
		</div>
		<div class="row mt-lg-n4 mt-md-n4 justify-content-center">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="card rounded-0">
					<div class="card-body">
						<div class="container-fluid">
							<center>
								<img src="<?= validate_image(isset($image_path) ? $image_path : '') ?>" alt="<?= isset($name) ? $name : '' ?>" class="img-thumbnail p-0 border" id="product-img">
							</center>
							<dl>
								<dt class="text-muted">Brand</dt>
								<dd class="pl-4"><?= isset($brand) ? $brand : "" ?></dd>
								<dt class="text-muted">Name</dt>
								<dd class="pl-4"><?= isset($name) ? $name : "" ?></dd>
								<dt class="text-muted">Category</dt>
								<dd class="pl-4"><?= isset($category) ? $category : "" ?></dd>
								<dt class="text-muted">Description</dt>
								<dd class="pl-4"><?= isset($description) ? str_replace(["\n\r", "\n", "\r"],"<br>", $description) : '' ?></dd>
								<dt class="text-muted">Price</dt>
								<dd class="pl-4"><?= isset($price) ? format_num($price,2) : "" ?></dd>
								<dt class="text-muted">Available Stock</dt>
								<dd class="pl-4"><?= isset($available) ? format_num($available,0) : "" ?></dd>
							</dl>
						</div>
					</div>
					<div class="card-footer py-1 text-center">
						<?php if($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2): ?>
							<button class="btn btn-dark btn-sm bg-gradient-dark text-light rounded-0" type="button" id="add_to_cart"><i class="fa fa-cart-plus"></i> Add to Cart</button>
						<?php else: ?>
							<a class="btn btn-dark btn-sm bg-gradient-dark text-light rounded-0" href="./login.php" ><i class="fa fa-cart-plus"></i> Add to Cart</a>
						<?php endif; ?>
						<a class="btn btn-light btn-sm bg-gradient-light border rounded-0" href="./?p=products"><i class="fa fa-angle-left"></i> Back to List</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
    $(function(){
		$('#add_to_cart').click(function(){
			_conf("Are you sure to add this product to your cart?", "add_cart",[])
		})
    })
	function add_cart(){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=add_to_card",
			method:"POST",
			data:{product_id: "<?= isset($id) ? $id :'' ?>"},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else if(!!resp.msg){
					alert_toast(resp.msg,'error');
				}else{
					alert_toast("An error occured.",'error');
				}
				end_loader();
			}
		})
	}
</script>