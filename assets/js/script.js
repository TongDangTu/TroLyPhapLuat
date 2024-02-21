$(document).ready(function() {
  $("#search-results").hide();

  // searchInput.oninput = () => {
  //   $("#search-results").show();
  // }
  
  // $("#searchInput").focus(() => {
  //   $("#search-results").show();
  // });

  $("#btn-search").click(function() {
    $("#search-results").show();
  });

  // $("#searchInput").focusout(() => {
  //   $("#search-results").hide();
  // });

  $(document).mouseup(function (e) {
    var searchBar = $("#search-bar");
    var searchResult = $("#search-results");
    if ((!searchResult.is(e.target) && searchResult.has(e.target).length === 0)
     && (!searchBar.is(e.target) && searchBar.has(e.target).length === 0)) {
      searchResult.hide();
    }
  });
});