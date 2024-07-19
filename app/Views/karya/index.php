<!DOCTYPE html>
<html>
<head>
    <title>Manage Karya</title>
</head>
<body>
<h2>Manage Dokumen</h2>
<button onclick="window.location.href='/karya/create'" style="position: relative; top: -0.5rem;">Create New Karya</button>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>File Path</th>
            <th>Tahun</th>
            <th>Actions</th>
        </tr>
        <?php foreach($karya as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['title'] ?></td>
            <td><?= $item['description'] ?></td>
            <td><?= $item['file_path'] ?></td>
            <td><?= $item['tahun'] ?></td>
            <td>
                <a href="/karya/edit/<?= $item['id'] ?>">Edit</a>
                <a href="/karya/delete/<?= $item['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>