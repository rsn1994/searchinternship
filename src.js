function search(frm) {

txt = frm.srchval.value;

if(txt.length<=3)
{
alert("Atleast 3 letters should be required for search.");
}
else
{
url = "./search.php?"; 
url += "key=" + txt;           
var xhr = new XMLHttpRequest();
     xhr.open("GET", url, true);
     xhr.onreadystatechange = function() {
      if (xhr.readyState == 4) {
			
			response=JSON.parse(this.responseText);
console.log(response);

}
}
xhr.send();
}
}
