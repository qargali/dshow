<div class="col-md-8 col-md-push-4 temm" ng-controller="MainController as mc">
                    
    <div ng-repeat="row in list" style="margin-bottom:10px;padding:0">  
        <div class="ui red inverted segment">
                    <a href="#/bax/{{row.id}}" style="color: #fff">{{row.title}}</a>
        </div>

        <div class="ui segment">
            <div class="row">
            <div class="col-sm-6">
                <a href="#/bax/{{row.id}}"><img ng-src={{row.thumbnail_120_url}} /></a>
            </div>

            <div class="col-sm-6" style="margin: 5px 0">
                {{row.description}}
            </div>
            </div>
        </div>

        <div class="ui inverted segment right aligned">
                Baxış sayı: {{row.views_total}}
        </div>
    </div>    
    <nav ng-hide="{{ax}}">
        <ul class="pagination">
        <li ng-repeat="row in pages"><a href="#/sehife/{{row.page}}">{{row.page}}</a></li>
        </ul>
    </nav>
    <nav ng-show="{{ax}}">
        <ul class="pagination">
        <li ng-repeat="row in pages"><a href="#/axtar/{{keyy}}/{{row.page}}">{{row.page}}</a></li>
        </ul>
    </nav>

</div>

<div class="col-md-4 col-md-pull-8" style="padding:0" ng-controller="LastController" ng-init="caqir(false)">

        <div class="ui blue inverted segment">
            Ən çox baxılanlar
        </div>

        
        <div class="panel panel-default" ng-repeat="el in bar.list">
            <div class="panel-heading"><a href="#/bax/{{el.id}}">{{el.title}}</a></div>
            <div class="panel-body">
                <a href="#/bax/{{el.id}}">
                    <img src="{{el.thumbnail_120_url}}" alt="{{el.title}}"  />
                </a>
            </div>
            <div class="panel-footer">
                Baxılıb: {{el.views_total}} dəfə
            </div>
            
        </div>



</div>