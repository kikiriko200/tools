<?php
include_once( "./geoipcity.inc" );
include_once( "./timezone.php" );

$ip   = "98.139.183.24";    // Yahoo.com の IP アドレス
$host = gethostbyaddr( $ip );

$gip = geoip_open( "./GeoLiteCity.dat", GEOIP_STANDARD );
$dat = GeoIP_record_by_addr( $gip, $ip );
geoip_close( $gi );

if( isset( $GEOIP_REGION_NAME[$dat->country_code][$dat->region] ) ) {
    $dat->region_name = $GEOIP_REGION_NAME[$dat->country_code][$dat->region];
}
$dat->time_zone = get_time_zone( $dat->country_code, $dat->region );

echo "<pre>";
echo "ip            = " . $ip . "<br>";
echo "host          = " . $host . "<br><br>";
echo "city          = " . $dat->city . "<br>";
echo "region_name   = " . $dat->region_name . "<br>";
echo "region        = " . $dat->region . "<br>";
echo "area_code     = " . $dat->area_code . "<br>";
echo "time_zone     = " . $dat->time_zone . "<br>";
echo "longitude     = " . $dat->longitude . "<br>";
echo "metro_code    = " . $dat->metro_code . "<br>";
echo "country_code3 = " . $dat->country_code3 . "<br>";
echo "latitude      = " . $dat->latitude . "<br>";
echo "postal_code   = " . $dat->postal_code . "<br>";
echo "dma_code      = " . $dat->dma_code . "<br>";
echo "country_code  = " . $dat->country_code . "<br>";
echo "country_name  = " . $dat->country_name . "<br>";
echo "</pre>";
?>