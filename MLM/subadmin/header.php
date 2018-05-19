
<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$query = "select * from register where member_id='$_SESSION[member_id]'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
  mysqli_close($con);
	?>
      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>PHCS</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">5</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">PHCS</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> My Direct 
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> My Downline
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> Direct Buisness
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> Downline Buisness
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> My Wallet
                        </a>
                      </li>
					  
                    </ul>
					
                  </li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <?php
                         $image = $row['profile_pic'];
                         if (empty($image)) { 
                         ?>
                  <img src="logoMINI.png" class="user-image" >   
                  <?php  }
                    else{  
                  ?>
                  <img src="../pic/<?php echo $row['profile_pic']; ?>" class="user-image" alt="User Image"/>
                  <?php } ?>
                  
                  <span class="hidden-xs"> <?php echo $row['member_id']; ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?php
                         $image = $row['profile_pic'];
                         if (empty($image)) { 
                         ?>
                  <img src="logoMINI.png" class="img-circle" >   
                  <?php  }
                    else{  
                  ?>
                  <img src="../pic/<?php echo $row['profile_pic']; ?>" class="img-circle" alt="User Image"/>
                  <?php } ?>
                    <p>
                     <?php echo $row['member_name']; ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             <?php
                         $image = $row['profile_pic'];
                         if (empty($image)) { 
                         ?>
                  <img src="logoMINI.png" class="img-circle" >   
                  <?php  }
                    else{  
                  ?>
                  <img src="../pic/<?php echo $row['profile_pic']; ?>" class="img-circle" alt="User Image"/>
                  <?php } ?>
            </div>
            <div class="pull-left info">
               <p><?php echo $row['member_id']; ?> </p>
              <p><?php echo $row['member_name']; ?></p>
			 

  
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
			 <li class="treeview">
              <a href="index.php">
                <i class="fa fa-pie-chart"></i>
                <span>Dashboard</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i>
                <span>Details</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="edit_profile.php"><i class="fa fa-circle-o"></i> Edit Profile</a></li>
                <li><a href="bank_details.php"><i class="fa fa-circle-o"></i> Bank Details</a></li>
                <li><a href="kyc_update.php"><i class="fa fa-circle-o"></i> KYC Document</a></li>
				<li><a href="edit_pass.php"><i class="fa fa-circle-o"></i> Edit Password</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text-o"></i>
                <span>Associates</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="my_direct.php"><i class="fa fa-circle-o"></i> My Direct</a></li>
                <li><a href="my_team.php"><i class="fa fa-circle-o"></i> My Team</a></li>
                <li><a href="my_level.php"><i class="fa fa-circle-o"></i> My Level</a></li>
                <li><a href="genelogy.php?sess_sponsor_id=<?php echo $_SESSION['member_id']; ?>" ><i class="fa fa-circle-o"></i> Genelogy</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-rub"></i> <span>Epin Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="epin.php"><i class="fa fa-circle-o"></i>Epin</a></li>
              <!--  <li><a href="epin_create.php"><i class="fa fa-circle-o"></i> Create Epin</a></li> -->
                <li><a href="epin_transfer.php"><i class="fa fa-circle-o"></i> Epin Transfer</a></li>
               <li><a href="epin_transfer_history.php"><i class="fa fa-circle-o"></i> Epin Transfer History</a></li>
				      <li><a href="epin_received_history.php"><i class="fa fa-circle-o"></i> Epin Recieved History</a></li>
				        
              </ul>
            </li>
           <!-- <li class="treeview">
               <a href="#">
                <i class="fa fa-level-up"></i> <span>Upgrade Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="upgrade.php"><i class="fa fa-circle-o"></i> Upgrade</a></li>
                <li><a href="reports.php"><i class="fa fa-circle-o"></i>  Reports</a></li>
              </ul>
            </li> -->
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-rupee"></i> <span>Income Report</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="level_income.php"><i class="fa fa-circle-o"></i> Level Income(Reciever)</a></li>
                <li><a href="level_income1.php"><i class="fa fa-circle-o"></i> Level Income(Sender)</a></li>
               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-rupee"></i> <span>Income Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="withdraw_balance.php"><i class="fa fa-circle-o"></i> Withdraw Balance</a></li>
                <li><a href="withdraw_report.php"><i class="fa fa-circle-o"></i> Withdraw Report</a></li>
                <li><a href="account_history.php"><i class="fa fa-circle-o"></i> Account History</a></li>
             <!--   <li><a href="fund_transfer_report.php"><i class="fa fa-circle-o"></i> Fund Transfer Report</a></li> -->
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i> <span>Product Status</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="product_list.php"><i class="fa fa-circle-o"></i> Product List</a></li>
                <li><a href="product.php"><i class="fa fa-circle-o"></i> Product </a></li>
                <li><a href="product_report.php"><i class="fa fa-circle-o"></i> Product Report</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span> Query</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="send_query.php"><i class="fa fa-circle-o"></i> Send Message</a></li>
                <li><a href="query_tracking.php"><i class="fa fa-circle-o"></i> Query Tracking</a></li>
                
              </ul>
            </li>
			<li class="treeview">
              <a href="../logout.php">
                <i class="fa fa-hand-o-up"></i> <span>Logout</span>
              </a>
            </li>
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      
 