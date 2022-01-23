<!DOCTYPE html>
<html lang="en">

<head>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BrokersBazaar - My Account | Vendor</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>admin_styles/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>admin_styles/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index">
               
                <div class="sidebar-brand-text mx-3">
                  <img src="https://projects.letsgolive.in/brokersbazaar/img/logo.png"></img>
                   
                    </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>Dashboard/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="userProfile" 
                    <span>Profile</span>
                </a>
            </li>
             
            
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/myLeads?user=<?php echo $vendor['email']; ?>" 
                    <span>My Leads</span>
                </a>
            </li>
            
           
            
            
           
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/payment_history" 
                    <span>Payment History</span>
                </a>
            </li>
            
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/notification" 
                    <span>Notification</span>
                </a>
            </li>
            
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/FAQ" 
                    <span>FAQ</span>
                </a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/LeadsInsight" 
                    <span>Leads Insight</span>
                </a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>Dashboard/post_enquiry" 
                    <span>Post Enquiry to Admin</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->
        
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>logout" >Logout</a>
                        </li>
                       
</ul>
                </nav>
        