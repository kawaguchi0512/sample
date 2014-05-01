    <h>クーポン詳細</h>
    <br>
    <table width='75%' border='1'>
        <tr>
            <td><?php print('クーポンID'); ?></td>
            <td><?php print(htmlspecialchars($ret['brand']['id'])); ?></td>
        </tr>
        <tr>
            <td><?php print('クーポン名'); ?></td>
            <td><?php print(htmlspecialchars($ret['coupon']['name'])); ?></td>
        </tr>
        <tr>
            <td><?php print('クーポン公開開始日'); ?></td>
            <td><?php print(htmlspecialchars($ret['brand']['public_started'])); ?></td>
        </tr>
        <tr>
            <td><?php print('クーポン公開終了日'); ?></td>
            <td><?php print(htmlspecialchars($ret['brand']['public_ended'])); ?></td>
        </tr>
        <tr>
            <td><?php print('ブランド名'); ?></td>
            <td><?php print(htmlspecialchars($ret['brand']['name'])); ?></td>
        </tr>
    </table>
