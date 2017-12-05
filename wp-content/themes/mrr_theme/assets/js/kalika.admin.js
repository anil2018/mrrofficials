jQuery(document).ready(function($){
 
 var mediaUploader;

 $('#upload-button1').on('click',function(e) {
  e.preventDefault();
  if(mediaUploader){
    mediaUploader.open();
    return;
  }

  mediaUploader = wp.media.frames.file_frame = wp.media({
     title: 'Choose a Picture',
     button: {
      text: 'Select Picture'
     },
     multiple: false
  });

  mediaUploader.on('select', function(){
      attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#select-pic').val(attachment.url);
      $('#logo-pics').css('background-image','url('+attachment.url+')');
  });

  mediaUploader.open();
 });

  $('#remove-pics').on('click',function(e){
    e.preventDefault();
    var answer = confirm("Are you sure you want to remove your Logo?");
    if (answer == true){
    $('#select-pic').val('');
    $('.kalika-general-form').submit();
    }
    return;
  });
});