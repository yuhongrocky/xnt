<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8 0008
 * Time: 15:51
 */
?>

<h1><?php echo $title?></h1>
<table>
    <tr>
        <td>名称</td>
        <td>邮箱</td>
        <td>操作</td>
    </tr>
    <?php foreach ($users as $user)?>
        <tr>
            <td><?= $user->name?></td>
            <td><?= $user->email?></td>
            <td>
                <a href=""></a>
                <a></a>
            </td>
        </tr>
    <?php ?>

</table>
