<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head>

        <meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pet Tags We Print.com</title>
        <link rel="shortcut icon" href="" />
        <link rel="stylesheet" href="bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap/3.3.5/css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/custom.css" type="text/css" />
        <link rel="stylesheet" href="font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" />
        <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75886079-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>

    <body>
    <!-- Sidebar --><!-- 
    ===================================
    ALAN - 
     COMMENTS TO DISPLAY LINKS AND BACKGROUND 
    ===================================


            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="index.html">
                            PET TAGS OVERNIGHT.COM
                        </a>
                    </li>
                    <li>
                        <a href="about.html">About Us </a>
                    </li>
                    <li>
                        <a href="contact.html">Contact </a>
                    </li>
                </ul>
            </div>
    --><!-- /#sidebar-wrapper -->
    <!-- Page Content -->

    <div id="page-content-wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo">
                        <img class="img-responsive" src="./image/us-flag-(1).png" alt="dog tag logo" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 centercol">
                        <h1><a href="index.htm" style="color:#fff;text-decoration:none;">Pet Tags We Print.com</a></h1>
                        <p style="letter-spacing:4px;"><a style="color:#fff;" href="contact.html">Contact Us</a> at 908-455-0067</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 rightcol">
                        <img class="img-responsive" src="image/header-dog.png" alt="dog tag" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contentcart">
                <div class="keywords"></div>
                <!--PageContent--><!-- tag selector begin -->
                <script type="text/javascript" src="ajax/libs/jquery/1.4.2/jquery.min.js"></script>
                <script type="text/javascript" src="assets/js/jquery.nyroModal.js"></script>
                <script type="text/javascript" src="assets/js/pettag2.js"></script>
                <script language="javascript" type="text/javascript">
                    //image swap tool
                    function swapShape(image, location) {
                            $('#' + location).attr('src',image);
                            hideCombos(location);
                    }//end function

                    function swapMaterial(image, location) {
                            $('#' + location).attr('src',image);
                            //alert("swapMaterial was called");
                    }//end function
                </script> 

                <script language="javascript" type="text/javascript">
                    function hideCombos(shape) {
                        var hide_combo = new Object();

                        var all_materials = new Array('Stainless','Gold','Red','Blue','Black','Green','Purple','Pink');

                        //show all materials
                        var material = 0;
                        for (material = 0; material &lt; all_materials.length; material++) {
                            $('#' + all_materials[material]).css('visibility', 'visible');
                        }

                        //hide some materials
                        if (!(shape in hide_combo)) { return 0; }
                        for (material = 0; material &lt; hide_combo[shape].length; material++) {
                            $('#' + hide_combo[shape][material]).css('visibility', 'hidden');
                        }       
                    }
                </script>
                <div style="clear: both;"></div>
                <div class="maincont">
                    <div class="col-md-6">
                        <h1>It's Easy to Order!</h1>
                        <h2 style="display: inline;">Protect Your Pets &amp; All Your Things With ID Tags
    </h2>
                        <p></p>
                        <ul class="mainul">
                            <li>In by 11:am out the same day</li>
                            <li>Free Shipping</li>
                            <li>Tags are permanently engraved and guaranteed for life.</li>
                            <li>All tags <b><u>come with free split rings</u></b> for easy attachment</li>
                            <li>Dog tag silencers and 24" chains for personal ID are also available.</li>
                        </ul>
						<p style="font-size:24px;">If you have any questions, please <a href="contact.html">Contact Us</a></p>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-primary panel-right">
                            <div class="panel-heading custom">
                                <h3 class="panel-title">Tag Pricing
    </h3>
                            </div>
                            <div class="panel-body panel-right-body">
                                <p>ALL TAGS $10.00
    </p>
                            </div>
                        </div>
                        <img src="image/pettag-image.png" class="img-responsive" />
                    </div><!--
                    <div class="carttoggle">
                        <input type="button" id="showcart" class="fancybutton" name="showcart" value="My Cart">
                        <span id="hidebutton"><img class="img-responsive" name="delete" src="http://www.loveyourpets.com/images/btn-delete.gif" alt="delete" id="hidecart" /></span>
                        <div id="cartpanel">
                        </div>
                    </div>
                    -->
                    <script type="text/javascript">
                        $(function() {
            //hide the Restore Previous Tag button

            $("#use_prev_link").hide();
            $("#prev_message").hide();
            $("#addtocart2476").submit(function(e) {
             //alert($(this).serialize()+'&amp;ajax=1');
             if (blankCheck()) {
                     $.post("../loveyourpets.com/home/lp4_1436713201884/addtocart/index.htm", $(this).serialize()+'&amp;ajax=1',
                     function(data){
                                    e.preventDefault();

                                    $("#preview").hide();

                                    $.nyroModalManual({
                                      url: '../loveyourpets.com/home/lp4_1436713201884/viewcart_3BE08BF7',
                                      width: 400,
                                      height: 500,
                                      closeButton: '&lt;a href="page_2476#" class="nyroModalClose" id="closeBut" title="close"&gt;Close&lt;\/a&gt;',
                                            endRemove: function() {
                                            //alert('closing');
                                            //place the closing code here

                                            //the prev equivilant for use later
                                            for(i = 0; i &lt; 7; i++){
                                                    $("#prev_line"+i).attr('value', $("#line"+i).val());
                                                    $("#line"+i).val("");
                                                    $("#prev_lineTwo"+i).attr('value', $("#lineTwo"+i).val());
                                                    $("#lineTwo"+i).val("");
                                            }//end for

                                            $( 'html, body' ).animate( { scrollTop: 0 }, 0 );

                                            //clear out the text on the tag image
                                            $('#tag_text').html("");
                                            $('#tag_textTwo').html("");


                                            //reset the qty field to 1
                                            $('#qty').val('1');

                                            //show the Restore Previous Tag button
                                            $("#use_prev_link").show();
                                            $("#prev_message").show();

                                            //show the live preview section
                                    $("#preview").show();
                                      }
                                    });
                                    return false;
                               });
                     return false;
                    }
             else
                     return false;
            });
            $("#viewcartbutton").click(function(e) {
                    e.preventDefault();
                    $("#preview").hide();
                    $.nyroModalManual({
                      url: '#',
                      width: 400,
                      height: 500,
                      closeButton: '&lt;a href="page_2476#" class="nyroModalClose" id="closeBut" title="close"&gt;Close&lt;\/a&gt;',
                            endRemove: function() {
                            $("#preview").show();
                      }
                    });
               });

            hideCombos('Circle');
    });

                        //--------------------------------------------
                        //Only allows numeric values in the field
                        //--------------------------------------------
                        function checkIt(evt) {
                            evt = (evt) ? evt : window.event
                            var charCode = (evt.which) ? evt.which : evt.keyCode
                            if (charCode &gt; 31 &amp;&amp; (charCode &lt; 48 || charCode &gt; 57)) {
                                status = "This field accepts numbers only."
                                return false
                            }
                            status = ""
                            return true
                        }

                    </script>

                    <div id="leftcol" class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                    <!--<a href="viewcart?stpl=minicart" class="nyroModal" onClick="$('#preview').hide();">Edit Tags</a>--><!--<input type="button" name="hide" value="show preview" onClick="$('#preview').show();">
            <input type="button" name="hide" value="hide preview" onClick="$('#preview').hide();">--><!--
           <form id="addtocart2476" method="post" action="addtocart.php">
    -->
                        <form id="addtocart2476" method="post" action="cart.php">
                            <div class="boxtitle">
                                <div class="box">
                                    <h4>Step 1</h4>
                                </div>
                                <div class="boxsub">
                                    <h5>Click a Shape:</h5>
                                </div>
                            </div>
                            <div id="shape_box">
                                <div id="shape" style="text-align: center;"><!-- Preview images must be the same filename plus '-prev' --><!-- The attribute 'data-lines' is a comma-separated list -->
                                    <img class="img-responsive" id="Circle" name="./image/circle-prev.png" src="image/circle-prev.png" data-lines="17,22,24,24,22,20" title="Click to Choose" alt="Circle" onmouseover="swapShape('image/circle-hover.png', 'Circle');" onmouseout="swapShape('image/circle-prev.png', 'Circle');" style="opacity: 1;" />
                                    <img class="img-responsive" id="Heart" name="./image/heart-prev.png" src="image/heart-prev.png" data-lines="20,22,22,19,17,14" title="Click to Choose" alt="Heart" onmouseover="swapShape('image/heart-hover.png', 'Heart');" onmouseout="swapShape('image/heart-prev.png', 'Heart');" />
                                    <img class="img-responsive" id="Bone" name="./image/bone-prev.png" src="image/bone-prev.png" data-lines="22,24,24,24,24,24" title="Click to Choose" alt="Bone" onmouseover="swapShape('image/bone-hover.png', 'Bone');" onmouseout="swapShape('image/bone-prev.png', 'Bone');" />
                                    <img class="img-responsive" id="SmallDogTag" name="./image/smalldogtag-prev.png" src="image/smalldogtag-prev.png" data-lines="24,24,24,24,24,24" title="Click to Choose" alt="Mini Dog Tag" onmouseover="swapShape('image/smalldogtag-hover.png', 'SmallDogTag');" onmouseout="swapShape('image/smalldogtag-prev.png', 'SmallDogTag');" />
                                    <img class="img-responsive" id="DogTag" name="./image/dogtag-prev.png" src="image/dogtag-prev.png" data-lines="24,24,24,24,24,24" title="Click to Choose" alt="Dog Tag" onmouseover="swapShape('image/dogtag-hover.png', 'DogTag');" onmouseout="swapShape('image/dogtag-prev.png', 'DogTag');" style="border: none;" />
                                    <img class="img-responsive" id="Paw" name="./image/paw2-prev.png" src="image/paw2-prev.png" data-lines="24,24,22,22,22,22" title="Click to Choose" alt="Paw" onmouseover="swapShape('image/paw2-hover.png', 'Paw');" onmouseout="swapShape('image/paw2-prev.png', 'Paw');" />
                                    <img class="img-responsive" id="Flag" name="./image/am2-prev.png" src="image/am2-prev.png" data-lines="24,24,22,22,22,22" title="Click to Choose" alt="Flag" onmouseover="swapShape('image/am2-hover.png', 'Flag');" onmouseout="swapShape('image/am2-prev.png', 'Flag');" />
                                    <img class="img-responsive" id="Shield" name="./image/shield-prev.png" src="image/shield-prev.png" data-lines="24,24,22,22,22,22" title="Click to Choose" alt="Shield" onmouseover="swapShape('image/shield-hover.png', 'Shield');" onmouseout="swapShape('image/shield-prev.png', 'Shield');" />
                                    <div style="position: relative; top: 2px; left: -232px;">
                                        <span id="shape_label_Circle">Circle</span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: -185px;">
                                        <span id="shape_label_Heart"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: -126px;">
                                        <span id="shape_label_Bone"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: -46px;">
                                        <span id="shape_label_SmallDogTag"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: 27px;">
                                        <span id="shape_label_DogTag"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: 102px;">
                                        <span id="shape_label_Paw"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: 172px;">
                                        <span id="shape_label_Flag"></span>
                                    </div>
                                    <div style="position: relative; top: 2px; left: 230px;">
                                        <span id="shape_label_Shield"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- STEP 2 -->
                            <div class="boxtitle">
                                <div class="box">
                                    <h4>Step 2</h4>
                                </div>
                                <div class="boxsub">
                                    <h5>Click a Material/Color:</h5>
                                </div>
                            </div>
                            <div id="material" style="text-align: center;">
                            <!-- The ID is currently used as the HTML background color --><!-- name is what gets passed to the form --><!--<img class="img-responsive" id="Stainless" name="Stainless" src="./image/stainless.png" title="Click to Choose" alt="Stainless Steel" onmouseover="swapMaterial('./image/stainless-hover.png', 'Stainless');" onmouseout="swapMaterial('./image/stainless.png', 'Stainless');" style="opacity: 1; visibility: visible;">-->
                                <img class="img-responsive" id="Gold" name="Gold" src="image/brass.png" title="Click to Choose" alt="Gold Aluminum" onmouseover="swapMaterial('image/brass.png', 'Gold');" onmouseout="swapMaterial('image/brass.png', 'Gold');" style="opacity: 1; visibility: visible;" />
                                <img class="img-responsive" id="Red" name="Red" src="image/red_aluminum.png" title="Click to Choose" alt="Red Aluminum" onmouseover="swapMaterial('image/red_aluminum.png', 'Red');" onmouseout="swapMaterial('image/red_aluminum.png', 'Red');" style="opacity: 1; visibility: visible;" />
                                <img class="img-responsive" id="Blue" name="Blue" src="image/blue_aluminum.png" title="Click to Choose" alt="Blue Aluminum" onmouseover="swapMaterial('image/blue_aluminum.png', 'Blue');" onmouseout="swapMaterial('image/blue_aluminum.png', 'Blue');" style="opacity: 1; visibility: visible;" />
                                <img class="img-responsive" id="Black" name="Black" src="image/black_aluminum.png" title="Click to Choose" alt="Black Aluminum" onmouseover="swapMaterial('image/black_aluminum.png', 'Black');" onmouseout="swapMaterial('image/black_aluminum.png', 'Black');" style="opacity: 1; visibility: visible;" />
                                <img class="img-responsive" id="Green" name="Green" src="image/green_aluminum.png" title="Click to Choose" alt="Green Aluminum" onmouseover="swapMaterial('image/green_aluminum.png', 'Green');" onmouseout="swapMaterial('image/green_aluminum.png', 'Green');" style="opacity: 1; visibility: visible;" />
								<img class="img-responsive" id="Purple" name="Purple" src="image/purple_aluminum.png" title="Click to Choose" alt="Purple Aluminum" onmouseover="swapMaterial('image/purple_aluminum.png', 'Purple');" onmouseout="swapMaterial('image/purple_aluminum.png', 'Purple');" style="opacity: 1; visibility: visible;">
                                <img class="img-responsive" id="Pink" name="Pink" src="image/pink_aluminum.png" title="Click to Choose" alt="Pink Aluminum" onmouseover="swapMaterial('image/pink_aluminum.png', 'Pink');" onmouseout="swapMaterial('image/pink_aluminum.png', 'Pink');" style="opacity: 1; visibility: visible;" /> <!--<div style="position: relative; top: 2px; left: -142px;"><span class="material" id="material_label_Stainless">Stainless Steel</span></div>-->
                                <div style="position: relative; top: 2px; left: -123px;">
                                    <span class="material" id="material_label_Gold"></span>
                                </div>
                                <div style="position: relative; top: 2px; left: -52px;">
                                    <span class="material" id="material_label_Red"></span>
                                </div>
                                <div style="position: relative; top: 2px; left: -22px;">
                                    <span class="material" id="material_label_Blue"></span>
                                </div>
                                <div style="position: relative; top: 2px; left: 12px;">
                                    <span class="material" id="material_label_Black"></span>
                                </div>
                                <div style="position: relative; top: 2px; left: 42px;">
                                    <span class="material" id="material_label_Green"></span>
                                </div>
								<div style="position: relative; top: 2px; left: 92px;"><span class="material" id="material_label_Purple"></span></div>
                                <div style="position: relative; top: 2px; left: 142px;">
                                    <span class="material" id="material_label_Pink"></span>
                                </div>
                            </div>
                            <!-- STEP 3 -->
                            <div class="boxtitle">
                                <div class="box">
                                    <h4>Step 3</h4>
                                </div>
                                <div class="boxsub">
                                    <h5>Enter Tag Information</h5>
                                </div>
                            </div>
                            <div id="text">
                                <div style="clear: both;"></div>
                                <p>Use up to 6 lines to say whatever you want... Or use these suggestions: </p>
                                <span id="display_link" style="display:none;">
                                    <a href="page_2476#/index.htm" onclick="charwin=dhtmlwindow.open('chars', 'div','good_chars', 'Love Your Pets Acceptable Characters', 'width=380px,height=150px,left=200px,top=250px,resize=0,scrolling=1'); return false" class="clickhere">Click here for a list of acceptable characters</a>
                                </span>
                                <div style="display:none">
                                    <span id="display_link" style="display:none;"></span>
                                    <div id="good_chars" class="drag-contentarea" style="height: 150px; overflow-x: auto; overflow-y: auto; display: block">
                                        <span id="display_link" style="display:none;"></span>
                                        <p class="red14b">
                                            <span id="display_link" style="display:none;">The following characters are allowed on your tag:</span>
                                        </p>
                                        <p class="red14b">
                                        <span id="display_link" style="display:none;">1 ! 2 @ 3 # 4 $ 5 % 6 7 &amp; 8 9 ( 0 ) - = + Q W E R T Y U I O P A S D F G H J K L ; : ' " Z X C V B N M , . / ?</span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <label id="label0">Tag Type</label>&nbsp;
                                        <select id="tagtype" name="tagtype" style="display: inline;">
                                            <option value="Line 1, Line 2, Line 3, Line 4, Line 5, Line 6">No Tag Type Suggested</option>
                                            <option value="Pet Name, Owner's Name, Street Address, City/State, Phone Number, Code">Pet Tag</option>
                                            <option value="Medical Condition, Name, Street Address, City/State, Phone Number, 2nd Phone Number (or other info)">Medical Alert Tag</option>
                                            <option value="Name, Street Address, City/State, Zip Code/Country, Phone Number, 2nd Phone Number (or other info)">Luggage / Bag Tag</option>
                                            <option value="Say What You Want,Say What You Want,Say What You Want,Say What You Want,Say What You Want,Say What You Want">Custom Tag</option>
                                        </select>
                                    </li>
                                    <li style="list-style: none">
                                        <div id="prev_message" style="display: none;">
                                            <span class="warning">Click to copy information from previous tag</span>
                                        </div>
                                        <div align="center" id="use_prev_link" style="display: none;">
                                            <input type="button" value="Use Text From Previous Tag" class="cartbutton" title="Click to copy lines from previous tag" />
                                            <br />
                                            <br />
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li>
                                                            <label id="label1" for="line1">Line1</label>
                                                            <input type="text" id="line1" name="line1" size="20" style="text-transform: uppercase;" maxlength="20" required/>
                                                            <input type="hidden" id="stagtype" name="stagtype" value="No Tag Type Suggested" />
                                                        </li>
                                                        <li>
                                                            <span id="error1" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorline1" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="label2" for="line2">Line2</label>
                                                            <input type="text" id="line2" name="line2" size="20" style="text-transform: uppercase;" maxlength="20" />
                                                        </li>
                                                        <li>
                                                            <span id="error2" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorline2" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="label3" for="line3">Line3</label>
                                                            <input type="text" id="line3" name="line3" size="20" style="text-transform: uppercase;" maxlength="20" />
                                                        </li>
                                                        <li>
                                                            <span id="error3" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorline3" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="label4" for="line4">Line4</label>
                                                            <input type="text" id="line4" name="line4" size="20" style="text-transform: uppercase;" maxlength="20" />
                                                        </li>
                                                        <li>
                                                            <span id="error4" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorline4" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="label5" for="line5">Line5</label>
                                                            <input type="text" id="line5" name="line5" size="20" style="text-transform: uppercase;" maxlength="20" />
                                                        </li>
                                                        <li>
                                                            <span id="error5" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorline5" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li>
                                                            <label id="labelTwo1" for="textTwo1">Back Line1</label>
                                                            <input type="text" id="lineTwo1" name="lineTwo1" size="27" style="text-transform: uppercase;" maxlength="17" />
                                                        </li>
                                                        <li>
                                                            <span id="error1" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorlineTwo1" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="labelTwo2" for="textTwo2">Back Line2</label>
                                                            <input type="text" id="lineTwo2" name="lineTwo2" size="27" style="text-transform: uppercase;" maxlength="22" />
                                                        </li>
                                                        <li>
                                                            <span id="error2" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorlineTwo2" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="labelTwo3" for="textTwo3">Back Line3</label>
                                                            <input type="text" id="lineTwo3" name="lineTwo3" size="27" style="text-transform: uppercase;" maxlength="24" />
                                                        </li>
                                                        <li>
                                                            <span id="error3" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorlineTwo3" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="labelTwo4" for="textTwo4">Back Line4</label>
                                                            <input type="text" id="lineTwo4" name="lineTwo4" size="27" style="text-transform: uppercase;" maxlength="24" />
                                                        </li>
                                                        <li>
                                                            <span id="error4" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorlineTwo4" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="labelTwo5" for="textTwo5">Back Line5</label>
                                                            <input type="text" id="lineTwo5" name="lineTwo5" size="27" style="text-transform: uppercase;" maxlength="22" />
                                                        </li>
                                                        <li>
                                                            <span id="error5" style="display:none"><span class="warning">You have reached the maximum amount of characters.</span></span>
                                                        </li>
                                                        <li>
                                                            <span id="charErrorlineTwo5" style="display:none"><span class="warning">This character cannot be printed on the tag.</span></span>
                                                        </li>
                                                        <li>
                                                            <label id="labelTwo6" for="textTwo6">Back Line6</label>
                                                            <input type="text" id="lineTwo6" name="lineTwo6" size="27" style="text-transform: uppercase;" maxlength="20" />
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><span id="error6" style="display:none"><br /><span class="warning">You have reached the maximum amount of characters.</span></span></li>
                                    <li><span id="charErrorline6" style="display:none"><br /><span class="warning">This character cannot be printed on the tag.</span></span></li>
                                </ul>
                                <div style="clear: both;"></div>
                                <p>Engraving will be in all capital letters</p>
                            </div>
