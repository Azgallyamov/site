$(function () {
    
    var header = $ ("#header), 
                   introH= $ ("#intro").innerHeight(), scrolloffset = 0;
    
    $ (window).on("scroll", function(){
    
        scrolloffset = $ (this).scrollTop();
        
        if(scrolloffset >= introH){
            header.addClass("fixed");
        }  else {
            header.removeClass("fixed");
        }
    });
});