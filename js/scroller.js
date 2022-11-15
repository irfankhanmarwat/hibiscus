var scroll_height = 173;

function TextScroll(scrollname, div_name, up_name, down_name, scrollbar, scrollheight)
{
    this.div_name = div_name;
    this.name = scrollname;
    this.scrollCursor = 0;
    this.speed = 4;
	this.speedStep = 20;
    this.timeoutID = 0;
    this.div_obj = null;
    this.up_name = up_name;
    this.dn_name = down_name;

	{

		if (document.getElementById) 
		{
			div_obj = document.getElementById(this.div_name);
			if (div_obj) 
			{
				this.div_obj = div_obj;
				this.div_obj.style.overflow = 'hidden';
			}
			div_up_obj = document.getElementById(this.up_name);
			div_dn_obj = document.getElementById(this.dn_name);
			if (div_up_obj && div_dn_obj) 
			{
				div_up_obj.onmouseover = function() { eval(scrollname + ".scrollUp();") };
				div_up_obj.onmouseout = function() { eval(scrollname + ".stopScroll();") };
				div_dn_obj.onmouseover = function() { eval(scrollname + ".scrollDown();") };
				div_dn_obj.onmouseout = function() { eval(scrollname + ".stopScroll();") };
				
												
				/*div_up_obj.onmousedown = function() { eval(scrollname + ".scrollUp();") };
				div_up_obj.onmouseup = function() { eval(scrollname + ".stopScroll();") };
				div_up_obj.onmouseout = function() { eval(scrollname + ".stopScroll();") };
				
				div_dn_obj.onmousedown = function() { eval(scrollname + ".scrollDown();") };
				div_dn_obj.onmouseup = function() { eval(scrollname + ".stopScroll();") };
				div_dn_obj.onmouseout = function() { eval(scrollname + ".stopScroll();") };
				*/
			}
		}
    }

	this.stopScroll = function() {
        clearTimeout(this.timeoutID);
    }

	this.scrollUp = function() {
        if (this.div_obj) {
            this.scrollCursor = (this.scrollCursor - this.speed) < 0 ? 0 : this.scrollCursor - this.speed;
            this.div_obj.scrollTop = this.scrollCursor;
            this.timeoutID = setTimeout(this.name + ".scrollUp()", 60);
        }
    }

	this.scrollDown = function() {
		if (this.div_obj) {
			this.scrollCursor += this.speed;
			this.div_obj.scrollTop = this.scrollCursor;
			if (this.div_obj.scrollTop == this.scrollCursor) {
				this.timeoutID = setTimeout(this.name + ".scrollDown()", 60);
			} else {
				this.scrollCursor = this.div_obj.scrollTop;
			}
		}
	}
	
	this.scrollUpStep = function() {
        if (this.div_obj) {
            this.scrollCursor = (this.scrollCursor - this.speedStep) < 0 ? 0 : this.scrollCursor - this.speedStep;
            this.div_obj.scrollTop = this.scrollCursor;            
        }
    }
	
	this.scrollDownStep = function() {
		if (this.div_obj) {
			this.scrollCursor += this.speedStep;
			this.div_obj.scrollTop = this.scrollCursor;
			this.scrollCursor = this.div_obj.scrollTop;		
		}
	}
	
	this.resetScroll = function() {
		if (this.div_obj) {
			this.div_obj.scrollTop = 0;
			this.scrollCursor = 0;
		}
	}
	
	/**/
	if ( (document.getElementById(scrollheight)) && (scroll_height>0) )
	{
		if (document.getElementById(scrollheight).offsetHeight <= document.getElementById(this.div_name).offsetHeight)
		{
			//document.getElementById(scrollbar).style.display = "none";
			document.getElementById(this.up_name).style.display = "none";
			document.getElementById(this.dn_name).style.display = "none";
		}
		else
		{
			document.getElementById(this.up_name).style.display = "block";
			document.getElementById(this.dn_name).style.display = "block";
		}
	}
	else
	{
		document.getElementById(this.up_name).style.display = "block";
		document.getElementById(this.dn_name).style.display = "block";
	}
	
}


var triggered = "";
function cancelEvent(e)
{
  e = e ? e : window.event;
  if(e.stopPropagation)
    e.stopPropagation();
  if(e.preventDefault)
    e.preventDefault();
  e.cancelBubble = true;
  e.cancel = true;
  e.returnValue = false;
  return false;
}

function wheel(e)
{
	
  e = e ? e : window.event;
  var wheelDelta = e.detail ? e.detail * -1 : e.wheelDelta / 40;
	
	scrollname = 'div_scroll1'+triggered;
	
	if (!e) /* For IE. */
			e = window.event;
	
	if (e.wheelDelta) { /* IE/Opera. */
		wheelDelta = e.wheelDelta/120;
		if (window.opera)
			wheelDelta = -wheelDelta;
	} else if (e.detail) { /** Mozilla case. */
		wheelDelta = -e.detail/3;
	}		
			
	if (wheelDelta>0)	//up
		eval(scrollname + ".scrollUpStep();");
	else	//down
		eval(scrollname + ".scrollDownStep();");


  return cancelEvent(e);
}

$(function()
{
	$("[id^='scrollblock']").mouseover(function() {
		triggered = this.id.replace("scrollblock","");
		if (window.addEventListener)
			window.addEventListener('DOMMouseScroll', wheel, false);
		document.onmousewheel = wheel;			
	}).mouseout(function(){
		if (window.removeEventListener)
			window.removeEventListener('DOMMouseScroll', wheel, false);
		document.onmousewheel = null;
	});

});