<!--
                            <div id="prev_text"> hidden fields for reference 
                                <input type="hidden" id="prev_line1" name="prev_petname" size="27" value="" />
                                <input type="hidden" id="prev_line2" name="prev_line1" size="27" value="" />
                                <input type="hidden" id="prev_line3" name="prev_line2" size="27" value="" />
                                <input type="hidden" id="prev_line4" name="prev_line3" size="27" value="" />
                                <input type="hidden" id="prev_line5" name="prev_line4" size="27" value="" />
                                <input type="hidden" id="prev_line6" name="prev_line5" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo1" name="prev_petname" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo2" name="prev_lineTwo1" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo3" name="prev_lineTwo2" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo4" name="prev_lineTwo3" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo5" name="prev_lineTwo4" size="27" value="" />
                                <input type="hidden" id="prev_lineTwo6" name="prev_lineTwo5" size="27" value="" />
                            </div>
-->
                            <br /><!--=== STEP 4 _======-->
                            <div class="boxtitle">
                                <div class="box"><h4>Step 4</h4></div>
                            </div>
                            <h3 style="text-align:center;">Add Tag(s) to Cart.</h3>

                            <p style="text-align:center;">All payments through PayPal on next page<br /><b>Double check your spelling!</b> <br />Your tag will be engraved exactly as shown.</p>
							<p style="text-align:center;"><label id="Code" for="line6">Code#:</label> <input type="text" id="line6" name="line6" size="20" style="text-transform: uppercase;" maxlength="20" value="" onkeypress="return checkIt(event);" required/>* Required</p>
                            <p style="position: relative; float: right;"><strong>Please provide an email for order tracking:&nbsp;</strong><input type="email" size="40" id="email" name="email" value="" onkeypress="return checkIt(event);" required/> <input type="hidden" name="product_id" value="43" /></p>
                            <div style="clear:both;"></div>
                            <input type="submit" class="btn btn-danger cartbutton" value="Add Tag to Cart" id="" style="float: right; height: 30px; margin: 15px;" />
                            <div class="hidden">
                                <label>Please leave this field blank</label>
                                <input type="text" name="h_pot">
                            </div>
                            


                                <div style="clear:both;"></div><!-- inputs hidden -->
                                <input type="hidden" id="item_custom1" name="item_custom1" value="Circle" />
                                <input type="hidden" id="item_custom2" name="item_custom2" value="Red" />
                                <input type="hidden" id="item_custom3" name="item_custom3" value="Circle" /></form>
                            <a id="sound"></a>
                        </div>
                        <div id="rightcol" class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div id="preview" style="top: 10px;">
                                <div class="boxtitle">Front Live Preview</div><!--<span>Tag Preview:</span>--><!-- The ID is currently used as the HTML background color -->
                                <div id="tag" style="background-image: url(http://nodeadlines.com/images/tagselector/preview_bg-redaluminum.jpg); background-color: rgb(155, 43, 43);">
                                    <img class="img-responsive" src="image/circle.png" width="360" height="350" /><div id="tag_text" style="top: 116.5px; color: rgb(249, 249, 249);"></div>
                                </div>
                                <div class="description text-center">
                                    <span id="preview_material">Red Aluminum</span>&nbsp;<span id="preview_shape">Circle</span><br /><br />                                 <span style="background-color: #fff;">
                                    <a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target=".bs-example-modal-lg">Tag &amp; lettering not actual size</a>
                                    <br /><br />
                                    Tags with 4 or fewer lines of text will have<br />enlarged lettering
                                    </span>
                                </div>
                            </div><!--Back end-->
                            <div id="preview" style="top: 10px;">
                                <div class="boxtitle">Back Live Preview</div><!--<span>Tag Preview:</span>--><!-- The ID is currently used as the HTML background color -->
                                <div id="tag2" style="background-image: url(http://nodeadlines.com/images/tagselector/preview_bg-redaluminum.jpg); background-color: rgb(155, 43, 43);">
                                    <img class="img-responsive" src="image/circle.png" width="360" height="350" />
                                    <div id="tag_textTwo" style="top: 116.5px; color: rgb(249, 249, 249);"></div>
                                </div>
                                <div class="description text-center"><!--<span id="preview_material">Stainless Steel</span>&nbsp;<span id="preview_shape">Circle</span>--><br /><br />
                                    <span style="background-color: #fff;">
                                        <a type="button" class="btn btn-primary disabled" data-toggle="modal" data-target=".bs-example-modal-lg">Tag &amp; lettering not actual size</a>
                                        <br /><br />Tags with 4 or fewer lines of text will have<br />enlarged lettering
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div><!--End== >
        <div id="viewcarttop" align="right"> <a class="btn btn-danger cartbuttonlarge" type="button" onclick="location.href='viewcart'" name="checkoutbuttontext" value="View Cart">View Cart</a> </div>
      </div>
    </div>
    <div style="clear: both;"></div>

    <!== tag selector end --><!--/PageContent-->
                </div>
            </div>
        </div>
        <div id="footer">
			<p style="color:#fff; text-align:center;font-size:12px;font-weight:100;font-family:arial;padding-top:30px;">&copy; Copyright 2016 PetTagsWePrint.com &bull; <a style="font-size:16px;" href="contact.html">Contact Us</a></p>
		</div>
        <script src="ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>