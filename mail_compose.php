
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Dashboard</title>
        <!-- style css php -->
        <?php include_once 'css_style/style.php';?>
        <link href="css/profile_style.css" rel="stylesheet">
		<!-- end style css php -->
	<body>
		<div id="wrapper">
            <!-- nav -->
            <?php include_once 'sidebar/nav_dashboard.php';?>
			<!-- end nav -->
			<div id="page-wrapper" class="gray-bg dashbard-1">
                <!-- navbar -->
                <?php include_once 'sidebar/navbar.php';?>
                <!-- end navbar -->
				<div class="wrapper wrapper-content">
                    <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>Mailbox</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="welcome.php">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a>Extra Pages</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <strong>mailbox</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ibox ">
                                    <div class="ibox-content mailbox-content">
                                        <div class="file-manager">
                                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.php">Compose Mail</a>
                                            <div class="space-25"></div>
                                            <h5>Folders</h5>
                                            <ul class="folder-list m-b-md" style="padding: 0">
                                                <li><a href="mailbox.php"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning float-right">16</span> </a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-certificate"></i> Important</a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger float-right">2</span></a></li>
                                                <li><a href="mailbox.php"> <i class="fa fa-trash-o"></i> Trash</a></li>
                                            </ul>
                                            <h5>Categories</h5>
                                            <ul class="category-list" style="padding: 0">
                                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                                            </ul>

                                            <h5 class="tag-title">Labels</h5>
                                            <ul class="tag-list" style="padding: 0">
                                                <li><a href=""><i class="fa fa-tag"></i> Family</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Work</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Home</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Children</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Holidays</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                                                <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 animated fadeInRight">
                                <div class="mail-box-header">
                                    <div class="float-right tooltip-demo">
                                        <a href="mailbox.php" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                                        <a href="mailbox.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                                    </div>
                                    <h2>
                                        Compse mail
                                    </h2>
                                </div>
                                <div class="mail-box">
                                    <div class="mail-body">
                                        <form method="get">
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>

                                                <div class="col-sm-10"><input type="text" class="form-control" value="alex.smith@corporat.com"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>

                                                <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mail-text h-200">
                                        <div class="summernote">
                                            <div class="container">
                                                <h3>Hello Jonathan! </h3>
                                                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                <br/>
                                                <br/>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        </div>
                                        <div class="mail-body text-right tooltip-demo">
                                            <a href="mailbox.php" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>
                                            <a href="mailbox.php" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                                            <a href="mailbox.php" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                                        </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                <!-- foodter -->
                <?php include_once 'foodter/foodter.php';?>
				<!-- end foodter -->
			</div>
            <!-- chart -->
            <?php include_once 'chart/chart.php'; ?>
            <!-- end chart -->
		</div>
        <!-- <script> js php import</script> -->
        <?php include_once 'script/js.php';?>
        <!-- <script>Library</script> -->
		<!-- <script> import</script> -->
	</body>
</html>