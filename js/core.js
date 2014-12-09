var passwordField = $('<input type="password" name="ac_password" class="styledInput" value="" id="signinPassword" onblur="passwordBlur($(this));" />');
var passwordFieldReplacment = $('<input type="text" name="ac_password" class="styledInput" value="your password" id="signinPassword" onfocus="passwordFocus($(this));" />');

function formFieldFocus(idx, f_name) {
	field = fields_ids[idx];
	txt   = fields_txt[idx];
	obj   = eval("document.getElementById(\"" + f_name + "\")." + field);
	if(obj.value === txt) {
		obj.value = "";
	}
	return true;
}

function formFieldBlur(idx, f_name) {
	field = fields_ids[idx];
	txt   = fields_txt[idx];
	obj   = eval("document.getElementById(\"" + f_name + "\")." + field);
	if(obj.value === "") {
		obj.value = txt;
	}
	return true;
}

function submitForm(f_name) {
	for(i = 0; i < fields_ids.length; ++i) {
		obj = eval("document.getElementById(\"" + fields_ids[i] + "\")");
		if(obj.value === fields_txt[i]) {
			obj.value = "";
		}
	}
	eval("document.getElementById(\"" + f_name + "\").submit();");
	return false;
}

function setContextForForm(field_name, field_value) {
	eval("document.getElementById(\"" + field_name + "\").value = '" + field_value + "';");
	return false;
}

function detailedFields(field_id) {
	obj = eval("document.getElementById(\"" + field_id + "\")");
	if(!obj.style.display || obj.style.display === "none") {
		obj.style.display = "block";
	} else if(obj.style.display === "block") {
		obj.style.display = "none";
		obj.value = "Please specify";
	}
}

function openPopup(popupLocation, popupName, popupWidth, popupHeight) {
	var screenWidth = 760, screenHeight = 420;
	if (self.screen.width) {
		screenWidth = self.screen.width;
		screenHeight = self.screen.height;
	}
	var popupTop = (screenHeight - popupHeight) / 2, popupLeft = (screenWidth - popupWidth) / 2;
	newPopupName=window.open(popupLocation, 'newname', 'height=' + popupHeight + ', width=' + popupWidth + ', left=' + popupLeft + ', top=' + popupTop + ', resizable=0');
	if (newPopupName.focus) {
		newPopupName.focus();
	}
	return false;
}

function openInNewWindow() {
	var newWindow = window.open(this.getAttribute('href'), '_blank');
	if(newWindow) {
		newWindow.focus();
	}
	return false;
}

function getNewWindowLinks() {
	if (document.getElementById && document.createElement && document.appendChild) {
		var objWarningText, strWarningText, link, links = document.getElementsByTagName('a'), i;
		for (i = 0; i < links.length; i++) {
			link = links[i];
			if (link.getAttribute && link.getAttribute) {
				if (link.getAttribute("href") && link.getAttribute("rel") == "external") {
					link.onclick = openInNewWindow;
				}
			}
		}
		objWarningText = null;
	}
	if ($('input:password').size() !== 0) {
		var myInput = $('input[type=password]'), myTabIndex = myInput.attr('tabIndex');
		myInput.replaceWith(passwordFieldReplacment);
		passwordFieldReplacment.attr('tabIndex', myTabIndex);
	}
}

function showHide(theid){
    if (document.getElementById) {
    var switch_id = document.getElementById(theid);
        if(switch_id.className === 'hide') {
           switch_id.className = 'styledTable';
        } else {
           switch_id.className = 'hide';
        }
	}
}

function showHideBlock(theid, desiredClass){
	if (document.getElementById) {
		var switch_id = document.getElementById(theid);
		if (switch_id.className !== desiredClass) {
			if (switch_id.className === 'hide') {
				switch_id.className = 'dontHide';
			} else {
				switch_id.className = 'hide';
			}
		}
	}
}

function focusMe(me) {
	me.focus();
}

function passwordFocus(me) {
	var myTabIndex = me.attr('tabIndex');
	me.replaceWith(passwordField);
	passwordField.attr('tabIndex', myTabIndex);
	setTimeout(focusMe, 10, passwordField);
}

