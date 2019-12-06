//  AOS.init({
//   duration :1200,

// })




/*

$('#menuContainer').click(function(){
	$('.secondnav').toggle(1000)
	$('#menuContainer').toggleClass('open')
    $('#hide').toggle('fast')
});
$('#secli').click(function(){
	$('#secul').toggle('slow');
});
$('#subli').click(function(){
    $('#minili').toggle('slow');
})

$('#drpli').click(function(){
    $('#drpul').toggle('slow');
})
$('#secdrpli').click(function(){
    $('#secdrpul').toggle('slow');
})

*/
$('.request').click(function(){
$('#quote').toggleClass('hide1');
});
$(document).ready(function(){
    var duration = 2000;
$('#top').click(function(){
$('html,body').animate({scrollTop:0},duration);
});
$('#top1 ').click(function(){
$('html,body').animate({scrollTop:0},duration);
});

});


$('#showProducts').click(function(){
$('#productHiddenSection').toggle('slow');
});


$('#showTabletProducts').click(function(){
$('#tabletProductHiddenSection').toggle('slow');
});
$('#showMobileProducts').click(function(){
$('#hiddenMobileProductSection').toggle('slow');
});





window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("desklogo").style.width = "100px";
        document.getElementById("desklogo").style.marginTop = "-5px";

        document.getElementById("deskheader").style.paddingBottom = "0px";

    document.querySelector(".resize1").style.marginTop = "0px";
    document.querySelector(".resize2").style.marginTop = "0px";
    document.querySelector(".resize3").style.marginTop = "0px";
    document.querySelector(".resize4").style.marginTop = "0px";
    document.querySelector(".resize5").style.marginTop = "0px";
    document.querySelector(".resize6").style.marginTop = "0px";
    document.querySelector(".resize7").style.marginTop = "0px";
    document.querySelector(".resize8").style.marginTop = "0px";

  } else {
    document.getElementById("desklogo").style.width = "150px";
            document.getElementById("desklogo").style.marginTop = "5px";

            document.getElementById("deskheader").style.paddingBottom = "20px";

        document.querySelector(".resize1").style.marginTop = "15px";
        document.querySelector(".resize2").style.marginTop = "15px";
        document.querySelector(".resize3").style.marginTop = "15px";
        document.querySelector(".resize4").style.marginTop = "15px";
        document.querySelector(".resize5").style.marginTop = "15px";
        document.querySelector(".resize6").style.marginTop = "15px";
        document.querySelector(".resize7").style.marginTop = "15px";
        document.querySelector(".resize8").style.marginTop = "15px";

  }
}



    // Get the modal
var modal = document.getElementById("myModal");
//var appear = document.getElementById("quote");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }

 // if(event.target == appear)
  //{
  //  appear.style.marginRight = "-400px";
  //}
}



//function fade() {  
  //  var appear = document.getElementById("quote");
    //appear.style.marginRight = "0px";
//}
 //document.getElementById("close").addEventListener('click',()=>{
//var appear = document.getElementById("quote");
 //   appear.style.marginRight = "-400px";
//});



