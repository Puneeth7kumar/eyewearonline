
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

<style>
    .carousel-item>img{
        object-fit:cover !important;
    }
    #carouselExampleControls .carousel-inner{
        height:35em !important;
    }
</style>
<div class="container">
    <div class="content">
        <div id="carouselExampleControls" class="carousel slide bg-dark" data-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $upload_path = "uploads/banner";
                    if(is_dir(base_app.$upload_path)): 
                    $file= scandir(base_app.$upload_path);
                    $_i = 0;
                        foreach($file as $img):
                            if(in_array($img,array('.','..')))
                                continue;
                    $_i++;
                        
                ?>
                <div class="carousel-item h-100 <?php echo $_i == 1 ? "active" : '' ?>">
                    <img src="<?php echo validate_image($upload_path.'/'.$img) ?>" class="d-block w-100  h-100" alt="<?php echo $img ?>">
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <h3 class="text-center"><b>Contact Us</b></h3>
                    <center><hr style="height:2px;width:5em;opacity:1" class="bg-dark"></center>
                    <dl>
                        <dt class="text-muted">Email</dt>
                        <dd class="pl-3"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted">Telephone #</dt>
                        <dd class="pl-3"><?= $_settings->info('phone') ?></dd>
                        <dt class="text-muted">Mobile #</dt>
                        <dd class="pl-3"><?= $_settings->info('mobile') ?></dd>
                        <dt class="text-muted">Address</dt>
                        <dd class="pl-3"><?= $_settings->info('address') ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
    })
</script>
