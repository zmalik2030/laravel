<?php
	
	//$a->authenticate();
	
	$page_title="Dashboard";
	$tab="dashboard";
?>

<!DOCTYPE html>
<html>
	<head>
	@include('admin.includes.common-header')
		
        <style type="text/css">
			.section-content {padding: 15px;margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;}
			.section-content .small-box a.dashboard-link {color:#FFF !important;display: block;padding: 26px 0px;text-align:center;}
		</style>
	</head>
  	<body class="skin-blue sidebar-mini">
		<div class="wrapper">
				 @include("admin.includes.header")
        		<div class="content-wrapper">
        			<section class="content-header">
                        <h1>
                        	<?php echo ucfirst($tab);?>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active"><?php echo $page_title;?></li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="section-content">
        				<div class="row">
        					<div class="col-lg-3 col-xs-6">
        						<div class="small-box bg-aqua">
        							<a class="dashboard-link" href="<?php ?>mosque.php">
                                        <div class="inner">
                                            <h4>Manage Masajid</h4>
                                        </div>
                                    </a>
        							<a href="<?php ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        						</div>
        					</div>
                            <div class="col-lg-3 col-xs-6">
        						<div class="small-box bg-red">
        							<a class="dashboard-link" href="<?php?>change-password.php">
                                        <div class="inner">
                                            <h4>Change Password</h4>
                                        </div>
                                    </a>
        							<a href="<?php ?>change-password.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        						</div>
        					</div>
                        </div>
        			</section>
        		</div><!-- /.content-wrapper -->
      
      			 @include("admin.includes.footer")
      			<div class='control-sidebar-bg'></div>
    	</div><!-- ./wrapper -->
		 @include("admin.includes.footer_jsfiles")
  </body>
</html>