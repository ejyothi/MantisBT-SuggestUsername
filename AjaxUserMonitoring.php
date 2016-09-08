<?php
class AjaxUserMonitoringPlugin extends MantisPlugin {

    function register() {
        $this->name        = 'Ajax User Monitoring';
        $this->description = 'Convert users monitoring text input to an ajax control';
        $this->version     = '0.1';
        $this->requires    = array(
						'MantisCore' => '1.3.0',
						);
        $this->author      = 'Manilal K M';
        $this->contact     = 'manilal@ejyothi.com';
        $this->url         = 'https://github.com/eJyothi';
    }

    function hooks() {
        $hooks = array(
				'EVENT_VIEW_BUG_EXTRA' => 'show_tagsinput',
                );
        return $hooks;
    }

	function show_tagsinput( $p_event, $p_bug_id )
	{
		print '<script type="text/javascript" src="' . plugin_file('jquery.tagsinput.min.js').'"></script>';
		print '<link type="text/css" href="'.plugin_file('jquery.tagsinput.min.css').'" rel="stylesheet" />';
		print '<script type="text/javascript" src="' . plugin_file('plugin.js').'"></script>';
	}

}