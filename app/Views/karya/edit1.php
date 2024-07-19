<!DOCTYPE html>
<html>
<head>
    <title>Edit Karya</title>
</head>
<body>
    <h2>Edit Karya</h2>
    <form method="post" action="/karya/edit/<?= $karya['id'] ?>">
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="<?= $karya['title'] ?>">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"><?= $karya['description'] ?></textarea>
        </div>
        <div>
            <label>File Path:</label>
            <input type="text" name="file_path" value="<?= $karya['file_path'] ?>">
        </div>
        <div>
            <label>Tahun:</label>
            <input type="year" name="tahun">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>