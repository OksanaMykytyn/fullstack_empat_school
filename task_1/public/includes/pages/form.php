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

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $email = $_POST['email'];
  $password = $_POST['password'];
  echo "Ви авторизовані, $name";

  setcookie('name', $name);
  session_start();
  if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
  }

  $_SESSION['visits']++;
}
