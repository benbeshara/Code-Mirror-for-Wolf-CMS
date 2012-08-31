$(function(){
	$('#part_0_content, #snippet_content, #layout_content, #file_content').each(function(){
	    var myCodeMirror = CodeMirror.fromTextArea(
	        this,
	        {
	            mode: 'gfm',
	            matchBrackets: true,
	            lineWrapping: true
	        }
	    );
	});
});