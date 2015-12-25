function moveElement(elementID,final_x,final_y,interval)
{
	if (!document.getElementById) return false;
	if (!document.getElementById(elementID)) return false;
	var elem=document.getElementById(elementID);
	var xpos=parseInt(elem.style.left);
	var ypos=parseInt(elem.style.top);
	if (elementID=="tp1") 
	{
		if (xpos==final_x&&ypos==final_y) 
		{
			moveElement('tp2',250,25,20);
			return true;
		}
	}
	else
	{
		if (xpos==final_x&&ypos==final_y) 
		{
			return true;
		}
	}
	
	if (xpos<final_x) 
	{
		xpos++;
	}
	if (xpos>final_x) 
	{
		xpos--;
	}
	if (ypos<final_y) 
	{
		ypos++;
	}
	if (ypos>final_y) 
	{
		ypos--;
	}
	elem.style.left=xpos+"px";
	elem.style.top=ypos+"px";
	var repeat="moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
	movement=setTimeout(repeat,interval);
}

addLoadEvent(changepoet());
function changepoet()
{
	if (!document.getElementById) return false;
	if (!document.getElementById("tp1")||!document.getElementById("tp2")) return false;
	p1=document.getElementById("tp1");
	p2=document.getElementById("tp2");
	p1.style.position="absolute";
	p2.style.position="absolute";
	p1.style.left="0px";
	p1.style.top="0px";
	p2.style.left="0px";
	p2.style.top="25px";
	moveElement("tp1",200,0,20);
	// r;
	
}

// function movement(item,start,end)
// {
// 	if (start<end) return false;
// 	else
// 	{
// 		start--;
// 		item.style.marginRight=start+"px";
// 		repeat=movement(item,start,end);
// 		setTimeout(repeat,10000);
// 	}

// }