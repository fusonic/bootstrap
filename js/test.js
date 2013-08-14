/**
 * Created with JetBrains PhpStorm.
 * User: chimmer
 * Date: 8/12/13
 * Time: 9:48 AM
 * To change this template use File | Settings | File Templates.
 */

$(function() {

    var search = {
        addElement: function(id) {

            $( "#" + id + " a").on("click", function() {
                var text = $(this).html();
                var preseveHtml = $("#" + id + " button i").prop('outerHTML');
                $("#" + id + " button").html(text + " " ).append(preseveHtml);
            });
        }
    }

    search.addElement("categories");
    search.addElement("relevance");
    search.addElement("time");

    $('#navbar a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    var list = $("#navbar");
    var listItems = list.children();

    var maxSize = 5;
    var actualSize = listItems.size();

    if(actualSize > maxSize) {

        var items = "";
        console.log("I GOT: MAXSIZE: "+maxSize+" ACTUALSIZE:"+actualSize);
        for (var i = maxSize; i < actualSize; i++ ) {
            var listItem = listItems[i];
            listItem.firstChild.setAttribute("data-toggle", "tab");
            items += listItem.outerHTML;
            listItem.remove();
        }

        list.append(
            "<li class=\"dropdown\">" +
        "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More <b class=\"caret\"></b></a>" +
        "<ul class=\"dropdown-menu\">" + items + "</ul> </li>"
        );
    }
});