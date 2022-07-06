<?php
/**
 *
 * @version Jomres 9.23.x
 *
 * @copyright	2021 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_remove_feedback_message
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"remove_feedback_message",
			"category"=>"System",
			"marketing"=>"This Plugin will Remove Feedback Message in Jomres Cpanel. To use this plugin. Go to Tools -> Remove Feedback Message",
			"version"=>"1.00",
			"description"=> "This Plugin will Remove Feedback Message in Jomres Cpanel. To use this plugin. Go to Tools -> Remove Feedback Message",
			"lastupdate"=>"05/07/2022",
			"min_jomres_ver"=>"9.23.0",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/remove_feedback_message.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_4tti8.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/125-remove_feedback_message.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=remove_feedback_message>Email_Me</a>"
			);
		}
	}
?>