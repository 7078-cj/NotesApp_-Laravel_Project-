const profile =  document.getElementById("profile");
console.log(profile);
const profileCard =  document.getElementById("profileCard");
console.log(profileCard);

profile.onclick = function(){
    profileCard.classList.toggle("hidden");
    profileCard.classList.toggle("animate-slide-in-bottom");
  }