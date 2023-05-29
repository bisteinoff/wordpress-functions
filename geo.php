// Getting the GEO data of the user

function get_geodata()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $data = file_get_contents( 'http://www.geoplugin.net/json.gp?ip=' . $ip );
    $geo = json_decode( $data );
	  return $geo;
    // Some useful parameters: 
    // $geo -> geoplugin_countryCode - the code of the country in ISO_3166-1_alpha-2 format, e.g. FR
    // $geo -> geoplugin_countryName - the name of the country, e.g. France
    // $geo -> geoplugin_currencyCode - the code of the currancy, e.g. EUR
    // $geo -> geoplugin_currencySymbol_UTF8 - the symbol of the currancy in UTF-8 format, e.g. €
}
