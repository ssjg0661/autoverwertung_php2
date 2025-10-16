
/*
|--------------------------------------------------------------------------
	STEP PROGRESS AND VALIDATION
|--------------------------------------------------------------------------
*/
console.log('bob');


var stickybar = document.querySelector(".fixed-nav");
var sticky = 0;
document.onscroll = function() {
    console.log('bob');
  if (window.pageYOffset >= sticky +100) {
    stickybar.style.position = "fixed";
    stickybar.style.top = 0;
  } else {
    stickybar.style.position = "unset";    
  }
};


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function nextStep2() {

  var hersteller = $("#hersteller").val();
  var zulassung = $("#zulassung").val();
  var kraftstoff = $("#kraftstoff").val();
  var modell = $("#modell").val();


  if( hersteller )
      $( ".validhersteller .help-block.with-errors" ).html( '' );
  else
      $( ".validhersteller .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Bitte Hersteller auswählen</li></ul>' );

  if( zulassung  )
      $( ".validzulassung .help-block.with-errors" ).html( '' );
  else
      $( ".validzulassung .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Bitte Erstzulassung wählen</li></ul>' );

  if( kraftstoff )
      $( ".validkraftstoff .help-block.with-errors" ).html( '' );
  else
      $( ".validkraftstoff .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Bitte Kraftstoffart auswählen</li></ul>' );

  if( modell )
      $( ".validmodell .help-block.with-errors" ).html( '' );
  else
      $( ".validmodell .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Bitte Modell eingeben</li></ul>' );


  if( modell.length > 0 && modell && hersteller && zulassung && kraftstoff  ) {
      $( "#section-1 .help-block.with-errors" ).html( '' );
      $( "#section-1" ).removeClass( "open" );
      $( "#section-1" ).addClass( "slide-left" );
      $( "#section-2" ).removeClass( "slide-right" );
      $( "#section-2" ).addClass( "open" );
  }
  else {
      $( "#section-1 .help-block.with-errors.mandatory-error" ).html( '<ul class="list-unstyled"><li>Füllen Sie die leeren Felder aus!</li></ul>' );
      $('html,body').animate({
              scrollTop: $("#section-1 .help-block.with-errors.mandatory-error").offset().top - 80},
          'slow');
  }

}
function previousStep1() {
  $( "#section-1" ).removeClass( "slide-left" );
  $( "#section-1" ).addClass( "open" );
  $( "#section-2" ).removeClass( "open" );
  $( "#section-2" ).addClass( "slide-right" );
}
function nextStep3() {

    var getriebe = $("#getriebe1").val();

  var kilome = $("#kilome").val();
  var additionalinfo = $("#additionalinfo").val().replace(/\n/g,"<br>");


  if( getriebe )
      $( ".validgetriebe .help-block.with-errors" ).html( '' );
  else
      $( ".validgetriebe .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Getriebearten auswählen</li></ul>' );

  if( kilome )
      $( ".validkilome .help-block.with-errors" ).html( '' );
  else
      $( ".validkilome .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Kilometerstand eingeben</li></ul>' );


  if(getriebe &&  kilome) {
      $( "#section-2 .help-block.with-errors.mandatory-error" ).html( '' );
      $( "#section-2" ).removeClass( "open" );
      $( "#section-2" ).addClass( "slide-left" );
      $( "#section-3" ).removeClass( "slide-right" );
      $( "#section-3" ).addClass( "open" );
  }
  else {
      $( "#section-2 .help-block.with-errors.mandatory-error" ).html( '<ul class="list-unstyled"><li>Füllen Sie die leeren Felder aus!</li></ul>' );
      $('html,body').animate({
              scrollTop: $("#section-2 .help-block.with-errors.mandatory-error").offset().top - 80},
          'slow');
  }

}
function previousStep2() {
  $( "#section-2" ).removeClass( "slide-left" );
  $( "#section-2" ).addClass( "open" );
  $( "#section-3" ).removeClass( "open" );
  $( "#section-3" ).addClass( "slide-right" );
}
function nextStep4() {

  var fname = $("#fname").val();
  var gender = $("#gender").val();
  var address = $("#address").val();
  var plz = $("#plz").val();
  var ort = $("#ort").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var validemail = isEmail(email);

  if( fname )
      $( ".validfname .help-block.with-errors" ).html( '' );
  else
      $( ".validfname .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Name eingeben</li></ul>' );

  if( gender )
      $( ".validgender .help-block.with-errors" ).html( '' );
  else
      $( ".validgender .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Anrede auswählen</li></ul>' );

  if( address )
      $( ".validaddress .help-block.with-errors" ).html( '' );
  else
      $( ".validaddress .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Straße eingeben</li></ul>' );

  if( plz )
      $( ".validplz .help-block.with-errors" ).html( '' );
  else
      $( ".validplz .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>PLZ eingeben</li></ul>' );

  if( ort )
      $( ".validort .help-block.with-errors" ).html( '' );
  else
      $( ".validort .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Ort eingeben</li></ul>' );


  if( validemail )
      $( ".validemail .help-block.with-errors" ).html( '' );
  else
      $( ".validemail .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Gültige E-Mail eingeben</li></ul>' );

  var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  if (filter.test(phone)) {
      $( ".validphone .help-block.with-errors" ).html( '' );
      var validphone = 1;
  }
  else{
      $( ".validphone .help-block.with-errors" ).html( '<ul class="list-unstyled"><li>Gültige Nummer eingeben</li></ul>' );
      var validphone = 0;
  }

  if( fname.length > 0 && fname && gender && address.length > 0 && address && plz.length > 0 && plz && ort.length > 0 && ort && validemail && phone.length > 4 && validphone > 0 ) {
      $( "#section-3 .help-block.with-errors.mandatory-error" ).html( '' );
      $( "#section-3" ).removeClass( "open" );
      $( "#section-3" ).addClass( "slide-left" );
      $( "#section-4" ).removeClass( "slide-right" );
      $( "#section-4" ).addClass( "open" );
  }
  else {
      $( "#section-3 .help-block.with-errors.mandatory-error" ).html( '<ul class="list-unstyled"><li>Füllen Sie die leeren Felder aus!</li></ul>' );
      $('html,body').animate({
              scrollTop: $("#section-3 .help-block.with-errors.mandatory-error").offset().top - 80},
          'slow');
  }

}
function previousStep3() {
  $("#section-3").removeClass("slide-left");
  $("#section-3").addClass("open");
  $("#section-4").removeClass("open");
  $("#section-4").addClass("slide-right");
}

/*
|--------------------------------------------------------------------------
End
|--------------------------------------------------------------------------
*/



// Get the current URL or page
var currentLocation = window.location.href;
// Find the navbar item that matches the current URL and add the "active" class
var navbarItems = document.querySelectorAll('.navbar-link');
var navbaractive = document.querySelectorAll('#navbar-menu .navbar-item');


for (var i = 0; i < navbarItems.length; i++) {
  if (navbarItems[i].href === currentLocation || navbarItems[i].href.replace('index.php', '') == currentLocation.replace('index.php', '') ) {
    navbarItems[i].classList.add('active');
    navbaractive[i].classList.add('underline') ;
  }else{
    navbarItems[i].classList.remove('active');
    navbaractive[i].classList.remove('underline') ;
  }
}

const navbar = document.querySelector("#navbar");
const navbarToggle = navbar.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};
navbarToggle.addEventListener("click", toggleNavbarVisibility);
navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);

const removefocus = navbar.querySelectorAll(".navbar-link");
removefocus.forEach((element) => {
  element.onclick = () => {
    if (isNavbarExpanded && !element.hasAttribute('id')) {
      toggleNavbarVisibility();
    }
  };
});


const detailsElements = document.querySelectorAll('details');
detailsElements.forEach((detailsElement) => {
  detailsElement.addEventListener('click', function () {
    detailsElements.forEach((element) => {
      if (element !== detailsElement) {
        element.removeAttribute('open');
      }
    });
  });
});



/*
|--------------------------------------------------------------------------
	Multi-Step-Form - PHP Multi Step Multipurpose Ajax Form Script Main JS
	Author: MGScoder
	Author URL: https://codecanyon.net/user/mgscoder
|--------------------------------------------------------------------------
*/
document.addEventListener("touchstart", function() {},false);
(function ($) {
    "use strict";

    $('span#mgsYear').html( new Date().getFullYear() );

    $(function(){

        var randNumber_1 = parseInt( Math.ceil( Math.random() * 15 ), 10 );
        var randNumber_2 = parseInt( Math.ceil( Math.random() * 15 ), 10 );
        humanCheckCaptcha(randNumber_1, randNumber_2);

    });
    function humanCheckCaptcha(randNumber_1, randNumber_2){
        $( "#humanCheckCaptchaBox" ).html( "Solve The Math " );
        $( "#firstDigit" ).html( '<input name="mathfirstnum" id="mathfirstnum" class="form-control" type="text" value="' + randNumber_1 + '" readonly>' );
        $( "#secondDigit" ).html( '<input name="mathsecondnum" id="mathsecondnum" class="form-control" type="text" value="' + randNumber_2 + '" readonly>' );
    }
   
    //attachment
    $(function() {

        $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        $(':file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.form-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });

    });

})(jQuery);


