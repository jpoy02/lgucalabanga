$('.rol-select').change(function (e) {
    let selectedOptions = this.value;
    if (selectedOptions == 'Others') {
        $('.rol-specify').addClass('active');
        gsap.from('.rol-specify', {
            opacity: 1,
            height: 0,
            duration: .3
        })
    } else {
        $('.rol-specify').val('');
        $('.rol-specify').removeClass('active');
    }
});

$('.proj-tenure-select').change(function (e) {
    let selectedOptions = this.value;
    if (selectedOptions == 'Temporary') {
        $('.proj-tenure-specify').addClass('active');
        gsap.from('.proj-tenure-specify', {
            opacity: 1,
            height: 0,
            duration: .3
        })
    } else {
        $('.proj-tenure-specify').val('');
        $('.proj-tenure-specify').removeClass('active');
    }
});

$('.existing-land-select').change(function (e) {
    let selectedOptions = this.value;
    if (selectedOptions == 'Agricultural' || selectedOptions == 'Others') {
        $('.existing-land-specify').addClass('active');
        gsap.from('.existing-land-specify', {
            opacity: 1,
            height: 0,
            duration: .3
        })
    } else {
        $('.existing-land-specify').val('');
        $('.existing-land-specify').removeClass('active');
    }
});

$('input[name=radio15]').change((e) => {

    if ($('input[name=radio15]:checked').val() == 'Yes') {
        $('.notice').each(function (index, element) {
            // element == this
            this.disabled = false;
        });
    } 
    else if ($('input[name=radio15]:checked').val() == 'No') {
        $('.notice').each(function (index, element) {
            // element == this
            this.disabled = true;
            this.value = '';
        });

        // const notice = document.querySelectorAll('.notice');
        // notice.forEach(notice => {
        //     notice.value = '';
        // });
    } 
})

