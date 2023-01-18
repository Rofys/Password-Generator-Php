<html>

<head>
    <title>Password Generator</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="robots" content="none" />
    <meta name='viewport' content='width=device-width, minimum-scale=1, maximum-scale=1'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=cyrillic,latin' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #605756;
            margin: 0;
            padding: 0;
            background-color: #F3ECD8;
        }

        .night {
            z-index: -1;
            width: 100%;
            top: 0;
            position: fixed;
            height: 30%;
            background-color: #3F373D;
        }

        .modal-body>form>input,
        .modal-body>form>div {
            margin-top: 10px;
        }
    </style>

<body>

    <div class="night"></div>

    <div class="modal" style="display: block !important; opacity: 100;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Password Generator</h5>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">
                        <label class="form-check-label" for="defaultCheck1">
                            Count of symbols
                        </label>
                        <input type='number' name='countOfSymbols' class='form-control'  min = '5' max=50 value ="<?= $_POST['countOfSymbols']?>">
                        <label class="form-check-label" for="defaultCheck1">
                            Count of password
                        </label>
                        <input type='number' name='countOfPasswords' class='form-control'  max=50 value ="<?= $_POST['countOfPasswords']?>">
                        <div class="form-check">
                          
                            <input class="form-check-input" type="checkbox" value="upperEng" name="upperEng" checked>
                            <label class="form-check-label" for="defaultCheck1">
                                Upper ENG
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if (isset($_POST['lowerEng'])) {
                                echo '<input class="form-check-input" type="checkbox" value="lowerEng" name="lowerEng" checked="checked">';
                            } else {
                                echo '<input class="form-check-input" type="checkbox" value="lowerEng" name="lowerEng">';
                            } ?>

                            <label class="form-check-label" for="defaultCheck1">
                                Lower ENG
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if (isset($_POST['specSymb'])) {
                                echo '<input class="form-check-input" type="checkbox" value="specSymb" name="specSymb" checked="checked">';
                            } else {
                                echo '<input class="form-check-input" type="checkbox" value="specSymb" name="specSymb">';
                            } ?>
                            <label class="form-check-label" for="defaultCheck1">
                                Spec Symbols
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if (isset($_POST['digitals'])) {
                                echo '<input class="form-check-input" type="checkbox" value="digitals" name="digitals" checked="checked">';
                            } else {
                                echo '<input class="form-check-input" type="checkbox" value="digitals" name="digitals">';
                            } ?>
                            <label class="form-check-label" for="defaultCheck1">
                                Digital
                            </label>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Generate Password"></button>
                    </form>
                    <?php
                    echo include 'form.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>