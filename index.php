<?php
include_once('inc/head.php');
include_once('inc/repoNav.php');
?>

 <!---------------------------==========content============================-------------->
                    
    <div class="container-fluid content">
        <div class="row ">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-header">
                        <h1>
                            <img src="https://mxtoolbox.com//public/images/toolicons/dmarc.png">
                            <span>Dmarc Report Analyzer</span></h1>
                    </div>
                    <div class="card-body">
                        <form action="handleAddFile.php" method="POST" enctype="multipart/form-data" >
                            
                            <div class="form-group">
                                <label for="zipFile">Upload Zip File </label>
                                <input type="file" name="zipFile" id="zipFile" class="form-control" >
                            </div>
                            <div >
                                <input type="submit" value="Upload " class="btn btn-warning" name="submit">
                            </div>
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
                                    }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    


<!---------------------------==========description============================-------------->
<section class="description container-fluid ">
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