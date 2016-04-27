<section class="w-f scrollable">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 604px;"><div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333" style="overflow: hidden; width: auto; height: 604px;">
            <!-- nav -->
            <nav class="nav-primary hidden-xs">
                <ul class="nav">
                    @foreach($global->menu as $group)
                    <li class="{{ Request::is("admin/".$group['uri']."*") ? 'active' : null }}">
                        <a href="index.html" class="">
                            <i class="fa {{ $group['icon'] }} icon">
                                <b class="bg-warning"></b>
                            </i>
                            <span class="pull-right">
                              <i class="fa fa-angle-down text"></i>
                              <i class="fa fa-angle-up text-active"></i>
                            </span>
                            <span>{{$group['label']}}</span>
                        </a>
                        <ul class="nav lt">
                            @foreach($group['subMenus'] as $subMenu)
                            <li class="{{ Request::is("admin/".$group['uri'].$subMenu['uri']) ? 'active' : null }}">
                                <a href="{{ admin_url($group['uri'].$subMenu['uri']) }}">
                                    <i class="fa fa-angle-right"></i>
                                    <span>{{ $subMenu['label'] }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </nav>
            <!-- / nav -->
        </div>
        <div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 604px; background: rgb(51, 51, 51);"></div>
        <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 0px; background: rgb(51, 51, 51);"></div>
    </div>
</section>

<footer class="footer lt hidden-xs b-t b-light">
    <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-light btn-icon">
        <i class="fa fa-angle-left text"></i>
        <i class="fa fa-angle-right text-active"></i>
    </a>
</footer>
