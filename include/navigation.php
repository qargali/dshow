<div class="navbar navbar-inverse navbar-fixed-top" style="z-index: 999;">
    <div class="container">
        <div class="navbar-header text-center">
            <!--Logo bura-->
            <a class="navbar-brand" href="#"><img src="images/logotip.png" /></a>

            <!-- Hamburgere esg olsun -->
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#collapsable">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapsable">

            <form class="navbar-form navbar-right" ng-controller="AxtarController as ac" ng-submit="axtar()">
                <div class="input-group">
                    <div class="form-group">
                        <input placeholder="Axtar" ng-model="key" class="form-control" />
                    </div>
                    <div class="input-group-btn">
                        <input type="submit" class="btn btn-danger" value="Tap" />
                    </div>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-left" >
                <li >

                    <a href="#" style="backgroud-color: #E83152;"><span class="glyphicon glyphicon-home"></span> Əsas Səhifə</a>
                </li>
                <li>
                    <a href="#/haqqimizda"><span class="glyphicon glyphicon-info-sign"></span> Haqqımızda</a>
                </li>
                <?php
                    if($_SESSION['loged_in']=="admin"){
                        echo <<<aaa
                        <li class="dropdown">
                            <a data-toggle="dropdown" role="button"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#/dshowadmin"><span class="glyphicon glyphicon-user"></span> Admin Panel</a></li>
                             </ul>
                        </li>
aaa;
                    }
                ?>
            </ul>
        </div>

    </div>

</div>