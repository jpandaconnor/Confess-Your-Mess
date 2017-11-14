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

    <nav class="" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Confess Your Mess</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">About</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a class="modal-trigger" href="#submit_confession_modal" id="submit_down_nav">Submit</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('main/'); ?>">Read</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="<?php echo base_url('main/'); ?>">Read</a></li>
                <li><a class="modal-trigger" href="#submit_confession_modal" id="submit_side_nav">Submit</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <!-- Modal stuff here for importing in later on !-->

    <main>
        <div id="submit_confession_modal" class="modal">
            <div class="modal-content">
                <h4>Add a confession</h4>
                <form name="confess_form" id="confess_form" class="col s12" method="" action="">
                    <br>
                    <div class="input-field col s12">
                        <input placeholder="" id="confession_to_send" name="confession_to_send" type="text" class="validate">
                        <label for="confession_to_send">Confession</label>
                    </div>

                    <br>

                    <center><button class="btn green waves-effect waves-light" type="submit">Submit Confession<i class="material-icons right">playlist_add</i></button></center>

                    <br>

                </form>
            </div>
        </div>

        <div class="section" id="index-banner" style="margin-top: 250px;">
            <div class="container main-section" style="display: none;">
                <br>
                <div class="row center" style="padding: 0 20px 0 20px">
                    <h5 class="header col s12 light" id="confession_text"></h5>
                </div>

                <div class="row center">
                    <button type="button" class="waves-effect waves-light btn" style="border-radius: 10px; background-color: #c50000" id="read_another">Read Another</button>
                </div>

                <div class="row right" style="margin-right: 20px;">
                    <p id="date_posted"></p>
                </div>
                <br><br>

            </div>
        </div>
    </main>

    <footer class="page-footer" style="">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Confess your mess</h5>
                    <p class="grey-text text-lighten-4">Thank you for visiting Confess Your Mess. </p>
                    <p class="grey-text text-lighten-4">I hope you enjoy using this fun project that I've created. See the links alongside for more information.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Media</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://www.jpanda.org">Website</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/jpandaorg">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="mailto:connor@jpanda.org">Email</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                ©<?php echo date('Y'); ?> JPanda
                <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

    <script src="<?php echo base_url('assets/main.js'); ?>"></script>
</body>
</html>