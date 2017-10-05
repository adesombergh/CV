$(document).ready(function(){
    $('#sections').fullpage({
		scrollingSpeed: 1000,
        anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
        menu: '#menu',
    });


    $('#mailform').on('submit',function(e){

    	var goodToGO = true;
    	$('#nom, #email, #msg').each(function(){
		    $(this).closest('.form-group').removeClass('has-error');
			$(this).next().text('').addClass('hide');

    		if ($(this).val()==="") {
    			$(this).closest('.form-group').addClass('has-error');
    			$(this).next().text('Ce champ est obligatoire!').removeClass('hide');
    			goodToGO = false;
    		}
    	});
    	
    	var emailAdress = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	if (!emailAdress.test( $('#email').val()) ) {
    		$('#email').next().text("Adresse mail non valable").removeClass('hide');
    		$('#email').closest('.form-group').addClass('has-error');
    		goodToGO = false;
    	};

    	var pseudo = /^[a-zA-Z0-9\ ]+$/;
    	if (!pseudo.test( $('#nom').val()) ) {
    		$('#nom').next().text("Pseudo non valable").removeClass('hide');
    		$('#nom').closest('.form-group').addClass('has-error');
    		goodToGO = false;
    	};

    	return goodToGO;
    });
});
