$(document).ready(function() {

	

	//prevent the enter button from submitting the form

	$(window).keydown(function(event){

		if(event.keyCode == 13) {

			event.preventDefault();

			return false;

		}

	});



	//--------------------------------------------------

	//This function will allow the Preview div hover and

	//follow the scroll action by the user, however it

	//will stop going down at a specific point

	//--------------------------------------------------

	var el = $('#preview');

	var elpos_original = el.offset().top;

	var floor_max = 400;

	

	 $(window).scroll(function(){

		 var elpos = el.offset().top;

		 var windowpos = $(window).scrollTop();

		 var finaldestination = windowpos;

		 if(windowpos < elpos_original) {

			 finaldestination = elpos_original;

			 el.stop().animate({'top':10}, 'slow');

		 } else if(windowpos < floor_max) {

			 el.stop().animate({'top':windowpos+5},'slow');

		 }

	 });

	 

	//initialize the errors array

	var errors = [];	

	

	//--------------------------------------------------

	//This function will trigger if an error is found

	//--------------------------------------------------

	function checkText(line) {

		if(errors[line] != 1) {

			errors[line] = 1;

			document.getElementById("sound").innerHTML="<embed src='/shop/tpl/tagselector/generic-event.wav' hidden=true autostart=true loop=false>";

			$('#error'+(line + 1)).show("slow");

			setTimeout(function(){ $('#error'+(line + 1)).slideUp() }, 4000);



		}//end if

		

	}//end function

	

	//--------------------------------------------------

	//this function updates the text that is entered for the pettag

	//--------------------------------------------------

	function updateText() {



		var lengths = $(shape)[0].getAttribute('data-lines').split(',');

		var text = [];

		

		$.each(lengths, function(i, v) {
			lengths[i] = parseInt(lengths[i]);

			var line = $('#line' + (i + 1)),

				chars;

			line.attr('maxLength', v);

			if (chars = line.val().substring(0, lengths[i])) {

				//line.val(chars); //this causes the cursor to skip
				if((i+1)!=6){
				text.push('<span>' + line.val().toUpperCase() + '</span>');		
				}

			}	

			//--------------------------------------------------

			//check the characters entered to ensure they are in 

			//the allowedChars array

			//--------------------------------------------------

			if(chars.length == lengths[i]) {

				checkText(i);

				

			} else {

				errors[i] = 0;

				

				//setTimeout(function(){ $('#error'+(i + 1)).slideUp() }, 4000);

				//$('#error'+(i + 1)).hide("slow");

			}

		

			$('#count' + (i + 1)).html(chars.length + '/' + lengths[i])

				.css({ color: (chars.length == lengths[i]) ? 'red' : '' });	

		});

		

		var textDiv = $('#tag div');

		

		textDiv.html(text.join('<br />'));

		var spans = $('#tag div span'),

			maxH = $('#tag img').height();

		textDiv.css({ top: maxH / 2 - textDiv.height() / 2 });

	};
	
	
	// This function updates the second text
	function updateTextTwo() {



		var lengths = $(shape)[0].getAttribute('data-lines').split(',');

		var text = [];

		

		$.each(lengths, function(i, v) {

			lengths[i] = parseInt(lengths[i]);

			var line = $('#lineTwo' + (i + 1)),

				chars;

			line.attr('maxLength', v);

			if (chars = line.val().substring(0, lengths[i])) {

				//line.val(chars); //this cuases the cursor to skip

				text.push('<span>' + line.val().toUpperCase() + '</span>');			

			}	

			//--------------------------------------------------

			//check the characters entered to ensure they are in 

			//the allowedChars array

			//--------------------------------------------------

			if(chars.length == lengths[i]) {

				checkText(i);

				

			} else {

				errors[i] = 0;

				

				//setTimeout(function(){ $('#error'+(i + 1)).slideUp() }, 4000);

				//$('#error'+(i + 1)).hide("slow");



			}

		

			$('#count' + (i + 1)).html(chars.length + '/' + lengths[i])

				.css({ color: (chars.length == lengths[i]) ? 'red' : '' });	

		});

		

		var textDiv = $('#tag2 div');

		

		textDiv.html(text.join('<br />'));

		var spans = $('#tag2 div span'),

			maxH = $('#tag2 img').height();

		textDiv.css({ top: maxH / 2 - textDiv.height() / 2 });

	};

	

	//--------------------------------------------------

	//This function will update the Labels of the images

	//--------------------------------------------------

	function updateLabels() {

		var tagtype = $('#tagtype').val();
		var tagtext = $("#tagtype option:selected").text();
		$("#stagtype").val(tagtext);
		$.each(tagtype.split(','), function(i, v) {

			$('#label' + (i + 1)).html(v);
			/*if(tagtext=='Pet Tag')
			{
				$('#line' + (i + 1)).attr('name',v);;
			}*/

		});

	};

	

	//--------------------------------------------------

	//function for changing the shape of the tag

	//--------------------------------------------------



	var shape = null;

	var last_shape_elm = null;

	function selectShape(elm) {



		var all_materials = new Array('Stainless','Gold','Red','Blue','Black','Green','Purple','Pink');

	

		if(elm == 1) {

			elm = last_shape_elm;

		} 

		if (shape && shape != elm) {

			//$(shape).animate({ opacity: 0.4 }, 100);

			$('#shape_label_'+shape.id).html('');

			$(shape).css("border", "none");

		}

		last_shape_elm = elm;

		$(elm).animate({ opacity: 1.0 }, 100);

		shape = elm;

		

		//alert($('#tag')[0].src);

		

		color = $('#item_custom2').val();

		if ((color !== undefined) && (color != '')) {

			//alert(color);

		

			if ($("#" + color).css("visibility") === 'hidden') {

				for (var i in all_materials) {

					if ($('#' +  all_materials[i]).css("visibility") === 'visible') {

						var new_image = $('#' +  all_materials[i]).attr('src');

						$('#' +  all_materials[i]).attr('src',new_image);

						

						shape = document.getElementById(all_materials[i]);

						//alert('#' +  all_materials[i]+' '+elm.id);

						selectMaterial(shape); 

						//alert('change to '+all_materials[i]);

						break;

					}

				}

	

			}

		}

		$('#tag img')[0].src = elm.name.replace('-prev', '');
		$('#tag2 img')[0].src = elm.name.replace('-prev', '');

		updateText();
		updateTextTwo();

		$('#item_custom1').val(shape.id);

		$('#item_custom3').val(shape.alt); //this is for the view cart descriptions of the tags

		$('#preview_shape').html(shape.alt);

		$('#shape_label_'+shape.id).html(shape.alt);

		

		

	};

	

	//--------------------------------------------------

	//function that will display shape and name of the shape, as a preview

	//--------------------------------------------------

	function hoverShape(elm) {

		if (shape && shape != elm) {

			//$(shape).animate({ opacity: 0.4 }, 100);

			$('#shape_label_'+shape.id).html('');

		}



		//$(elm).animate({ opacity: 1.0 }, 100);

		shape = elm;

   		$('#tag')[0].src = elm.src.replace('-prev', '');
		$('#tag2')[0].src = elm.src.replace('-prev', '');

		$('#shape_label_'+shape.id).html(shape.alt);

		

	};

	

	//--------------------------------------------------

	//function for changing the material of the tag

	//--------------------------------------------------

	var material = null;

	var last_material_elm = null;

	function selectMaterial(elm) {

		if(elm == 1) {

			elm = last_material_elm;

		} 

		if (material && material != elm) {

			$(material).animate({ opacity: 1.0 }, 100);

			$('#material_label_'+material.id).text('');

		}

		

		last_material_elm = elm;

		$(elm).animate({ opacity: 1.0 }, 100);

		material = elm;

		$('#tag')[0].src = elm.src.replace('-prev', '');
		$('#tag2')[0].src = elm.src.replace('-prev', '');



		//alert(elm.id);

		if(elm.id == 'Stainless') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-stainless.jpg)");

			$('#tag_text').css({color: '#999' });

			$('#tag').css({ backgroundColor: '#ccc' });		

		} else if(elm.id == 'Gold') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-brass.jpg)");

			$('#tag_text').css({color: '#4f4e30' });

			$('#tag').css({ backgroundColor: '#d1c675' });			

		} else if(elm.id == 'Red') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-redaluminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: '#9b2b2b' });				

		} else if(elm.id == 'Blue') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-bluealuminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: '#1457da' });					

		} else if(elm.id == 'Black') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-blackaluminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: 'black' });			

		} else if(elm.id == 'Green') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-greenaluminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: '#3da24f' });			

		} else if(elm.id == 'Purple') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-purplealuminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: '#c961d7' });			

		} else if(elm.id == 'Pink') {

			$('#tag').css("background-image", "url(/images/tagselector/preview_bg-pinkaluminum.jpg)");

			$('#tag_text').css({color: '#f9f9f9' });

			$('#tag').css({ backgroundColor: '#d87287' });			

		}

		

		//end if


		if(elm.id == 'Stainless') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-stainless.jpg)");

			$('#tag_textTwo').css({color: '#999' });

			$('#tag2').css({ backgroundColor: '#ccc' });		

		} else if(elm.id == 'Gold') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-brass.jpg)");

			$('#tag_textTwo').css({color: '#4f4e30' });

			$('#tag2').css({ backgroundColor: '#d1c675' });			

		} else if(elm.id == 'Red') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-redaluminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: '#9b2b2b' });				

		} else if(elm.id == 'Blue') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-bluealuminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: '#1457da' });					

		} else if(elm.id == 'Black') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-blackaluminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: 'black' });			

		} else if(elm.id == 'Green') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-greenaluminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: '#3da24f' });			

		} else if(elm.id == 'Purple') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-purplealuminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: '#c961d7' });			

		} else if(elm.id == 'Pink') {

			$('#tag2').css("background-image", "url(/images/tagselector/preview_bg-pinkaluminum.jpg)");

			$('#tag_textTwo').css({color: '#f9f9f9' });

			$('#tag2').css({ backgroundColor: '#d87287' });			

		}
		
		// end if
	

		$('#item_custom2').val(material.id);

		$('#preview_material').html(material.alt);

		$('#material_label_'+material.id).text(material.alt);

		

	};

	

	//test function....use this to clear out fields

	function checkthing() {

		alert('blah');

	}

	//--------------------------------------------------

	//function that will display the color and name of the material, as a preview

	//--------------------------------------------------

	function hoverMaterial(elm) {

		if (material && material != elm) {

			$(material).animate({ opacity: 1.0 }, 100);

			$('#material_label_'+material.id).html('');

		}

		

		$(elm).animate({ opacity: 1.0 }, 100);

		material = elm;

		

		$('#material_label_'+material.id).html(material.alt);

		

	};

	

	//--------------------------------------------------

	//this function controls the pettag style swapping

	//set the timeout var

	//--------------------------------------------------

	var shapeTimeout = '1';

	$('#shape img').each(function() {

		

		if (!shape) {

			 selectShape(this);

		} else {

			//$(this).css({ opacity: 0.6 });

		}

		$(this).mouseover(function() {

			//clear the timeout if hovering over the image

			clearTimeout(shapeTimeout);

			hoverShape(this);

		});

		$(this).mousedown(function() {

			selectShape(this);

		});

		$(this).mouseout(function() {

			//set the timeout var since the mouse has left the image area

			shapeTimeout = setTimeout(function() { selectShape('1') } , 1000);

		});

		

	});

	

	//--------------------------------------------------

	//this function controls the toggling of the pettag material swapping

	//set the timeout var

	//--------------------------------------------------

	var materialTimeout = '1';

	$('#material img').each(function() {

		

		//if ($(this).css("display") !== 'none') {

		if (!material) {

			 selectMaterial(this);

		} else {

			$(this).css({ opacity: 1.0 });

		}

		

		$(this).mouseover(function() {

			//clear the timeout if hovering over the image

			clearTimeout(materialTimeout);

			hoverMaterial(this);

		});

		$(this).mousedown(function() {

			selectMaterial(this);

		});

		$(this).mouseout(function() {

			//set the timeout var since the mouse has left the image area

			materialTimeout = setTimeout(function() { selectMaterial('1') } , 1000);

		});

		//}

		

	});

	

	//--------------------------------------------------

	//keep the text on the tag updated when a change to the text fields are made

	//--------------------------------------------------

	

	$('#text input').keyup(function() { //might need to change this back to keyup??? not sure

		

		var $th = $(this);

		var th_id = this.id;

		

		//allowed

		//1 ! 2 @ 3 # 4 $ 5 % 6 7 & 8 9 ( 0 ) - = + Q W E R T Y U I O P A S D F G H J K L ; : ' " Z X C V B N M , . / ?

		var initVal = $(this).val();

		outputVal = initVal.replace(/[^a-zA-Z0-9\s,%&#@$?"'!.:;+=()-//]/g,"").replace(/^\./,"");  

		outputVal = outputVal.replace("*","");

		

		if (initVal != outputVal) {

            $(this).val(outputVal); //this also causes a jump

           	$("#sound").innerHTML="<embed src='/shop/tpl/tagselector/generic-event.wav' hidden=true autostart=true loop=false>";

			$('#charError'+th_id).show("slow");

			$('#display_link').show("slow");

			setTimeout(function(){ $('#charError'+th_id).slideUp() }, 4000);

			//return ''; 

        }

		

		/*$th.val( $th.val().replace(/[^a-zA-Z0-9\s,%&#@$?"'!.:;+=()-//]/g, function(str) {

			document.getElementById("sound").innerHTML="<embed src='/shop/tpl/tagselector/generic-event.wav' hidden=true autostart=true loop=false>";

			$('#charError'+th_id).show("slow");

			$('#display_link').show("slow");

			setTimeout(function(){ $('#charError'+th_id).slideUp() }, 4000);

			

			return ''; 

		}));

		

		

		//This is here to make sure no "*" are allowed in there, this is a temp fix at least until a better method is found

		$th.val( $th.val().replace("*", function(str) {

			document.getElementById("sound").innerHTML="<embed src='/shop/tpl/tagselector/generic-event.wav' hidden=true autostart=true loop=false>";

			$('#charError'+th_id).show("slow");

			$('#display_link').show("slow");

			setTimeout(function(){ $('#charError'+th_id).slideUp() }, 4000);

			

			return ''; 

		}));

		*/



		updateText();
		updateTextTwo();

		

	});

	

	

	//-------------------------------------------------

	//Change the text to uppercase when the user is done

	//with the field, this will not affect the cursor

	//in anyway, whereas the keyup function was

	//-------------------------------------------------

	$('#text input').change(function() {

		this.value = this.value.toUpperCase();

	});

	

	$('#use_prev_link').click(function() {

		for(i = 0; i < 7; i++){

	  		$("#line"+i).attr('value', $("#prev_line"+i).val());
			$("#lineTwo"+i).attr('value', $("#prev_lineTwo"+i).val());

	  		updateText();
			updateTextTwo();

	  	}//end for



	});



	

	//--------------------------------------------------

	//change the tag label when the material is changed

	//--------------------------------------------------

	$('#tagtype').change(function() {

		updateLabels();

	});

	updateLabels();

});



function blankCheck() {

	 if (returnObjById('line1').value == "" && returnObjById('line2').value == "" &&

	 		 returnObjById('line3').value == "" && returnObjById('line4').value == "" &&

			 returnObjById('line5').value == "") {

			var answer = confirm("Are you sure you want to add a blank tag to the cart?");

			if (answer)

				return true;

			else

				return false; 

	}
	else if (returnObjById('line6').value == ""){
			var answer = confirm("Are you sure you do not want to enter a value for the Code #");
			if (answer)
				return true;
			else
				return false;
		}
	
	else return true;

}