

window.addEventListener('scroll', function() {
    if (window.scrollY >= 200) {
        // User has scrolled 100 pixels or more
        console.log('User has scrolled 100 pixels or more');
        // Add your action here
        $('.top-header').hide();
        $('.bottom-header').show();
    }else{
        console.log('User has scrolled 0 pixels or more');
        $('.bottom-header').hide();
        $('.top-header').show();
    }
});