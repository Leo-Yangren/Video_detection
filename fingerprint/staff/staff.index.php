<?php
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Testing Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Datepicker -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="staff.index.php">Testing Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $username?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../login.php?status=loggedout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="staff.index.php" class = "active"><i class="fa fa-fw fa-edit"></i> Issuance</a>
                        </li>
                        
                        <li>
                            <a href="staff.single.php"><i class="fa fa-table fa-fw"></i> e-Cheque Presentment <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="staff.single.php"> Single Presentment </a>
                                </li>
                                <li>
                                    <a href="staff.bulk.php"> Bulk Presentment </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="staff.enquiry.php"><i class="fa fa-bar-chart-o fa-fw"></i> Presentment Enquiry</a>
                        </li>
                        <li>
                            <a href="staff.bank.php"><i class="fa fa-dashboard fa-fw"></i> Bank Account</a>
                        </li>
                        <li>
                            <a href="staff.api.php"><i class="fa fa-wrench fa-fw"></i> API Documentation</a>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            e-Cheque Issuance
                            <!-- <small>Subheading</small>  -->
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <form method = "post" action = "staff.create.handle.php" >
                    <input type = "hidden" name = "username" value = "<?php echo $username ?>" /> 
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Step One >>> e-Cheque issue from</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <select class="form-control" name="account">
                                      <option>HSBC Account</option>
                                      <option>Bank of China</option>
                                      <option>Asia Bank</option>
                                    </select>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>

                <!-- /.row -->

                <div class ="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Step Two >>> e-Cheque details</h3>
                        </div>
                        <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputPassword3">Date: </label>
                                    <input type="text" id="startdatepicker" name="date" placeholder="yyyy-mm-dd" value = "<?php echo $date?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Payee name</label>
                                    <input type="text" class="form-control" name="payeename" placeholder="account name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">e-Cheque amount</label>
                                    <input type="number" step="0.01" class="form-control" name="amount" placeholder="HK$">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Remark</label>
                                    <input type="text" class="form-control" name="remark" placeholder="write your comments">
                                </div>
                               
                                <div class="checkbox">
                                    <label class="radio-inline">
                                      <input type="radio" name="lanOptions" id="inlineRadio1" value="en"> English
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="lanOptions" id="inlineRadio2" value="cn"> 中文
                                    </label>
                                </div>
                        </div>                       
                    </div>
                </div> 
                <div class ="col-lg-12">
                    <button type="submit" class='btn btn-primary'> Next Step </button>
                    <br/>
                    <br/>
                </div>              
             </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    
     <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() { console.log('ready!'); } {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <!-- datepicker -->
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#startdatepicker" ).datepicker({dateFormat: "yy-mm-dd"});
    $( "#enddatepicker" ).datepicker({dateFormat: "yy-mm-dd"});
    } );
    </script>



</body>

</html>