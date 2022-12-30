<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Portofolioku - Admin</title>
</head>
<body>
    <div class="container" id="ADMIN">
        <div class="row">
            <div class="col-2 admin-menu p-5">
                <div class="admin-header">Admin</div>
                <ul class="admin-list px-5 pt-3">
                    <li class="list-item"><a href="">Project List</a></li>
                    <li class="list-item"><a href="">Create Project</a></li>
                </ul>
            </div>
            <div class="col-8">
                @yield('admin-main')
            </div>
        </div>
    </div>
</body>
</html>