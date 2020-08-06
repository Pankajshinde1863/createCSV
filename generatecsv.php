<?php
ini_set("memory_limit","-1");
$start = $argv[1];
//$end = $argv[2];
//$cnt = 50000;

$eml[0] = 'HCP_ID,EMAIL';
for($i=1;$i<=$start;$i++)
{
        $eml[$i]="1".date("his").$i.",info_00".$i."@pragatee.com";
}
        $csvfilename = '/tmp/csv_test.csv';
        //$docroot = $_SERVER['DOCUMENT_ROOT'];
        $docroot = "/tmp";
        $fp = fopen($csvfilename, 'w');
        foreach ( $eml as $line2 ) {
            $val = explode(",", $line2);
            fputcsv($fp, $val);
        }
        fclose($fp);

?>


