<section class="footer">
    <div id="modalSms" class="modal none">
        <div class="modal-content" id="insertAnswerSms">
            <div class="close-modal" id="closeModalSms">X</div>
            <p class="title-sms">Отправить SMS</p>
            <label>Введите номер</label>
            <input type="text" placeholder="48519571201" id="sendSmsNumber">
            <label>Введите сообщение</label>
            <textarea placeholder="Введите сообщение.." id="sendSmsMessage"></textarea>
            <button id="sendSmsBtn">Отправить</button>
            <div id="blockMessageForm"></div>
        </div>
    </div>

    <div id="modalGoCallPhone" class="modal none">
        <div class="modal-content" id="insertAnswerCallPhone">
            <div class="close-modal" id="closeModalCallPhone">X</div>
            <p class="title-sms">Совершить звонок</p>
            <label>Введите номер</label>
            <input type="text" placeholder="48519571201" id="callPhoneNumber">
            <label>С какого номера звонить:</label>
            <select name="voip_number" id="callPhoneSelect" class="form-control mb-20">
                <option value="1281958">1281958 - Maksim Razbitski </option>
                <option value="1281968">1281968 - Julia Zaharowa</option>
                <option value="1281969">1281969 - Helena Razbicka</option>
                <option value="1281970">1281970 - Manager MCG wew</option>
                <option value="1282003">1282003 - iPhone 11 pro</option>
                <option value="1282971">1282971 - Diana Kowalewa</option>
                <option value="1282972">1282972 - iPhone SE </option>
            </select>
            <button id="goCallPhoneBtn">Позвонить</button>
            <div id="blockMessageFormPhone"></div>
        </div>
    </div>

    <div id="modalGoTransferCall" class="modal none">
        <div class="modal-content" id="insertTransferCall">
            <div class="close-modal" id="closeModalTransferCall">X</div>
            <p class="title-sms">Перенаправить звонок</p>
            <label>Активный номер:</label>
            <input type="text" disabled id="transferCallNumber">
            <label>Перенаправить на:</label>
            <select name="voip_number" id="transferCallSelect" class="form-control mb-20">
                <option value="1281958">1281958 - Maksim Razbitski </option>
                <option value="1281968">1281968 - Julia Zaharowa</option>
                <option value="1281969">1281969 - Helena Razbicka</option>
                <option value="1281970">1281970 - Manager MCG wew</option>
                <option value="1282003">1282003 - iPhone 11 pro</option>
                <option value="1282971">1282971 - Diana Kowalewa</option>
                <option value="1282972">1282972 - iPhone SE </option>
            </select>
            <button id="goCallPhoneBtn">Перенаправить</button>
            <div id="blockMessageTransferCall"></div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"
        integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw=="
        crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", (e) => {
        if (document.getElementById('sendSmsNumber')) {
            Inputmask({
                mask: "99999999999",
                placeholder: "",
                showMaskOnHover: true,
                showMaskOnFocus: false
            }).mask(document.getElementById('sendSmsNumber'));
        }
        if (document.getElementById('callPhoneNumber')) {
            Inputmask({
                mask: "99999999999",
                placeholder: "",
                showMaskOnHover: true,
                showMaskOnFocus: false
            }).mask(document.getElementById('callPhoneNumber'));
        }
        if (document.getElementById('transferCallNumber')) {
            Inputmask({
                mask: "99999999999",
                placeholder: "",
                showMaskOnHover: true,
                showMaskOnFocus: false
            }).mask(document.getElementById('transferCallNumber'));
        }

    });
    document.addEventListener('click', (e) => {
        console.log(e.target)
        if (e.target.id === 'goModalCall') {
            document.getElementById('modalGoCallPhone').classList.remove('none');
        }
        if (e.target.id === 'closeModalCallPhone') {
            document.getElementById('modalGoCallPhone').classList.add('none');
        }
        if (e.target.id === 'modalGoCallPhone') {
            document.getElementById('modalGoCallPhone').classList.add('none');
        }
        if (e.target.id === 'goCallPhoneBtn') {
           goCallPhone()
        }
        //
        if (e.target.id === 'goSmsSend') {
            document.getElementById('modalSms').classList.remove('none');
        }
        if (e.target.id === 'closeModalSms') {
            document.getElementById('modalSms').classList.add('none');
        }
        if (e.target.id === 'modalSms') {
            document.getElementById('modalSms').classList.add('none');
        }
        if (e.target.id === 'sendSmsBtn') {
            sendSms()
        }
    //     transfer
        if(e.target.classList.contains('transfer-call')){
            document.getElementById('transferCallNumber').value = e.target.dataset.transfer;
            document.getElementById('modalGoTransferCall').classList.remove('none');
        }
        if(e.target.id === 'closeModalTransferCall'){
            document.getElementById('modalGoTransferCall').classList.add('none');
        }
        if (e.target.id === 'modalGoTransferCall') {
            document.getElementById('modalGoTransferCall').classList.add('none');
        }

    })

    function sendSms() {
        const number = document.getElementById('sendSmsNumber');
        const message = document.getElementById('sendSmsMessage');
        const blockMessageForm = document.getElementById('blockMessageForm');
        const insertAnswerSms = document.getElementById('insertAnswerSms');
        console.log(number.value.length);
        console.log(message.value);
        if (number.value.length === 11 && message.value !== '') {

            blockMessageForm.innerHTML = '';
            $.ajax({
                url: "{{URL::to('/')}}/send-sms",
                type: "POST",
                data: {
                    number: number.value,
                    message: message.value,
                    _token: '{{csrf_token()}}',
                },
                success: function (res) {
                    if (res.status === true) {
                        insertAnswerSms.innerHTML = '<p class="success-send">Сообщение успешно отправлено</p>';
                        setTimeout(() => location.reload(), 1500);
                    } else {
                        blockMessageForm.innerHTML = '<p class="error-block">Ошибка, попробуйте позже..</p>';
                    }
                }
            });
        } else {
            blockMessageForm.innerHTML = '<p class="error-block">Не все поля заполнены</p>';
        }
    }

    function goCallPhone() {
        const number = document.getElementById('callPhoneNumber');
        const fromPhone = document.getElementById('callPhoneSelect');
        const blockMessageForm = document.getElementById('blockMessageFormPhone');
        const insertAnswerCallPhone = document.getElementById('insertAnswerCallPhone');
        if (number.value.length === 11) {

            blockMessageForm.innerHTML = '';
            $.ajax({
                url: "{{URL::to('/')}}/go-to-call",
                type: "POST",
                data: {
                    number: number.value,
                    fromPhone: fromPhone.value,
                    _token: '{{csrf_token()}}',
                },
                success: function (res) {
                    console.log(res)
                    if (res.status === true) {
                        insertAnswerCallPhone.innerHTML = '<p class="success-send">Вызов начнется после ответа на телефон!</p>';
                        setTimeout(() => location.reload(), 1500);
                    } else {
                        blockMessageForm.innerHTML = '<p class="error-block">Ошибка, попробуйте позже..</p>';
                    }
                }
            });
        } else {
            blockMessageForm.innerHTML = '<p class="error-block">Не все поля заполнены</p>';
        }
    }

    function goTransferCall() {
        const number = document.getElementById('transferCallNumber');
        const fromPhone = document.getElementById('transferCallSelect');
        const blockMessageForm = document.getElementById('blockMessageTransferCall');
        const insertTransferCall = document.getElementById('insertTransferCall');
        $.ajax({
            url: "{{URL::to('/')}}/transfer-call",
            type: "POST",
            data: {
                number: number.value,
                fromPhone: fromPhone.value,
                _token: '{{csrf_token()}}',
            },
            success: function (res) {
                console.log(res)
                // if (res.status === true) {
                //     insertTransferCall.innerHTML = '<p class="success-send">Вызов начнется после ответа на телефон!</p>';
                //     setTimeout(() => location.reload(), 1500);
                // } else {
                //     blockMessageForm.innerHTML = '<p class="error-block">Ошибка, попробуйте позже..</p>';
                // }
            }
        });
        // if (number.value.length === 11) {
        //
        //     blockMessageForm.innerHTML = '';
        //
        // } else {
        //     blockMessageForm.innerHTML = '<p class="error-block">Не все поля заполнены</p>';
        // }
    }
</script>