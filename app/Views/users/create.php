<!DOCTYPE html>
<html>
<head>
    <title>Create Dosen</title>
</head>
<body>
    <h2>Create Dosen</h2>
    <form method="post" action="/users/create">
        <div>
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Role:</label>
            <select name="role_id">
                
                <option value="<?= $roles['id'] ?>"><?= $roles['role_name'] ?></option>
                
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
