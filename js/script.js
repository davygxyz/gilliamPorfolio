$(document).ready(function() {  
	 setInterval(function() {
	    $('#site-wrapper').animate( { borderRightColor: '#19bfe3' }, 300)
	    .animate( { borderRightColor: '#15a1c1' }, 300)
	    .animate( { borderRightColor: '#128aa5' }, 300)
	    .animate( { borderRightColor: '#0b5565' }, 300)
	    .animate( { borderRightColor: '#0b5565' }, 300)
	    .animate( { borderRightColor: '#128aa5' }, 300)
	    .animate( { borderRightColor: '#15a1c1' }, 300)
	    .animate( { borderRightColor: '#15a1c1' }, 300)
	    .animate( { borderRightColor: '#128aa5' }, 300)
	    .animate( { borderRightColor: '#0b5565' }, 300)
	    .animate( { borderRightColor: '#128aa5' }, 300)
	    .animate( { borderRightColor: '#15a1c1' }, 300)
	    }, 5000); 



	$(function() {
     var pgurl = window.location.href.substr(window.location.href
	.lastIndexOf("/")+1);
	     $("#main-nav li a").each(function(){
	          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
	          $(this).parent().addClass("active-custom");
	     })
	});
 }); 

