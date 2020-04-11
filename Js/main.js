

$('.category a').on('click',function(event)
{
    if(this.hash!==' '){
event.preventDefault();
const hash = this.hash;
$('html,body').animate(
    {

        scrollTop: $(hash).offset().top-100
    },
800
);
    }

});


$(function(){
        
    function setHeight(){
        $(".response").each(function(index,element){
            var target = $(element);
            target.removeClass("fixed-height");
            var height = target.innerHeight();
            target.attr("data-height", height)
                  .addClass("fixed-height");
        });
    };
    
    $("input[name=question]").on("change", function(){
        $("p.response").removeAttr("style");
        
        var target = $(this).next().next();
        target.height(target.attr("data-height"));
    })
    
    setHeight();
});