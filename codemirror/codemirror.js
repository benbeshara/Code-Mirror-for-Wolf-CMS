$(document).ready(function() {
	var myCodeMirror;
    $('.filter-selector').live('wolfSwitchFilterOut', function(event, filtername, elem) {
        if (filtername == 'codemirror') {
			myCodeMirror.toTextArea();
        }
    });

    $('.filter-selector').live('wolfSwitchFilterIn', function(event, filtername, elem) {
        if (filtername == 'codemirror') {
			myCodeMirror = CodeMirror.fromTextArea(
				elem[0],
				{
					mode: elem.hasClass('markdown')? 'gfm' : 'php',
					matchBrackets: true,
					lineWrapping: true
				}
			);
        }
    });
});