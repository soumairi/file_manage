@section('sidebar')

            <ul class="nav navbar-nav">
                @foreach($laravelAdminMenus->menus as $section)
                    @if($section->items)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ $section->section }} <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        @foreach($section->items as $menu)
                        <li role="presentation">
                            <a href="{{ url($menu->url) }}">
                                {{ $menu->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>


                <li><a href="#"> </a></li>
                    @endif
                @endforeach
            </ul>

        @if(Auth::check() && Auth::user()->hasRole('admin'))
        @else
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/admin/project') }}">Projets</a></li>
        </ul>
        @endif

@endsection

<!--<div class="col-md-3">
    <div class="well" style="">

    </div>

    @foreach($laravelAdminMenus->menus as $section)
        @if($section->items)
            <div class="panel panel-default panel-flush">
                <div class="panel-heading">
                    {{ $section->section }}
                </div>

                <div class="panel-body">
                    <ul class="nav" role="tablist">
                        @foreach($section->items as $menu)
                            <li role="presentation">
                                <a href="{{ url($menu->url) }}">
                                    {{ $menu->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    @endforeach
</div>
-->