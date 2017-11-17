function field_focus(field, username)
  {
    if(field.value == username)
    {
      field.value = '';
    }
  }

  function field_blur(field, password)
  {
    if(field.value == '')
    {
      field.value = password;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

//Stop click event
$('a').click(function(event){
    event.preventDefault(); 
	});