<?php
if(! isset($_GET['data'])){
    $message='you should add data so upload zip file';

    header('location:http://localhost/isnsc/?message='.$message);
}
include_once('class/ZipFile.php');
include_once('class/xmlFile.php');

include_once('inc/head.php');
include_once('inc/repoNav.php');

?>

  <?php 
    //for echo warning message
    if(isset($_GET['message']))
        {
            echo '<div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert"><small>'.
            $_GET['message']
            . '</small><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>'. "\n";   
        }
    ?>
 <!---------------------------==========content============================-------------->
                    
    <div class="container-fluid content">
        <div class="row py-4">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-header">
                        <h1>
                            <img src="https://mxtoolbox.com//public/images/toolicons/dmarc.png">
                            <span>Dmarc Report Analyzer</span></h1>
                    </div>
                    <div class="card-body">
                           <?php 
                            if(isset($_GET['data']))
                            {
                                $strenc2= $_GET['data'];
                                $arr = unserialize(urldecode($strenc2));
                                $str = serialize($arr);
                                $strenc = urlencode($str);
                                
                                if(count($arr )==0 ){
                                    $message='file may be empty or you should uploade zip file before open this page!';
                                    header('location:http://localhost/isnsc/?message='.$message);
                                }
                                ?>
                        <div class="row clearfix ">
                            <div class="col-12">
                                <a href="index.php" class="float-left btn btn-outline-secondary btn-sm">New Upload</a>
                                <a href="handleAddFile.php?xmlFormate=<?php echo $strenc ;?>" class="float-right btn btn-info btn-sm">row xml report</a>
                            </div>
                        </div>
                        <p class="card-text">
                            
                           <pre>
                         
                                <div class="row  justify-content-around">
                                <div class='EmailProvider'> Email Provider:<?php echo $arr["report_metadata"]["org_name"] ?> </div>
                                <div class='EmailProvider'> Domain:<?php echo $arr["policy_published"]["domain"] ?> </div>
                                <div class='EmailProvider'> Report Date:<?php echo  date("h:i:sa")?> </div>
 
                                <div class='EmailProvider'> Report Id:<?php echo $arr["report_metadata"]["report_id"] ?> </div>
                                </div>
                                <table class='table table-striped table-hover table-bordered text-center'>
                                <tr>
                                    <th colspan="2" ></th>
                                    <th colspan="3" >DMARC Compliance</th>
                                    <th colspan="5"  >SPF</th>
                                    <th colspan="5"  >DKIM</th>
                                </tr>
                                <tr >
                                <th >3</th>
                                    <th >6</th>
                                    <th  colspan="3">33.33%</th>
                                    <th colspan="2">Authentication</th>
                                    <th  colspan="2">Alignment</th>
                                    <th>Policy</th>
                                    <th colspan="2" >Authentication</th>
                                    <th colspan="2" >Alignment</th>
                                    <th >Policy</th>
                                </tr>
                                <tr>
                                    <th >IP Address</th>
                                    <th >Email Volume</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Rate</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                </tr>
                             <!-------------------data---------->
                             <?php 
                             //for get data for single record
                                      if (isset($arr['record']['row'])){ ?> 
                                         <tr>
                                    <th ><?php echo isset($arr['record']['row']['source_ip'])?$arr['record']['row']['source_ip']:'no avilable data' ?></th>
                                    <th ><?php echo $arr['record']['row']['count'] ?></th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Rate</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                </tr>
                            <?php }
                            //for get data to array of records
                                    else
                                    {
                                foreach($arr['record'] as $rec){
                                    ?>
                                <tr>
                                    <th ><?php echo $rec['row']['source_ip'] ?></th>
                                    <th ><?php  echo $rec['row']['count'] ?></th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Rate</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                                    <th >Fail</th>
                                    <th >Pass</th>
                            <?php
                                }
                                }
                                      
                                      ?>    
                                </table>
                                <?php
                               // var_dump($arr['record']['row']['count']);

                            }
                          
                           
                            ?>
                           </pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    


<!---------------------------==========description============================-------------->
<section class="description container-fluid " style="height:400px ;">
    <div class="row">
        <div class="p-4">
            <h3>ABOUT DMARC REPORT ANALYZER</h3>
            <p>
                This tool will make DMARC Aggregate XML reports human readable by parsing and aggregating them by IP address into readable reports.
            </p>
            <p>
                DMARC Aggregate XML reports are sent by mail receivers (like Gmail, Yahoo!, &amp; more) and include valuable data such as message volumes seen, SPF/DKIM Authentication rates, actions taken on the message (quarantine/reject), and more. The un-parsed reports themselves are hard to decipher and contain non-aggregated data. To receive and view DMARC reports you need to <a href="/DMARCRecordGenerator.aspx">setup a DMARC Record for you domain</a>
            </p>
        
        </div>
    </div>
</section>

<?php
include_once('inc/scripts.php');
include_once('inc/repoFooter.php');
   
?>