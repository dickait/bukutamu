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
    <link rel="icon" href="<?php echo e(asset('assets/bootstrap/laravel-1.png')); ?>">

    <title>Larajax</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('assets/datatables/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo e(asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/bootstrap/css/navbar-fixed-top.css')); ?>" rel="stylesheet">

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
          <a class="navbar-brand" href="#">Laravel Ajax</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
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
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> Contact List
                            <a onClick="addForm()" class="btn btn-primary pull-right" style="margin-top:-8px;">Add Contact</a>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped" id="contact-table">
                            <thead>
                                <tr>
                                    <th width="30">No</th>
                                    <th>Name</th>
                                    <th>Email</th>
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
    
    <script type="text/javascript">
        $('#contact-table').DataTable({
            
            serverSide: true,
            ajax: "<?php echo e(route('api.contact')); ?>",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
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
                },
                error: function(){
                    alert("Nothing data");
                }
            });
        }

        function deleteData(id){
            var popup = confirm("Are you sure for delete this data?");
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            if (popup == true){
                $.ajax({
                    url: "<?php echo e(url('contact')); ?>" + '/' + id,
                    type: "POST",
                    data: {'_method' : 'DELETE', '_token' : csrf_token },
                    success: function(){
                        $('#contact-table').DataTable().ajax.reload();
                        console.log(data);
                    },
                    error: function(){
                        alert('Something error!');
                    }
                });
            }

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
                        data: $("#modal-form form").serialize(),
                        success: function($data) {
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
    </script>
  </body>
</html>
