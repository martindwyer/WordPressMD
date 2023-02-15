class Search {
  constructor() {
    if (document.querySelector(".btn-search")) {
      console.log("search loading");
      this.searchButton = document.querySelector(".btn-search");
      this.searchDisplay = document.querySelector(".search-display");
      this.events();
    }
  }

  events = () => {};

  openSearchDisplay = (evt) => {};
}

export default Search;
