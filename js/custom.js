
// Menu Toggle Script

$('.navbar-toggler').click(function() {
    $('#sidebar-wrapper').toggle( "slow" );
    $('.navbar-toggler-icon').toggleClass('icon-close');
});


// Save open tab in Bootstrap Tabs

    $(function($){
    var storage = localStorage.getItem('nav-tabs');
    if (storage && storage !== "#") {
    $('.nav-tabs a[href="' + storage + '"]').tab('show');
}

    $('ul.nav li').on('click', function() {
    var id = $(this).find('a').attr('href');
    localStorage.setItem('nav-tabs', id);
});
});


// Show or hide form block

    $('input[name="provide"]').click(function(){
    var target = $(this).val();
    if (target === "no") {
    $('#finantion-data-invest').hide('slow');
} else if (target === "yes"){
    $('#finantion-data-invest').show('slow');
}
});
    //
    $('input[name="incasso"]').click(function(){
    var target = $(this).val();
    if (target === "1") {
    $('#incasso-form').hide('slow');
} else if (target === "0"){
    $('#incasso-form').show('slow');
}
});

// Script that calls the modal after loading the page
$(document).ready(function() {
    $("#myModalBox").modal('show');
});

//  adding custom Bootstrap tooltips
$(function () {
    $('[title]').tooltip();
});
