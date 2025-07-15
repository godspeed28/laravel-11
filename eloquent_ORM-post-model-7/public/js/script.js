const profilMobileBtn = document.querySelector(".profil-mobile");
const menuProfilMobile = document.querySelector("#menuProfilMobile");

profilMobileBtn.addEventListener("click", () => {
    menuProfilMobile.classList.toggle("d-none");
});
