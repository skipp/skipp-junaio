<?php

/**
 * @copyright  Copyright 2009 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Bernhard Heindl
 **/

/**
 * Here, events from pois, being send with pois/event will be processed.
 * The following variables are available:
 * 
 * $_POST['id']...ID of the poi be interacted with
 * $_POST['type']...Type of interaction with the POI (click/text)
 * $_POST['l']...(optinal) Position of the user when interacting with the POI
 * $_POST['uid']... Unique user identifier
 * $_POST['data']... (optional) if interaction type text, data may be sent with the interaction
 * 
 */

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<results>
   <poi id=\"[poi_id:string]\" interactionfeedback=\"(none|click)\">
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