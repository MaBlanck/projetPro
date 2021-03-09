/**
 * Création de la modal pour gallerie photo
 */
let imgGallery = document.querySelectorAll('#imgGallery img');
for (let imgIndex = 0; imgIndex < imgGallery.length; imgIndex++) {
    let img = imgGallery[imgIndex];
    img.addEventListener('click', showModalPicture, false);
}

function showModalPicture(e) {
    let img = e.target;
    let imageContainer = document.getElementById('modal');
    let bigImage = imageContainer.querySelector('img');
    bigImage.src = img.src;
    imageContainer.classList.toggle('visible');
    imageContainer.addEventListener('click', closeModalPicture, false);
}
function closeModalPicture() {
    let imageContainer = document.getElementById('modal');
    imageContainer.classList.toggle('visible');
}





