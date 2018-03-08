<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8 0008
 * Time: 15:39
 */

?>

<style>
    table{

        border: 1px solid #21181c;
    }
    table tr td {
        border: 1px solid #21181c;
    }
</style>
<h1><?php echo $title?></h1>
<table>
    <tr>
        <td>名称</td>
        <td>图片</td>
        <td>排序</td>
        <td>操作</td>
    </tr>
    <?php foreach ($users as $user)?>
    <tr>
        <td><?= $user->name?></td>
        <td><?= $user->email?></td>
        <td><?= $user->email?></td>
        <td>
            <a href="">编辑</a>
            <a href="">删除</a>
        </td>
    </tr>
    <?php ?>

</table>
