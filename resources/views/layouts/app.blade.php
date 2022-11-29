<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tehama Marathon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script>
        var subjectObject = {
        "Tanzania": {
            "Arusha": [],
            "Dar es Salaam": [],
            "Dodoma": [],
            "Geita": [],
            "Iringa": [],
            "Kagera": [],
            "Katavi": [],
            "Kigoma": [],
            "Kilimanjaro": [],
            "Lindi": [],
            "Manyara": [],
            "Mara": [],
            "Mbeya": [],
            "Mjini Magharibi": [],
            "Morogoro": [],
            "Mtwara": [],
            "Mwanza": [],
            "Njombe": [],
            "Pemba North": [],
            "Pemba South": [],
            "Pwani": [],
            "Rukwa": [],
            "Ruvuma": [],
            "Shinyanga": [],
            "Simiyu": [],   
            "Singida": [],
            "Songwe": [],
            "Tabora": [],
            "Tanga": [],
            "Unguja North": [],
            "Unguja South": []
        },
        "Afghanistan": {
            "Proceed": []
        },
        "Albania": {
            "Proceed": []
        },
        "Algeria": {
            "Proceed": []
        },
        "American Samoa": {
            "Proceed": []
        },
        "Andorra": {
            "Proceed": []
        },
        "Angola": {
            "Proceed": []
        },
        "Anguilla": {
            "Proceed": []
        },
        "Antartica": {
            "Proceed": []
        },
        "Antigua and Barbuda": {
            "Proceed": []
        },
        "Argentina": {
            "Proceed": []
        },
        "Armenia": {
            "Proceed": []
        },
        "Aruba": {
            "Proceed": []
        },
        "Australia": {
            "Proceed": []
        },
        "Austria": {
            "Proceed": []
        },
        "Azerbaijan": {
            "Proceed": []
        },
        "Bahamas": {
            "Proceed": []
        },
        "Bahrain": {
            "Proceed": []
        },
        "Bangladesh": {
            "Proceed": []
        },
        "Barbados": {
            "Proceed": []
        },
        "Belarus": {
            "Proceed": []
        },
        "Belgium": {
            "Proceed": []
        },
        "Belize": {
            "Proceed": []
        },
        "Benin": {
            "Proceed": []
        },
        "Bermuda": {
            "Proceed": []
        },
        "Bhutan": {
            "Proceed": []
        },
        "Bolivia": {
            "Proceed": []
        },
        "Bosnia and Herzegowina": {
            "Proceed": []
        },
        "Botswana": {
            "Proceed": []
        },
        "Bouvet Island": {
            "Proceed": []
        },
        "Brazil": {
            "Proceed": []
        },
        "British Indian Ocean Territory": {
            "Proceed": []
        },
        "Brunei Darussalam": {
            "Proceed": []
        },
        "Bulgaria": {
            "Proceed": []
        },
        "Burkina Faso": {
            "Proceed": []
        },
        "Burundi": {
            "Proceed": []
        },
        "Cambodia": {
            "Proceed": []
        },
        "Cameroon": {
            "Proceed": []
        },
        "Canada": {
            "Proceed": []
        },
        "Cape Verde": {
            "Proceed": []
        },
        "Cayman Islands": {
            "Proceed": []
        },
        "Central African Republic": {
            "Proceed": []
        },
        "Chad": {
            "Proceed": []
        },
        "Chile": {
            "Proceed": []
        },
        "China": {
            "Proceed": []
        },
        "Christmas Island": {
            "Proceed": []
        },
        "Cocos Islands": {
            "Proceed": []
        },
        "Colombia": {
            "Proceed": []
        },
        "Comoros": {
            "Proceed": []
        },
        "Congo": {
            "Proceed": []
        },
        "Congo, the Democratic Republic of the": {
            "Proceed": []
        },
        "Cook Islands": {
            "Proceed": []
        },
        "Costa Rica": {
            "Proceed": []
        },
        "Cota D'Ivoire": {
            "Proceed": []
        },
        "Croatia": {
            "Proceed": []
        },
        "Cuba": {
            "Proceed": []
        },
        "Cyprus": {
            "Proceed": []
        },
        "Czech Republic": {
            "Proceed": []
        },
        "Denmark": {
            "Proceed": []
        },
        "Djibouti": {
            "Proceed": []
        },
        "Dominica": {
            "Proceed": []
        },
        "Dominican Republic": {
            "Proceed": []
        },
        "East Timor": {
            "Proceed": []
        },
        "Ecuador": {
            "Proceed": []
        },
        "Egypt": {
            "Proceed": []
        },
        "El Salvador": {
            "Proceed": []
        },
        "Equatorial Guinea": {
            "Proceed": []
        },
        "Eritrea": {
            "Proceed": []
        },
        "Estonia": {
            "Proceed": []
        },
        "Ethiopia": {
            "Proceed": []
        },
        "Falkland Islands": {
            "Proceed": []
        },
        "Faroe Islands": {
            "Proceed": []
        },
        "Fiji": {
            "Proceed": []
        },
        "Finland": {
            "Proceed": []
        },
        "France": {
            "Proceed": []
        },
        "France Metropolitan": {
            "Proceed": []
        },
        "French Polynesia": {
            "Proceed": []
        },
        "French Southern Territories": {
            "Proceed": []
        },
        "Gabon": {
            "Proceed": []
        },
        "Gambia": {
            "Proceed": []
        },
        "Georgia": {
            "Proceed": []
        },
        "Germany": {
            "Proceed": []
        },
        "Ghana": {
            "Proceed": []
        },
        "Gibraltar": {
            "Proceed": []
        },
        "Greece": {
            "Proceed": []
        },
        "Greenland": {
            "Proceed": []
        },
        "Grenada": {
            "Proceed": []
        },
        "Guadeloupe": {
            "Proceed": []
        },
        "Guam": {
            "Proceed": []
        },
        "Guatemala": {
            "Proceed": []
        },
        "Guinea": {
            "Proceed": []
        },
        "Guinea-Bissau": {
            "Proceed": []
        },
        "Guyana": {
            "Proceed": []
        },
        "Haiti": {
            "Proceed": []
        },
        "Heard and McDonald Islands": {
            "Proceed": []
        },
        "Holy See": {
            "Proceed": []
        },
        "Honduras": {
            "Proceed": []
        },
        "Hong Kong": {
            "Proceed": []
        },
        "Hungary": {
            "Proceed": []
        },
        "India": {
            "Proceed": []
        },
        "Indonesia": {
            "Proceed": []
        },
        "Iran": {
            "Proceed": []
        },
        "Iraq": {
            "Proceed": []
        },
        "Ireland": {
            "Proceed": []
        },
        "Israel": {
            "Proceed": []
        },
        "Italy": {
            "Proceed": []
        },
        "Jamaica": {
            "Proceed": []
        },
        "Japan": {
            "Proceed": []
        },
        "Jordan": {
            "Proceed": []
        },
        "Kazakhstan": {
            "Proceed": []
        },
        "Kenya": {
            "Proceed": []
        },
        "Kiribati": {
            "Proceed": []
        },
        "Democratic People's Republic of Korea": {
            "Proceed": []
        },
        "Korea, Republic of": {
            "Proceed": []
        },
        "Kuwait": {
            "Proceed": []
        },
        "Kyrgyzstan": {
            "Proceed": []
        },
        "Lao": {
            "Proceed": []
        },
        "Latvia": {
            "Proceed": []
        },
        "Lebanon": {
            "Proceed": []
        },
        "Lesotho": {
            "Proceed": []
        },
        "Liberia": {
            "Proceed": []
        },
        "Libyan Arab Jamahiriya": {
            "Proceed": []
        },
        "Liechtenstein": {
            "Proceed": []
        },
        "Lithuania": {
            "Proceed": []
        },
        "Luxembourg": {
            "Proceed": []
        },
        "Macau": {
            "Proceed": []
        },
        "Macedonia": {
            "Proceed": []
        },
        "Madagascar": {
            "Proceed": []
        },
        "Malawi": {
            "Proceed": []
        },
        "Malaysia": {
            "Proceed": []
        },
        "Maldives": {
            "Proceed": []
        },
        "Mali": {
            "Proceed": []
        },
        "Malta": {
            "Proceed": []
        },
        "Marshall Islands": {
            "Proceed": []
        },
        "Martinique": {
            "Proceed": []
        },
        "Mauritania": {
            "Proceed": []
        },
        "Mauritius": {
            "Proceed": []
        },
        "Mayotte": {
            "Proceed": []
        },
        "Mexico": {
            "Proceed": []
        },
        "Micronesia": {
            "Proceed": []
        },
        "Moldova, Republic of": {
            "Proceed": []
        },
        "Monaco": {
            "Proceed": []
        },
        "Mongolia": {
            "Proceed": []
        },
        "Montserrat": {
            "Proceed": []
        },
        "Morocco": {
            "Proceed": []
        },
        "Mozambique": {
            "Proceed": []
        },
        "Myanmar": {
            "Proceed": []
        },
        "Namibia": {
            "Proceed": []
        },
        "Nauru": {
            "Proceed": []
        },
        "Nepal": {
            "Proceed": []
        },
        "Netherlands": {
            "Proceed": []
        },
        "Netherlands Antilles": {
            "Proceed": []
        },
        "New Caledonia": {
            "Proceed": []
        },
        "New Zealand": {
            "Proceed": []
        },
        "Nicaragua": {
            "Proceed": []
        },
        "Niger": {
            "Proceed": []
        },
        "Nigeria": {
            "Proceed": []
        },
        "Niue": {
            "Proceed": []
        },
        "Norfolk Island": {
            "Proceed": []
        },
        "Northern Mariana Islands": {
            "Proceed": []
        },
        "Norway": {
            "Proceed": []
        },
        "Oman": {
            "Proceed": []
        },
        "Pakistan": {
            "Proceed": []
        },
        "Palau": {
            "Proceed": []
        },
        "Panama": {
            "Proceed": []
        },
        "Papua New Guinea": {
            "Proceed": []
        },
        "Paraguay": {
            "Proceed": []
        },
        "Peru": {
            "Proceed": []
        },
        "Philippines": {
            "Proceed": []
        },
        "Pitcairn": {
            "Proceed": []
        },
        "Poland": {
            "Proceed": []
        },
        "Portugal": {
            "Proceed": []
        },
        "Puerto Rico": {
            "Proceed": []
        },
        "Qatar": {
            "Proceed": []
        },
        "Reunion": {
            "Proceed": []
        },
        "Romania": {
            "Proceed": []
        },
        "Russian Federation": {
            "Proceed": []
        },
        "Rwanda": {
            "Proceed": []
        },
        "Saint Kitts and Nevis": {
            "Proceed": []
        },
        "Saint LUCIA": {
            "Proceed": []
        },
        "Saint Vincent": {
            "Proceed": []
        },
        "Samoa": {
            "Proceed": []
        },
        "San Marino": {
            "Proceed": []
        },
        "Sao Tome and Principe": {
            "Proceed": []
        },
        "Saudi Arabia": {
            "Proceed": []
        },
        "Senegal": {
            "Proceed": []
        },
        "Seychelles": {
            "Proceed": []
        },
        "Sierra": {
            "Proceed": []
        },
        "Singapore": {
            "Proceed": []
        },
        "Slovakia (Slovak Republic)": {
            "Proceed": []
        },
        "Slovenia": {
            "Proceed": []
        },
        "Solomon Islands": {
            "Proceed": []
        },
        "Somalia": {
            "Proceed": []
        },
        "South Africa": {
            "Proceed": []
        },
        "South Georgia": {
            "Proceed": []
        },
        "Span": {
            "Proceed": []
        },
        "Spain": {
            "Proceed": []
        },
        "SriLanka": {
            "Proceed": []
        },
        "St. Helena": {
            "Proceed": []
        },
        "St. Pierre and Miguelon": {
            "Proceed": []
        },
        "Sudan": {
            "Proceed": []
        },
        "Suriname": {
            "Proceed": []
        },
        "Svalbard": {
            "Proceed": []
        },
        "Swaziland": {
            "Proceed": []
        },
        "Sweden": {
            "Proceed": []
        },
        "Switzerland": {
            "Proceed": []
        },
        "Syria": {
            "Proceed": []
        },
        "Taiwan": {
            "Proceed": []
        },
        "Tajikistan": {
            "Proceed": []
        },
        "Thailand": {
            "Proceed": []
        },
        "Togo": {
            "Proceed": []
        },
        "Tokelau": {
            "Proceed": []
        },
        "Tonga": {
            "Proceed": []
        },
        "Trinidad and Tobago": {
            "Proceed": []
        },
        "Tunisia": {
            "Proceed": []
        },
        "Turkey": {
            "Proceed": []
        },
        "Turkmenistan": {
            "Proceed": []
        },
        "Turks and Caicos": {
            "Proceed": []
        },
        "Tuvalu": {
            "Proceed": []
        },
        "Uganda": {
            "Proceed": []
        },
        "Ukraine": {
            "Proceed": []
        },
        "United Arab Emirates": {
            "Proceed": []
        },
        "United Kingdom": {
            "Proceed": []
        },
        "United States": {
            "Proceed": []
        },
        "United States Minor Outlying Islands": {
            "Proceed": []
        },
        "Uruguay": {
            "Proceed": []
        },
        "Uzbekistan": {
            "Proceed": []
        },
        "Vanuatu": {
            "Proceed": []
        },
        "Venezuela": {
            "Proceed": []
        },
        "Vietnam": {
            "Proceed": []
        },
        "Virgin Islands (British)": {
            "Proceed": []
        },
        "Virgin Islands (U.S)": {
            "Proceed": []
        },
        "Wallis and Futana Islands": {
            "Proceed": []
        },
        "Western Sahara": {
            "Proceed": []
        },
        "Yemen": {
            "Proceed": []
        },
        "Serbia": {
            "Proceed": []
        },
        "Zambia": {
            "Proceed": []
        },
        "Zimbabwe": {
            "Proceed": []
        }
        }
        window.onload = function() {
        var subjectSel = document.getElementById("subject");
        var topicSel = document.getElementById("topic");
        // var chapterSel = document.getElementById("chapter");
        for (var x in subjectObject) {
            subjectSel.options[subjectSel.options.length] = new Option(x, x);
        }
        subjectSel.onchange = function() {
            //empty Chapters- and Topics- dropdowns
        //     chapterSel.length = 1;
            topicSel.length = 1;
            //display correct values
            for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
            }
        }
        topicSel.onchange = function() {
            //empty Chapters dropdown
            // chapterSel.length = 1;
            //display correct values
            var z = subjectObject[subjectSel.value][this.value];
            for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
            }
        }
        }
</script>
<style>
    body {
        background-image: url("asset('img/hero-bg.png')");
        background-repeat: no-repeat;
    }
</style> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <span style="align-items:center">
                    <a class="navbar-brand" href="{{ url('/') }}">TEHAMA MARATHON 2022</a>
                </span>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
