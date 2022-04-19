<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>season</th>
    </tr>
    <?php
    $host = 'localhost';
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = '';
    $db_name = 'List';
    $link = mysqli_connect($host, $user, $password, $db_name);
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $season = $_POST['season'];

        $query = "INSERT INTO listProduct SET name='$name', price='$price', season='$season'";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }
    $query = "SELECT * FROM listProduct";
    $result = mysqli_query($link, $query) or die( mysqli_error($link) );
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $result = '';
    foreach ($data as $elem) {
        $result .= '<tr>';

        $result .= '<td>' . $elem['id'] . '</td>';
        $result .= '<td>' . $elem['name'] . '</td>';
        $result .= '<td>' . $elem['price'] . '</td>';
        $result .= '<td>' . $elem['season'] . '</td>';

        $result .= '</tr>';
    }

    echo $result;
    ?>
</table>
<form action="" method="POST">
    <input name="name">
    <input name="price">
    <input name="season">
    <input type="submit" value="добавить продукт">
</form>