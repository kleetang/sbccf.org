
$( "div#bgretreat" )
    .mouseover(function() {
        $( "#wholeretreat" ).fadeIn(600);
        $("div.retreatlink").hide();
        $( "#retreattitle" ).fadeIn(600);
})
$( "div#wholeretreat" )
    .mouseout(function() {
        $( "#wholeretreat" ).fadeOut(600);
        $("div.retreatlink").fadeIn(600);
        $( "#retreattitle" ).hide();
});
$( "div#bggc" )
    .mouseover(function() {
        $("#wholegc").fadeIn(600);
        $("div.gclink").hide();
        $("#gctitle").fadeIn(600);
})
$( "div#wholegc" )
    .mouseout(function() {
        $( "#wholegc" ).fadeOut(600);
        $("div.gclink").fadeIn(600);
        $( "#gctitle" ).hide();
});
$( "div#bgother" )
    .mouseover(function() {
        $( "#wholeother" ).fadeIn(600);
        $("div.otherlink").hide();
        $( "#othertitle").fadeIn(600);
})
$( "div#wholeother" )
    .mouseout(function() {
        $( "#wholeother" ).fadeOut(600);
        $("div.otherlink").fadeIn(600);
        $( "#othertitle").hide();
});
$( "div.eventlink" )
    .mouseenter(function(){
        $( "#eventword" ).hide();
    })
    .mouseleave(function() {
        $( "#eventword" ).fadeIn(100);
    }); 
