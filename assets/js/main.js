$(document).ready(function(){

    $(window).scroll(function(){
        console.log( $(window).scrollTop() );
    });

    setInterval(
        function(){
            $('.blink').toggle();
        }
    ,1000);

    var htmlpie = new Pie("htmlpie",203,22);
    var jspie = new Pie("jspie",203,22);
    var phppie = new Pie("phppie",203,22);
    var gitpie = new Pie("gitpie",203,22);
    var laravelpie = new Pie("laravelpie",203,22);
    var nodepie = new Pie("nodepie",203,22);
    
    $('#sections').fullpage({
		scrollingSpeed: 1000,
        anchors: ['section1', 'section2', 'section3', 'section4', 'section5','section6','section7'],
        menu: '#menu',
        onLeave: function(index, nextIndex, direction){
            if(index == 4){
                htmlpie.unFillPie();
                jspie.unFillPie();
                phppie.unFillPie();
                gitpie.unFillPie();
                laravelpie.unFillPie();
                nodepie.unFillPie();
            }
        },
        afterLoad: function(anchorLink, index){
            if(index == 4){
                htmlpie.fillPie();
                jspie.fillPie();
                phppie.fillPie();
                gitpie.fillPie();
                laravelpie.fillPie();
                nodepie.fillPie();
            }
        }

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
