/**
 * Created with JetBrains PhpStorm.
 * User: chimmer
 * Date: 8/21/13
 * Time: 9:48 AM
 * To change this template use File | Settings | File Templates.
 */
$(function() {

    $(".input-group-btn-filter").each(function()
    {
        var filterContainer = $(this);
        var checkboxes = filterContainer.find(".dropdown-menu a");

        var fixTextFunc = function()
        {
            var text = checkboxes.has("input:checked").text();

            var preseveHtml = filterContainer.find(".btn i").prop('outerHTML');
            if(preseveHtml=="<i class=\"icon-caret-down\"></i>"){
                preseveHtml="";
            }
            filterContainer.find(".btn").html(preseveHtml + " " + text + " " + " "+ "<i class=\"icon-caret-down\"></i>");
        };

        checkboxes.on("click", function(e)
        {
            var qJueryThis = $(this);
            qJueryThis.children()[0].checked = true;

            fixTextFunc();
            e.preventDefault();
        });

        fixTextFunc();
    });
/*
    var search = {
        addElement: function(id) {
            var checkbox = $( "#" + id + " a.checkbox");
            checkbox.on("click", function() {
                var qJueryThis = $(this);
                qJueryThis.children()[0].checked = !qJueryThis.children()[0].checked;
            });
            checkbox.on("click", function() {
                var text = $(this).text();
                var preseveHtml = $("#" + id + " a.btn i").prop('outerHTML');
                if(preseveHtml=="<i class=\"icon-caret-down\"></i>"){
                    preseveHtml="";
                }
                $("#" + id + " a.btn").html(preseveHtml + " " + text + " " + " "+ "<i class=\"icon-caret-down\"></i>");
            });
        }
    }
    search.addElement("categories");
    search.addElement("relevance");
    search.addElement("time");
    search.addElement("filter");

    $(".dropdown-menu a.checkbox.filter").click(function(e) {
        e.stopPropagation();
    });
*/
});