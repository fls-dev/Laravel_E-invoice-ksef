<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"
          type="text/css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/css/calls_styles.css')}}" rel="stylesheet" type="text/css">

    <title>Ksef - пользователи</title>
</head>
<body>
@include('template.header')

<div class="container-fluid-onlymb">
    <div class="content-1200">
    <div class="head-user-single">
        <p class="single-user-title">Страница пользователя, {{$name}}</p>
        <p class="user-single-status">Status: @if($status)<span class="active">Active</span @else <span class="no-active">No Active</span @endif></p>
    </div>
    </div>
    @php
        $user = session('user');
//        dd($user);
    @endphp
</div>
@include('template.footer')
<script>

</script>
</body>
</html>
