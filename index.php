<!DOCTYPE html>

<html lang="en">

<head>
    <title>Driver's Permit Renewal Form</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fonts.css" />
</head>

<body>
    <div class="page-container">
        <div class="header-container">
            <div class="header-text">
                <h2>
                    Motor Vehicles and Road Traffic Act, Chap. 48:50 Regulation 18
                </h2>
                <h3>Application for Driving Permit(s)/Endorsement(s)</h3>
            </div>
        </div>
        <div class="body-container">
            <div class="inline-text" id="intro-text">
                <p>Fill all details in the form below:</p>
            </div>
            <div class="form-container">
                <form id="renewalForm" class="form" method="post" action="processapplication.php">
                    <!-- Section 1 --------------------------------------------------------------------------------->
                    <div class="section" id="section1">
                        <p>
                            <u><b>1. Type of permit(s)/endorsement(s) applied for:</b></u>
                        </p>
                        <br />

                        <div class="form-field">
                            <ol type="i">
                                <li>
                                    Transaction <span class="required-star">*</span> <br />
                                    <input type="radio" id="first-issue" name="transaction" value="First Issue"
                                        required />
                                    <label for="first-issue">First Issue</label><br />
                                    <input type="radio" id="renewal" name="transaction" value="Transaction" />
                                    <label for="renewal">Renewal</label><br />
                                    <input type="radio" id="duplicate" name="transaction" value="Duplicate" />
                                    <label for="duplicate">Duplicate</label><br />
                                    <input type="radio" name="transaction" id="provisional" value="Provisional" />
                                    <label for="provisional">Provisional</label><br />
                                    <input type="radio" name="transaction" id="endorsement" value="Endorsement" />
                                    <label for="endorsement">Endorsement</label><br />
                                </li>
                                <li>
                                    Classification <span class="required-star">*</span><br />
                                    <input type="radio" name="classification" required id="motorcycle"
                                        value="Motorcycle" />
                                    <label for="motorcycle">Motorcycle</label><br />
                                    <input type="radio" name="classification" id="lmv" value="Light Motor Vehicle" />
                                    <label for="lmv">Light Motor Vehicle</label><br />
                                    <input type="radio" name="classification" id="hmv" value="Heavy Motor Vehicle" />
                                    <label for="hmv">Heavy Motor Vehicle</label><br />
                                    <input type="radio" name="classification" id="ehmv"
                                        value="Extra Heavy Motor Vehicle" />
                                    <label for="ehmv">Extra Heavy Motor Vehicle</label><br />
                                    <input type="radio" name="classification" id="omni" value="Omnibus" />
                                    <label for="omni">Omnibus</label><br />
                                    <input type="radio" name="classification" id="tractor"
                                        value="Tractor Wheel/Truck" />
                                    <label for="tractor">Tractor Wheel/Truck</label><br />
                                    <input type="radio" name="classification" id="other" value="Other" />
                                    <label for="other">Other</label><br />
                                </li>
                                <li>
                                    Use <span class="required-star">*</span> <br />
                                    <input type="radio" name="vehicleUse" id="hire" value="Hiring Car Taxi" />
                                    <label for="hire">Hiring Car/Taxi</label><br />
                                    <input type="radio" name="vehicleUse" id="commercial" value="Commercial" />
                                    <label for="commercial">Commercial</label><br />
                                    <input type="radio" name="vehicleUse" id="private" value="Private" />
                                    <label for="private">Private</label>
                                </li>
                            </ol>
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 2 ---------------------------------------------------------------------------------------------------->
                    <div class="section" id="section2">
                        <p>
                            <u><b>2. Full name of applicant:</b></u>
                        </p>
                        <br />
                        <div class="form-field">
                            <label for="surname">
                                Surname <span class="required-star">*</span> </label><br />
                            <input type="text" name="surname" required id="surname" autocomplete="family-name"
                                onclick="checkIfEmpty()" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="firstName">
                                First Name <span class="required-star">*</span> </label><br />
                            <input type="text" name="firstName" required id="firstName" autocomplete="given-name" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="middleName"> Middle Name: </label><br />
                            <input type="text" name="middleName" id="middleName" autocomplete="additional-name" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="maidenName"> Maiden Name (if any): </label><br />
                            <input type="text" name="maidenName" id="maidenName" autocomplete="off" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 3 -->
                    <div class="section" id="section3">
                        <p>
                            <label for="sex"><u><b>3. Sex</b></u>
                                <span class="required-star">*</span></label>
                        </p>
                        <br />
                        <div class="form-field">
                            <input type="radio" id="male" name="sex" required value="Male" />
                            <label for="html">Male</label><br />
                            <input type="radio" id="female" name="sex" value="Female" />
                            <label for="javascript">Female</label>
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 4 -->
                    <div class="section" id="section4">
                        <label for="birthplace">
                            <p>
                                <b><u>4. Place of Birth</u></b>
                                <span class="required-star">*</span>
                            </p>
                        </label><br />
                        <div class="form-field">
                            <input type="text" name="birthplace" required id="birthplace" autocomplete="off" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 5 -->
                    <div class="section" id="section5">
                        <label for="birthdate">
                            <p>
                                <b><u>5. Date of Birth</u></b>
                                <span class="required-star">*</span>
                            </p>
                        </label><br />
                        <div class="form-field">
                            <input type="date" name="birthdate" required id="birthdate" autocomplete="bday" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 6 -->
                    <div class="section" id="section6">
                        <label for="Nationality">
                            <p>
                                <b><u>6. Nationality</u></b>
                                <span class="required-star">*</span>
                            </p>
                        </label>
                        <div class="form-field">
                            <br />
                            <input type="text" id="nationality" name="nationality" required
                                autocomplete="country-name" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 7 -->
                    <div class="section" id="section7">
                        <p>
                            <u><b>7. Contact Information</b></u>
                        </p>
                        <br />
                        <p for="residential-address">
                            Residential Address in Trinidad and Tobago:
                        </p>
                        <br />
                        <div class="form-field">
                            <label for="street">Street:</label>
                            <span class="required-star">*</span><br />
                            <input type="text" name="street" required id="street" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="city">City:</label>
                            <span class="required-star">*</span><br />
                            <input type="text" name="city" required id="city" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="email">E-mail:</label>
                            <span class="required-star">*</span><br />
                            <input type="email" name="email" required id="email" autocomplete="email" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="phone">Phone:</label>
                            <span class="required-star">*</span><br />
                            (
                            <input type="number" oninput="javascript: 
                    if (this.value.length > maxLength)
                      this.value = this.value.slice(0, maxLength);" name="countryCode" required id="countryCode"
                                autocomplete="tel-area-code" maxlength="3" />
                            )
                            <input type="number" name="areaCode" required id="areaCode" oninput="javascript: 
                  if (this.value.length > maxLength)
                    this.value = this.value.slice(0, maxLength);" maxlength="3" autocomplete="tel-local-prefix" />
                            -
                            <input type="number" name="suffix" required id="suffix" autocomplete="tel-local-suffix"
                                oninput="javascript: 
                  if (this.value.length > maxLength)
                    this.value = this.value.slice(0, maxLength);" maxlength="4" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 8 -->
                    <div class="section" id="section8">
                        <p>
                            <b><u>8. Contact Information if different from (7)</u></b>
                        </p>
                        <br />
                        <p for="residential-address">Residential Address:</p>
                        <div class="form-field">
                            <label for="alt-street">Street:</label><br />
                            <input type="text" name="altStreet" id="alt-street" autocomplete="street-address" />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <label for="alt-city">City:</label><br />
                            <input type="text" name="altCity" id="alt-city" /><small></small>
                        </div>
                        <div class="form-field">
                            <label for="alt-email">E-mail:</label><br />
                            <input type="email" name="altEmail" id="alt-email" /><small></small>
                        </div>
                        <div class="form-field">
                            <label for="phone">Phone:</label><br />
                            (
                            <input type="number" name="altCountryCode" id="altCountryCode" oninput="javascript: 
                  if (this.value.length > maxLength)
                    this.value = this.value.slice(0, maxLength);" maxlength="3" autocomplete="tel-area-code" />
                            )
                            <input type="number" name="altAreaCode" id="altAreaCode" oninput="javascript: 
                  if (this.value.length > maxLength)
                    this.value = this.value.slice(0, maxLength);" maxlength="3" autocomplete="tel-local-prefix" />
                            -
                            <input type="number" name="altSuffix" id="altSuffix" oninput="javascript: 
                  if (this.value.length > maxLength)
                    this.value = this.value.slice(0, maxLength);" maxlength="4" autocomplete="tel-local-suffix" />
                            <small></small>
                        </div>
                    </div>

                    <!-- Section 9 -->
                    <div class="section" id="section9">
                        <p>
                            <b><u>9.</u></b>
                        </p>
                        <br />

                        <ol type="i">
                            <li>
                                Are you the holder of a driving permit issued in Trinidad and
                                Tobago? <span class="required-star">*</span>
                                <br />
                                <div class="form-field">
                                    <input type="radio" name="dpHolderPresent" required id="dp-holder-present-yes"
                                        value="yes" />
                                    <label for="dp-holder-present-yes">Yes</label>
                                    <br />
                                    <input type="radio" name="dpHolderPresent" required id="dp-holder-present-no"
                                        value="no" />
                                    <label for="dp-holder-present-no">No</label>
                                    <small></small>
                                </div>
                            </li>
                            <li>
                                Have you previously been the holder of a Driving Permit issued
                                in Trinidad and Tobago? <span class="required-star">*</span><br />
                                <div class="form-field">
                                    <input type="radio" name="dpHolderPrevious" id="dp-holder-previous-yes"
                                        value="yes" />
                                    <label for="dp-holder-previous-yes">Yes</label>
                                    <br />
                                    <input type="radio" name="dp-holder-previous" id="dp-holder-previous-no"
                                        value="no" />
                                    <label for="dp-holder-previous-no">No</label>
                                    <small></small>
                                </div>
                            </li>
                            <br />
                            <li>
                                If "yes" to (i) or (ii) state number and date of Issue below
                                <br /><br />
                                <div class="form-field">
                                    <label for="dpNumber">Number:</label><br />
                                    <input type="number" name="dpNumber" id="dp-number" />
                                    <br />
                                    <label for="issueDate">Date:</label><br />
                                    <input type="date" id="issue-date" name="issueDate" autocomplete="none" />
                                    <small></small>
                                </div>
                            </li>
                            <br />
                            <li>
                                Class of vehicle authorised to drive:
                                <div class="form-field">
                                    <input type="text" id="vehicle-class" name="vehicleClass" autocomplete="none" />
                                    <small></small>
                                </div>
                            </li>
                        </ol>
                        <br />
                    </div>
                    <!-- Section 10 -->
                    <div class="section" id="section10">
                        <label for="foreignDP">
                            <p>
                                <b>
                                    <u>
                                        10. Are you the holder of a driving permit/licences held
                                        elsewhere than in Trinidad and Tobago?
                                        <span class="required-star">*</span>
                                    </u>
                                </b>
                            </p>
                        </label>
                        <div class="form-field">
                            <input type="radio" id="foreign-dp-yes" name="foreignDP" value="yes" />
                            <label for="foreign-dp-yes">Yes</label><br />
                            <input type="radio" id="foreign-dp-no" name="foreignDP" value="no" />
                            <label for="foreign-dp-no">No</label>
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 11 -->
                    <div class="section" id="section11">
                        <label for="particulars">
                            <p>
                                <b><u>11. Give particulars of any endorsement(s) on any driving
                                        permit/licence which you held or now hold.</u></b>
                            </p>
                            <br />
                        </label>
                        <div class="form-field">
                            <input type="text" id="particulars" name="particulars" autocomplete="none" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 12 -->
                    <div class="section" id="section12">
                        <label for="disqualifiedStatus">
                            <p>
                                <b><u>12. Have you at any time been disqualified from obtaining
                                        a driving permit?</u></b>
                                <span class="required-star">*</span>
                            </p>
                            <br />
                        </label>
                        <div class="form-field">
                            <input type="radio" id="disqualified-yes" name="disqualifiedStatus" value="yes" />
                            <label for="disqualified-yes">Yes</label>
                            <input type="radio" id="disqualified-no" name="disqualifiedStatus" value="no" />
                            <label for="disqualified-no">No</label>
                            <small></small>
                        </div>
                        <br />
                        <label for="disqualificationParticulars">
                            <p>If "yes", give particulars</p>
                        </label>
                        <div class="form-field">
                            <input type="text" id="disqualification-particulars" name="disqualificationParticulars"
                                autocomplete="none" />
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 13 -->
                    <div class="section" id="section13">
                        <label for="physique">
                            <p>
                                <b>
                                    <u>
                                        13. Are your physique, hearing and bodily and mental
                                        fitness such as to qualify you for the issue of a driving
                                        permit?
                                    </u>
                                </b>
                                <span class="required-star">*</span>
                            </p>
                        </label><br />
                        <div class="form-field">
                            <input type="radio" id="physique-yes" name="physique" value="yes" />
                            <label for="physique-yes">Yes</label>
                            <input type="radio" id="physique-no" name="physique" value="no" />
                            <label for="physique-no">No</label>
                            <small></small>
                        </div>
                    </div>
                    <!-- Section 14 -->
                    <div class="section" id="section14">
                        <p>
                            <b>
                                <u> 14. </u>
                            </b>
                            <span class="required-star">*</span>
                        </p>
                        <br />
                        <div class="form-field">
                            <p>
                                I,
                                <input type="text" id="full-name" name="fullName" autocomplete="name" />
                                , declare that the information provided above is true and
                                correct.
                            </p>
                            <small></small>
                        </div>
                    </div>
                    <div class="section" id="submit-section">
                        <button type="submit" class="submit-button" value="Submit" onclick="validateForm()">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>