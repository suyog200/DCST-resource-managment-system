var http = require('http');
var express = require('express');
var app = express();

// Initializing the router from express
var router = express.Router();
var PORT = 5000;

// App listening on the below port
app.listen(PORT, function(err){
   if (err) console.log(err);
   console.log("Server listening on PORT", PORT);
});