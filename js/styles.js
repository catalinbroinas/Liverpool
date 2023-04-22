$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
  $('[data-toggle="popover"]').popover()
})
$('.popover-dismiss').popover({
trigger: 'focus'
})
// popovers initialization - on hover
$('[data-toggle="popover-hover"]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});

// popovers initialization - on click
$('[data-toggle="popover-click"]').popover({
  html: true,
  trigger: 'click',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});

// call toLowerCase
function changeTextInLowerCase(nameId) {
  var x = document.getElementById(nameId);
  x.value = x.value.toLowerCase();
}

// click input button
function inputButtonClick(id) 
{
  id.value = "Se execută...";
}

function footerHide()
{
  document.getElementById("footer").style.display = "none";
}

function transparentNavbar(color)
{
  document.getElementById("navbar").style.backgroundColor = color; 
  document.getElementById("navbarBrand").style.color = "white"; 
  document.getElementById("navbarBrand").style.backgroundColor = color;

  const dropdown = document.getElementsByClassName("dropdown-menu");
  for(let i = 0; i < dropdown.length; i++)
  {
    dropdown[i].style.backgroundColor = color;
  }
}

function signInNavbar(mediaValue)
{
  if(mediaValue.matches)
  {
    transparentNavbar("transparent");
  }
  else
  {
    transparentNavbar("rgba(0, 0, 0, 0.5)");
  }
}

function displayContent(show, hide)
{
  let progress, color, bgColor;

  const showItems = document.getElementsByClassName(show);
  for(let i = 0; i < showItems.length; i++)
  {
    showItems[i].style.display = "block";
  }

  const hideItems = document.getElementsByClassName(hide);
  for(let j = 0; j < hideItems.length; j++)
  {
    hideItems[j].style.display = "none";
  }

  switch(show)
  {
    case 'personal':
      progress = 0;
      break;
    case 'acount':
      progress = 50;
        break;
    case 'finish':
      progress = 90;
        break;
    default:
      progress = 0;
  }

  switch(progress)
  {
    case 50:
      color = "rgba(0, 0, 0,0.5)";
      bgColor = "white";
      document.getElementById("personaleDatesIco").style.color = "white";
      document.getElementById("personaleDatesIco").style.backgroundColor = "green";
      document.getElementById("acountDatesIco").style.color = color;
      document.getElementById("acountDatesIco").style.backgroundColor = bgColor;
      document.getElementById("finishSignInIco").style.color = color;
      document.getElementById("finishSignInIco").style.backgroundColor = bgColor;
      document.getElementById("personaleDatesText").style.color = "#81c784";
      document.getElementById("acountDatesText").style.color = "white";
      document.getElementById("finishSignInText").style.color = "white"; 
      break;
    case 90:
      color = "white";
      bgColor = "green";
      document.getElementById("acountDatesIco").style.color = "white";
      document.getElementById("acountDatesIco").style.backgroundColor = "green";
      document.getElementById("finishSignInIco").style.color = "white";
      document.getElementById("finishSignInIco").style.backgroundColor = "green"; 
      document.getElementById("personaleDatesText").style.color = "#81c784";
      document.getElementById("acountDatesText").style.color = "#81c784";
      document.getElementById("finishSignInText").style.color = "white"; 
      break;
    default:
      color = "rgba(0, 0, 0,0.5)";
      bgColor = "white";
      document.getElementById("personaleDatesIco").style.color = color;
      document.getElementById("personaleDatesIco").style.backgroundColor = bgColor;
      document.getElementById("personaleDatesText").style.color = "white";
  }

  document.getElementById("signInProgressBarContent").valuenow = progress;
  document.getElementById("signInProgressBarContent").style.width = progress + "%";
  document.getElementById("signInProgressBarContent").style.transition = "all 2s";
  document.getElementById("personaleDatesIco").style.transition = "all 2s";
  document.getElementById("acountDatesIco").style.transition = "all 2s ease-out";
  document.getElementById("finishSignInIco").style.transition = "all 2s ease-in";
  document.getElementById("personaleDatesText").style.transition = "all 2s";
  document.getElementById("acountDatesText").style.transition = "all 2s";
}

function myDatesOfForms()
{
  let fname = document.getElementById("fName").value;
  let lname = document.getElementById("lName").value;
  let dateOfBirth = document.getElementById("dateOfBirth").value;
  let country = document.getElementById("country").value;
  let city = document.getElementById("city").value;
  let selectGender = document.getElementById('gender');
  let valueGender = selectGender.options[selectGender.selectedIndex].value;
  let emailAddress = document.getElementById("emailAddress").value;
  let phoneNumber = document.getElementById("phoneNumber").value;
  let role = document.getElementById("role");
  let key = document.getElementById("key").value;

  switch(valueGender)
  {
    case 'male':
      valueGender = "Masculin";
      break;
    case 'female':
      valueGender = "Feminin";
      break;
    case 'unspecified':
      valueGender = "Nespecificat";
      break;
    default:
      valueGender = "";
  }

  let myRole = (role.checked == true) ? "Administrator" : "Utilizator";

  let myKey;
  if(key)
  {
    myKey = key;
  }
  else
  {
    myKey = (role.checked == true) ? "" : "Standard";
  }

  document.getElementById("myfName").innerHTML = fname;
  document.getElementById("mylName").innerHTML = lname;
  document.getElementById("mydateOfBirth").innerHTML = dateOfBirth; 
  document.getElementById("mycountry").innerHTML = country;
  document.getElementById("mycity").innerHTML = city;
  document.getElementById("mygender").innerHTML = valueGender;
  document.getElementById("myemailAddress").innerHTML = emailAddress;
  document.getElementById("myphoneNumber").innerHTML = phoneNumber;
  document.getElementById("myrole").innerHTML = myRole;
  document.getElementById("myKey").innerHTML = myKey;
}

function handleChange(checkbox)
{
  let key = document.getElementById("key");
  let keyInput = document.getElementById("keyInput");
  let roleLabel = document.getElementById("roleLabel");

  if(checkbox.checked == true)
  {
    key.removeAttribute("disabled");
    keyInput.style.display = "block";
    roleLabel.style.color = "green";
  }
  else
  {
    key.setAttribute("disabled", "disabled");
    keyInput.style.display = "none";
    roleLabel.style.color = "white";
  }
}

function submitSignIn()
{
  document.getElementById("signInProgressBarContent").valuenow = 100;
  document.getElementById("signInProgressBarContent").style.width = "100%";
  document.getElementById("finishSignInText").style.color = "#81c784"; 
  document.getElementById("signInProgressBarContent").style.transition = "all 1s";
  document.getElementById("finishSignInText").style.transition = "all 2s"; 
}

function navbarDisplayByAuth(status)
{
  switch(status)
  {
    case 'admin':
      document.getElementById("cont").style.display = "none";
      document.getElementById("user").style.display = "block";
      document.getElementById("admin").style.display = "block";
      break;
    case 'user':
      document.getElementById("cont").style.display = "none";
      document.getElementById("user").style.display = "block";
      break;
    default:
      document.getElementById("cont").style.display = "block";
      document.getElementById("user").style.display = "none";
      document.getElementById("admin").style.display = "none";  
      break; 
  }
}

function displayUserDates(show)
{
  switch(show)
  {
    case 'myProfileDates':
      document.getElementById("myAddressDates").style.display = "none";
      document.getElementById("myAuthDates").style.display = "none";
      document.getElementById("myProfileDates").style.display = "block";
      break;
    case 'myAddressDates':
      document.getElementById("myProfileDates").style.display = "none";
      document.getElementById("myAuthDates").style.display = "none";
      document.getElementById("myAddressDates").style.display = "block";
      break;
    case 'myAuthDates':
      document.getElementById("myProfileDates").style.display = "none";
      document.getElementById("myAddressDates").style.display = "none";
      document.getElementById("myAuthDates").style.display = "block";
      break;
    default:
      document.getElementById("myAddressDates").style.display = "none";
      document.getElementById("myAuthDates").style.display = "none";
      document.getElementById("myProfileDates").style.display = "block";
      break;
  }
}

