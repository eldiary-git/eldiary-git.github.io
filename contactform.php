<!DOCTYPE html>

<html>
<head>
  <title> disruptivemobility </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link href="https://fonts.googleapis.com/css?family=Oswald|Poppins&display=swap" rel="stylesheet">



<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome/all.min.css">
<link rel="stylesheet" href="css/contactform.css">



</head>


<body>


  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>




        <header>
          <img class="logo" src="https://res.cloudinary.com/dpkc4qim2/image/upload/v1586550467/b7h6k3y7pfjqvbc4gz1l.jpg" onclick="window.location.href='index'">
          <nav class="startnav" id="myStartnav">
            <ul class="nav-links">
              <li> <a href="index" target="_self" data-scroll="Home"> Home </a> </li> 
              <li> <a href="About" target="_self" data-scroll="About-us"> About us </a> </li> 
          
              <li> <a  href="solutions" target="_self" data-scroll="solutions"> solutions </a> </li> 
              <li> <a href="careers"  target="_self" data-scroll="careers"> careers </a> </li> 
              <li> <a href="insights" data-scroll="insights"> insights </a> </li> 
              <li> <a href="#" data-scroll="contactus"> Contact us </a> </li> 


              </ul>
 
              <div class="screencontent"> 
                <label for="openContent" class="open"> <i class="fas fa-bars"> </i> </label>
                <input type="checkbox" id="openContent" style="display:none;" />
                <div id="myContent" class="content">
                    <li> <a  href="index" target="_self" class="content1 selected" data-scroll="Home"> Home  </a>  </li> 
                    <li> <a href="About" target="_self"  class="content3" data-scroll="About-us"> About us   </a>  </li> 
              
                    <li> <a href="solutions" target="_self"  class="content3" data-scroll="solutions"> solutions  </a>  </li> 
                    <li> <a href="careers"  target="_self"  class="content4" data-scroll="careers"> careers  </a>  </li> 
                    <li> <a href="insights"   class="content5" data-scroll="insights"> insights  </a>  </li> 
                     <li> <a href="#"   class="content6" data-scroll="contact-us"> contact us  </a>  </li>   
</div>


</nav>
</header>   

<section>
  <?php echo $result; ?>
</section>


<section class="contactusformsec"> 
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contacthead">
        <div class="contact-form-head"> 
        <h3>How can we support your business?  </h3> 

        <P> If you are interested to know more about our products and services, please fill in the form and our team will be in touch.</P>

      </div>


<div class="map-responsive">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6106.226335306046!2d31.37226399392379!3d30.098851568657985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145816153c6af697%3A0xd64050e9839111a0!2s16%20Omar%20Ibn%20El-Khattab%2C%20Sheraton%20Al%20Matar%2C%20El%20Nozha%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1585750013240!5m2!1sen!2seg" width="420" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


</div>
</div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">





      <form class="contact-form" action="contact" method="POST"  enctype="multipart/form-data" > 
        
        
      <h3 id="Affiliation"> Affiliation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 

      <select class="Affiliation-select" name="Affiliation" required>
        <option value="">  select.. </option>             
        <option class="AutomotiveIndustry">Automotive Industry</option>
        <option value="HyperloopTechnology">Hyperloop Technology</option>
        <option value="Research&Development">Research & Development</option>
        <option value="EducationalInstitute">Educational Institute</option>
        <option value="ArchitectureSolutions">Architecture Solutions</option>
        <option value="ExperienceDesign">Experience Design</option>
        <option value="VirtualRealityApplications">Virtual Reality Applications</option>
        <option value="Government">Government</option>
        <option value="Others">Others</option>

      </select>


