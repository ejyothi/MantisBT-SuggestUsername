$('#bug_monitor_list_username').tagsInput({
	'autocomplete_url': 'plugin.php?page=SuggestUsername/search',
	'height': 'auto',
    'width': '50%',
    'interactive': true,
	'defaultText':'',
	'minChars': '3',
});
$('#bug_monitor_list_username').css('visibility', 'hidden');
