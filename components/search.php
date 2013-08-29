<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet/less" type="text/css" href="../less/bootstrap.less">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/less-1.4.1.min.js" type="text/javascript"></script>
    <script src="../js/alert.js" type="text/javascript"></script>
    <script src="../js/affix.js" type="text/javascript"></script>
    <script src="../js/button.js" type="text/javascript"></script>
    <script src="../js/carousel.js" type="text/javascript"></script>
    <script src="../js/collapse.js" type="text/javascript"></script>
    <script src="../js/dropdown.js" type="text/javascript"></script>
    <script src="../js/modal.js" type="text/javascript"></script>
    <script src="../js/popover.js" type="text/javascript"></script>
    <script src="../js/tab.js" type="text/javascript"></script>
    <script src="../js/scrollspy.js" type="text/javascript"></script>
    <script src="../js/tooltip.js" type="text/javascript"></script>
    <script src="../js/transition.js" type="text/javascript"></script>
</head>
<body>
<form method="get" action="search.php">
<!--Searchbar-->
<div class="panel panel-default preview-panel">
    <div class="panel-heading">Search Preview</div>
    <div id="preview-form">
        <form>
            <div class="input-group">
                <div class="input-group-btn input-group-btn-filter">
                    <a type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">All Content <i class="icon-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">
                            <input type="radio" name="0" value="check0" <?php echo (@$_GET[0] == "check0" || !isset($_GET[2]) ? "checked" : ""); ?>>
                            <i class="icon-ok"></i>All Categories
                        </a></li>
                        <li><a href="#">
                            <input type="radio" name="0" value="check1" <?php echo (@$_GET[0] == "check1" ? "checked" : ""); ?>>
                            <i class="icon-ok"></i>Ideas
                        </a></li>
                        <li><a  href="#">
                            <input type="radio" name="0" value="check2" <?php echo (@$_GET[0] == "check2" ? "checked" : ""); ?>>
                            <i class="icon-ok"></i>News
                        </a></li>
                        <li><a href="#">
                            <input type="radio" name="0" value="check3" <?php echo (@$_GET[0] == "check3" ? "checked" : ""); ?>>
                            <i class="icon-ok"></i>Wiki
                        </a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" name="keywords" placeholder="Search" value="<?php echo @$_GET['keywords']; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit"><i class="icon-search"></i></button>
                    </span>
            </div><!-- /input-group -->
        </form>
        <!--Searchbar-->
        <hr/>
        <!--Options Bar-->
        <div class="btn-group pull-right">
            <div class="btn-group input-group-btn-filter">
                <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i> All Categories <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">
                        <input type="radio" name="1" value="check0" <?php echo (@$_GET[1] == "check0" || !isset($_GET[2]) ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>All Categories
                    </a></li>
                    <li><a  href="#">
                        <input type="radio" name="1" value="check1" <?php echo (@$_GET[1] == "check1" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Ideas
                    </a></li>
                    <li><a  href="#">
                        <input type="radio" name="1" value="check2" <?php echo (@$_GET[1] == "check2" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>News
                    </a></li>
                    <li><a href="#">
                        <input type="radio" name="1" value="check3" <?php echo (@$_GET[1] == "check3" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Wiki
                    </a></li>
                </ul>
            </div>
            <div class="btn-group input-group-btn-filter">
                <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-sort-by-attributes"></i> Chronologic <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">
                        <input type="radio" name="2" value="check0" <?php echo (@$_GET[2] == "check0" || !isset($_GET[2]) ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Chronologic
                    </a></li>
                    <li><a  href="#">
                        <input type="radio" name="2" value="check1" <?php echo (@$_GET[2] == "check1" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>A-Z
                    </a></li>
                    <li><a href="#">
                        <input type="radio" name="2" value="check2" <?php echo (@$_GET[2] == "check2" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Z-A
                    </a></li>
                </ul>
            </div>
            <div class="btn-group input-group-btn-filter">
                <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-time"></i> All Time <i class="icon-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">
                        <input type="radio" name="3" value="check0" <?php echo (@$_GET[3] == "check0" || !isset($_GET[2]) ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>All Time
                    </a></li>
                    <li><a  href="#">
                        <input type="radio" name="3" value="check1" <?php echo (@$_GET[3] == "check1" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Last year
                    </a></li>
                    <li><a href="#">
                        <input type="radio" name="3" value="check2" <?php echo (@$_GET[3] == "check2" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Last month
                    </a></li>
                    <li><a href="#">
                        <input type="radio" name="3" value="check3" <?php echo (@$_GET[3] == "check3" ? "checked" : ""); ?>>
                        <i class="icon-ok"></i>Last week
                    </a></li>
                </ul>
            </div>
        </div>
</form>
            <!--Options Bar-->
        <div class="clearfix"></div>
            <!--Results-->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC" style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                    <small class="pull-right">Today</small>
                    <h4 class="media-heading">Title</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at porttitor eros. Nunc lobortis est et vehicula mattis. Maecenas ornare dolor nec semper congue.</div>
            </div>
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC" style="width: 64px; height: 64px;">
                </a>
                <div class="media-body">
                    <small class="pull-right">Yesterday</small>
                    <h4 class="media-heading">Title</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at porttitor eros. Nunc lobortis est et vehicula mattis. Maecenas ornare dolor nec semper congue.</div>
            </div>
        </div>
        <!--Results-->
</div>
</body>
    <script src="../js/search.js" type="text/javascript"></script>
    <script>
        $(function() {
            $("input[type='radio']").closest("a").click(function() {
                    $("form").submit();
            });
        });
    </script>
</html>