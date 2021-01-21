function clearSelected() {
    $('.star-rating a.zero-star').removeClass('zero-selected');
    $('.star-rating a.one-star').removeClass('current-rating');
    $('.star-rating a.two-stars').removeClass('current-rating');
    $('.star-rating a.three-stars').removeClass('current-rating');
    $('.star-rating a.four-stars').removeClass('current-rating');
    $('.star-rating a.five-stars').removeClass('current-rating');
}
 
function rateClick(num) {
    clearSelected();
    switch (num) {
        case 0:
            $('.star-rating a.zero-star').addClass('zero-selected');
            $('#rate').val('0');
            break;
        case 1:
            $('.star-rating a.one-star').addClass('current-rating');
            $('#rate').val('1');
            break;
        case 2:
            $('.star-rating a.two-stars').addClass('current-rating');
            $('#rate').val('2');
            break;
        case 3:
            $('.star-rating a.three-stars').addClass('current-rating');
            $('#rate').val('3');
            break;
        case 4:
            $('.star-rating a.four-stars').addClass('current-rating');
            $('#rate').val('4');
            break;
        case 5:
            $('.star-rating a.five-stars').addClass('current-rating');
            $('#rate').val('5');
            break;
    }
}
