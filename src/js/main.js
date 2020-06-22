// contact form
$(document).ready(function(){
    $('.toggle').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
    })
});

// Login
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');


$(document).ready(function(){
    $('#contact').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
})
});    


 // Select2
 $(document).ready(function() {            
    $(".js-select2-multi").select2({
        placeholder: "Choose account",
        closeOnSelect: false
});
});