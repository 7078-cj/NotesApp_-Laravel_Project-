const profile =  document.getElementById("profile");
console.log(profile);
const profileCard =  document.getElementById("profileCard");
console.log(profileCard);
const menu =  document.getElementById("menu");
console.log(menu);
const menuCard =  document.getElementById("menuCard");
console.log(menuCard);

profile.onclick = function(){
    profileCard.classList.toggle("hidden");
    profileCard.classList.toggle("animate-slide-in-bottom");
  }

  menu.onclick = function(){
    menuCard.classList.toggle("hidden");
    menuCard.classList.toggle("animate-slide-in-bottom");
  }