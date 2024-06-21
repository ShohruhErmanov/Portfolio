@extends('layouts.site')
@section('content')
    @include('sections.about')
    @include('sections.education')
    @include('sections.portfolio')
    @include('sections.skills')
    @include('sections.exprience')
    @include('sections.contact')
@endsection
@section('js')
    <script>
        function alicoder() {
            let fname = document.getElementById('fname').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('massege').value;

            event.preventDefault();
            let telegram_bot_id = "6005697901:AAHdFwP1QJvtPjFQQ5pQlN7h8B6vAv5KafA";
            let chat_id = 5537637723; // 1111 o'rniga Habar borishi kerak bo'lgan ChatID
            let message = ` Ismi: ${fname}; \n Email: ${email}; \n Massege: ${password}`;
            let settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json",
                    "cache-control": "no-cache"
                },
                "data": JSON.stringify({
                    "chat_id": chat_id,
                    "text": message
                })
            };
            $.ajax(settings).done(function(response) {
                //    alert('Xabaringiz uchun rahmat!');
                window.location.href = '';
            });
            document.getElementById('fname').value = '';
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
            return false;
        };



    </script>
@endsection
