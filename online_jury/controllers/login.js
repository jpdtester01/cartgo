var express = require('express');
var userModel = require('./../models/user-model');

var router = express.Router();

router.get('/', function(req, res){
	res.render('login/index');
});

router.post('/', function(req, res){

	

	var user = {
		username: req.body.username,
		password: req.body.password
	}

	userModel.validate(user, function(status){
		
		if(status==1){
			res.cookie('username', req.body.username);
			res.redirect('/home');	
		}else if(status==2) {
			res.cookie('username', req.body.username);
			res.redirect('/cases');	}
			else{
			res.render('login/error');
		}
	});

});



module.exports = router;


