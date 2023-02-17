import GLightbox from "glightbox";

class Gallery {
  constructor() {
    this.elements = [];
    if (document.querySelector(".wp-block-gallery")) {
      this.gallery = document.querySelector(".wp-block-gallery");
      this.images = document.querySelectorAll(".wp-block-image > img");
      this.portfolio = document.querySelector(".row.portfolio-items");
      setTimeout(() => {
        this.constructGallery();
        this.gallery.style.display = "none";
        this.events();
      }, 200);
    }
  }

  events = () => {
    let buttons = document.querySelectorAll(".glightbox");
    for (let button of buttons) {
      button.addEventListener("click", (evt) => {
        this.displayGallery(evt);
      });
    }
  };

  displayGallery = (evt) => {
    let startingSlide = parseInt(evt.target.classList[0].replace("photo-", ""));

    // Display gallery functionality
    const myGallery = GLightbox({
      elements: this.elements,
      autoplayVideos: false,
      startAt: startingSlide,
      openEffect: "fade",
      closeEffect: "fade",
      zoomable: "true",
    });

    myGallery.on("close", () => {
      myGallery.close();
    });

    myGallery.open();
  };

  constructGallery = () => {
    let portfolioItems = ``;
    let photoNumber = 0;
    for (let image of this.images) {
      // add item to innerHtml
      portfolioItems += `
          <div class="col-lg-6">
            <div class="portfolio-box">
              <img src="${image.currentSrc}" alt="portfolio item #" title="portfolio # picture" class="img-fluid" />

            <div class="portfolio-info">
              <div class="caption">
                <p>
                  <a
                    class="photo-${photoNumber} glightbox"
                  >
                    Click to display full screen
                  </a>
                </p>
              </div>
            </div>
          </div>
          </div>
        `;

      // add to elements for glightbox
      this.elements.push({
        href: `${image.currentSrc}`,
        type: "image",
      });
      photoNumber++;
    }

    this.portfolio.innerHTML = portfolioItems;

    // setup glightbox
  };
}

export default Gallery;
