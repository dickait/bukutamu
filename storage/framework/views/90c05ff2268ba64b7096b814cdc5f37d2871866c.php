<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/profile/images/favicon.ico')); ?>" type="image/x-icon">
    

    <title>Buku Tamu</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('assets/datatables/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo e(asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/bootstrap/css/navbar-fixed-top.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo e(asset('assets/bootstrap/js/ie-emulation-modes-warning.js')); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Buku Tamu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="<?php echo e(url('/profile')); ?>">My Profile</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h4> Buku Tamu
                            <span onClick="addForm()" class="btn btn-primary pull-right" style="margin-top:-8px;">Tambah Buku Tamu</span>
                            <span onClick="eximForm()" class="btn btn-default pull-right" style="margin-top:-8px;">Import/Export</span>  
                        </h4>
                    </div>
                    <div class="panel-body ">
                        <table class="table table-striped col-xs-12" id="contact-table">
                            <thead>
                                <tr>
                                    <th width="30">No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <!-- <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Kecamatan</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div> <!-- /container -->

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('assets/jquery/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/dataTables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dataTables/js/dataTables.bootstrap.min.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/validator/validator.min.js')); ?>"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo e(asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js')); ?>"></script>

    
    <script src="<?php echo e(asset('assets/sweetalert/sweetalert2.min.js')); ?>"></script>
    
    <script type="text/javascript">
        $('#contact-table').DataTable({
            
            serverSide: true,
            ajax: "<?php echo e(route('api.contact')); ?>",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'show_photo', name: 'show_photo'},
                // {data: 'provinsi', name: 'provinsi'},
                // {data: 'kota', name: 'kota'},
                // {data: 'kecamatan', name: 'kecamatan'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Contact');
        }

        function editForm(id){
            save_method = 'edit';
            $('input[name=_method').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "<?php echo e(url('contact')); ?>" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Contact');

                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    // $('#provinsi').val(data.provinsi);
                    // $('#kota').val(data.kota);
                    // $('#kecamatan').val(data.kecamatan);
                },
                error: function(){
                    alert("Nothing data");
                }
            });
        }

        function showForm(id){
            save_method = 'show';
            $('input[name=_method').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "<?php echo e(url('contact')); ?>" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Contact');

                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    // $('#provinsi').val(data.provinsi);
                    // $('#kota').val(data.kota);
                    // $('#kecamatan').val(data.kecamatan);
                },
                error: function(){
                    alert("Nothing data");
                }
            });
        }

        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajax({
                    url: "<?php echo e(url('contact')); ?>" + '/' + id,
                    type: "POST",
                    data: {'_method' : 'DELETE', '_token' : csrf_token },
                    success: function(){
                        $('#contact-table').DataTable().ajax.reload();
                        swal({
                            title: 'Success!',
                            text: 'Data has been deleted',
                            type: 'success',
                            timer: '2000'
                        })
                    },
                    error: function(){
                        swal({
                            title: 'Error!',
                            text: 'Something error!',
                            type: 'error',
                            timer: '2000'
                        })
                    }
                });
            });
        }

        $(function() {
            $('#modal-form form').validator().on('submit', function (e){
                if(!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "<?php echo e(url('contact')); ?>";
                    else url = "<?php echo e(url('contact') . '/'); ?>" + id;

                    $.ajax({
                        url: url,
                        type: "POST",
                        // data: $("#modal-form form").serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            $("#modal-form").modal('hide');
                            $('#contact-table').DataTable().ajax.reload();
                            
                        },
                        error: function(){
                            alert('Something Error!');
                            
                        }
                    });
                    return false;
                }
            });
        });

        function eximForm(){
            $('#modal-exim').modal('show');
            $('#modal-exim form')[0].reset();
        }

        // $('#provinsi').on('change', function(e){
        //     console.log(e);

        //     var prov_id = e.target.value;

        //     $.get('/ajax-kota?prov_id=' + prov_id, function(data){
        //         console.log(data);

        //         $('#kota').empty();
        //         $.each(data, function(index, kotaObj){
        //             $('#kota').append('<option value="'+kotaObj.id+'">'+kotaObj.name+'</option>');
        //         });
        //     });

        // });
    </script>
  </body>
</html>
