$(function () {
    'use strict';
    
 


     
      $(".two,.three,.four,.five").hide();
      
      $( "#cat" ).change(function() {
        $(".two,.three,.four,.five").hide();
        $("#select_box_two").val("0");
      }); 

      $( "#select_box" ).change(function() {
        if ( $(this).val() == "1") {
          $(".one").show();
        } else {
          $(".one,.two,.three,.four,.five").hide();
        }
      }); 

      $( "#select_box_two" ).change(function() {
        if ( $(this).val() == "2" && $('.cat').val() == "1" ) {
          $(".two").show();
        } else {
          $(".two").hide();
        }
      }); 

      $( "#select_box_two" ).change(function() {
        if ( $(this).val() == "2" && $('.cat').val() == "2" ) {
          $(".three").show();
        } else {
          $(".three").hide();
        }
      }); 

      $( "#select_box_two" ).change(function() {
        if ( $(this).val() == "2" && $('.cat').val() == "3" ) {
          $(".four").show();
        } else {
          $(".four").hide();
        }
      }); 

      $( "#select_box_two" ).change(function() {
        if ( $(this).val() == "2" && $('.cat').val() == "5" ) {
          $(".five").show();
        } else {
          $(".five").hide();
        }
      }); 

      $( "#select_box_two" ).change(function() {
        if ( $(this).val() == "2" && $('.cat').val() == "4" ) {
          $(".six").show();
        } else {
          $(".six").hide();
        }
      }); 
     
      $('.exam-link').eq(5).css("display","none") ;
      $('.exam-link').eq(6).css("display","none") ;
      $('.exam-link').eq(7).css("display","none") ;
      $('.exam-link').eq(8).css("display","none") ;
      $('.medical-two .card-img-top').eq(5).css("display","none") ;
      $('.medical-two .parent-icon').eq(5).css("display","none") ;
      $('.medical-two .overlay').eq(5).css("display","none") ;
      $('.medical-two .title-doctor').eq(5).css("display","none") ;
      
      $('.medical-two .card-img-top').eq(6).css("display","none") ;
      $('.medical-two .parent-icon').eq(6).css("display","none") ;
      $('.medical-two .overlay').eq(6).css("display","none") ;
      $('.medical-two .title-doctor').eq(6).css("display","none") ;
      
      $('.medical-two .card-img-top').eq(7).css("display","none") ;
      $('.medical-two .parent-icon').eq(7).css("display","none") ;
      $('.medical-two .overlay').eq(7).css("display","none") ;
      $('.medical-two .title-doctor').eq(7).css("display","none") ;

      $('.medical-two .card-img-top').eq(8).css("display","none") ;
      $('.medical-two .parent-icon').eq(8).css("display","none") ;
      $('.medical-two .overlay').eq(8).css("display","none") ;
      $('.medical-two .title-doctor').eq(8).css("display","none") ;
    
     
      $('.curriculum-link').eq(5).css("display","none") ;
      $('.curriculum-link').eq(6).css("display","none") ;
      $('.curriculum-link').eq(7).css("display","none") ;
      $('.curriculum-link').eq(8).css("display","none") ;

      $('.miscellaneous').eq(0).css("display","none") ;
      $('.miscellaneous').eq(1).css("display","none") ;
      $('.miscellaneous').eq(3).css("display","none") ;
      $('.miscellaneous').eq(4).css("display","none") ;
      $('.miscellaneous').eq(5).css("display","none") ;
      $('.miscellaneous').eq(6).css("display","none") ;
      $('.miscellaneous').eq(7).css("display","none") ;
      $('.miscellaneous').eq(8).css("display","none") ;

      $('.medical .col-md-3').eq(4).css("display","none") ;
      $('.medical .col-sm-12').eq(4).css("display","none") ;
      $('.medical .card-img-top').eq(4).css("display","none") ;
      $('.medical .parent-icon-five').eq(4).css("display","none") ;
      $('.medical .overlay').eq(4).css("display","none") ;
      $('.medical .title-doctor').eq(4).css("display","none") ;


      
	$('input').each(function(){



		if($(this).attr('required')==='required'){



			$(this).after('<span class="asterisk">*</span>');



		}



	});
      

  });