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
    <div class="table-responsive">
        <table id="users" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>NIP</th>
                <th>token</th>
                <th>options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->nip}}</td>
                <td>{{$u->token}}</td>
                @if($u->token != '')
                    <td><a class="table-link-go" href="/user/{{$u->id}}"><img src="/assets/icons/right.png" alt=""></a> </td>
                @else
                    <td></td>
                @endif

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('template.footer')
<script>
    const table = $('#users').DataTable({
        order: [[0, "desc"]],
        processing: true,
        "iDisplayLength": 10,
    });


</script>
</body>
</html>
