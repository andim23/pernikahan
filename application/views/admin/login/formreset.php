<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KUA Tanjungkarang - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>back/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?=base_url()?>front/img/lambang.png" />

</head>

<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?=base_url()?>front/img/lambang.png"  alt="" class="logo" />
                    <h1 class="h4 text-gray-900 mb-4">Lupa Password</h1>
                  </div>
                  <form class="user" action="<?=base_url()?>login/reset" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Username" id="exampleInputEmail" aria-describedby="emailHelp" name="namauser">
                    </div>                    
                    <!-- <a href="index.html" class="btn btn-success btn-user btn-block">
                      Login
                    </a> -->
                    <button class="btn btn-success btn-user btn-block" type="submit">Reset</button>
                    
                  </form>

                  <center>
                    <a href="<?=base_url()?>login">Login</a>
                  </center>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>back/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>back/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>back/js/sb-admin-2.min.js"></script>

</body>

</html>
