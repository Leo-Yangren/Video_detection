<?php
$dir = "upload/";
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            if ($file != "." && $file != ".." && $file != ".DS_Store") {  
                $transactionlist[] = $file ; 
            }  
        } 
    }
    closedir($dh);
}
?>
<!DOCTYPE html>
<html lang="en">
<script>
var ttt = 1;
</script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Detection</title>

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
                <a class="navbar-brand" href="staff.index.php">Video Detection</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
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
                            <a href="#"><i class="fa fa-table fa-fw"></i> Dissertation <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="staff.single.php" class = "active"> Demo </a>
                                </li>
                                <li>
                                    <a href="staff.bulk.php"> Software Details </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Video Clip</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Add video clip >>> Choose your file to upload</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class = "panel-body">

                            <form method="post" action="staff.singleAdd.php" enctype="multipart/form-data">
                                <div class="list-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input  type="file" id="file" name = "file" >
                                    <p class="help-block">Please upload your video clip file here.</p>
                                </div>

                                <button type="submit" name ="submit" class="btn btn-success">Add</button>
                            </form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Match result presentment</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <p id='txtHint'>
                        <div class = "panel-body">
                            <lable class="pre-scrollable">
                                        Matching Result
                            </lable>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <td colspan=3><button onclick="checkResult()" class='btn btn-info btn-xs'>Get Result</button></td>
                                <thead>

                                </thead>
                                <tbody>
                                    <th>
                                         <b>Status:</b>
                                         <span id="A1"></span>
                                    </th>
                                    <th>
                                         <b>Movie Name:</b>
                                         <span id="A2"></span>
                                    </th>
                                    <th>
                                         <b>Index:</b>
                                         <span id="A3"></span>
                                    </th>
                                </tbody>

                            </table>
                            <img src="" alt="Smiley face" id="A4">
                        </div> 
                        <div class = "panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th class="text-center">Action</th>
                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if (empty($transactionlist)){
                                            echo "echeque list is empty.";
                                        }
                                        else {
                                            foreach ($transactionlist as $value) {
                                    
                                                # code...
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $value?></td>
                                        <td class="text-center">
                                            <!-- edit and delete members -->
                                            <a href="staff.match.php?id=<?php echo $value?>"  class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span> Matching</a> 
                                            <a href="staff.del.php?id=<?php echo $value?>"   class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove"></span> Del</a>
                                        </td>
                                    </tr>
                                    <?php 
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <a href="staff.clear.handle.php?id=<?php echo $value?>" class="btn btn-default btn-lg"> Remove all</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
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
    <script type="text/javascript"> 
        function checkResult()
        {

            document.getElementById("A1").innerHTML="Wait...";
            var xmlhttp = null;
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else {
            // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    var a = JSON.parse(xmlhttp.responseText);
                    document.getElementById("A1").innerHTML=a["status"];
                    document.getElementById("A2").innerHTML=a["movie name"];
                    document.getElementById("A3").innerHTML=a["at"];
                    document.getElementById("A4").src = a["image"];
                }
            }
            xmlhttp.open("GET","checkResult.php?t="+ Math.random(),true);
            xmlhttp.send();
        }
    </script>



</body>

</html>