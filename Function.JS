window.onscroll = function() {ScrollBar()};
function ScrollBar() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

function Gerechten() {
  var x = document.getElementById("KostRij1Frame1");
  var y = document.getElementById("NaamRij1Frame1");
  var z = document.getElementById("AfbeeldingRij1Frame1");
  var x2 = document.getElementById("KostRij1Frame2");
  var y2 = document.getElementById("NaamRij1Frame2");
  var z2 = document.getElementById("AfbeeldingRij1Frame2");
  var x3 = document.getElementById("KostRij1Frame3");
  var y3 = document.getElementById("NaamRij1Frame3");
  var z3 = document.getElementById("AfbeeldingRij1Frame3");
  if (x.textContent == "€2") {
    
  } 
  else {
    x.textContent = "€9,75";
    y.textContent = "Rames 'Toko Rinus'";
    z.src = "Afbeeldingen/Rames'Toko Rinus'.png";
    x2.textContent = "€7,50";
    y2.textContent = "Gado Gado schotel";
    z2.src = "Afbeeldingen/Gado Gado schotel.png";
    x3.textContent = "€7,75";
    y3.textContent = "Soto ajam";
    z3.src = "Afbeeldingen/Soto ajam.png";
  }
}