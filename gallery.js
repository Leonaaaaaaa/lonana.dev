const images = document.querySelectorAll('#gallery img');

images.forEach(image => { 
    image.addEventListener('click', () => {
        const src = image.getAttribute('src');
        console.log(src);

        
    });
});