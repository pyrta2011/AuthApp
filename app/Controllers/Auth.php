<?php


namespace App\Controllers;


use App\Services\Router;

class Auth
{
    public function login($data) {
        $email = $data['email'];
        $password = $data['password'];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            exit('Пользователь не найден');
        }
        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION['user'] = [
                "user" => $user->id,
                "username" => $user->username,
                "avatar" => $user->avatar,
                "email" => $user->email,
                "group" => $user->group
            ];
            Router::redirect("/profile");
        } else {
            exit('Неверный логин или пароль!');
        }
    }

    public function register($data, $files) {
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        if ($password !== $password_confirm) {
            Router::error(505);
            exit;
        }

        $avatar = $files['avatar'];
        $filename = time() . '_' . $avatar['name'];
        $path = "uploads/avatars/" . $filename;

        if (move_uploaded_file($avatar['tmp_name'], $path)) {
            $user = \R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->group = 1;
            $user->avatar = '/' . $path;
            $user->password = password_hash ($password, PASSWORD_DEFAULT);


            \R::store($user);
            Router::redirect('/login');

        } else {
            Router::error(500);
        }
    }
    public function logout() {
        unset($_SESSION['user']);
        Router::redirect('/');
    }
}