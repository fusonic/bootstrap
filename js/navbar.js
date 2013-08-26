/**
 * Created with JetBrains PhpStorm.
 * User: chimmer
 * Date: 8/12/13
 * Time: 9:48 AM
 * To change this template use File | Settings | File Templates.
 */

//declare global variables
var navbar;
var navbarChildrenList;
var navbarChildrenListWidth =[];
var navbarChildrenWidth = 0;
var moreDropdown;
var moreWidth;

var moveChildren = function () {
    var navbarWidth = navbar.width();
    // if child length too long
    if (navbarChildrenWidth > navbarWidth) {
        var currentChildrenWidth = moreWidth;
        var lenght = navbarChildrenList.length;
        var dropdownList = [];
        var navbarList = [];

        for (var i = 0; i < lenght; i++) {
            var nthChild = $(navbarChildrenList[i]);
            currentChildrenWidth += navbarChildrenListWidth[i];

            if (currentChildrenWidth <= navbarWidth) {
                navbarList.push(nthChild);
            } else {
                dropdownList.push(nthChild);
            }
        }

        navbar.prepend(navbarList);
        moreDropdown.children(".dropdown-menu").append(dropdownList);
        moreDropdown.show();
    }
    else {
        moreDropdown.hide();
        var dropdownChilds = moreDropdown.children(".dropdown-menu").children();

        if(dropdownChilds.length > 0)
        {
            navbar.append(dropdownChilds);
        }
    }
}

$(function () {
    // make tabs work
    $('#navbar a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    //initialize global variables
    navbar = $('#navbar');
    navbarChildrenWidth = 0;
    moreDropdown = $($('#navbar').children().last());
    moreWidth = moreDropdown.width();
    navbarChildrenList = $(navbar.children("li:not(.dropdown)"));

    //hide more dropdown, declare actual childs and get their length
    moreDropdown.hide();

    for (var i = 0; i < navbarChildrenList.length; i++) {
        var nthChildWidth = $(navbarChildrenList[i]).width();
        navbarChildrenWidth += nthChildWidth;
        navbarChildrenListWidth.push(nthChildWidth);
    }

    moveChildren();

    $(window).resize(function () {
        $.doTimeout( 'resize', 250, moveChildren);
    });
});