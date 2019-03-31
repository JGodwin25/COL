<?php
$text='"Hamilton, Bermuda"	137.56	103.03	151.77
"Zurich, Switzerland"	128.65	62.62	127.14
"Basel, Switzerland"	126.89	46.14	129.1
"Lausanne, Switzerland"	119.62	50.35	122.83
"Bern, Switzerland"	118.42	39.22	114.86
"Geneva, Switzerland"	118.33	69.16	119.78
"Reykjavik, Iceland"	112.57	57.4	127.87
"Lugano, Switzerland"	111.88	49.58	120.62
"Stavanger, Norway"	111	38.85	134.55
"Oslo, Norway"	107.14	48.58	114.42
"Bergen, Norway"	102.87	39.38	116.35
"New York, NY, United States"	100	100	100
"Trondheim, Norway"	99.73	39.87	120.45
"San Francisco, CA, United States"	96.88	106.49	94.58
"Honolulu, HI, United States"	93.72	63.96	86.72
"Anchorage, AK, United States"	93.19	39.45	78.76
"Brooklyn, NY, United States"	90.31	81.02	95.27
"Washington, DC, United States"	88.5	70.28	86.23
"Santa Rosa, CA, United States"	88.27	56.69	82.55
"Copenhagen, Denmark"	87.91	47.84	113.18
"Charleston, SC, United States"	86.87	46.12	73.48
"Luxembourg, Luxembourg"	86.85	61.31	99.49
"Bellevue, WA, United States"	85.97	61.2	82.29
"Seattle, WA, United States"	85.51	64.7	80.27
"Tokyo, Japan"	84.78	36.41	54.41
"Paris, France"	84.68	47.6	88.11
"Odense, Denmark"	84.09	23.31	112.9
"Berkeley, CA, United States"	84.09	76.39	87.6
"Jersey City, NJ, United States"	84.08	61.58	81.44
"Aalborg, Denmark"	82.21	24.92	97.34
"Amsterdam, Netherlands"	82.14	54.65	87.71
"Seoul, South Korea"	81.96	33.01	50.34
"Arhus, Denmark"	81.94	31.71	95.15
"London, United Kingdom"	81.31	70.3	91.85
"Oakland, CA, United States"	81.18	77.14	78.55
"Helsinki, Finland"	80.6	35.69	94.99
"Boston, MA, United States"	80.46	76.09	83.08
"Singapore, Singapore"	80.4	60.38	59.4
"Dublin, Ireland"	80.28	60.12	87.98
"Sydney, Australia"	79.93	62.58	69.34
"Hartford, CT, United States"	79.85	41.58	72.82
"Albany, NY, United States"	79.38	31.01	77.64
"Philadelphia, PA, United States"	79.25	49.35	74.75
"Tampere, Finland"	79.04	26.21	79.47
"Milton Keynes, United Kingdom"	78.5	34.45	78.53
"Grenoble, France"	78.43	23.34	72.47
"Irvine, CA, United States"	78.38	65.75	73.72
"Lyon, France"	78	27.34	72.77
"Long Beach, CA, United States"	77.95	55.18	77.97
"Linz, Austria"	77.8	26.66	80.73
"Los Angeles, CA, United States"	77.66	70.45	81.71
"Tel Aviv-Yafo, Israel"	77.39	40.57	85.86
"Barrie, Canada"	77.37	29.08	83.57
"Chicago, IL, United States"	77.33	55.53	78.52
"Stockholm, Sweden"	77.23	40.18	85.51
"Florence, Italy"	77.21	29.07	88.19
"Boulder, CO, United States"	77.16	53.54	68.35
"The Hague (Den Haag), Netherlands"	76.75	35.79	84.91
"Reading, United Kingdom"	76.73	39.11	84.93
"Auckland, New Zealand"	76.63	42.9	65.02
"Jerusalem, Israel"	76.62	34.34	85.41
"Bordeaux, France"	76.31	26.1	77.6
"Utrecht, Netherlands"	76.3	37.46	88.94
"Toulouse, France"	76.3	23.03	74.72
"San Jose, CA, United States"	76.28	76.61	83.14';


$file = fopen("service data/cost_of_living.txt","r");

$data=array();	

while(! feof($file))
{
$line=explode("\t",fgets($file));
$obj=new StdClass;
$obj->city=trim($tsv[0],'"');
$obj->costol=$tsv[1];
$obj->rent=$tsv[2];
$obj->restaurant=$tsv[3];
$obj->ug_tution=$tsv[4];
$obj->pg_tution=$tsv[5];
$obj->currency=$tsv[6];
$obj->initial=$tsv[6];
$obj->monthly=$tsv[6];

$data[]=json_encode($obj);
}
fclose($file);
echo json_encode($data);


/*for($i=0;$i<sizeof($arr);$i=$i+1){
$tsv=explode("\t",$arr[$i]);

$obj=new StdClass;
$obj->city=trim($tsv[0],'"');
$obj->costol=$tsv[1];
$obj->rent=$tsv[2];
$obj->restaurant=$tsv[3];
$data[]=json_encode($obj);
}
echo json_encode($data);*/
?>;