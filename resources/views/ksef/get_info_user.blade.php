<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"
          type="text/css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/css/ksef_styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/css/only_invoice.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/datapicker/air-datepicker.css')}}" rel="stylesheet" type="text/css">

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
                <label data-type="subject1">Faktury sprzedażowe (Podmiot1)</label>
                <label data-type="subject2">Faktury zakupowe (Podmiot2)</label>
                <label data-type="subject3">Faktury podmiotu innego (Podmiot3)</label>
                <label data-type="subjectAuthorized">Faktury podmiotu upoważnionego</label>
            </div>
            <div class="section-content-active none">
                <form class="form_filter">
                    <div class="dates-block">
                        <div class="left">
                            <label class="mini-title-tab">Data wystawienia (Od)</label>
                            <input id="dataFrom" name="dataFrom" type="text">
                        </div>
                        <div class="right">
                            <label class="mini-title-tab">Data wystawienia (Do)</label>
                            <input id="dataTo" name="dataTo" type="text">
                        </div>
                    </div>
                    <input type="hidden" name="type" id="forSetTypeValue">
                    <div>
                        <button class="btn-filter" type="submit">Pokaż wyniki</button>
                    </div>
                </form>
                <div class="gray-line"></div>

                <div class="table">
                    <table id="invoices">
                        <thead>
                            <tr>
                                <th>Nip nabywcy</th>
                                <th>Nazwa nabywcy</th>
                                <th>Nr KSeF</th>
                                <th>Nr faktury</th>
                                <th>Data wystawienia</th>
                                <th>Netto</th>
                                <th>Brutto</th>
                                <th>VAT</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($invoices as $i)--}}
{{--                            <tr>--}}
{{--                                <td>{{$i->subjectBy->issuedByIdentifier->identifier}}</td>--}}
{{--                                @if($i->subjectBy->issuedByName->type == "fn")--}}
{{--                                    <td>{{$i->subjectBy->issuedByName->fullName}}</td>--}}
{{--                                @elseif($i->subjectBy->issuedByName->type == "pn")--}}
{{--                                    <td>{{$i->subjectBy->issuedByName->firstName}} {{$i->subjectBy->issuedByName->surname}}</td>--}}
{{--                                @endif--}}

