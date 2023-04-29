<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"
          type="text/css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/css/ksef_styles.css')}}" rel="stylesheet" type="text/css">

    <title>Ksef - пользователи</title>
</head>
<body>
@include('template.header')

<div class="container-fluid-onlymb">
    <div class="content-1200">
        <div class="head-user-single">
            <p class="single-user-title">Страница пользователя, {{$name}} (nip: {{session('user')->nip}})</p>
                <p class="user-single-status">Status:
                    @if($status)
                        <span class="active">Active</span>
                    @else
                        <span class="no-active">No Active</span>
                      <a href="{{URL::to('/')}}/user-init-token"><img alt="" src="{{URL::to('/assets/icons/sync.png')}}"></a>
                    @endif</p>
        </div>
        <div class="gray-line"></div>
        <div class="invoices-user-section">
            <h2>Lista faktur</h2>
            <div class="selected-tab">
                <label data-type="Podmiot1">Faktury sprzedażowe (Podmiot1)</label>
                <label data-type="Podmiot2">Faktury zakupowe (Podmiot2)</label>
                <label data-type="Podmiot3">Faktury podmiotu innego (Podmiot3)</label>
                <label data-type="Podmiot4">Faktury podmiotu upoważnionego</label>
            </div>
            <div class="section-content-active">
                <p class="title-tab-section"></p>
            </div>
            <div class="is-no-active none">
                <p>Недоступно! Пользователь не авторизован в системе KSEF. </p>
            </div>
        </div>
    </div>
</div>
@include('template.footer')
<script>
    @if($status)
    const status = true;
    @else
    const status = false;
    @endif

    const selectedTab = document.querySelector('.selected-tab');
    const isNoActive = document.querySelector('.is-no-active');
    const titleTabSection = document.querySelector('.title-tab-section');
    const sectionContentActive = document.querySelector('.section-content-active');
    if(selectedTab){
        selectedTab.addEventListener('click',(e)=>{
            if(status){
                const t = e.target;
                console.log(t);
                sectionContentActive.classList.remove('none');
                titleTabSection.innerText = t.innerText;
            }else{
                isNoActive.classList.remove('none')
            }


        })
    }
    // function runAuth() {
        {{--$.ajax({--}}
        {{--    url: "{{URL::to('/')}}/user-init-token",--}}
        {{--    type: "POST",--}}
        {{--    data: {--}}
        {{--        _token: '{{csrf_token()}}',--}}
        {{--    },--}}
        {{--    success: function (res) {--}}
        {{--        console.log(res)--}}
        {{--    },--}}
        {{--    error: function(jqXHR, textStatus, errorThrown) {--}}
        {{--        console.log('AJAX call failed.');--}}
        {{--        console.log(textStatus + ': ' + errorThrown);--}}
        {{--    }--}}
        {{--});--}}
    // }
</script>
</body>
</html>
