/* // Set the date we're counting down to
const countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
const x = setInterval(function() {

    // Get todays date and time
    const now = new Date().getTime();
    
    // Find the distance between now an the count down date
    const distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.querySelector("#countdown").innerHTML =days + "days " + hours + "hours " + minutes + "minutes " + seconds + "seconds ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.querySelector("#countdown").innerHTML = "EXPIRED";
    }
}, 1000); */

/* ===================================== JQuery refaktorering =================================== */

$( document ).ready(function() {

// Set the date we're counting down to
const countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
const x = setInterval(function() {

    // Get todays date and time
    const now = new Date().getTime();
    
    // Find the distance between now an the count down date
    const distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $("#countdown").html(days + "days " + hours + "hours " + minutes + "minutes " + seconds + "seconds ");
    // Output the result in an element with id="demo"
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
            $("#countdown").innerHTML = "EXPIRED";
    }
}, 1000);

});



 