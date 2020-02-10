
<section class="navs">
    <nav class="navbar navbar-expand-sm text-capitalize topNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src='imgs/logo.png' class="img-fluid w-75"> </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <ul class="mxt-top-nav nav navbar-nav navbar-right">
            <li class="item-top navbar-item-upgrade active"><a href="#" class="mx-color bold">Upgrade</a></li>
            <li class="item-top navbar-item-delivery"><a href="#" ng-click="vm.ClickItem('delivery')">Delivery Center</a></li>
            <li class="item-top navbar-item-mxwatch"><a href="#">Supertool</a></li>
            <li class="item-top navbar-item-monitoring dropdown" uib-dropdown="">
                <a href="" class="dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false">Monitoring <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="navbar-item-workbench"><a href="" ng-click="vm.ClickItem('monitoring')">Workbench</a></li>
                    <li class="navbar-item-investigator"><a href="" ng-click="vm.ClickItem('investigator')">Investigator</a></li>
                    <li class="navbar-item-bulk"><a href="" ng-click="vm.ClickItem('bulk')">Bulk Lookup</a></li>
                    <li class="navbar-item-notifications"><a href="" ng-click="vm.ClickItem('notifications')">Notifications</a></li>
                    <li class="navbar-item-user-api-doc"><a href="" ng-click="vm.ClickItem('usersettingsapi')" ng-if="!vm.user.private.isServiceProviderCustomer" class="ng-scope">API doc</a>s</li>
                </ul>
            </li>
            <li class="item-top navbar-item-blog"><a href="#" target="_blank">Blog</a></li>
            <li class="item-top navbar-item-products"><a href="#">Products</a></li>
            <li class="item-top navbar-item-user-aboutus"><a href="" ng-click="vm.ClickItem('aboutus')" target="_blank">About Us</a></li>
            <li class="item-top navbar-item-user-docs"><a href="" ng-click="vm.ClickItem('docs')" target="_blank">Docs</a></li>

            <li class="separator hide-collapse"></li>

            <li class="item-top navbar-item-login ng-scope" ng-if="vm.user &amp;&amp; !vm.user.IsLoggedIn"><a href="/Public/Login.aspx">Login</a></li>
        </ul>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-inverse " >
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-home "></i></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li><a class="navbar-brand menu_item_text icon-home" href="#"></a></li>
                    <li class="blackNavWorkbench" style="display: none;"><a class="menu_item_text" href="/Pro/#/">Workbench</a></li>
                    <li class="blackNavMxLookup"><a class="menu_item_text" href="#">MX Lookup</a></li>
                    <li class="blackNavBlacklists"><a class="menu_item_text" href="#">Blacklists</a> </li>
                    <li class="blackNavDianostics"><a class="menu_item_text" href="#">Diagnostics</a> </li>
                    <li class="blackNavDomainHealth"><a class="menu_item_text" href="#">Domain Health</a></li>
                    <li class="blackNavAnalyzeHeaders"><a class="menu_item_text" href="#">Analyze Headers</a> </li>
                    <li class="blackNavFreeMonitoring"><a class="menu_item_text" href="#">Free Monitoring</a> </li>
                    <li class="blackNavDMARC"><a class="menu_item_text" href="#">DMARC</a> </li>
                    <li class="blackNavInvestigator"><a class="menu_item_text" href="#">Investigator</a> </li>
                    <li class="blackNavDNSLookup" id="liNavDNSLookup"><a class="menu_item_text" href="#">DNS Lookup</a> </li>
                    <li class="blackNavMore">
                </ul>
                
            </div>
        </div>
    </nav>

</section>