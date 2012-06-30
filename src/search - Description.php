<?php

/**
 * @copyright  Copyright 2009 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Bernhard Heindl
 **/

/**
 * When the channel is being viewed, a poi request will be sent
 * $_GET['l']...(optinal) Position of the user when interacting with the POI
 * $_GET['p']...(optinal) perimeter of the data requested in meters.
 * $_GET['uid']... Unique user identifier
 * $_GET['m']... (optional) limit of to be returned values
 * $_GET['page']...page number of result. e.g. m = 10: page 1: 1-10; page 2: 11-20, e.g.
 **/
 
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<results>
   <poi id=\"[poi_id:string]\" interactionfeedback=\"(none|click|text)\">
    <name><![CDATA[[name:string]]]></name>
    
    <description><![CDATA[[description:string]]]></description>  

    <date>[placed_date:datetime]</date>

    <l>[latitude:float],[longitude:float],[altitude:float]</l>
    <o>[X:float],[Y:float],[Z:float]</o>
    
    <minaccuracy>[accuracy:int]</minaccuracy>
    <maxdistance>[maxdistance:int]</maxdistance>

    <mime-type>[mime-type:string]</mime-type>

    <mainresource>[model_uri:string]</mainresource>
    <thumbnail>[thumbnail_url:string]</thumbnail>
    <icon>[icon_url:string]</icon> 

    <phone>[phonenumber:string]</phone> 
    <mail>[email:string]</mail> 
    <homepage>[homepage:url]</homepage> 
	</poi>
</results>";
?>
