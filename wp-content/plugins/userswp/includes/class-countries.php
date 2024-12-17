<?php
/**
 * Countries helper functions
 *
 * @since      1.0.0
 * @author     GeoDirectory Team <info@wpgeodirectory.com>
 */
class UsersWP_Countries {

    /**
     * Returns the country array.
     *
     * @since       1.0.0
     * @package     userswp
     *
     * @return      array       Country array.
     */
    public function get_country_data(){
	    $countries = array(
            'af' => 'Afghanistan (‫افغانستان‬‎)',
            'ax' => 'Åland Islands (Åland)',
            'al' => 'Albania (Shqipëri)',
            'dz' => 'Algeria (‫الجزائر‬‎)',
            'as' => 'American Samoa',
            'ad' => 'Andorra',
            'ao' => 'Angola',
            'ai' => 'Anguilla',
            'ag' => 'Antigua and Barbuda',
            'ar' => 'Argentina',
            'am' => 'Armenia (Հայաստան)',
            'aw' => 'Aruba',
            'au' => 'Australia',
            'at' => 'Austria (Österreich)',
            'az' => 'Azerbaijan (Azərbaycan)',
            'bs' => 'Bahamas',
            'bh' => 'Bahrain (‫البحرين‬‎)',
            'bd' => 'Bangladesh (বাংলাদেশ)',
            'bb' => 'Barbados',
            'by' => 'Belarus (Беларусь)',
            'be' => 'Belgium (België)',
            'bz' => 'Belize',
            'bj' => 'Benin (Bénin)',
            'bm' => 'Bermuda',
            'bt' => 'Bhutan (འབྲུག)',
            'bo' => 'Bolivia',
            'ba' => 'Bosnia and Herzegovina (Босна и Херцеговина)',
            'bw' => 'Botswana',
            'br' => 'Brazil (Brasil)',
            'io' => 'British Indian Ocean Territory',
            'vg' => 'British Virgin Islands',
            'bn' => 'Brunei',
            'bg' => 'Bulgaria (България)',
            'bf' => 'Burkina Faso',
            'bi' => 'Burundi (Uburundi)',
            'kh' => 'Cambodia (កម្ពុជា)',
            'cm' => 'Cameroon (Cameroun)',
            'ca' => 'Canada',
            'cv' => 'Cape Verde (Kabu Verdi)',
            'bq' => 'Caribbean Netherlands',
            'ky' => 'Cayman Islands',
            'cf' => 'Central African Republic (République Centrafricaine)',
            'td' => 'Chad (Tchad)',
            'cl' => 'Chile',
            'cn' => 'China (中国)',
            'cx' => 'Christmas Island',
            'cc' => 'Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))',
            'co' => 'Colombia',
            'km' => 'Comoros (‫جزر القمر‬‎)',
            'cd' => 'Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)',
            'cg' => 'Congo (Republic) (Congo-Brazzaville)',
            'ck' => 'Cook Islands',
            'cr' => 'Costa Rica',
            'ci' => 'Côte d’Ivoire',
            'hr' => 'Croatia (Hrvatska)',
            'cu' => 'Cuba',
            'cw' => 'Curaçao',
            'cy' => 'Cyprus (Κύπρος)',
            'cz' => 'Czech Republic (Česká republika)',
            'dk' => 'Denmark (Danmark)',
            'dj' => 'Djibouti',
            'dm' => 'Dominica',
            'do' => 'Dominican Republic (República Dominicana)',
            'ec' => 'Ecuador',
            'eg' => 'Egypt (‫مصر‬‎)',
            'sv' => 'El Salvador',
            'gq' => 'Equatorial Guinea (Guinea Ecuatorial)',
            'er' => 'Eritrea',
            'ee' => 'Estonia (Eesti)',
            'et' => 'Ethiopia',
            'fk' => 'Falkland Islands (Islas Malvinas)',
            'fo' => 'Faroe Islands (Føroyar)',
            'fj' => 'Fiji',
            'fi' => 'Finland (Suomi)',
            'fr' => 'France',
            'gf' => 'French Guiana (Guyane française)',
            'pf' => 'French Polynesia (Polynésie française)',
            'ga' => 'Gabon',
            'gm' => 'Gambia',
            'ge' => 'Georgia (საქართველო)',
            'de' => 'Germany (Deutschland)',
            'gh' => 'Ghana (Gaana)',
            'gi' => 'Gibraltar',
            'gr' => 'Greece (Ελλάδα)',
            'gl' => 'Greenland (Kalaallit Nunaat)',
            'gd' => 'Grenada',
            'gp' => 'Guadeloupe',
            'gu' => 'Guam',
            'gt' => 'Guatemala',
            'gg' => 'Guernsey',
            'gn' => 'Guinea (Guinée)',
            'gw' => 'Guinea-Bissau (Guiné Bissau)',
            'gy' => 'Guyana',
            'ht' => 'Haiti',
            'hn' => 'Honduras',
            'hk' => 'Hong Kong (香港)',
            'hu' => 'Hungary (Magyarország)',
            'is' => 'Iceland (Ísland)',
            'in' => 'India (भारत)',
            'id' => 'Indonesia',
            'ir' => 'Iran (‫ایران‬‎)',
            'iq' => 'Iraq (‫العراق‬‎)',
            'ie' => 'Ireland',
            'im' => 'Isle of Man',
            'il' => 'Israel (‫ישראל‬‎)',
            'it' => 'Italy (Italia)',
            'jm' => 'Jamaica',
            'jp' => 'Japan (日本)',
            'je' => 'Jersey',
            'jo' => 'Jordan (‫الأردن‬‎)',
            'kz' => 'Kazakhstan (Казахстан)',
            'ke' => 'Kenya',
            'ki' => 'Kiribati',
            'xk' => 'Kosovo (Kosovë)',
            'kw' => 'Kuwait (‫الكويت‬‎)',
            'kg' => 'Kyrgyzstan (Кыргызстан)',
            'la' => 'Laos (ລາວ)',
            'lv' => 'Latvia (Latvija)',
            'lb' => 'Lebanon (‫لبنان‬‎)',
            'ls' => 'Lesotho',
            'lr' => 'Liberia',
            'ly' => 'Libya (‫ليبيا‬‎)',
            'li' => 'Liechtenstein',
            'lt' => 'Lithuania (Lietuva)',
            'lu' => 'Luxembourg',
            'mo' => 'Macau (澳門)',
            'mk' => 'Macedonia (FYROM) (Македонија)',
            'mg' => 'Madagascar (Madagasikara)',
            'mw' => 'Malawi',
            'my' => 'Malaysia',
            'mv' => 'Maldives',
            'ml' => 'Mali',
            'mt' => 'Malta',
            'mh' => 'Marshall Islands',
            'mq' => 'Martinique',
            'mr' => 'Mauritania (‫موريتانيا‬‎)',
            'mu' => 'Mauritius (Moris)',
            'yt' => 'Mayotte',
            'mx' => 'Mexico (México)',
            'fm' => 'Micronesia',
            'md' => 'Moldova (Republica Moldova)',
            'mc' => 'Monaco',
            'mn' => 'Mongolia (Монгол)',
            'me' => 'Montenegro (Crna Gora)',
            'ms' => 'Montserrat',
            'ma' => 'Morocco (‫المغرب‬‎)',
            'mz' => 'Mozambique (Moçambique)',
            'mm' => 'Myanmar (Burma) (မြန်မာ)',
            'na' => 'Namibia (Namibië)',
            'nr' => 'Nauru',
            'np' => 'Nepal (नेपाल)',
            'nl' => 'Netherlands (Nederland)',
            'nc' => 'New Caledonia (Nouvelle-Calédonie)',
            'nz' => 'New Zealand',
            'ni' => 'Nicaragua',
            'ne' => 'Niger (Nijar)',
            'ng' => 'Nigeria',
            'nu' => 'Niue',
            'nf' => 'Norfolk Island',
            'kp' => 'North Korea (조선 민주주의 인민 공화국)',
            'mp' => 'Northern Mariana Islands',
            'no' => 'Norway (Norge)',
            'om' => 'Oman (‫عُمان‬‎)',
            'pk' => 'Pakistan (‫پاکستان‬‎)',
            'pw' => 'Palau',
            'ps' => 'Palestine (‫فلسطين‬‎)',
            'pa' => 'Panama (Panamá)',
            'pg' => 'Papua New Guinea',
            'py' => 'Paraguay',
            'pe' => 'Peru (Perú)',
            'ph' => 'Philippines',
            'pn' => 'Pitcairn Islands',
            'pl' => 'Poland (Polska)',
            'pt' => 'Portugal',
            'pr' => 'Puerto Rico',
            'qa' => 'Qatar (‫قطر‬‎)',
            're' => 'Réunion (La Réunion)',
            'ro' => 'Romania (România)',
            'ru' => 'Russia (Россия)',
            'rw' => 'Rwanda',
            'bl' => 'Saint Barthélemy (Saint-Barthélemy)',
            'sh' => 'Saint Helena',
            'kn' => 'Saint Kitts and Nevis',
            'lc' => 'Saint Lucia',
            'mf' => 'Saint Martin (Saint-Martin (partie française))',
            'pm' => 'Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)',
            'vc' => 'Saint Vincent and the Grenadines',
            'ws' => 'Samoa',
            'sm' => 'San Marino',
            'st' => 'São Tomé and Príncipe (São Tomé e Príncipe)',
            'sa' => 'Saudi Arabia (‫المملكة العربية السعودية‬‎)',
            'xs' => 'Scotland',
            'sn' => 'Senegal (Sénégal)',
            'rs' => 'Serbia (Србија)',
            'sc' => 'Seychelles',
            'sl' => 'Sierra Leone',
            'sg' => 'Singapore',
            'sx' => 'Sint Maarten',
            'sk' => 'Slovakia (Slovensko)',
            'si' => 'Slovenia (Slovenija)',
            'sb' => 'Solomon Islands',
            'so' => 'Somalia (Soomaaliya)',
            'za' => 'South Africa',
            'gs' => 'South Georgia & South Sandwich Islands',
            'kr' => 'South Korea (대한민국)',
            'ss' => 'South Sudan (‫جنوب السودان‬‎)',
            'es' => 'Spain (España)',
            'lk' => 'Sri Lanka (ශ්‍රී ලංකාව)',
            'sd' => 'Sudan (‫السودان‬‎)',
            'sr' => 'Suriname',
            'sj' => 'Svalbard and Jan Mayen (Svalbard og Jan Mayen)',
            'sz' => 'Swaziland',
            'se' => 'Sweden (Sverige)',
            'ch' => 'Switzerland (Schweiz)',
            'sy' => 'Syria (‫سوريا‬‎)',
            'tw' => 'Taiwan (台灣)',
            'tj' => 'Tajikistan',
            'tz' => 'Tanzania',
            'th' => 'Thailand (ไทย)',
            'tl' => 'Timor-Leste',
            'tg' => 'Togo',
            'tk' => 'Tokelau',
            'to' => 'Tonga',
            'tt' => 'Trinidad and Tobago',
            'tn' => 'Tunisia (‫تونس‬‎)',
            'tr' => 'Turkey (Türkiye)',
            'tm' => 'Turkmenistan',
            'tc' => 'Turks and Caicos Islands',
            'tv' => 'Tuvalu',
            'ug' => 'Uganda',
            'ua' => 'Ukraine (Україна)',
            'ae' => 'United Arab Emirates (‫الإمارات العربية المتحدة‬‎)',
            'gb' => 'United Kingdom',
            'us' => 'United States',
            'um' => 'U.S. Minor Outlying Islands',
            'vi' => 'U.S. Virgin Islands',
            'uy' => 'Uruguay',
            'uz' => 'Uzbekistan (Oʻzbekiston)',
            'vu' => 'Vanuatu',
            'va' => 'Vatican City (Città del Vaticano)',
            've' => 'Venezuela',
            'vn' => 'Vietnam (Việt Nam)',
            'xw' => 'Wales',
            'wf' => 'Wallis and Futuna',
            'eh' => 'Western Sahara (‫الصحراء الغربية‬‎)',
            'ye' => 'Yemen (‫اليمن‬‎)',
            'zm' => 'Zambia',
            'zw' => 'Zimbabwe',
        );

	    return apply_filters('uwp_country_list', $countries);
    }

    /**
     * Outputs country html.
     *
     * @since       1.0.0
     * @package     userswp
     *
     * @param       string      $value      Country code.
     *
     * @return      string                  Html string.
     */
    public function output_country_html($value){
        if($value){
            $countries = uwp_get_country_data();
            $country = isset($countries[$value]) ? $countries[$value]: '';
            $value = '<div class="country-select uwp-cs"><div class="flag '.esc_html($value).'"></div><div class="uwp-country-name">'.esc_html($country).'</div></div>';
        }
        return $value;
    }
    
}