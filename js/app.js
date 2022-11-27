function validateForm() {
  const surname = document.forms["renewalForm"]["surname"].value;
  const fname = document.forms["renewalForm"]["first-name"].value;
  const birthplace = document.forms["renewalForm"]["birthplace"].value;
  const nationality = document.forms["renewalForm"]["nationality"].value;
  const street = document.forms["renewalForm"]["street"].value;
  const city = document.forms["renewalForm"]["city"].value;
  const email = document.forms["renewalForm"]["email"].value;
  const countCode = document.forms["renewalForm"]["country-code"].value;
  const areaCode = document.forms["renewalForm"]["area-code"].value;
  const suffix = document.forms["renewalForm"]["suffix"].value;
  const fullName = document.forms["renewalForm"]["full-name"].value;

  const transaction = document.forms["renewalForm"]["transaction"].value;
  const classification = document.forms["renewalForm"]["classification"].value;
  const use = document.forms["renewalForm"]["use"].value;
  const sex = document.forms["renewalForm"]["sex"].value;
  const birthdate = document.forms["renewalForm"]["birthdate"].value;
  const dpHolderPrevious =
    document.forms["renewalForm"]["dp-holder-previous"].value;
  const dpHolderPresent =
    document.forms["renewalForm"]["dp-holder-present"].value;
  const foreignDP = document.forms["renewalForm"]["foreign-dp"].value;
  const disqualifiedStatus =
    document.forms["renewalForm"]["disqualified-status"].value;
  const physique = document.forms["renewalForm"]["physique"].value;

  if (transaction == "" || classification == "" || use == "") {
    document.getElementById("section1").classList.add("invalid");
  }
  if (transaction != "" && classification != "" && use != "") {
    document.getElementById("section1").classList.remove("invalid");
  }

  if (sex == "") {
    document.getElementById("section3").classList.add("invalid");
  } else {
    document.getElementById("section3").classList.remove("invalid");
  }

  if (birthdate == "") {
    document.getElementById("section5").classList.add("invalid");
  } else {
    document.getElementById("section5").classList.remove("invalid");
  }

  if (surname == "") {
    document.getElementById("surname").classList.add("invalid-input");
    document.getElementById("section2").classList.add("invalid");
  } else {
    document.getElementById("surname").className = "valid-input";
  }

  if (fname == "") {
    document.getElementById("first-name").className = "invalid-input";
  } else {
    document.getElementById("first-name").className = "valid-input";
  }

  if (fname == "" || surname == "") {
    document.getElementById("section2").classList.add("invalid");
  }
  if (fname != "" && surname != "") {
    document.getElementById("section2").classList.remove("invalid");
  }

  if (birthplace == "") {
    document.getElementById("birthplace").className = "invalid-input";
    document.getElementById("section4").classList.add("invalid");
  } else {
    document.getElementById("birthplace").className = "valid-input";
    document.getElementById("section4").classList.remove("invalid");
  }

  if (nationality == "") {
    document.getElementById("nationality").className = "invalid-input";
    document.getElementById("section6").classList.add("invalid");
  } else {
    document.getElementById("nationality").className = "valid-input";
    document.getElementById("section6").classList.remove("invalid");
  }

  if (street == "") {
    document.getElementById("street").className = "invalid-input";
  } else {
    document.getElementById("street").className = "valid-input";
  }

  if (city == "") {
    document.getElementById("city").className = "invalid-input";
  } else {
    document.getElementById("city").className = "valid-input";
  }

  if (countCode == "") {
    document.getElementById("country-code").className = "invalid-input";
  } else {
    document.getElementById("country-code").className = "valid-input";
  }

  if (areaCode == "") {
    document.getElementById("area-code").className = "invalid-input";
  } else {
    document.getElementById("area-code").className = "valid-input";
  }

  if (suffix == "") {
    document.getElementById("suffix").className = "invalid-input";
  } else {
    document.getElementById("suffix").className = "valid-input";
  }

  if (email == "") {
    document.getElementById("email").className = "invalid-input";
  } else {
    document.getElementById("email").className = "valid-input";
  }

  if (
    street == "" ||
    city == "" ||
    areaCode == "" ||
    countCode == "" ||
    suffix == "" ||
    email == ""
  ) {
    document.getElementById("section7").classList.add("invalid");
  } else {
    document.getElementById("section7").classList.remove("invalid");
  }

  if (dpHolderPresent == "" || dpHolderPrevious == "") {
    document.getElementById("section9").classList.add("invalid");
  } else {
    document.getElementById("section9").classList.remove("invalid");
  }

  if (foreignDP == "") {
    document.getElementById("section10").classList.add("invalid");
  } else {
    document.getElementById("section10").classList.add("invalid");
  }

  if (disqualifiedStatus == "") {
    document.getElementById("section12").classList.add("invalid");
  } else {
    document.getElementById("section12").classList.add("invalid");
  }

  if (physique == "") {
    document.getElementById("section13").classList.add("invalid");
  } else {
    document.getElementById("section13").classList.remove("invalid");
  }

  if (fullName == "") {
    document.getElementById("full-name").className = "invalid-input";
    document.getElementById("section14").classList.add("invalid");
  } else {
    document.getElementById("full-name").className = "valid-input";
    document.getElementById("section14").classList.add("invalid");
  }

  if (
    transaction == "" ||
    classification == "" ||
    use == "" ||
    fname == "" ||
    sex == "" ||
    birthplace == "" ||
    birthdate == "" ||
    nationality == "" ||
    street == "" ||
    city == "" ||
    email == "" ||
    countCode == "" ||
    city == "" ||
    suffix == "" ||
    dpHolderPresent == "" ||
    dpHolderPrevious == "" ||
    foreignDP == "" ||
    disqualifiedStatus == "" ||
    physique == "" ||
    fullName == ""
  ) {
    return false;
  }
}
