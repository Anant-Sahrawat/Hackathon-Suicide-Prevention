
$("#scrolldown").click(function() {
  $('html,body').animate({
    scrollTop: $("#contactus").offset().top
  },2500);
});

// scroll to top

$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('#toTop').fadeIn();
  } else {
      $('#toTop').fadeOut();
  }
});

$("#toTop").click(function() {
  $("html, body").animate({scrollTop: 0}, 1000);
});

$("#know_more").click(function() {
  $('html,body').animate({
    scrollTop: $("#menu").offset().top
  },2500);
});

// -------------- Basic Form Validation -------------------------------------------
function isNumberKey(evt) // for ristrict the user to enter only number in textbox in the form.
{
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode != 46 && charCode > 31 
     && (charCode < 48 || charCode > 57))
      return false;
   return true;
}
function noCharacters(event) // Ristrict the user to paste characters in numeric field
{  
  var that = event.target;
  that.style.color = "#fff";
  setTimeout(function() {
      that.value = that.value.replace(/\D/g, "");
      that.style.color = "#000";
  }, 20);               
};

function Email() /* It validates  Email field */ {
  var email = document.getElementById("email").value;
  var atposition = email.indexOf("@");
  var dotposition = email.lastIndexOf(".");

  if (email.length == 0) /* Empty field */ {
    document.getElementById("email").style = " border:1px solid red ";
    document.getElementById("emailerror").innerHTML = "Email ID is required";
    document.getElementById("emailerror").style = "visibility:visible;color:red";
    document.getElementById("email").value;
    return false;
  }
  if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length)  /* Pattern of email */ {
    document.getElementById("email").style = " border:1px solid red ";
    document.getElementById("emailerror").innerHTML = "Enter valid email ";
    document.getElementById("emailerror").style = "visibility:visible;color:red";
    document.getElementById("email").value;
    return false;
  }
  document.getElementById("email").style = " ";
  document.getElementById("email").value;
  document.getElementById("emailerror").style = "display:none";
  return true;
}
function Name() {

  var name = document.getElementById("name").value;
  if (name.length == 0) {
    document.getElementById("name").style = " border:1px solid red ";
    document.getElementById("nameerror").innerHTML = "Name is required";
    document.getElementById("nameerror").style = "visibility:visible;color:red";
    document.getElementById("name").value;
    return false;
  }
  document.getElementById("name").style = " ";
  document.getElementById("name").value;
  document.getElementById("nameerror").style = "display:none";
  return true;
}
function DOB() {

  var dob = document.getElementById("dob").value;
  if (dob.length == 0) {
    document.getElementById("dob").style = " border:1px solid red ";
    document.getElementById("doberror").innerHTML = "Date of Birth is required";
    document.getElementById("doberror").style = "visibility:visible;color:red";
    document.getElementById("dob").value;
    return false;
  }
  document.getElementById("dob").style = " ";
  document.getElementById("dob").value;
  document.getElementById("doberror").style = "display:none";
  return true;
}
function Address() {

  var address = document.getElementById("address").value;
  if (address.length == 0) {
    document.getElementById("address").style = " border:1px solid red ";
    document.getElementById("addresserror").innerHTML = "Residential Address is required";
    document.getElementById("addresserror").style = "visibility:visible;color:red";
    document.getElementById("address").value;
    return false;
  }
  document.getElementById("address").style = " ";
  document.getElementById("address").value;
  document.getElementById("addresserror").style = "display:none";
  return true;
}
function Education() {

  var education = document.getElementById("education").value;
  if (education.length == 0) {
    document.getElementById("education").style = " border:1px solid red ";
    document.getElementById("educationerror").innerHTML = "Education Qualification is required";
    document.getElementById("educationerror").style = "visibility:visible;color:red";
    document.getElementById("education").value;
    return false;
  }
  document.getElementById("education").style = " ";
  document.getElementById("education").value;
  document.getElementById("educationerror").style = "display:none";
  return true;
}
function Occupation() {

  var occupation = document.getElementById("occupation").value;
  if (occupation.length == 0) {
    document.getElementById("occupation").style = " border:1px solid red ";
    document.getElementById("occupationerror").innerHTML = "Occupation is required";
    document.getElementById("occupationerror").style = "visibility:visible;color:red";
    document.getElementById("occupation").value;
    return false;
  }
  document.getElementById("occupation").style = " ";
  document.getElementById("occupation").value;
  document.getElementById("occupationerror").style = "display:none";
  return true;
}
function Contact() {

  var no = document.getElementById("contact").value;
  if (no.length == 0) {
    document.getElementById("contact").style = " border:1px solid red ";
    document.getElementById("contacterror").innerHTML = "Contact Number is required";
    document.getElementById("contacterror").style = "visibility:visible;color:red";
    document.getElementById("contact").value;
    return false;
  }
  if (no.length < 10) {
    document.getElementById("contact").style = " border:1px solid red ";
    document.getElementById("contacterror").innerHTML = "Contact Number must be of 10 digit";
    document.getElementById("contacterror").style = "visibility:visible;color:red";
    document.getElementById("contact").value;
    return false;
  }
  document.getElementById("contact").style = " ";
  document.getElementById("contact").value;
  document.getElementById("contacterror").style = "display:none";
  return true;
}
function checkform(event) {
  Name(); Email(); Contact(); DOB(); Education(); Occupation(); Address();
  if (Name() == true && Email() == true && Contact() == true && DOB() == true && Education() == true
    && Occupation() == true && Address() == true) {
    return true;
  }
  else if (Name() == false) { document.getElementById("name").focus(); }
  else if (Email() == false) { document.getElementById("email").focus(); }
  else if (Contact() == false) { document.getElementById("contact").focus(); }
  else if (DOB() == false) { document.getElementById("dob").focus(); }
  else if (Education() == false) { document.getElementById("education").focus(); }
  else if (Occupation() == false) { document.getElementById("occupation").focus(); }
  else if (Address() == false) { document.getElementById("address").focus(); }
  else return false;
  event.preventDefault();
}

/*for image modal*/
$(document).ready(function () {
  $('#imageModal').on('show.bs.modal', function (e) {
          var image = $(e.relatedTarget).attr('alt');
     var path="./image-lg/"+image;
      $(".img").attr("src", path);
   });
});

/* for popup modal alert on the index page*/
function timerPopover(){
  var activeTab = localStorage.getItem('activeTab');
      
  if (activeTab) {
     
  }else{
    setTimeout(function(){ $('#waitForm').modal('show');}, 2000);
  }
}

$(document).ready(function(){
  $('#waitForm').on('show.bs.modal', function(e) {
          localStorage.setItem('activeTab', 1);
      });
});

$("#fixedbutton").on('click',function(){
  $('#waitForm').modal('show');
});