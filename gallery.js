const images = document.querySelectorAll('#gallery img');

function showImage(src) {
    const modal = document.createElement('div');
    modal.classList.add('modal');
    
    const img = document.createElement('img');
    img.src = src;
    img.classList.add('modal-content');
    modal.appendChild(img);
    
    document.body.appendChild(modal);
    
    modal.addEventListener('click', () => {
        document.body.removeChild(modal);
    });
}

images.forEach(image => { 
    image.addEventListener('click', () => {
        const src = image.getAttribute('src');
        console.log(src);
        showImage(src);
    });
});
