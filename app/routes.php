<?php
route('/', function () {
    view('home');
});

route('/login', function () {
    view('login', ['nama' => 'Super Admin']);
});
