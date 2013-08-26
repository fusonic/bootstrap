/**
 * Created with JetBrains PhpStorm.
 * User: chimmer
 * Date: 8/21/13
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

    $(".dropdown-menu a.checkbox.filter").click(function(e) {
        e.stopPropagation();
    });

});