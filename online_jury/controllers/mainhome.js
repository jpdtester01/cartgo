var express = require('express');
var db = require('./../models/db.js');
var router = express.Router();

router.get('/', function(req, res){

	
				res.render('mainhome/index');
			}
	

)



module.exports = router;