<br>


      <h3 class="FirstNameSection"> First Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
       <h3 class="LastNameSection"> Last Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>
      <br> 
      <textarea class="FirstName"  name="firstName" type="text" value size="40" aria-required="true" aria-invalid="false" required></textarea>
      <textarea class="LastName"  name="lastName" type="text" value size="40" aria-required="true" aria-invalid="false" required></textarea>

        <br> 

      <h3 class="EmailSection"> Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <h3 class="PhoneSection"> Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <br> 

      <textarea class="FormEmail"  name="email" type="email" value size="40" aria-required="true" aria-invalid="false" required></textarea>
      <textarea class="FormPhone"  name="phone" type="number" value size="40" aria-required="true" aria-invalid="false" required></textarea>


      <h3 class="CompanySection"> Company  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <h3 class="OccupationSection"> Occupation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <br> 

      <textarea class="Company"     name="company" type="text" value size="40" aria-required="true" aria-invalid="false" required></textarea>              
      <textarea class="Occupation"  name="occupation" type="text" value size="40" aria-required="true" aria-invalid="false" required></textarea>


      <h3 class="CountrtSection"> Country  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
      <select class="country-select"  name="country" required>
        <option value="">  select.. </option>             
        <option value="Afganistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bonaire">Bonaire</option>
        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Canary Islands">Canary Islands</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Channel Islands">Channel Islands</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos Island">Cocos Island</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Cote DIvoire">Cote DIvoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Curaco">Curacao</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="East Timor">East Timor</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands">Falkland Islands</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Ter">French Southern Ter</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Great Britain">Great Britain</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="Indonesia">Indonesia</option>
        <option value="India">India</option>
        <option value="Iran">Iran</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea North">Korea North</option>
        <option value="Korea Sout">Korea South</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Laos">Laos</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libya">Libya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macau">Macau</option>
        <option value="Macedonia">Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Malawi">Malawi</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Midway Islands">Midway Islands</option>
        <option value="Moldova">Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Nambia">Nambia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherland Antilles">Netherland Antilles</option>
        <option value="Netherlands">Netherlands (Holland, Europe)</option>
        <option value="Nevis">Nevis</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau Island">Palau Island</option>
        <option value="Palestine">Palestine</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Phillipines">Philippines</option>
        <option value="Pitcairn Island">Pitcairn Island</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Republic of Montenegro">Republic of Montenegro</option>
        <option value="Republic of Serbia">Republic of Serbia</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russia">Russia</option>
        <option value="Rwanda">Rwanda</option>
        <option value="St Barthelemy">St Barthelemy</option>
        <option value="St Eustatius">St Eustatius</option>
        <option value="St Helena">St Helena</option>
        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
        <option value="St Lucia">St Lucia</option>
        <option value="St Maarten">St Maarten</option>
        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
        <option value="Saipan">Saipan</option>
        <option value="Samoa">Samoa</option>
        <option value="Samoa American">Samoa American</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syria">Syria</option>
        <option value="Tahiti">Tahiti</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Thailand">Thailand</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Erimates">United Arab Emirates</option>
        <option value="United States of America">United States of America</option>
        <option value="Uraguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Vatican City State">Vatican City State</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
        <option value="Wake Island">Wake Island</option>
        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
        <option value="Yemen">Yemen</option>
        <option value="Zaire">Zaire</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
     </select>
     



     <h3 class="MessageSection"> Message  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
     <textarea class="FormMessage" name="message" type="text" value size="40" aria-required="true" aria-invalid="false" required></textarea>

     <button type="submit" class="btn center-block" id="formbutton" > Submit  </button>


    </div>
  </form>

  </div>

</div>



</div>
</div>
 
</section>






<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <form class="contact-form-mobile" action="contact" method="POST"  
  enctype="multipart/form-data"> 
    
  <h3> Affiliation  <i class="fas fa-asterisk" id="form-asterisk-mobile"></i> </h3> 

  <select class="Affiliation-select-mobile" name="Affiliation" required>
  <option value="">  select.. </option>             
    <option class="AutomotiveIndustry">Automotive Industry</option>
    <option value="HyperloopTechnology">Hyperloop Technology</option>
    <option value="Research&Development">Research & Development</option>
    <option value="EducationalInstitute">Educational Institute</option>
    <option value="ArchitectureSolutions">Architecture Solutions</option>
    <option value="ExperienceDesign">Experience Design</option>
    <option value="VirtualRealityApplications">Virtual Reality Applications</option>
    <option value="Government">Government</option>
    <option value="Others">Others</option>

  </select>

