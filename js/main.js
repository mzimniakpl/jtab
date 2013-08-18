//$(function () {
//    var availableTags = [
//        "ActionScript",
//        "AppleScript",
//        "Asp",
//        "BASIC",
//        "C",
//        "C++",
//        "Clojure",
//        "COBOL",
//        "ColdFusion",
//        "Erlang",
//        "Fortran",
//        "Groovy",
//        "Haskell",
//        "Java",
//        "JavaScript",
//        "Lisp",
//        "Perl",
//        "PHP",
//        "Python",
//        "Ruby",
//        "Scala",
//        "Scheme"];
//    $("#tags").autocomplete({
//        source: availableTags,
//        minLength: 2,
//    }).blur(function (event) {
//        var val = $(this).val();
//        if (val !== "" && $.inArray(val, availableTags) == -1) {
//            // no leaving with bad input
//            $(this).focus().addClass('badInput');
//        }
//    }).keydown(function () {
//        $(this).removeClass('badInput');
//    })
//
//});