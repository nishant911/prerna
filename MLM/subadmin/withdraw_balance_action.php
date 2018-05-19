<?php

	include('dbconnection.php');
	$con = OpenCon();

	$balance = $_POST['balance'];
	$withdraw_balance = $_POST['withdraw_balance'];
	$member_id = $_POST['member_id'];
	$created_date = date('Y-m-d H:i:s');
	

		$query = "SELECT SUM(credit) as value_sum FROM wallet where sponsor_id='$member_id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $sum = $row['value_sum'];

        $quer = "select * from register where member_id='$member_id'";
        $resultr = mysqli_query($con, $quer);
        $rowr = mysqli_fetch_array($resultr);
        $mn = $rowr['member_name'];
        $mi = $rowr['member_id'];

                  
      if($withdraw_balance <= $balance){
					 $amountt = $balance - $withdraw_balance;
            
					 $admin_charge = $withdraw_balance * 0.15;
					 $net_amount = $withdraw_balance - $admin_charge;

						 $withdraw_date = date('Y-m-d H:i:s');

						 $query_withdraw_report = "insert into withdraw_report (member_id, member_name, total_amount, withdraw_amount, admin_charge, net_amount,  withdraw_date, status) values ('$mi', '$mn', '$balance', '$withdraw_balance', '$admin_charge', '$net_amount', '$withdraw_date', 'Pending')";
						 $result_withdraw_report = mysqli_query($con, $query_withdraw_report);



						 $query_wallet = "insert into wallet (sponsor_id, sponsor_name, credit, debit, remark, created) values ('$member_id', '$mn', '0', '$withdraw_balance', 'Withdraw',  '$created_date')";
						 $result_wallet = mysqli_query($con, $query_wallet);

						 if (!$result_wallet) {
							  printf("Error: %s\n", mysqli_error($con));
							  exit();
							  }
									   
                     echo '<script> window.location="withdraw_balance.php"; </script> ';
                      
      }
                  else
                  {
                        $Message = "Withdraw Balance Is Greater Than Wallet Balance";
                        //header("location:withdraw_balance.php?Message={$Message}");
					              echo '<script> window.location="withdraw_balance.php?Message={$Message}"; </script> ';
                 
                }
                  
mysqli_close($con);

?>	