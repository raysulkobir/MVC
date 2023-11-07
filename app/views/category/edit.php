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
                        <div class="style">
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
                        <?php
                        echo @$data['msg'];
                        ?>
                        <form action="http://mvc.ra/category/update" method="post">
                            <?php
                            if (isset($data['category'])) {
                                foreach ($data['category'] as $category) { ?>
                                    <table>
                                        <tr>
                                            <td class="">Name:</td>
                                            <td class=""><input type="hidden" name="id" value="<?php echo $category['id'] ?>"></td>
                                            <td class=""><input type="text" name="name" value="<?php echo $category['name'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" value="Save"></td>
                                        </tr>
                                    </table>
                            <?php }
                            } ?>
                        </form>
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
                        <div class="style">
                            <h1>This is a footer</h1>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </section>
</body>

</html>