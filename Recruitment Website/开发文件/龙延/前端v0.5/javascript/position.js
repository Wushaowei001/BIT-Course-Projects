function showSubnav1()
{
	document.getElementById("subnav1").style.display="block";
}

function hideSubnav1()
{
	document.getElementById("subnav1").style.display="none";
}

function showSubnav2()
{
	document.getElementById("subnav2").style.display="block";
}

function hideSubnav2()
{
	document.getElementById("subnav2").style.display="none";
}

var cnt1=0;
function toggleMore()
{
	$("#more-condition").toggle(400);
	h=$(".container").height();
	if (cnt1%2==0)
	{
		$(".container").animate({
			height:h+70
		});
		$(".tail").animate({
			top:h+110+'px'
		});
	}
	else
	{
		$(".container").animate({
			height:h-70
		});
		$(".tail").animate({
			top:h-30+'px'
		});
	}
	cnt1=(cnt1+1)%10;
}

function changeOrderByTime()
{
	li=document.getElementById("orderByTime");
	if (li.innerHTML=="时间 ↓ ")
		li.innerHTML="时间 ↑ "
	else
		li.innerHTML="时间 ↓ ";
}

function changeOrderByEdu()
{
	li=document.getElementById("orderByEdu");
	if (li.innerHTML=="学历 ↓ ")
		li.innerHTML="学历 ↑ "
	else
		li.innerHTML="学历 ↓ ";
}

function changeWorkType()
{
	var ratios=document.getElementsByName("work");
	for (var i=0; i<3; i++)
			ratios.item(i).checked=false;
}

function newPosiInit()
{
	var ratios=document.getElementsByName("faceToface");
	ratios.item(0).checked=false;
}

function checkAll()
{
	obj=document.getElementById("selectAll");	
	checks=document.getElementsByName("checkSingle");
	if (obj.checked==false)
	{
		obj.check=true;
		for (var i=0; i<checks.length; i++)
		{
			checks.item(i).checked=true;	
		}
	}
	else
	{
		obj.check=false;
		for (var i=0; i<checks.length; i++)
		{
			checks.item(i).checked=false;	
		}
	}
}

var tags=0;
function tagsChangeColor(tag)
{
	var obj=tag;
	if (tags>7 && obj.className=="pos-tag")
	{
		tag=document.getElementById("warn-tag");
		tag.style.visibility="visible";
		return;
	}
	if (obj.className=="pos-tag")
	{
		obj.setAttribute("class", "pos-tag2");
		tags++;
	}
	else
	{
		obj.setAttribute("class", "pos-tag");
		tag=document.getElementById("warn-tag");
		tag.style.visibility="hidden";
		tags--;
	}
}

function changeTab(obj)
{
	$(".moving-bar").html("—————");
	if (obj.innerHTML=="修改企业信息" || obj.innerHTML=="修改账户信息")
	{
			document.getElementById("index1").style.display="block";
			document.getElementById("index2").style.display="none";
			$(".moving").animate({
				width:'120',
				left:'0'
			});
	}
	else
	{
			document.getElementById("index2").style.display="block";
			document.getElementById("index1").style.display="none";
			$(".moving").animate({
				width:'88',
				left:'120'
			});
	}
}

function showGeren()
{
	$("#gerenzhongxin").fadeIn(200);
}

function hideGeren()
{
	showFlag=0;
	setTimeout(checkHide, 200);
}

var showFlag=0;
function setShowFlag(obj)
{
	showFlag=1;
}

function checkHide()
{
	if (!showFlag)
	{
		$("#gerenzhongxin").fadeOut(200);
	}
}