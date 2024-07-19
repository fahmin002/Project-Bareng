<!DOCTYPE html>
<html>
<head>
    <title>Create Karya</title>
</head>
<body>
    <h2>Create Karya</h2>
    <?php if(isset($validation)): ?>
        <div><?= $validation->listErrors() ?></div>
    <?php endif; ?>
    <form method="post" action="/karya/create" enctype="multipart/form-data">
        <div>
            <label>Title:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Tahun:</label>
            <input type="year" name="tahun">
        </div>
        <div>
            <label>Upload File:</label>
            <input type="file" name="file">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
