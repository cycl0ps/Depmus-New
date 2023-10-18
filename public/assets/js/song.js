/*!
 * Custom Javascript for Bootstrap
 * 
 * Crafted by: 
 * Xaverius Najoan      xnajoan@gmail.com
 * 
 *
 *
 */
 
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});

$(function () { 

    $(".clickable-row").click(function() {
        window.location = $(this).data("url");
    });

    $('.tabelLagu').DataTable({
        responsive: true,
        "pageLength": 100,
        "order": [],
        "columnDefs": [
            {
                "targets": [ 2 ],
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": true
            }
        ]        

    });    
    
    setTheme(baseUrl);

});

function getMode() {
    var currentTime = new Date();
    var hours = currentTime.getHours();

    if (hours > 6 && hours < 18) mode = "day"; else mode = "night";
    return mode;
}

function setTheme(baseUrl) {
    var mode = getMode();

    var css = (mode == "day") ? "cosmo.min.css" : "dark.min.css";
    css = baseUrl + 'assets/css/' + css;
    $("head link#theme").attr("href", css);

}

