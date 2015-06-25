jQuery(function(){
   jQuery('.sub-menu').hover(
       function(){ jQuery(this).parent().addClass('hover_dropdown') },
       function(){ jQuery(this).parent().removeClass('hover_dropdown') }
)
	jQuery('.cat_title_menu').on('click',function(){
		if(jQuery('.menu_metareading').css('display') == 'none'){
			jQuery('.menu_metareading').fadeIn('fast');
			jQuery(this).addClass('menu_activated');
		}
		else{
			jQuery('.menu_metareading').fadeOut('fast');
			jQuery(this).removeClass('menu_activated');
		}	
	})
	jQuery('.dropdown').append('<span class="closer"></span>')
	
	
	jQuery('.dropdown .closer').on('click',function(){
		jQuery('.dropdown').removeClass('dropdown_clicked');
		jQuery('.sub-menu').removeClass('active_sub_menu');
		jQuery('.dropdown .closer').removeClass('menu_activated');
		//jQuery('.sub-menu').css('display','none');
		jQuery(this).parent().addClass('dropdown_clicked');
		jQuery('.dropdown_clicked > .sub-menu').addClass('active_sub_menu');
		if(jQuery('.sub-menu.active_sub_menu').css('display') == 'none'){			
			jQuery('.sub-menu.active_sub_menu').fadeIn('fast');
			jQuery(this).addClass('menu_activated');
			jQuery('html, body').animate({
				scrollTop: jQuery(this).offset().top
			}, 1000);
		}
		else{
			jQuery('.sub-menu.active_sub_menu').fadeOut('fast');
			jQuery(this).removeClass('menu_activated');
			jQuery(this).parent().removeClass('dropdown_clicked');
			jQuery('.dropdown_clicked > .sub-menu').removeClass('active_sub_menu');
		}	
	})
	
	if (jQuery('.cat_title_menu').css('display') == 'block'){
		jQuery(document).mouseup(function (e)
		{
			var container = jQuery('.menu_metareading');
			var subcontainer = jQuery('.sub-menu');

			if (!container.is(e.target) // if the target of the click isn't the container...
				&& container.has(e.target).length === 0) // ... nor a descendant of the container
			{
				container.fadeOut('slow');
				subcontainer.fadeOut('slow');
				jQuery('.cat_title_menu').removeClass('menu_activated');
				jQuery('.dropdown .closer').removeClass('menu_activated');
			}
		});
	}
});
//Partners page
jQuery(function(){
	jQuery('.content_mmm2').hide();
	jQuery('.input_cols12').hide();
	jQuery('.input_cols11').hide();
	jQuery('.input_cols10').hide();
	jQuery('.input_cols9').hide();
	jQuery('.input_cols8').hide();
	jQuery('.input_cols7').hide();
	jQuery('.input_cols6').hide();
	jQuery('.input_cols5').hide();
	jQuery('.input_cols4').hide();
	jQuery('.input_cols3').hide();
	jQuery('.input_cols2').hide();
	jQuery('.content_mmm3').hide();
	jQuery('.content_mmm4').hide();
	jQuery('.content_mmm5').hide();
	
	//Next
	jQuery('.btnNextCol2').on('click',function(){
		jQuery('.input_cols1').hide();
		jQuery('.input_cols2').fadeIn();
	})
	jQuery('.btnNextCol3').on('click',function(){
		jQuery('.input_cols2').hide();
		jQuery('.input_cols3').fadeIn();
	})
	jQuery('.btnNextCol4').on('click',function(){
		jQuery('.input_cols3').hide();
		jQuery('.input_cols4').fadeIn();
	})
	jQuery('.btnNextCol5').on('click',function(){
		jQuery('.input_cols4').hide();
		jQuery('.input_cols5').fadeIn();
	})
	jQuery('.btnNextCol6').on('click',function(){
		jQuery('.input_cols5').hide();
		jQuery('.input_cols6').fadeIn();
	})
	jQuery('.btnNextCol7').on('click',function(){
		jQuery('.input_cols6').hide();
		jQuery('.input_cols7').fadeIn();
	})
	jQuery('.btnNext2').on('click',function(){
		jQuery('.content_mmm1').hide();
		jQuery('.content_mmm2').fadeIn();
		jQuery('.input_cols8').show();
	})
	jQuery('.btnNextCol9').on('click',function(){
		jQuery('.input_cols8').hide();
		jQuery('.input_cols9').fadeIn();
	})
	jQuery('.btnNext3').on('click',function(){
		jQuery('.content_mmm2').hide();
		jQuery('.content_mmm3').fadeIn();
		jQuery('.input_cols10').show();
	})
	jQuery('.btnNextCol11').on('click',function(){
		jQuery('.input_cols10').hide();
		jQuery('.input_cols11').fadeIn();
	})
	jQuery('.btnNextCol12').on('click',function(){
		jQuery('.input_cols11').hide();
		jQuery('.input_cols12').fadeIn();
	})	
	jQuery('.btnNext4').on('click',function(){
		jQuery('.content_mmm3').hide();
		jQuery('.content_mmm4').fadeIn();
	})
	jQuery('.btnNext5').on('click',function(){
		jQuery('.content_mmm4').hide();
		jQuery('.content_mmm5').fadeIn();
	})
	jQuery('.btnNext0').on('click',function(){
		jQuery('.content_mmm5').hide();
		jQuery('.content_mmm1').fadeIn();
		jQuery('.input_cols1').show();
		jQuery('.content_mmm2').hide();
		jQuery('.input_cols12').hide();
		jQuery('.input_cols11').hide();
		jQuery('.input_cols10').hide();
		jQuery('.input_cols9').hide();
		jQuery('.input_cols8').hide();
		jQuery('.input_cols7').hide();
		jQuery('.input_cols6').hide();
		jQuery('.input_cols5').hide();
		jQuery('.input_cols4').hide();
		jQuery('.input_cols3').hide();
		jQuery('.input_cols2').hide();
		jQuery('.content_mmm3').hide();
		jQuery('.content_mmm4').hide();
	})
	
	
	//Back
	jQuery('.btnBackCol1').on('click',function(){		
		jQuery('.input_cols2').hide();
		jQuery('.input_cols1').fadeIn();
	})
	jQuery('.btnBackCol2').on('click',function(){		
		jQuery('.input_cols3').hide();
		jQuery('.input_cols2').fadeIn();
	})
	jQuery('.btnBackCol3').on('click',function(){		
		jQuery('.input_cols4').hide();
		jQuery('.input_cols3').fadeIn();
	})
	jQuery('.btnBackCol4').on('click',function(){		
		jQuery('.input_cols5').hide();
		jQuery('.input_cols4').fadeIn();
	})
	jQuery('.btnBackCol5').on('click',function(){		
		jQuery('.input_cols6').hide();
		jQuery('.input_cols5').fadeIn();
	})
	jQuery('.btnBackCol6').on('click',function(){		
		jQuery('.input_cols7').hide();
		jQuery('.input_cols6').fadeIn();
	})	
	
	jQuery('.btnBack1').on('click',function(){		
		jQuery('.content_mmm2').hide();
		jQuery('.content_mmm1').fadeIn();
	})
	jQuery('.btnBackCol8').on('click',function(){		
		jQuery('.input_cols9').hide();
		jQuery('.input_cols8').fadeIn();
	})	
	jQuery('.btnBack2').on('click',function(){		
		jQuery('.content_mmm3').hide();
		jQuery('.content_mmm2').fadeIn();
	})
	jQuery('.btnBackCol10').on('click',function(){		
		jQuery('.input_cols11').hide();
		jQuery('.input_cols10').fadeIn();
	})
	jQuery('.btnBackCol11').on('click',function(){		
		jQuery('.input_cols12').hide();
		jQuery('.input_cols11').fadeIn();
	})	
	jQuery('.btnBack3').on('click',function(){		
		jQuery('.content_mmm4').hide();
		jQuery('.content_mmm3').fadeIn();
	})
	jQuery('.btnBack4').on('click',function(){		
		jQuery('.content_mmm5').hide();
		jQuery('.content_mmm4').fadeIn();
	})
});