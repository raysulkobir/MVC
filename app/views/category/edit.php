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
                        <form action="http://mvc.test/category/update" method="post">
                            <table>
                                <tr>
                                    <td class="">Name:</td>
                                    <td class=""><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Save"></td>

                                </tr>
                            </table>
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