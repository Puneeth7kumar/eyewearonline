
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
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
   data.html('<a href="mailto:puneethpandith@gmail.com">Developed by puneeth11</a>')
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

  </head> <script>
    start_loader()
  </script>
  <style>
    html, body{
        width:100%;
        height:100% !important;
    }
    body{
      background-image: url("http://localhost/oews/uploads/cover.png?v=1675042834");
      background-size:cover;
      background-repeat:no-repeat;
      backdrop-filter: contrast(1);
      overflow-x:hidden
    }
    #page-title{
      text-shadow: 6px 4px 7px black;
      font-size: 3.5em;
      color: #fff4f4 !important;
      background: #8080801c;
    }
    img#cimg{
      height: 5em;
      width: 5em;
      object-fit: cover;
      border-radius: 100% 100%;
    }
    
  </style>
<body class="">
  <div class="d-flex flex-column align-items-center justify-content-center h-100 w-100">
    <div class="flex-shrink-1 h-25">
      <h1 class="text-center text-white px-4 py-5 h-25" id="page-title"><b>Online Eyewear Shop - PHP</b></h1>
    </div>
    <div class="flex-shrink-1 flex-grow-1 h-75">
      <div class="col-lg-8 col-md10 col-sm-12 col-xs-12 mx-auto">
        <!-- /.login-logo -->
        <div class="card card-navy my-2 rounded-0">
          <div class="card-header rounded-0">
              <h4 class="card-title">Registration</h4>
          </div>
          <div class="card-body rounded-0">
            <form id="register-form" action="" method="post">
                <input type="hidden" name="id">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label for="firstname" class="control-label">First Name</label>
                          <input type="text" class="form-control form-control-sm rounded-0" required="" name="firstname" id="firstname">
                      </div>
                      <div class="form-group">
                          <label for="middlename" class="control-label">Middle Name</label>
                          <input type="text" class="form-control form-control-sm rounded-0" name="middlename" id="middlename">
                      </div>
                      <div class="form-group">
                          <label for="lastname" class="control-label">Last Name</label>
                          <input type="text" class="form-control form-control-sm rounded-0" required="" name="lastname" id="lastname">
                      </div>
                      <div class="form-group">
                          <label for="gender" class="control-label">Gender</label>
                          <select class="custom-select custom-select-sm rounded-0" required="" name="gender" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label for="email" class="control-label">Email</label>
                          <input type="text" class="form-control form-control-sm rounded-0" required="" name="email" id="email">
                      </div>
                      <div class="form-group">
                          <label for="contact" class="control-label">Contact</label>
                          <input type="text" class="form-control form-control-sm rounded-0" required="" name="contact" id="contact">
                      </div>
                      <div class="form-group">
                          <label for="password" class="control-label">Password</label>
                          <div class="input-group input-group-sm">
                              <input type="password" class="form-control form-control-sm rounded-0" required="" name="password" id="password">
                              <button tabindex="-1" class="btn btn-outline-secondary btn-sm rounded-0 pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="cpassword" class="control-label">Confirm Password</label>
                          <div class="input-group input-group-sm">
                              <input type="password" class="form-control form-control-sm rounded-0" required="" id="cpassword">
                              <button tabindex="-1" class="btn btn-outline-secondary btn-sm rounded-0 pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                      <label for="" class="control-label">Avatar</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input rounded-0" id="customFile" name="img" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg">
                        <label class="custom-file-label rounded-0" for="customFile">Choose file</label>
                      </div>
              </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group d-flex justify-content-center">
                <img src="http://localhost/oews/uploads/logo.png?v=1675042833" alt="" id="cimg" class="img-fluid img-thumbnail">
              </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <a href="./login.php">Already hava an Account</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                
                  <button type="submit" class="btn btn-primary btn-block" >Create Account</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <!-- /.social-auth-links -->

            <!-- <p class="mb-1">
              <a href="forgot-password.html">I forgot my password</a>
            </p> -->
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  <!-- /.login-box -->
  </div>
  <!-- jQuery -->
  <script src="http://localhost/oews/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="http://localhost/oews/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="http://localhost/oews/dist/js/adminlte.min.js"></script>

<script>
function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }else{
        $('#cimg').attr('src', "http://localhost/oews/uploads/logo.png?v=1675042833");
    }
}
  $(document).ready(function(){
    end_loader();
    $('.pass_view').click(function(){
        var input = $(this).siblings('input')
        var type = input.attr('type')
        if(type == 'password'){
            $(this).html('<i class="fa fa-eye"></i>')
            input.attr('type','text').focus()
        }else{
            $(this).html('<i class="fa fa-eye-slash"></i>')
            input.attr('type','password').focus()
        }
    })
    $('#register-form').submit(function(e){
        e.preventDefault()
        var _this = $(this)
        var el = $('<div>')
            el.addClass('alert alert-dark err_msg')
            el.hide()
        $('.err_msg').remove()
        if($('#password').val() != $('#cpassword').val()){
            el.text('Password does not match')
            _this.prepend(el)
            el.show('slow')
            $('html, body').scrollTop(0)
            return false;
        }
        if(_this[0].checkValidity() == false){
            _this[0].reportValidity();
            return false;
        }
        start_loader()
        $.ajax({
            url:_base_url_+"classes/Users.php?f=registration",
            method:'POST',
            type:'POST',
            data:new FormData($(this)[0]),
            dataType:'json',
            cache:false,
            processData:false,
            contentType: false,
            error:err=>{
                console.log(err)
                alert('An error occurred')
                end_loader()
            },
            success:function(resp){
                if(resp.status == 'success'){
                  location.href = ('./')
                }else if(!!resp.msg){
                    el.html(resp.msg)
                    el.show('slow')
                    _this.prepend(el)
                    $('html, body').scrollTop(0)
                }else{
                    alert('An error occurred')
                    console.log(resp)
                }
                end_loader()
            }
        })
    })
  })
</script>
</body>
</html>