<br>
  <h3 class="FirstNameSection-mobile"> First Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>    
  <textarea class="FirstName-mobile" type="text" name="firstName" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea> 
  <br> 

   <h3 class="LastNameSection-mobile"> Last Name  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3>
  <textarea class="LastName-mobile" type="text" name="lastName" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea>

    <br> 

  <h3 class="EmailSection-mobile"> Email  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
  <textarea class="FormEmail-mobile" type="text" name="email" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea>
  <br> 


  <h3 class="PhoneSection-mobile"> Phone  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
  <textarea class="FormPhone-mobile" type="text" name="phone" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea>
  <br> 



  <h3 class="CompanySection-mobile"> Company  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
  <textarea class="Company-mobile" type="text" name="company" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea>               

  <br> 

  <h3 class="OccupationSection-mobile"> Occupation  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
  <textarea class="Occupation-mobile" type="text" name="occupation" type="submit" value size="40" aria-required="true" aria-invalid="false" required></textarea>
  <br> 


  <h3 class="CountrtSection-mobile"> Country  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 
  <select class="country-select-mobile"  name="country" required>
  <option value="">  select.. </option>             
    <option value="Afganistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire">Bonaire</option>
    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Canary Islands">Canary Islands</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Channel Islands">Channel Islands</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Island">Cocos Island</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote DIvoire">Cote DIvoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curaco">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Ter">French Southern Ter</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Great Britain">Great Britain</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Hawaii">Hawaii</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="Indonesia">Indonesia</option>
    <option value="India">India</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle of Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea North">Korea North</option>
    <option value="Korea Sout">Korea South</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Laos">Laos</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Malawi">Malawi</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Midway Islands">Midway Islands</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Nambia">Nambia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherland Antilles">Netherland Antilles</option>
    <option value="Netherlands">Netherlands (Holland, Europe)</option>
    <option value="Nevis">Nevis</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau Island">Palau Island</option>
    <option value="Palestine">Palestine</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Phillipines">Philippines</option>
    <option value="Pitcairn Island">Pitcairn Island</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Republic of Montenegro">Republic of Montenegro</option>
    <option value="Republic of Serbia">Republic of Serbia</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russia</option>
    <option value="Rwanda">Rwanda</option>
    <option value="St Barthelemy">St Barthelemy</option>
    <option value="St Eustatius">St Eustatius</option>
    <option value="St Helena">St Helena</option>
    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
    <option value="St Lucia">St Lucia</option>
    <option value="St Maarten">St Maarten</option>
    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
    <option value="Saipan">Saipan</option>
    <option value="Samoa">Samoa</option>
    <option value="Samoa American">Samoa American</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tahiti">Tahiti</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Erimates">United Arab Emirates</option>
    <option value="United States of America">United States of America</option>
    <option value="Uraguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Vatican City State">Vatican City State</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
    <option value="Wake Island">Wake Island</option>
    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
    <option value="Yemen">Yemen</option>
    <option value="Zaire">Zaire</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
 </select>
 



 <h3 class="MessageSection-mobile"> Message  <i class="fas fa-asterisk" id="form-asterisk"></i> </h3> 

<textarea class="FormMessage-mobile" name="message" type="text" aria-required="true" aria-invalid="false" required></textarea>


 <button type="submit" class="btn center-block" id="formbutton-mobile" > Submit  </button>


</div>


</form>

</div>

</div>


</div>
</div>


<!-- Footer -->
<footer class="page-footer font-small">

  <div class="container-fluid text-center">

    <div class="row">

      <div class="col-md-6 col-sm-12 col-xs-12">

        <section class="footer-icons"> 
          <!-- 
        <i class="fa fa-home" id="footerI"></i>
        <span class="footerSpan"> 16 Omar Ibn Elkhatab St, Sheraton Heliopolis, Cairo, Egypt </span> 
        -->
      <br>
        <i class="fa fa-phone fa-flip-horizontal"  id="footerI"></i>
        <span class="footerSpan"> (+2) 02 2269 1755 </span>
        <br>
        <i class="fa fa-envelope"  id="footerI"></i>
         <span class="footerSpan"> info@disruptivemobility.com  </span>
         <br>

        <i class="fa fa-globe"  id="footerI"></i>
        <span class="footerSpan"> https://www.disruptivemobility.com  </span>
    
        </section>

      </div>


      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="footer-sectionTwo"> 
        <!-- Content -->
        <section class="footer-social">
          <a href="#"> <i class="fab fa-facebook"> </i>   </a> 
      
          <a href="#"> <i class="fab fa-twitter"> </i>  </a>
          <a href="#"> <i class="fab fa-linkedin">  </i>  </a>
        </section>
      <p class="footer-copyright"> 
        Copyright © 2020 DM TECH. All Rights reserved </p>
      </div>


      </div>

    </div>

  </div>

</footer>
<br> 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="js/DM.js"> </script>


</body>

</html>