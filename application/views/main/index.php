<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    
    <title>Confess Your Mess</title>

    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <link rel='stylesheet' href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel='stylesheet' href="<?php echo base_url('assets/style.css'); ?>">

    <script src="https://use.fontawesome.com/e8b94609dc.js"></script>
</head>

<body>

    <nav class="grey darken-2" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Confess Your Mess</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">About</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="#">Submit</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="#">Read</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Read</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div class="section" id="index-banner" style="margin-top: 250px;">
        <div class="container main-section" style="display: none;">
            <br>
                <div class="row center" style="padding: 0 20px 0 20px">
                    <h5 class="header col s12 light" id="confession_text"></h5>
                </div>

                <div class="row center">
                    <button type="button" class="waves-effect waves-light btn" style="border-radius: 10px;" id="read_another">Read Another</button>
                </div>

                <div class="row right" style="margin-right: 20px;">
                <p id="date_posted"></p>
            </div>
            <br><br>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

    <script src="<?php echo base_url('assets/main.js'); ?>"></script>
</body>
</html>