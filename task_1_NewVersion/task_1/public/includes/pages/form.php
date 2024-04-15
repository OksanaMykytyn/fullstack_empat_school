<div class="container">
  <h1>Форма</h1>
  <form action="#" method="POST">
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" placeholder="Введіть ваше ім'я">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Введіть ваш email">

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" placeholder="Введіть ваш пароль">

    <button type="submit" name="submit">Відправити</button>
  </form>
</div>

<?php

require_once '../request.php';

if ($request->post('submit')) {
  $name = htmlspecialchars($request->post('name'));
  $email = $request->post('email');
  $password = $request->post('password');
  echo "Ви авторизовані, $name";

  if (!$request->getSession('session_id')) {
    $request->startSession();
    $request->setSession('session_id', '23456789');
    $request->setCookie('session_id', '23456789');
  }
}