{{--                                <td>{{$i->ksefReferenceNumber}}</td>--}}
{{--                                <td>{{$i->invoiceReferenceNumber}}</td>--}}
{{--                                <td>{{$i->invoicingDate}}</td>--}}
{{--                                <td>{{$i->net}}</td>--}}
{{--                                <td>{{$i->gross}}</td>--}}
{{--                                <td>{{$i->vat}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="is-no-active none">
                <p>Недоступно! Пользователь не авторизован в системе KSEF. </p>
                <a href="{{URL::to('/')}}/user-init-token"><img width="50px" alt=""
                                                                src="{{URL::to('/assets/icons/sync.png')}}"></a>
            </div>
        </div>
    </div>
</div>
@include('template.footer')
<script src="{{URL::to('/assets/datapicker/air-datepicker.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", (e) => {


        const dataFrom = new AirDatepicker('#dataFrom', {
            inline: false,
            autoClose: true,
            selectedDates: new Date(),
            maxDate: new Date(),
            dateFormat: 'yyyy-MM-dd'
        })
        const dataTo = new AirDatepicker('#dataTo', {
            inline: false,
            autoClose: true,
            selectedDates: new Date(),
            maxDate: new Date(),
            dateFormat: 'yyyy-MM-dd'

        })

        $('#invoices').DataTable({
            order: [[0, "desc"]],
            processing: true,
            data: [],
            bDestroy: true,
            iDisplayLength: 10,
            bAutoWidth: false
        });


        @if($status)
        const status = true;
        @else
        const status = false;
        @endif

        const selectedTab = document.querySelector('.selected-tab');
        const selectedTabLabels = document.querySelectorAll('.selected-tab label');
        const isNoActive = document.querySelector('.is-no-active');
        const sectionContentActive = document.querySelector('.section-content-active');
        const forSetTypeValue = document.getElementById('forSetTypeValue');
        let activeHeader = 'subject1';

        if (selectedTab) {
            selectedTab.addEventListener('click', (e) => {
                if (status) {
                    const t = e.target;
                    sectionContentActive.classList.remove('none');
                    forSetTypeValue.value = t.dataset.type;
                    activatedLabel(t.dataset.type);
                    // activeHeader
                    activeHeader = t.dataset.type;
                } else {
                    isNoActive.classList.remove('none')
                }
            })
        }

        function activatedLabel(t) {
            selectedTabLabels.forEach(i => {
                if (i.dataset.type === t) {
                    i.classList.add('active');
                } else {
                    i.classList.remove('active');
                }
            })
        }

        const headers = {
            "subject1": [
                {"title": "Identyfikator nabywcy", "data": "n_nip"},
                {"title": "Nazwa nabywcy", "data": "n_name"},
                {"title": "Nr KSeF", "data": "ksefNumber"},
                {"title": "Nr faktury", "data": "invoiceNumber"},
                {"title": "Data wystawienia", "data": "invoicingDate"},
                {"title": "Netto", "data": "net"},
                {"title": "Brutto", "data": "gross"},
                {"title": "VAT", "data": "vat"}
            ],
            "subject2": [
                {"title": "Identyfikator sprzedawcy", "data": "sp_nip"},
                {"title": "Nazwa sprzedawcy", "data": "sp_name"},
                {"title": "Nr KSeF", "data": "ksefNumber"},
                {"title": "Nr faktury", "data": "invoiceNumber"},
                {"title": "Data wystawienia", "data": "invoicingDate"},
                {"title": "Data otrzymania", "data": "acquisitionTimestamp"},
                {"title": "Netto", "data": "net"},
                {"title": "Brutto", "data": "gross"},
                {"title": "Vat", "data": "vat"}
            ],
            "subject3": [
                {"title": "Identyfikator nabywcy", "data": "n_nip"},
                {"title": "Nazwa nabywcy", "data": "n_name"},
                {"title": "Identyfikator sprzedawcy", "data": "sp_nip"},
                {"title": "Nazwa sprzedawcy", "data": "sp_name"},
                {"title": "Nr KSeF", "data": "ksefNumber"},
                {"title": "Nr faktury", "data": "invoiceNumber"},
                {"title": "Data wystawienia", "data": "invoicingDate"},
                {"title": "Data otrzymania", "data": "acquisitionTimestamp"},
                {"title": "Netto", "data": "net"},
                {"title": "Brutto", "data": "gross"},
                {"title": "VAT", "data": "vat"}
            ],
            "subjectAuthorized": [
                {"title": "Identyfikator nabywcy", "data": "n_nip"},
                {"title": "Nazwa nabywcy", "data": "n_name"},
                {"title": "Identyfikator sprzedawcy", "data": "sp_nip"},
                {"title": "Nazwa sprzedawcy", "data": "sp_name"},
                {"title": "Nr KSeF", "data": "ksefNumber"},
                {"title": "Nr faktury", "data": "invoiceNumber"},
                {"title": "Data wystawienia", "data": "invoicingDate"},
                {"title": "Data otrzymania", "data": "acquisitionTimestamp"},
                {"title": "Netto", "data": "net"},
                {"title": "Brutto", "data": "gross"},
                {"title": "VAT", "data": "vat"}
            ]
        }
        // $('#invoices').DataTable({
        //     order: [[0, "desc"]],
        //     processing: true,
        //     data: [],
        //     bDestroy: true,
        //     columns: headers[activeHeader],
        //     iDisplayLength: 10,
        //     bAutoWidth: false
        // });
        const mm= document.getElementById('modalInvoice');
        const mm2= document.getElementById('modalInvoice2');
        const mm3= document.getElementById('modalInvoice3');
        let randomV = 0;
        document.addEventListener('click',(e)=>{
            if(e.target.classList.contains('open-invoice')){
                if(randomV === 0){
                    mm.classList.remove('none');
                }else if(randomV === 1){
                    mm2.classList.remove('none');
                }
                else{ mm3.classList.remove('none');}
                randomV++;
                if(randomV ===3){
                    randomV = 0;
                }
            }
            if(e.target.classList.contains('close-modal')){
                mm.classList.add('none');
                mm2.classList.add('none');
                mm3.classList.add('none');
            }
            if(e.target.id === 'modalInvoice' || e.target.id === 'modalInvoice2'|| e.target.id === 'modalInvoice3'){
                mm.classList.add('none');
                mm2.classList.add('none');
                mm3.classList.add('none');
            }
        })

        document.addEventListener('submit', (event) => {
            event.preventDefault();
            const data = Object.fromEntries(new FormData(event.target));

            $.ajax({
                url: "{{URL::to('/')}}/sync-invoices",
                type: "POST",
                data: {
                    data,
                    _token: '{{csrf_token()}}',
                },
                success: function (res) {
                    $('#invoices').DataTable().clear().destroy();
                    $('#invoices').DataTable({
                        order: [[0, "desc"]],
                        processing: true,
                        data: res,
                        bDestroy: true,
                        iDisplayLength: 10,
                        bAutoWidth: false
                    });

                }
            });
        })

    });


</script>
</body>
</html>
