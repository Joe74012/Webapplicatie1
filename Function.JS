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
  var f = document.getElementById("BeschrijvingRij1Frame1");
  var x2 = document.getElementById("KostRij1Frame2");
  var y2 = document.getElementById("NaamRij1Frame2");
  var z2 = document.getElementById("AfbeeldingRij1Frame2");
  var f2 = document.getElementById("BeschrijvingRij1Frame2");
  var x3 = document.getElementById("KostRij1Frame3");
  var y3 = document.getElementById("NaamRij1Frame3");
  var z3 = document.getElementById("AfbeeldingRij1Frame3");
  var f3 = document.getElementById("BeschrijvingRij1Frame3");
  var x4 = document.getElementById("KostRij2Frame1");
  var y4 = document.getElementById("NaamRij2Frame1");
  var z4 = document.getElementById("AfbeeldingRij2Frame1");
  var f4 = document.getElementById("BeschrijvingRij2Frame1");
  var x5 = document.getElementById("KostRij2Frame2");
  var y5 = document.getElementById("NaamRij2Frame2");
  var z5 = document.getElementById("AfbeeldingRij2Frame2");
  var f5 = document.getElementById("BeschrijvingRij2Frame2");
  var x6 = document.getElementById("KostRij2Frame3");
  var y6 = document.getElementById("NaamRij2Frame3");
  var z6 = document.getElementById("AfbeeldingRij2Frame3");
  var f6 = document.getElementById("BeschrijvingRij2Frame3");
  var Knop1 = document.getElementById("GerechtKnop");
  var text1 = document.getElementById("GerechtenText");
  var Knop2 = document.getElementById("SnackKnop");
  var text2 = document.getElementById("SnacksText");
  var Knop3 = document.getElementById("HapjesKnop");
  var text3 = document.getElementById("HapjesText");
  if (x.textContent == "€2") {
    
  } 
  else {
    x.textContent = "€9,75";
    y.textContent = "Rames 'Toko Rinus'";
    z.src = "Afbeeldingen/Rames'Toko Rinus'.png";
    f.textContent = "Witte of gele rijst, 1x vleesgericht, 1x groente gerecht, acar campoer of ketimoen kroepoek";
    x2.textContent = "€7,50";
    y2.textContent = "Gado Gado schotel";
    z2.src = "Afbeeldingen/Gado Gado schotel.png";
    f2.textContent = "Knapperige groenten met lontong en satésaus";
    x3.textContent = "€7,75";
    y3.textContent = "Soto ajam";
    z3.src = "Afbeeldingen/Soto ajam.png";
    f3.textContent = "Gevulde maaltijdsoep ajam, soeoen, taugé, selderij, gebakken uitjes, gekookt ei en lontong";
    x4.textContent = "€11,25";
    y4.textContent = "Rames 'Extra'";
    f4.textContent = "Nasi, bami of mihoen, 1x vleesgerecht, 1x groentegerecht, acar campoer of ketimoen kroepoek";
    z4.src = "Afbeeldingen/Rames 'Extra'.png";
    x5.textContent = "€12,25";
    y5.textContent = "Rames 'Vlees'";
    z5.src = "Afbeeldingen/Rames 'Vlees'.png";
    f5.textContent = "Nasi, bami of mihoen, 2x vleesgerecht, acar campoer of ketimoen kroepoek";
    x6.textContent = "€12,75";
    y6.textContent = "Rames 'Speciaal'";
    z6.src = "Afbeeldingen/Rames 'Speciaal'.png";
    f6.textContent = "Nasi, bami of mihoen, 1x vleesgerecht, 1x groente gerecht, 1x eigerecht, acar campoer of ketimoen kroepoek";
    Knop1.className = "Knop";
    text1.className = "Witte-Text";
    Knop2.className = "Niet-Gedrukte-Knop";
    text2.className = "Zwarte-Text";
    Knop3.className = "Niet-Gedrukte-Knop";
    text3.className = "Zwarte-Text";
  }
}

