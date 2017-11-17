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
  function field_blur2(field, cpassword)
  {
    if(field.value == '')
    {
      field.value = cpassword;
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