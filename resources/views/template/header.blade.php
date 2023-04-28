@php
    $url = $_SERVER['REQUEST_URI'];

    $pages = array(
       array('url'=>'/', 'name'=>'Все пользователи'),
//       array('url'=>'/calls-outgoing', 'name'=>'page 2'),
//       array('url'=>'/sms', 'name'=>'page 3'),
//       array('url'=>'/active-calls', 'name'=>'page 4')
    );
@endphp

<div class="header-menu">
    <div class="header-max">
        <div class="left-header-menu">
            @foreach($pages as $page)
                @if($url == $page['url'])
                    <a class="active" href="{{$page['url']}}">{{$page['name']}}</a>
                @else
                    <a href="{{$page['url']}}">{{$page['name']}}</a>
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="h75"></div>