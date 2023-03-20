// var http = require('http');
// http.createServer(function (req, res) {
//     res.writeHead(200, {'Content-Type': 'text/html'});
//     res.end('Hello World!');
//   }).listen(8080);

var mysql = require('mysql');

var con = mysql.createConnection({
  host: "bitesabroad.mysql.database.azure.com",
  user: "bitesabroad",
  password: "Databased1!",
  database:"bitesabroad"
});

con.connect(function(err) {
    if(err) throw err;
    console.log("Connected!");
    con.query("select * from meals;", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
    });
});