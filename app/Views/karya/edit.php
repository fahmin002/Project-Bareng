<!DOCTYPE html>
<html>
<head>
    <title>Edit Karya</title>
</head>
<body>
    <h2>Edit Karya</h2>
    <?php if(isset($validation)): ?>
        <div><?= $validation->listErrors() ?></div>
    <?php endif; ?>
    <form method="post" action="/karya/edit/<?= $karya['id'] ?>" enctype="multipart/form-data">
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="<?= $karya['title'] ?>">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"><?= $karya['description'] ?></textarea>
        </div>
        <div>
            <label>Tahun:</label>
            <input type="year" name="tahun">
        </div>
        <div>
            <label>Upload File:</label>
            <input type="file" name="file">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
