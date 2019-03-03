module.exports = function(app) {

  // Load about me page
  app.get("/", function(req, res) {
    res.render("about", {});
  });
  
  // Load portfolio page
  app.get("/portfolio", function(req, res) {
    res.render("portfolio", {})
  });

  app.get("/contact", function(req, res) {
    res.render("contact", {})
  });

  // Render 404 page for any unmatched routes
  app.get("*", function(req, res) {
    res.render("404", {});
  });
};
