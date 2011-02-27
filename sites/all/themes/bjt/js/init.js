$(function(){
    
    $('#search-theme-form').submit(function(ev){
        
        var input = $(this).find('input[type=text]');
        if(! input.val().match(/\S/))
            return input.focus() && false;
            
        return true;
    })
    
    if($.browser.mozilla){
        $('#page-content').find('applet, iframe').height($(window).height());
    }
    
    
});




     var _gaq = [['_setAccount', 'UA-21702153-1'], ['_trackPageview']];
     (function(d, t) {
      var g = d.createElement(t),
          s = d.getElementsByTagName(t)[0];
      g.async = true;
      g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g, s);
     })(document, 'script');
