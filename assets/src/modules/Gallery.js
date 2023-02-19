import GLightbox from "glightbox";

class Gallery {
  constructor() {
    console.log("gallery loading");
    this.elements = [];
    if (document.querySelector(".wp-block-gallery")) {
      this.gallery = document.querySelector(".wp-block-gallery");
      this.gallery.style.display = "none";
      this.images = document.querySelectorAll(".wp-block-image > img");
      this.portfolio = document.querySelector(".row.portfolio-items");
      this.events();
    }
  }

  events = () => {
    document.addEventListener("DOMContentLoaded", () => {
      this.constructGallery();
      let buttons = document.querySelectorAll(".glightbox");
      for (let button of buttons) {
        button.addEventListener("click", (evt) => {
          this.displayGallery(evt);
        });
      }
      let lightBoxImages = document.querySelectorAll(".gslide-image>img");
      for (let lightBoxImage of lightBoxImages) {
        console.dir(lightBoxImage);
      }
    });
  };

  displayGallery = (evt) => {
    let startingSlide = parseInt(evt.target.classList[0].replace("photo-", ""));
    console.dir(this.elements);
    // Display gallery functionality
    const myGallery = GLightbox({
      elements: this.elements,
      autoplayVideos: false,
      startAt: startingSlide,
      openEffect: "fade",
      closeEffect: "fade",
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
      let sources = image.srcset.split(",");

      let source = sources[sources.length - 1].trim().split(" ")[0];

      portfolioItems += `
          <div class="col-lg-6">
            <div class="portfolio-box">

              <img src="${image.src}" alt="portfolio item #" title="portfolio # picture" class="img-fluid" />

            <div class="portfolio-info">
              <div class="caption">
                <p>
                  <a
                    class="photo-${photoNumber} glightbox" title="Click to display full screen gallery"
                  >

                  </a>
                </p>
              </div>
            </div>
          </div>
          </div>
        `;

      // add to elements for glightbox
      this.elements.push({
        href: `${source}`,
        type: "image",
        zoomable: "true",
        width: "90vh",
        height: "auto",
      });
      photoNumber++;
    }

    this.portfolio.innerHTML = portfolioItems;

    // setup glightbox
  };
}

export default Gallery;
