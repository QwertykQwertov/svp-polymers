<footer class=" mt-5 border-top bg-dark text-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none text-light">
          <h5>ООО "СВП"</h5>
        </a>
        <p class="text-light">© 2025</p>
      </div>

      <div class="col mb-3"></div>
      <div class="col mb-3"></div>
      <div class="col mb-3">
        <a href="/contacts" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none text-light">
          <h5>Контакты</h5>
        </a>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">г. Лыткарино, квартал 2-й, 15</a></li>
          <li class="nav-item mb-2"><a href="tel:+79017959902" class="nav-link p-0 text-light">+7 (901) 795-99-02</a></li>
          <li class="nav-item mb-2"><a href="/contacts/" class="nav-link p-0 text-light">zva@sv-polymers.ru</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Время работы:
              пн-пт 9.00-18.00, без перерыва
              сб, вс Выходной</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Покупателям</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="/catalog/" class="nav-link p-0 text-light">Товары и услуги</a></li>
        </ul>
      </div>


    </div>
  </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-end">
        <button style="background: transparent; border: none" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="h4">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselModal" class="carousel carousel-dark slide">
          <div class="carousel-inner" id="modalCarouselInner">
            <div class="carousel-item active">
              <img class="ki-modal-carousel-item-image" id="modalImage" src="" alt="">
            </div>
          </div>
          <button id="carouselButtonPrev" class="carousel-control-prev" type="button" data-bs-target="#carouselModal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button id="carouselButtonNext" class="carousel-control-next" type="button" data-bs-target="#carouselModal" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  // Открытие модального окна со слайдером
  function onImageClick(e) {
    console.log('wor')
    if (e.target.classList.contains('ki-modal-trigger')) {
      console.log('img1')
      console.dir(e.target.children[0])
      setSlides(e.target.children[0])
      // modalImage.src = e.target.children[0].currentSrc
    } else if (e.target.nodeName === 'IMG') {
      console.log('img')
      console.dir(e.target)
      setSlides(e.target)
      // modalImage.src = e.target.currentSrc
    } else {
      e.stopPropagation()
    }
  }


  function setSlides(el) {
    modalCarouselInner.innerHTML = ''

    addSlide(el.src, true)

    let path = el.src.split('/')
    path.pop()
    path = path.join('/') + '/'

    const otherImg = el.dataset.images && el.dataset.images.split(',')

    if (!otherImg) {
      carouselButtonPrev.classList.add('d-none')
      carouselButtonNext.classList.add('d-none')
      return
    } else {
      carouselButtonPrev.classList.remove('d-none')
      carouselButtonNext.classList.remove('d-none')
    }

    otherImg.forEach(imageName => {
      addSlide(path + imageName.trim())
    })
  }

  function addSlide(src, isActive) {
    const activeItem = document.createElement('div')
    activeItem.classList.add('carousel-item', 'text-center')
    if (isActive) activeItem.classList.add('active')

    const img = document.createElement('img')
    img.classList.add('ki-modal-carousel-item-image')
    img.src = src

    activeItem.append(img)
    modalCarouselInner.append(activeItem)
  }
</script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
  integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/js/bootstrap-navbar-dropdowns.min.js"></script>
<script>
  $('.navbar').navbarDropdown({
    theme: 'bs5',
    trigger: 'mouseover'
  });
</script>
</body>

</html>