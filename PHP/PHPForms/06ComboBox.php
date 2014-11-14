<?php
   session_start();
   $listCountry= array(
"Africa" => array(
"DZ" => "Algeria",
"AO" => "Angola",
"BJ" => "Benin",
"BW" => "Botswana",
"BF" => "Burkina Faso",
"BI" => "Burundi",
"CM" => "Cameroon",
"CV" => "Cape Verde",
"CF" => "Central African Republic",
"TD" => "Chad",
"KM" => "Comoros",
"CG" => "Congo - Brazzaville",
"CD" => "Congo - Kinshasa",
"CI" => "Côte d’Ivoire",
"DJ" => "Djibouti",
"EG" => "Egypt",
"GQ" => "Equatorial Guinea",
"ER" => "Eritrea",
"ET" => "Ethiopia",
"GA" => "Gabon",
"GM" => "Gambia",
"GH" => "Ghana",
"GN" => "Guinea",
"GW" => "Guinea-Bissau",
"KE" => "Kenya",
"LS" => "Lesotho",
"LR" => "Liberia",
"LY" => "Libya",
"MG" => "Madagascar",
"MW" => "Malawi",
"ML" => "Mali",
"MR" => "Mauritania",
"MU" => "Mauritius",
"YT" => "Mayotte",
"MA" => "Morocco",
"MZ" => "Mozambique",
"NA" => "Namibia",
"NE" => "Niger",
"NG" => "Nigeria",
"RW" => "Rwanda",
"RE" => "Réunion",
"SH" => "Saint Helena",
"SN" => "Senegal",
"SC" => "Seychelles",
"SL" => "Sierra Leone",
"SO" => "Somalia",
"ZA" => "South Africa",
"SD" => "Sudan",
"SZ" => "Swaziland",
"ST" => "São Tomé and Príncipe",
"TZ" => "Tanzania",
"TG" => "Togo",
"TN" => "Tunisia",
"UG" => "Uganda",
"EH" => "Western Sahara",
"ZM" => "Zambia",
"ZW" => "Zimbabwe",
),
"South America" => array(
"AR" => "Argentina",
"BO" => "Bolivia",
"BR" => "Brazil",
"CL" => "Chile",
"CO" => "Colombia",
"EC" => "Ecuador",
"GY" => "Guyana",
"PY" => "Paraguay",
"PE" => "Peru",
"SR" => "Suriname",
"UY" => "Uruguay",
"VE" => "Venezuela",
),
"North America" => array(
"AI" => "Anguilla",
"AG" => "Antigua and Barbuda",
"AW" => "Aruba",
"BS" => "Bahamas",
"BB" => "Barbados",
"BZ" => "Belize",
"BM" => "Bermuda",
"VG" => "British Virgin Islands",
"CA" => "Canada",
"KY" => "Cayman Islands",
"CR" => "Costa Rica",
"CU" => "Cuba",
"DM" => "Dominica",
"DO" => "Dominican Republic",
"SV" => "El Salvador",
"FK" => "Falkland Islands",
"GF" => "French Guiana",
"GL" => "Greenland",
"GD" => "Grenada",
"GP" => "Guadeloupe",
"GT" => "Guatemala",
"HT" => "Haiti",
"HN" => "Honduras",
"JM" => "Jamaica",
"MQ" => "Martinique",
"MX" => "Mexico",
"MS" => "Montserrat",
"AN" => "Netherlands Antilles",
"NI" => "Nicaragua",
"PA" => "Panama",
"PR" => "Puerto Rico",
"BL" => "Saint Barthélemy",
"KN" => "Saint Kitts and Nevis",
"LC" => "Saint Lucia",
"MF" => "Saint Martin",
"PM" => "Saint Pierre and Miquelon",
"VC" => "Saint Vincent and the Grenadines",
"TT" => "Trinidad and Tobago",
"TC" => "Turks and Caicos Islands",
"VI" => "U.S. Virgin Islands",
"US" => "United States",
),
"Asia" => array(
"AF" => "Afghanistan",
"AM" => "Armenia",
"AZ" => "Azerbaijan",
"BH" => "Bahrain",
"BD" => "Bangladesh",
"BT" => "Bhutan",
"BN" => "Brunei",
"KH" => "Cambodia",
"CN" => "China",
"CY" => "Cyprus",
"GE" => "Georgia",
"HK" => "Hong Kong SAR China",
"IN" => "India",
"ID" => "Indonesia",
"IR" => "Iran",
"IQ" => "Iraq",
"IL" => "Israel",
"JP" => "Japan",
"JO" => "Jordan",
"KZ" => "Kazakhstan",
"KW" => "Kuwait",
"KG" => "Kyrgyzstan",
"LA" => "Laos",
"LB" => "Lebanon",
"MO" => "Macau SAR China",
"MY" => "Malaysia",
"MV" => "Maldives",
"MN" => "Mongolia",
"MM" => "Myanmar [Burma]",
"NP" => "Nepal",
"NT" => "Neutral Zone",
"KP" => "North Korea",
"OM" => "Oman",
"PK" => "Pakistan",
"PS" => "Palestinian Territories",
"YD" => "People's Democratic Republic of Yemen",
"PH" => "Philippines",
"QA" => "Qatar",
"SA" => "Saudi Arabia",
"SG" => "Singapore",
"KR" => "South Korea",
"LK" => "Sri Lanka",
"SY" => "Syria",
"TW" => "Taiwan",
"TJ" => "Tajikistan",
"TH" => "Thailand",
"TL" => "Timor-Leste",
"TR" => "Turkey",
"TM" => "Turkmenistan",
"AE" => "United Arab Emirates",
"UZ" => "Uzbekistan",
"VN" => "Vietnam",
"YE" => "Yemen",
),
"Europe" => array(
"AL" => "Albania",
"AD" => "Andorra",
"AT" => "Austria",
"BY" => "Belarus",
"BE" => "Belgium",
"BA" => "Bosnia and Herzegovina",
"BG" => "Bulgaria",
"HR" => "Croatia",
"CY" => "Cyprus",
"CZ" => "Czech Republic",
"DK" => "Denmark",
"DD" => "East Germany",
"EE" => "Estonia",
"FO" => "Faroe Islands",
"FI" => "Finland",
"FR" => "France",
"DE" => "Germany",
"GI" => "Gibraltar",
"GR" => "Greece",
"GG" => "Guernsey",
"HU" => "Hungary",
"IS" => "Iceland",
"IE" => "Ireland",
"IM" => "Isle of Man",
"IT" => "Italy",
"JE" => "Jersey",
"LV" => "Latvia",
"LI" => "Liechtenstein",
"LT" => "Lithuania",
"LU" => "Luxembourg",
"MK" => "Macedonia",
"MT" => "Malta",
"FX" => "Metropolitan France",
"MD" => "Moldova",
"MC" => "Monaco",
"ME" => "Montenegro",
"NL" => "Netherlands",
"NO" => "Norway",
"PL" => "Poland",
"PT" => "Portugal",
"RO" => "Romania",
"RU" => "Russia",
"SM" => "San Marino",
"RS" => "Serbia",
"CS" => "Serbia and Montenegro",
"SK" => "Slovakia",
"SI" => "Slovenia",
"ES" => "Spain",
"SJ" => "Svalbard and Jan Mayen",
"SE" => "Sweden",
"CH" => "Switzerland",
"UA" => "Ukraine",
"SU" => "Union of Soviet Socialist Republics",
"GB" => "United Kingdom",
"VA" => "Vatican City",
"AX" => "Åland Islands",
),
"Australia and Oceania" => array(
"AS" => "American Samoa",
"AU" => "Australia",
"BV" => "Bouvet Island",
"IO" => "British Indian Ocean Territory",
"CX" => "Christmas Island",
"CC" => "Cocos [Keeling] Islands",
"CK" => "Cook Islands",
"FJ" => "Fiji",
"PF" => "French Polynesia",
"TF" => "French Southern Territories",
"GU" => "Guam",
"HM" => "Heard Island and McDonald Islands",
"KI" => "Kiribati",
"MH" => "Marshall Islands",
"FM" => "Micronesia",
"NR" => "Nauru",
"NC" => "New Caledonia",
"NZ" => "New Zealand",
"NU" => "Niue",
"NF" => "Norfolk Island",
"MP" => "Northern Mariana Islands",
"PW" => "Palau",
"PG" => "Papua New Guinea",
"PN" => "Pitcairn Islands",
"WS" => "Samoa",
"SB" => "Solomon Islands",
"GS" => "South Georgia and the South Sandwich Islands",
"TK" => "Tokelau",
"TO" => "Tonga",
"TV" => "Tuvalu",
"UM" => "U.S. Minor Outlying Islands",
"VU" => "Vanuatu",
"WF" => "Wallis and Futuna",
),
);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Combo Box</title>
<script>
    function Change_countries(){
        
        var index = document.getElementById("select1");
        var selIndex=index.options[index.selectedIndex].value;
        document.getElementById('selected_text').value=selIndex;
        var continent = selIndex;
        var countriesJS=<?php echo json_encode($listCountry); ?>;
        var select=document.getElementById("country");
         var countries=countriesJS[continent]  ;
         for (var i in countries) {
                var opt=document.createElement('option');
                opt.value=countries[i];
                opt.innerHTML=countries[i];
                select.appendChild(opt);
            }  
            
          
            
        
    }
    </script>
</head>
<body>
    <form action="06ComboBox.php" method="get" id="form">
    <select name="continents" id="select1" autofocus requared onchange="Change_countries() ">


          
        <option value="" selected disabled></option>;
        <option value="Europe">Europe</option>
        <option value="Asia">Asia</option>
        <option value="North America">North America</option>
        <option value="South America">South America</option>
        <option value="Australia and Oceania">Australia and Oceania</option>
        <option value="Africa">Africa</option>
        </select>
        
        <input type="hidden" name="selected_text" id="selected_text" value="" />
        <select name="countries" id="country" onchange="document.getElementById('form').submit()">
        <option value="" selected disabled></option>
        </select>
    </form>    
    
    
<?php
if (isset($_GET['countries'])) {
$continent = $_GET['selected_text'];
$country = $_GET['countries'];
echo "You selected $country from $continent.";
}
?>  
</body>
</html>
