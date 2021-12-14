var $els = document.querySelectorAll('#myDiv');
    for(i = 0; i < $els.length; i++) {
        if ($($els[i]).data('track') == 'hover') {
            $els[i].addEventListener('mouseover', function (e) {
                setTimeout(function() {
                    if ($($els[i]).is(':hover')) {
                        console.log('mouse is still over this element');
                    }
                }, 2000);
            });
        }
    }
