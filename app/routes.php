<!-- dalam file ini disimpan routing -->

<?php
route('', function () {
    return view('home');
});


route('get/user', function () {
    return view('user', ['users' => getAllUser()]);
});

route('get/user/{id}', function ($id) {
    return view('user', ['id' => $id, 'users' => getUser($id)]);
});

handleRoute();
