<!-- dalam file ini disimpan routing -->

<?php
route('', function () {
    return view('home');
});


route('about', function () {
    return view('about', ['user' => getAllUser()]);
});

route('surat/masuk/', function () {
    return view('surat/masuk');
});

route('surat/masuk/{id}', function ($id) {
    return view('surat/masuk', ['id' => $id]);
});

handleRoute();
