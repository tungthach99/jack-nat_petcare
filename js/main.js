function hienthiform(id)
{
	if(document.getElementById(id).style.display=="block")
		document.getElementById(id).style.display="none";
	else
		document.getElementById(id).style.display="block";
	
}
function dongform(id)
{
	document.getElementById(id).style.display="none";
}
function dieuHuong(){
	kichThuoc = 0;
	document.getElementById("chuyenSlide").style.marginLeft = '-' + kichThuoc + '%';
	document.getElementById("bottom_1").style.backgroundColor="#172f87";
			document.getElementById("bottom_2").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_3").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_4").style.backgroundColor="#a5a5a5";
			document.getElementById("bottom_5").style.backgroundColor="#a5a5a5";
}
function zoom(image){
	var anh= image.src;
	image.style.opacity = "100%";
	document.getElementById("noiDungPhongTo").style.display="block";
	document.getElementById("anhPhongTo").src= anh;
}

