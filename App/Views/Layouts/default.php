<!DOCTYPE html>
<thml>
<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="../../../public/css/bootstrap.css">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-md-center">
            <div class="table-responsive col-md-8">
                <div class="row">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><a href="/">Main page</a></li>
                        <?php if (isset($_SESSION['admin'])) : ?>
                        <li class="list-group-item"><a href="/upload">Upload list</a></li>
                        <li class="list-group-item">
                            <form action="/logout" method="post">
                                <button type="submit" name="logout">Logout</button>
                            </form>
                        </li>
                        <?php else: ?>
                        <li class="list-group-item"><a href="/login">login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="row">
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</thml>