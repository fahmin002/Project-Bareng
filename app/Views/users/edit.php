<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="/users/edit/<?= $user['id'] ?>">
        <div>
            <label>Username:</label>
            <input type="text" name="username" value="<?= $user['username'] ?>">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Role:</label>
            <select name="role_id">
                
                <option value="<?= $roles['id'] ?>" <?= ($user['role_id'] == $roles['id']) ? 'selected' : '' ?>><?= $roles['role_name'] ?></option>
                
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
