var express = require('express');
var userModel = require('./../models/register');

var router = express.Router();

router.get('/', function(req, res){
	res.render('register/index');
});

router.post('/', function(req, res){
	
	var user = {
		username: req.body.username,
		password: req.body.password,
		type: req.body.radio,
		address: req.body.address,
		contact: req.body.contact,

	}

	userModel.register(user, function(status){
		
		if(status){
			
			res.render('register/success');	
		}else{
			res.render('register/error');
		}
	});

});

module.exports = router;
