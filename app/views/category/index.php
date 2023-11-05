<html>

<head>
    <title>page title</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="http://mvc.test/css/style.css">
    <script src="http://mvc.test/js/jquery.js"></script>
    <script src="http://mvc.test/js/jquery-ui.min.js"></script>

</head>

<body>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <header>
                    <div class="head">
                        <div class="stuyle">
                            <h1>This is a header</h1>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="contan">
                    <div class="styleCon">
                        <h1 class="headingOne">Categories List || <a href="http://mvc.test/category/create">Add</a></h1>
                        <table border="2">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['categories'] as $category) { ?>
                                    <tr>
                                        <td><?php echo $category['name'] ?></td>
                                        <td>
                                            <a href="">Edit</a> || <a href="">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <footer>
                    <div class="footer">
                        <div class="stuyle">
                            <h1>This is a footer</h1>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </section>
</body>

</html>