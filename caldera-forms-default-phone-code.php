/* CALDERA FORMS: DEFAULT COUNTRY CODE */

add_filter( 'caldera_forms_phone_js_options', function( $options )
{
    $ip = $_SERVER['REMOTE_ADDR'];

    // Getting ISO_3166-1_alpha-2 formatted country codes
    $data = file_get_contents( 'http://www.geoplugin.net/json.gp?ip=' . $ip );
    $geo = json_decode( $data );

    // changing initial country code for caldera forms
    $options[ 'initialCountry' ] = sanitize_text_field( $geo -> geoplugin_countryCode );
    return $options;
});
