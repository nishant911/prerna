<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<a href="https://github.com/st3ph/jquery.easyPaginate"></a>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.snippet.min.js"></script>
		<script src="js/jquery.easyPaginate.js"></script>
		<script src="js/scripts.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="jquery.easyPaginate.js"></script>


<style type="text/css">
#easyPaginate {width:300px;}
#easyPaginate img {display:block;margin-bottom:10px;}
.easyPaginateNav a {padding:5px;}
.easyPaginateNav a.current {font-weight:bold;text-decoration:underline;}	

</style>
<?php
    include('dbconnection.php');
	$con = OpenCon();
    if(isset($_GET['search_word']))
    {
        $search_word=$_GET['search_word'];
		$search_word1=$_GET['search_word1'];
		//echo $search_word1;
		//echo "---------";
		//echo $search_word;
		//die();
        $search_word_new=mysqli_escape_string($con, $search_word);
		$search_word_new1=mysqli_escape_string($con, $search_word1);
		
        $search_word_fix=str_replace(" ","%",$search_word_new);
		$search_word_fix1=str_replace(" ","%",$search_word_new1);
		
        $sql=mysqli_query($con, "SELECT * FROM register WHERE register_as='Diagnostic/Pathlab' and state LIKE '%$search_word_fix%' and city LIKE '%$search_word_fix1%' ");
		
        $count=mysqli_num_rows($sql);
		mysqli_close($con);
        if($count > 0)
        {
            echo "<section id='demos'>";		
				echo "<div id='easyPaginate' style='width: 90%;'>";							
            while($row = mysqli_fetch_array($sql)){
													
										
                                       echo "<div class='item11'>";
                                       echo "<div class='img border'>";
                                            echo "<img src='images/labs.jpg' class='scale-with-grid' />";
                                           
                                       
                                        echo "<div class='content' style='width:250px; max-width:250px; height:250px; max-height:250px; display: inline-block;'>";
										
                                            echo "<h5  style='margin-bottom: -1px !important;' > $row[organization_name]</h5>";
											
											echo "<h4 style='color:#2581a8; font-size: 12px;font-weight: 400;text-align: inherit;text-transform: inherit;' class='text-muted' ><br><a ><i class='fa fa-location-arrow' aria-hidden='true'></i></a> &nbsp;
													 $row[address] </h4>";
											
											echo "<span style='color:#2581a8;'><a><i class='fa fa-clock-o' aria-hidden='true'></i></a>&nbsp;
														Hours of operation :  $row[working_hours] </span>";	
											echo "<br><br>";			
											echo "<span style='color:#2581a8;font-weight: 400;'><a><i class='fa fa-phone' aria-hidden='true'></i></a>&nbsp;
														Call Us :  $row[landline_number] </span><br/>";		
											echo "<br>";			
											echo "<span style='font-size:20px;font-weight:bold;color:#2581a8'><a href='#' style='text-decoration:none;'><i class='fa fa-map-marker' style='font-size:48px;color:#2581a8;' aria-hidden='true'></i>&nbsp;
														View Map</a></span><br/>";	
											echo "<br><br><br>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                       
                                        
                                       } 
                                          echo "</div>";
                                 
                                        echo "</section>";  
              }    
            else
            {
                echo "<li>No Results</li>";
            }
    }
?>