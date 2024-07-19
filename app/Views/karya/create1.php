<!DOCTYPE html>
<html>
<head>
    <title>Create Karya</title>
</head>
<body>
    <h2>Create Karya</h2>
    <form method="post" action="/karya/create">
        <div>
            <label>Title:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>File Path:</label>
            <input type="text" name="file_path">
        </div>
        <div>
            <label>Tahun:</label>
            <input type="year" name="tahun">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>