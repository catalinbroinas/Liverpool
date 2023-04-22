function thisMonthJS()
{
  let month;
  switch (new Date().getMonth()) 
  {
  case 0:
    month = "Ianuarie";
    break;
  case 1:
    month = "Februarie";
    break;
  case 2:
     month = "Martie";
    break;
  case 3:
    month = "Aprilie";
    break;
  case 4:
    month = "Mai";
    break;
  case 5:
    month = "Iunie";
    break;
  case 6:
    month = "Iulie";
    break;
  case 7:
    month = "August";
    break;
  case 8:
    month = "Septembrie";
    break;
  case 9:
    month = "Octombrie";
    break;
  case 10:
    month = "Noiembrie";
    break;
  case 11:
    month = "Decembrie";
    break;
  default:
    month = "Luna";
  }
  return month;
}

function myGenderJS(gender)
{
  let myGender;
  switch(gender)
  {
    case 'male':
      myGender = "masculin";
      break;
    case 'female':
      myGender = "feminin";
      break;
    default:
      myGender = "nespecificat";
      break;
  }

  return myGender;
} 
