<title>クーポン一覧画面</title>

    <h>クーポン一覧</h>
    <br>
    <table width='75%' border='1'>
        <tr>
            <th scope="col">クーポンID</th>
            <th scope="col">クーポン名</th>
        </tr>
        <?php
        foreach ($ret as $row) {
        ?>
        <tr>
            <td><?php print(htmlspecialchars($row['id'])); ?></td>
            <td><?php print(htmlspecialchars($row['name'])); ?></td>
        </tr>
        <?php
		}
        ?>
    </table>
