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
    /*
    $( "#options a").on("click", function() {
        var $text = $(this).html();



        var $button = $(this).parents("button");
        console.log($text);
        console.log($button);
        $button.html($text);
        $button.append(" <i class=\"icon-sort-by-attributes\"></i>");
    });
    */
});