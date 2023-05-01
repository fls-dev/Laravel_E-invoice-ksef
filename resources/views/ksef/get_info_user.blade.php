<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"
          type="text/css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/assets/css/ksef_styles.css')}}" rel="stylesheet" type="text/css">
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
                <form class="form_filter" onsubmit="submitScriptOne(event)">
                    <div class="identification-copy-box none" id="blockInputNipElements" >
                        <label class="mini-title-tab" for="identificationInpCopy">Identyfikator sprzedawcy:</label>
                        <input class="input-nip" type="text" name="identificationInpCopy" id="identificationInpCopy" placeholder="Wpisz NIP">
                    </div>
                    <div id="blockRadioElements" class="none">
                    <p class="mini-title-tab">Dane identyfikacyjne podmiotu:</p>
                    <div class="radio-block">
                        <div class="form_radio_btn">
                            <input id="identification1" type="radio" name="identification" data-text="Wpisz NIP"
                                   value="1" checked>
                            <label for="identification1">NIP</label>
                        </div>

                        <div class="form_radio_btn">
                            <input id="identification2" type="radio" name="identification"
                                   data-text="Wpisz identyfikator podatkowy inny" value="2">
                            <label for="identification2">Identyfikator podatkowy inny</label>
                        </div>

                        <div class="form_radio_btn">
                            <input id="identification3" type="radio" name="identification" value="3">
                            <label for="identification3">Brak</label>
                        </div>

                        <div class="identification-value">
                            <input class="input-nip" type="text" name="identificationInp" id="identificationInp" placeholder="Wpisz NIP">
                        </div>
                    </div>
                    </div>
                    <div class="inputs-block">
                        <div class="left">
                            <label class="mini-title-tab" for="numberKsef">Numer KSeF</label>
                            <input type="text" name="numberKsef" id="numberKsef" placeholder="Wpisz Numer KSeF">
                        </div>
                        <div class="right">
                            <label class="mini-title-tab" for="numberInvoice">Numer faktury</label>
                            <input type="text" id="numberInvoice" placeholder="Wpisz Numer faktury">
                        </div>
                    </div>
                    <p class="mini-title-tab">Data wystawienia:</p>
                    <div class="dates-block">
                        <div class="left">
                            <label class="mini-title-tab">Od</label>
                            <input id="dataFrom" type="text">
                        </div>
                        <div class="right">
                            <label class="mini-title-tab">Do</label>
                            <input id="dataTo" type="text">
                        </div>
                    </div>
                    <div>
                        <button class="btn-filter" type="submit">Pokaż wyniki</button>
                    </div>
                </form>
                <div class="gray-line"></div>

                <div class="table">
                    <table id="invoices">
                        <thead>
                        {{--                        <tr>--}}
                        {{--                            <th>Nip nabywcy</th>--}}
                        {{--                            <th>Nazwa nabywcy</th>--}}
                        {{--                            <th>Nr KSeF</th>--}}
                        {{--                            <th>Nr faktury</th>--}}
                        {{--                            <th>Data wystawienia</th>--}}
                        {{--                            <th>Netto</th>--}}
                        {{--                            <th>Brutto</th>--}}
                        {{--                            <th>VAT</th>--}}
                        {{--                        </tr>--}}
                        </thead>
                        <tbody>
                        {{--                        @dd($invoices)--}}
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
            maxDate: new Date()
        })
        const dataTo = new AirDatepicker('#dataTo', {
            inline: false,
            autoClose: true,
            selectedDates: new Date(),
            maxDate: new Date()
        })

        @if($status)
        const status = true;
        @else
        const status = false;
        @endif

        const selectedTab = document.querySelector('.selected-tab');
        const selectedTabLabels = document.querySelectorAll('.selected-tab label');
        const isNoActive = document.querySelector('.is-no-active');
        const sectionContentActive = document.querySelector('.section-content-active');

        const blockInputNipElements = document.getElementById('blockInputNipElements');
        const blockRadioElements = document.getElementById('blockRadioElements');
        if (selectedTab) {
            selectedTab.addEventListener('click', (e) => {
                if (status) {
                    const t = e.target;
                    sectionContentActive.classList.remove('none');
                    if(t.dataset.type === "subject1"){
                        blockInputNipElements.classList.add('none');
                        blockRadioElements.classList.remove('none');
                    }else if(t.dataset.type === "subject2"){
                        blockInputNipElements.classList.remove('none');
                        blockRadioElements.classList.add('none');
                    }else{
                        blockInputNipElements.classList.remove('none');
                        blockRadioElements.classList.remove('none');
                    }
                    activatedLabel(t.dataset.type)
                } else {
                    isNoActive.classList.remove('none')
                }
            })
        }
        function activatedLabel(t) {
            selectedTabLabels.forEach(i=>{
                if(i.dataset.type === t){
                    i.classList.add('active');
                }else{i.classList.remove('active');}
            })
        }
        const radioBlock = document.querySelector('.radio-block');
        const identificationInpBlock = document.querySelector('.identification-value');
        const identificationInp = document.getElementById('identificationInp');
        if (radioBlock) {
            radioBlock.addEventListener('change', (e) => {
                const t = e.target;
                if (t.value === '3') {
                    identificationInpBlock.classList.add('none');
                    identificationInp.value = '';
                } else {
                    identificationInpBlock.classList.remove('none');
                    identificationInp.placeholder = t.dataset.text;
                }
            })
        }

        const headers = [
            [
                {
                    "title": "One",
                },
                {

                    "title": "Two",
                },
                {
                    "title": "Three",
                }
            ],
            [
                {
                    "title": "One",
                },
                {

                    "title": "Two",
                },
                {
                    "title": "Three",
                }
            ],
            [
                {
                    "title": "One",
                },
                {

                    "title": "Two",
                },
                {
                    "title": "Three",
                }
            ], [
                {
                    "title": "One",
                },
                {

                    "title": "Two",
                },
                {
                    "title": "Three",
                }
            ]
        ]

        const dataToTable = []

        const table = $('#invoices').DataTable({
            order: [[0, "desc"]],
            processing: true,
            data: dataToTable,
            columns: headers[0],
            iDisplayLength: 10,
            bAutoWidth: false
        });

    });

    function submitScriptOne(event) {
        event.preventDefault();

        console.log('TESS')
    }
</script>
</body>
</html>
