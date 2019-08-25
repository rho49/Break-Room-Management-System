<?php

include("Includes/Config.php");
    
    $Break=$_SESSION['breakname'];
    

    $sql="SELECT * FROM status WHERE breakname='$Break'";
    //echo $sql;
    $rsl=mysqli_query($con,$sql);
    if(mysqli_num_rows($rsl)>0)
    {  //echo "hey";
             while ($row = mysqli_fetch_array($rsl))
                                        { 
                                             //$id=$row["BR_Id"]; 
                                           
                                           $na=$row["breakname"]; 
                                           $ra=$row["Rationale"];
                                           $pid=$row["PId"];
                                           $ran=$row["Rankings"];
                                           $sma=$row["Smashes"];
                                           

                                          
                                        
                                
                                        }
            }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Break Status</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style type="text/css">
    body {
                background-image: url("/Project/BR4.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
</head>
<body>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container" >
    <center>
    <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="row" style="position: center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 16px; background-position: center;" > <center>
                        <div class="well profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="background-color: yellow" >
                                <figure>
                                     <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle" style="width:75px;" id="user-img">
                                </figure>
                                <h5 style="text-align:center;"><strong id="user-name">Break Name:  <?php echo $na; ?></strong></h5>
                                
                                <p style="text-align:center;font-size: smaller;overflow-wrap: break-word;" id="user-email"> </p>
                                <p style="text-align:center;font-size: smaller;"><strong></strong><span class="tags" id="user-status">Rationale: <?php echo $ra; ?></span></p>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <p style="text-align:center;font-size: smaller;"><strong>PID: <?php echo $pid; ?></strong></p>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                    <div class="col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                        <h4><p style="text-align: center;"><strong id="user-globe-rank"><?php  echo $ran; ?></strong></p></h4>           
                                        <p><small class="label label-success">Global Ranking</small></p>
                                        <!--<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>-->
                                    </div>
                                    <div class=" col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                        <h4><p style="text-align: center;"><strong id="user-college-rank"><?php echo $sma; ?> </strong></p></h4>                   
                                        <p> <small class="label label-warning">Smashes</small></p>
                                        <!-- <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>-->
                                    </div>
                              </div>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>  
            </center>  
        </div>
    </div>

</div>

</body>
</html>


