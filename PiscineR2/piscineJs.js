function info(nom, description, prix, restant,video,photo){
  w=open("",'popup','width=600,height=600,toolbar=no,scrollbars=no,resizable=yes');	
  w.document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"piscine.css\"/>");
  w.document.write("<img class = \"imgstuff \" src = \" "+photo+" \" height = \"30% \" width = \"30%\" />" );
  w.document.write("<title> Votre  :"+nom+"</title>");
  w.document.write("<body class =\"descristuff\"> Description :"+description+"<br>");
  w.document.write("Prix:"+prix+"<br>");
  w.document.write("Restant:" + restant +"<br>");
  if (video){
  w.document.write("<video width =\"320\" height =\"240\" controls><source src= "+video+" type = \"video/mp4\"></video>");
  }
  w.document.write("</body>");
  w.document.close();
}

function infovar(array){
	z=open("",'popup','width=600,height=600,toolbar=no,scrollbars=no,resizable=yes');
	z.document.write(array);
	z.document.close();
}