function passwordBlur(me) {
	if (me.val() === '') {
		var myTabIndex = me.attr('tabIndex');
		me.replaceWith(passwordFieldReplacment);
		passwordFieldReplacment.attr('tabIndex', myTabIndex);
	}
}


// Make product panels equal heights //
$(document).ready(function() {
	$(".productListing .nonMicroformatWrapper .fn").equalHeights().css('overflow','hidden');
	$(".productListing .nonMicroformatWrapper .priceWrapper").equalHeights().css('overflow','hidden');
	$(".productListing .photo").equalHeights().css('overflow','hidden');
	$(".productListing .item").equalHeights().css('overflow','hidden');
	$(".productListing .description").equalHeights().css('overflow','hidden');	
});


// Hide @font-face until rendered //
(function() {
	document.getElementsByTagName("html")[0].className += "wf-loading";
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();

WebFontConfig = {
custom: { families: ['CartoGothicPro-Book', 'CartoGothicPro-Bold'],
urls: [ '/css/font-face.css' ] }
};



//Anything slider//
$(document).ready(function() {

	//
	function listUpdatePosition(){
		var dateNow = new Date();
		var timeNow = dateNow.getTime();
		var secondsPassed = (timeNow - oldTimeNow) * .001;
		//
		if (direction == 1) {
			var itemWidth = listObj.find('li').eq(-1).width(); // last...
			if(itemWidth * direction <= listWidth - listHolderWidth + position) {
				position -= itemWidth;
				listObj.prepend(listObj.find('li').eq(-1)); // last...
			}
		} else {
			var itemWidth = listObj.find('li').eq(0).width(); // first...
			if(position <= itemWidth * direction) {
				position += itemWidth;
				listObj.append(listObj.find('li').eq(0)); // first...
			}
		}
		//
		position += Math.floor(secondsPassed * distancePS * direction);
		//
		$('#listPositioner').css('left', position);	
		//
		oldTimeNow = timeNow;
	}
	//
	$('#listPositioner ul li').hover(function () {
		clearInterval(callIndex);
	});
	//
	$('#listPositioner ul li').mouseout(function () {
		var timeRestart = new Date();
		oldTimeNow = timeRestart.getTime();
		clearInterval(callIndex);
		callIndex = setInterval(listUpdatePosition, callFrequency);
	});
	//
	var direction = -1; // right = 1, left = -1
	var fps = 22;
	var distancePS = 20;
	//
	var listHolderWidth = $('#listHolder').width();
	var timeStart = new Date();
	var oldTimeNow = timeStart.getTime();
	var position = 0;
	var listWidth = 0;
	var callFrequency = 1000 / fps;
	var listObj = $('#listPositioner ul');
	var numListItems = listObj.find('li').length;
	for (var i = 0; i < numListItems; i++) {
		listWidth += listObj.find('li').eq(i).width();
	}
	listObj.css('width', listWidth);
	var callIndex = setInterval(listUpdatePosition, callFrequency);
	
	
	//Nivo slider//
	$('#slider').nivoSlider({
		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
		slices: 15, // For slice animations
		boxCols: 8, // For box animations
		boxRows: 4, // For box animations
		animSpeed: 500, // Slide transition speed
		pauseTime: 5000, // How long each slide will show
		startSlide: 0, // Set starting Slide (0 index)
		directionNav: true, // Next & Prev navigation
		directionNavHide: true, // Only show on hover
		controlNav: true, // 1,2,3... navigation
		controlNavThumbs: false, // Use thumbnails for Control Nav
		controlNavThumbsFromRel: false, // Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', // Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
		keyboardNav: true, // Use left & right arrows
		pauseOnHover: true, // Stop animation while hovering
		manualAdvance: false, // Force manual transitions
		captionOpacity: 0.8, // Universal caption opacity
		prevText: 'Prev', // Prev directionNav text
		nextText: 'Next', // Next directionNav text
		beforeChange: function(){}, // Triggers before a slide transition
		afterChange: function(){}, // Triggers after a slide transition
		slideshowEnd: function(){}, // Triggers after all slides have been shown
		lastSlide: function(){}, // Triggers when last slide is shown
		afterLoad: function(){} // Triggers when slider has loaded
	});
});