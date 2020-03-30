import $ from 'jquery';

function UnCryptMailto(s) {
    var n = 0;
    var r = "";
    for ( var i = 0; i < s.length; i++) {
        n = s.charCodeAt(i);
        if (n >= 8364) {
            n = 128;
        }
        r += String.fromCharCode(n - 1);
    }
    return r;
}


$(function() {
  $("a[data-mailto]").on("click", function (event) {
    var data = $(this).data("mailto");
    location.href = UnCryptMailto(data);
    event.preventDefault();
  });
});

window.___gcfg = {lang: 'de'};
