<?php
route('', function () {
    view('home');
});

route('about', function () {
    view('about', ['nama' => 'Super Admin']);
});

route('about/{umur}', function ($umur) {
    view('about', ['nama' => 'Super Admin', 'umur' => $umur]);
});

handleRoute();
