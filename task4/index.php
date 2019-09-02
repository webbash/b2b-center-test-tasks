<?php

/**
 * @param string $userIds
 * @return array
 */
function load_users_data(string $userIds): array
{
    // Для того чтобы проверить что данные переданы верно без SQL-инъекций,
    // мы преобразуем каждый id в integer значение и дальше обратно преобразовываем в строку.
    $userIdsArray = explode(',', $userIds);
    $userIds = array_map('intval', $userIdsArray);
    $userIdsString = implode(',', $userIds);

    // Перенес получение пользователей в один запрос,
    // также ошибкой было постоянное подключение и отключение от базы данных в цикле.
    $db = mysqli_connect('localhost', 'root', '', "database");
    $sql = mysqli_query($db, "SELECT * FROM users WHERE id IN ($userIdsString)");

    $data = [];

    while ($obj = $sql->fetch_object()) {
        $data[] = $obj;
    }

    // Наконец закрываем соединение
    mysqli_close($db);

    return $data;
}

// Как правило, в $_GET['user_ids'] должна приходить строка

// с номерами пользователей через запятую, например: 1,2,17,48

$data = load_users_data($_GET['user_ids']);

foreach ($data as $user) {
    echo "<a href=\"/show_user.php?id={$user->id}\">{$user->name}</a>";
}
