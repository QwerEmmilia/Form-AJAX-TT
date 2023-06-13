<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $name = $firstname . ' ' . $lastname;

    $usersList = [
        [
            'id'=> 1,
            'name'=> 'Name One',
            'email'=> 'userOne@gmail.com',
            'password' => 'passwordOne1'
        ],
        [
            'id'=> 2,
            'name'=> 'Name Two',
            'email'=> 'userTwo@gmail.com',
            'password' => 'passwordTwo2'
        ],
        [
            'id'=> 3,
            'name'=> 'Name Three',
            'email'=> 'userThree@gmail.com',
            'password' => 'passwordThree3'
        ]
    ];

    $response = array();

    foreach ($usersList as $user) {
        if ($user['email'] === $email) {
            $response['success'] = false;
            $response['message'] = 'Електронна пошта вже зайнята';
            echo json_encode($response);
            $log = 'Email: ' . $email . ', Перевірка: Помилка';
            file_put_contents('log.txt', $log . PHP_EOL, FILE_APPEND);
            exit();
        }
    }

    $log = 'Email: ' . $email . ', Перевірка: Успішно';
    file_put_contents('log.txt', $log . PHP_EOL, FILE_APPEND);

    $newUser = [
        'id' => count($usersList) + 1,
        'name' => $name,
        'email'=> $email,
        'password' => $password
    ];
    array_push($usersList, $newUser);

    $response['success'] = true;
    $response['message'] = 'Реестрація Успішна!';

    echo json_encode($response);

}