function Snacks() {
  var x = document.getElementById("KostRij1Frame1");
  var y = document.getElementById("NaamRij1Frame1");
  var z = document.getElementById("AfbeeldingRij1Frame1");
  var f = document.getElementById("BeschrijvingRij1Frame1");
  var x2 = document.getElementById("KostRij1Frame2");
  var y2 = document.getElementById("NaamRij1Frame2");
  var z2 = document.getElementById("AfbeeldingRij1Frame2");
  var f2 = document.getElementById("BeschrijvingRij1Frame2");
  var x3 = document.getElementById("KostRij1Frame3");
  var y3 = document.getElementById("NaamRij1Frame3");
  var z3 = document.getElementById("AfbeeldingRij1Frame3");
  var f3 = document.getElementById("BeschrijvingRij1Frame3");
  var x4 = document.getElementById("KostRij2Frame1");
  var y4 = document.getElementById("NaamRij2Frame1");
  var z4 = document.getElementById("AfbeeldingRij2Frame1");
  var f4 = document.getElementById("BeschrijvingRij2Frame1");
  var x5 = document.getElementById("KostRij2Frame2");
  var y5 = document.getElementById("NaamRij2Frame2");
  var z5 = document.getElementById("AfbeeldingRij2Frame2");
  var f5 = document.getElementById("BeschrijvingRij2Frame2");
  var x6 = document.getElementById("KostRij2Frame3");
  var y6 = document.getElementById("NaamRij2Frame3");
  var z6 = document.getElementById("AfbeeldingRij2Frame3");
  var f6 = document.getElementById("BeschrijvingRij2Frame3");
  var Knop1 = document.getElementById("GerechtKnop");
  var text1 = document.getElementById("GerechtenText");
  var Knop2 = document.getElementById("SnackKnop");
  var text2 = document.getElementById("SnacksText");
  var Knop3 = document.getElementById("HapjesKnop");
  var text3 = document.getElementById("HapjesText");
  if (x.textContent == "€4,00") {
    
  } 
  else {
    x.textContent = "€4,00";
    y.textContent = "Spekkoek";
    z.src = "Afbeeldingen/Spekkoek.png";
    f.textContent = "normaal, pandan, chocolade of banaan (Tjendrawasih & Hekos)";
    x2.textContent = "€2,45";
    y2.textContent = "Dadar Unti";
    z2.src = "Afbeeldingen/Dadar Unti.png";
    f2.textContent = "pandanflensjes gevuld met kokos en Javaanse bruine suiker";
    x3.textContent = "€2,45";
    y3.textContent = "Kwee Lapis";
    z3.src = "Afbeeldingen/Kwee Lapis.png";
    f3.textContent = "Kue lapis is een gestoomde koek met gekleurde laagjes dat heerlijk naar cocos smaakt.";
    x4.textContent = "€2,30";
    y4.textContent = "Pisang Goreng";
    z4.src = "Afbeeldingen/Pisang Goreng.png";
    f4.textContent = "Deze lekkere bananen in een zoet en krokant jasje heten in Indonesië Pisang goreng wat gebakken banaan betekent en zijn een lekkere snack";
    x5.textContent = "€2,45";
    y5.textContent = "Kwee Mangkok";
    z5.src = "Afbeeldingen/Kwee Mangkok.png";
    f5.textContent = "gestoomde cakejes is een zoete, Indische snack gemaakt van rijstmeel en kokosmelk";
    x6.textContent = "€4,99";
    y6.textContent = "Bubble tea";
    z6.src = "Afbeeldingen/Bubble tea.png";
    f6.textContent = "verfrissende drankje met tapioca korrels (diverse smaken)";
    Knop1.className = "Niet-Gedrukte-Knop";
    text1.className = "Zwarte-Text";
    Knop2.className = "Knop";
    text2.className = "Witte-Text";
    Knop3.className = "Niet-Gedrukte-Knop";
    text3.className = "Zwarte-Text";
  }
}

function Hapjes() {
  var x = document.getElementById("KostRij1Frame1");
  var y = document.getElementById("NaamRij1Frame1");
  var z = document.getElementById("AfbeeldingRij1Frame1");
  var f = document.getElementById("BeschrijvingRij1Frame1");
  var x2 = document.getElementById("KostRij1Frame2");
  var y2 = document.getElementById("NaamRij1Frame2");
  var z2 = document.getElementById("AfbeeldingRij1Frame2");
  var f2 = document.getElementById("BeschrijvingRij1Frame2");
  var x3 = document.getElementById("KostRij1Frame3");
  var y3 = document.getElementById("NaamRij1Frame3");
  var z3 = document.getElementById("AfbeeldingRij1Frame3");
  var f3 = document.getElementById("BeschrijvingRij1Frame3");
  var x4 = document.getElementById("KostRij2Frame1");
  var y4 = document.getElementById("NaamRij2Frame1");
  var z4 = document.getElementById("AfbeeldingRij2Frame1");
  var f4 = document.getElementById("BeschrijvingRij2Frame1");
  var x5 = document.getElementById("KostRij2Frame2");
  var y5 = document.getElementById("NaamRij2Frame2");
  var z5 = document.getElementById("AfbeeldingRij2Frame2");
  var f5 = document.getElementById("BeschrijvingRij2Frame2");
  var x6 = document.getElementById("KostRij2Frame3");
  var y6 = document.getElementById("NaamRij2Frame3");
  var z6 = document.getElementById("AfbeeldingRij2Frame3");
  var f6 = document.getElementById("BeschrijvingRij2Frame3");
  var Knop1 = document.getElementById("GerechtKnop");
  var text1 = document.getElementById("GerechtenText");
  var Knop2 = document.getElementById("SnackKnop");
  var text2 = document.getElementById("SnacksText");
  var Knop3 = document.getElementById("HapjesKnop");
  var text3 = document.getElementById("HapjesText");
  if (x.textContent == "€2,20") {
    
  } 
  else {
    x.textContent = "€2,20";
    y.textContent = "Kip Pastei";
    z.src = "Afbeeldingen/Kip Pastei.png";
    f.textContent = "pasteitje gevuld met kippenvlees en groenten";
    x2.textContent = "€2,45";
    y2.textContent = "Lemper";
    z2.src = "Afbeeldingen/Lemper.png";
    f2.textContent = "kip *uit eigen keuken*";
    x3.textContent = "€2,30";
    y3.textContent = "Risolles";
    z3.src = "Afbeeldingen/Risolles.png";
    f3.textContent = "varken of kip";
    x4.textContent = "€1,75";
    y4.textContent = "Loempia vietnamees";
    z4.src = "Afbeeldingen/Loempia vietnamees.png";
    f4.textContent = "vietnameese loempia gevuld met groenten (kippenvlees variant ook aanwezig)";
    x5.textContent = "€2,25";
    y5.textContent = "Bara Bara";
    z5.src = "Afbeeldingen/Bara Bara.png";
    f5.textContent = "hartige hindoestaans/surinaamse snack";
    x6.textContent = "€5,50";
    y6.textContent = "panini";
    z6.src = "Afbeeldingen/Surinaams broodje (panini).png";
    f6.textContent = "gevuld met vlees of vis";
    Knop1.className = "Niet-Gedrukte-Knop";
    text1.className = "Zwarte-Text";
    Knop2.className = "Niet-Gedrukte-Knop";
    text2.className = "Zwarte-Text";
    Knop3.className = "Knop";
    text3.className = "Witte-Text";
  }
}