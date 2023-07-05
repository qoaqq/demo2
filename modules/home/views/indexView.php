<?php

//show_array($list_users);
?>
<html>
    <head>
        <title>Danh sách thành viên</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <h1>Danh sách thành viên</h1>
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Tuổi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($list_users)) {
                    $t = 0;
                    foreach ($list_users as $user) {
                        $t ++;
                        ?>
                        <tr>
                            <td><?php echo $t; ?></td>
                            <td><?php echo $user[' '] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['age'] ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </body>
</html>
