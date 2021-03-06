jQuery(document).ready(function($){
 
 var mediaUploader;

 $('#upload-button').on('click',function(e) {
 	e.preventDefault();
 	if(mediaUploader){
 		mediaUploader.open();
 		return;
 	}

 	mediaUploader = wp.media.frames.file_frame = wp.media({
     title: 'Choose a logo',
     button: {
     	text: 'Choose Picture'
     },
     multiple: false
 	});

 	mediaUploader.on('select', function(){
      attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#select-logo').val(attachment.url);
      $('#logo-preview').css('background-image','url('+attachment.url+')');
 	});

 	mediaUploader.open();
 });

 $('#remove-logo').on('click',function(e){
    e.preventDefault();
    var answer = confirm("Are you sure you want to remove your Logo?");
    if (answer == true){
    $('#select-logo').val('');
    $('.kalika-general-form').submit();
    }
    return;
  });

});