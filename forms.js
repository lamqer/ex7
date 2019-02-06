function showLanguage(){
  var lang = document.getElementById("language");
  document.getElementById("selected_language").value=lang.options[lang.selectedIndex].text;
}

function showPhone(phone){
  document.getElementById("selected_phone").value=phone;
}
