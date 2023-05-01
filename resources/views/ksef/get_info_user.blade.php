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
                    <table id="invoices"></table>
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
                {"title": "VAT", "data": "vat"}
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

        const dataToTable = [];
        $('#invoices').DataTable({
            order: [[0, "desc"]],
            processing: true,
            data: dataToTable,
            columns: headers[activeHeader],
            iDisplayLength: 10,
            bAutoWidth: false
        });

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
                    console.log(JSON.parse(res))
                    console.log(res)
                    $('#invoices').DataTable().clear().destroy();
                    $('#invoices').DataTable({
                        order: [[0, "desc"]],
                        processing: true,
                        data: dataToTable,
                        columns: headers[activeHeader],
                        iDisplayLength: 10,
                        bAutoWidth: false
                    });
                }
            });
        })

    });

    // const t  = [{
    //     "n_nip":"9999999999","n_name":"ABC AGD sp. z o. o.","ksefNumber":"9999999999-20230426-2D0093-F54A24-53","invoiceNumber":"FK2022\/03\/200","invoicingDate":"2023-04-26","net":"-162.60","gross":"-200.00","vat":"-37.40"},{
    //     "n_nip":"9999999999","n_name":"ABC AGD sp. z o. o.","ksefNumber":"9999999999-20230426-45B4AD-50F407-E1","invoiceNumber":"FV2022\/02\/150\/111111","invoicingDate":"2023-04-26","net":"1667.61","gross":"2051.00","vat":"383.38"},{
    //     "n_nip":"9999999999","n_name":"ABC AGD sp. z o. o.","ksefNumber":"9999999999-20230426-DDB5A2-84CCA3-49","invoiceNumber":"FV2022\/02\/150","invoicingDate":"2023-04-26","net":"1667.61","gross":"2051.00","vat":"383.38"},{
    //     "n_nip":"9999999999","n_name":"ABC AGD sp. z o. o.","ksefNumber":"9999999999-20230425-62275A-102FDD-78","invoiceNumber":"FV2022\/02\/150","invoicingDate":"2023-04-25","net":"1667.61","gross":"2051.00","vat":"383.38"},{
    //     "n_nip":"9999999999","n_name":"ABC","ksefNumber":"9999999999-20230425-3094A9-727D1B-6E","invoiceNumber":"1798","invoicingDate":"2023-04-25","net":"0.00","gross":"0.00","vat":"0.00"},{
    //     "n_nip":"9999999999","n_name":"abc","ksefNumber":"9999999999-20230425-880D59-A976CB-59","invoiceNumber":"3\/1\/2024","invoicingDate":"2023-04-25","net":"-200.00","gross":"-246.00","vat":"-46.00"},{
    //     "n_nip":"9999999999","n_name":"ABC SP Z O.O.","ksefNumber":"9999999999-20230425-514C86-76EDBC-5D","invoiceNumber":"1552522","invoicingDate":"2023-04-25","net":"1744.00","gross":"2145.12","vat":"401.12"},{
    //     "n_nip":"9999999999","n_name":"abc","ksefNumber":"9999999999-20230425-D21F31-4C9B86-F6","invoiceNumber":"1\/1\/2024","invoicingDate":"2023-04-25","net":"1000.00","gross":"1230.00","vat":"230.00"},{
    //     "n_nip":"9999999999","n_name":"ABC","ksefNumber":"9999999999-20230425-1E1731-DFE019-1F","invoiceNumber":"1798","invoicingDate":"2023-04-25","net":"383.10","gross":"467.38","vat":"84.28"},{
    //     "n_nip":"9999999999","n_name":"Helena Helena","ksefNumber":"9999999999-20230425-2DC616-D69944-E7","invoiceNumber":"125\/mgj\/2023","invoicingDate":"2023-04-25","net":"12195.12","gross":"15000.00","vat":"2804.88"}
    // ]


    const g = [
        {
            "invoiceReferenceNumber": "K12345/6",
            "ksefReferenceNumber": "1111111111-20230412-CBFB90-901434-B9",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "i8VFPdqWl27XRXsLwLxX4s5Slzt7Jbg3Bbj7U/g+q4Q="
                },
                "fileSize": 2271
            },
            "invoicingDate": "2023-04-12",
            "acquisitionTimestamp": "2023-04-12T12:50:01.640Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": "PUP Jan Kowalski",
                    "fullName": "jan kowalski"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": "abc sp. z o.o.",
                    "fullName": "abc"
                }
            },
            "net": "-10.00",
            "vat": "-2.30",
            "gross": "-12.30",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "12346",
            "ksefReferenceNumber": "1111111111-20230412-698F2D-A39F2E-5C",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "WwHI8boTAr6TF6PdNUfnkCNJgvil4S3xgl8pZ7gv6A4="
                },
                "fileSize": 2037
            },
            "invoicingDate": "2023-04-12",
            "acquisitionTimestamp": "2023-04-12T08:33:46.047Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": "PUP Jan Kowalski",
                    "fullName": "jan kowalski"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": "abc sp. z o.o.",
                    "fullName": "abc"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": "Zakład X",
                        "fullName": "Zakład X"
                    },
                    "subjectOtherType": "recipient"
                }
            ],
            "net": "46.00",
            "vat": "10.58",
            "gross": "56.58",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "20220407",
            "ksefReferenceNumber": "1111111111-20230407-92E90C-25D6ED-EE",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "o2S65vl2dLFfJRysfeLuCnmsKPVtKiMON4GJ4k1IMvw="
                },
                "fileSize": 1839
            },
            "invoicingDate": "2023-04-07",
            "acquisitionTimestamp": "2023-04-07T11:06:21.776Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Michał",
                    "surname": "Kowalski"
                }
            },
            "net": "1000.00",
            "vat": "230.00",
            "gross": "1230.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "2/21/20023",
            "ksefReferenceNumber": "8522425145-20230405-E1AC42-2356AA-89",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "YLgabte5aRjlpGmuS/G9hkdGqDd+ytwH4NzWNANQHaw="
                },
                "fileSize": 1741
            },
            "invoicingDate": "2023-04-05",
            "acquisitionTimestamp": "2023-04-05T11:58:58.374Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "8522425145"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ERRR"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": "adds",
                    "fullName": "aasa"
                }
            },
            "net": "20000.00",
            "vat": "4600.00",
            "gross": "24600.00",
            "currency": "EUR"
        },
        {
            "invoiceReferenceNumber": "PwC 2023/03/3",
            "ksefReferenceNumber": "1132399979-20230405-18D694-2A8CDE-62",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "b33z4ASHH0yZ8kxcLkIEGgiw4Iq51dh78FO4ZX9WJYY="
                },
                "fileSize": 2581
            },
            "invoicingDate": "2023-04-05",
            "acquisitionTimestamp": "2023-04-05T11:23:22.184Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1132399979"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "PricewaterhouseCoopers Sp. z o.o. Sp. k"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Reichert, Wisozk and Schumm"
                }
            },
            "net": "0.00",
            "vat": "0.00",
            "gross": "106174.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "2023-01-011",
            "ksefReferenceNumber": "8522425145-20230405-1AE853-FF91B9-E7",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "m612AVNDAC4Ur8C4RrALYUWvztGAS7kvJMCLdqQlgP8="
                },
                "fileSize": 1754
            },
            "invoicingDate": "2023-04-05",
            "acquisitionTimestamp": "2023-04-05T09:39:29.398Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "8522425145"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Eeg"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Test1"
                }
            },
            "net": "10000.00",
            "vat": "2300.00",
            "gross": "12300.00",
            "currency": "EUR"
        },
        {
            "invoiceReferenceNumber": "PwC 2023/03/4",
            "ksefReferenceNumber": "1132399979-20230404-D82898-36A8F6-FF",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "Olg49d4hltbHHd3ZfrJe1kXBDuXMO1r1/gU8lFXbZx0="
                },
                "fileSize": 2274
            },
            "invoicingDate": "2023-04-04",
            "acquisitionTimestamp": "2023-04-04T18:34:09.784Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1132399979"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "PricewaterhouseCoopers Sp. z o.o. Sp. k"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Pacocha LLC"
                }
            },
            "net": "0.00",
            "vat": "0.00",
            "gross": "53638.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "PwC 2023/03/5",
            "ksefReferenceNumber": "1132399979-20230404-DF83D6-FCAC91-96",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "bGQK6KZOiO6JQZS33yy3aNGjUcoqYxK0CSaCrFCVMWQ="
                },
                "fileSize": 2294
            },
            "invoicingDate": "2023-04-04",
            "acquisitionTimestamp": "2023-04-04T18:34:08.635Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1132399979"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "PricewaterhouseCoopers Sp. z o.o. Sp. k"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Rice, Bashirian and Kohler"
                }
            },
            "net": "0.00",
            "vat": "0.00",
            "gross": "102840.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "213435",
            "ksefReferenceNumber": "9999999999-20230404-360256-FA4489-C9",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "vkVFDHiiA7NYQeIpfbB6SYsTDia3+bteeesgCLy2Q1o="
                },
                "fileSize": 1685
            },
            "invoicingDate": "2023-04-04",
            "acquisitionTimestamp": "2023-04-04T13:11:36.798Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "ddd",
                    "surname": "ddddd"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "rrrrr",
                    "surname": "rrrrrr"
                }
            },
            "net": "1003.25",
            "vat": "230.75",
            "gross": "1234.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "4/4/2023 VAT2",
            "ksefReferenceNumber": "6751423951-20230404-D3A195-7D17C5-61",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "o8OKbjTZoy8WA2+7O2n3Q/x6TjXt5wOuZ3oTo/kZPac="
                },
                "fileSize": 4266
            },
            "invoicingDate": "2023-04-04",
            "acquisitionTimestamp": "2023-04-04T12:26:49.016Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "6751423951"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Example Entity"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999999"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "Test Entity Sp. z o.o."
                }
            },
            "net": "1000.00",
            "vat": "70.00",
            "gross": "1070.00",
            "currency": "EUR"
        }
    ]
</script>
</body>
</html>
