<h3>Tên lớp <?= $grade->name ?></h3>
<div>Giá khoá học <?= number_format($grade->pricing) ?> đ</div>
<div>Thời gian : <?= $grade->minutes ?> phút</div>
<hr>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Lesson</th>
        <th>Information</th>
        <th>Question</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($grade->logs as $log) { ?>
        <tr>
            <td ><?= $log->id ?></td>
            <td><?= $log->lesson ?></td>
            <td><?= $log->information ?></td>
            <td><?= $log->question ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

