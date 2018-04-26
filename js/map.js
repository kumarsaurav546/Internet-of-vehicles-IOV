function map() {
	
	if(document.getElementById('pagecontent').style.display=='block')
	{
		document.getElementById('pagecontent').style.display = 'none';
		document.getElementById('mapdis').style.display = 'block';	
	}
	else
	{
		document.getElementById('pagecontent').style.display = 'block';
		document.getElementById('mapdis').style.display = 'none';
	}
}

