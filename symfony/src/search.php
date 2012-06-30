<?php

/**
 * @copyright  Copyright 2010 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Frank Angermann
 **/

/**
 * When the channel is being viewed, a poi request will be sent
 * $_GET['l']...(optinal) Position of the user when interacting with the POI
 * $_GET['p']...(optinal) perimeter of the data requested in meters.
 * $_GET['uid']... Unique user identifier
 * $_GET['m']... (optional) limit of to be returned values
 * $_GET['page']...page number of result. e.g. m = 10: page 1: 1-10; page 2: 11-20, e.g.
 **/
 

function get_poi_data($row) {
  $result = "  <poi id=\"{$row['id']}\" interactionfeedback=\"{$row['interaction_feedback']}\">
    <name><![CDATA[{$row['name']}]]></name>";
  if ($row['description']) $result .= "  <description><![CDATA[{$row['description']}]]></description>";

  if ($row['placed_date']) $result .= "  <date>{$row['placed_date']}</date>";

  $result .= "  <l>{$row['longitude']},{$row['latitude']},{$row['altitude']}</l>";
  $result .= "  <o>{$row['x']},{$row['y']},{$row['z']}</o>";

  if ($row['accuracy']) $result .= "  <minaccuracy>{$row['accuracy']}</minaccuracy>";
  if ($row['maxdistance']) $result .= "  <maxdistance>{$row['maxdistance']}</maxdistance>";

  if ($row['mime_type']) $result .= "  <mime-type>{$row['mime_type']}</mime-type>";
  if ($row['model_uri']) $result .= "  <mainresource>{$row['model_uri']}</mainresource>";
  if ($row['thumbnail_url']) $result .= "  <thumbnail>{$row['thumbnail_url']}</thumbnail>";
  if ($row['icon_url']) $result .= "  <icon>{$row['icon_url']}</icon>";

  if ($row['phonenumber']) $result .= "  <phone>{$row['phonenumber']}</phone>";
  if ($row['email']) $result .= "  <mail>{$row['email']}</mail>";
  if ($row['homepage']) $result .= "  <homepage>{$row['homepage']}</homepage>";
  $result .= "</poi>\n\n";
  return $result;
}

$xml_start = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<results>\n\n";
$xml_end = "</results>";

/*
 * App
 */

$link = mysql_connect("localhost", "root", "sk11pp")
	or die("Could not connect: " . mysql_error());

mysql_select_db('junaio');

$query = mysql_query('SELECT * FROM point');

$result = $xml_start;

$i = 0;

while ($row = mysql_fetch_assoc($query)) {
  $result .= get_poi_data($row);
  $i++;
}

$result .= $xml_end;

echo $result;
?>
