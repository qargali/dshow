<div class="col-md-8 col-md-push-4 temm" ng-controller="BaxController as bc">


    <div class="ui red inverted segment">
                {{video.title}}
    </div>

    <div class="ui raised segment">
        <div class="embed-responsive embed-responsive-16by9">

            <div id="videoplayer">
                <iframe
                    id="vplayer"
                    width="WIDTH"
                    height="HEIGHT"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>

        </div>

    </div>

    <div class="row">
            <div class="text-right col-xs-12">Baxılıb: {{video.views_total}} dəfə</div>
    </div>

    <div class="ui inverted segment">
        Video Haqda

    </div>

    <div class="ui segment">{{video.description}}</div>

    <div>
        <div class="ui green segment">
            <div class="dailymotion-widget" data-placement="56a3cd854ef91b00125c4523"></div><script>(function(w,d,s,u,n,e,c){w.PXLObject = n; w[n] = w[n] || function(){(w[n].q = w[n].q || []).push(arguments);};w[n].l = 1 * new Date();e = d.createElement(s); e.async = 1; e.src = u;c = d.getElementsByTagName(s)[0]; c.parentNode.insertBefore(e,c);})(window, document, "script", "//api.dmcdn.net/pxl/client.js", "pxl");</script>





        </div>
    </div>

</div>

<div class="col-md-4 col-md-pull-8" style="padding:0" ng-controller="LastController as lc" ng-init="caqir(true)" >

        <div class="ui blue inverted segment">
            Ən yeni videolar
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
