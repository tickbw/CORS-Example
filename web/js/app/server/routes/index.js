
/*
 * GET home page.
 */

exports.index = function(req, res){
  res.json({"title": "node - this is a title", "body": "node - this is a description"});
};