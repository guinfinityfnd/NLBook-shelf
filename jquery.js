$(document).ready(function() {
    $('.myBtn').click(function (params) {
        var change = $(this).parent().toggleClass('getit');
        $(this).parent().children('#more').toggle();
        var check_first= change.hasClass('getit');
        let check = check_first ? 'Read Less' : 'Read More';
        $(this).text(check);
        if(check_first){
            $(this).parent().children('span#dots').css('display','none');
        }else{
            $(this).parent().children('span#dots').css('display','inline');
        };
        
    });
});                                            
            let ele = document.body;
            function changeMode(params) {
                ele.classList.toggle('dark-mode');                    
            };     