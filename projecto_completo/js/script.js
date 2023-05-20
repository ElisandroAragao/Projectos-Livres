document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });


  
  const lightbox = document.createElement('div')
  lightbox.id = 'lightbox'
  document.body.appendChild(lightbox)
  
  
  const images = document.querySelectorAll('img')
  images.forEach(image => {
    image.addEventListener('click', e => {
        lightbox.classList.add('active')
        const img = document.createElement('img')
        img.src = image.src
        while (lightbox.firstChild){
          lightbox.removeChild(lightbox.firstChild)
        }
        lightbox.appendChild(img)
    })
  })

  lightbox.addEventListener('click', e => {
    if (e.target !== e.currentTarget) return
    lightbox.classList.remove('active')
  })
  
