var express = require('express');
var userModel = require('./../models/cases');
var router = express.Router();

router.get('/', function(req, res){

		userModel.pending(function(results){
			
				res.render('cases/index', {user: results});
			
			});
		});
router.get('/library', function(req, res){
	userModel.Books(function(results){
			
				res.render('cases/library', {user: results});
			
			});
});
router.get('/caselist', function(req, res){

	userModel.getAll(function(results){
			
				res.render('cases/caselist', {user: results});
			
			});
});
router.get('/judgelist', function(req, res){

   
	userModel.getBytype(function(results){
			
				res.render('cases/judgelist', {user: results});
			
			});
});
router.get('/edit/:id', function(req, res){
	
	userModel.getById(req.params.id, function(result){
		res.render('cases/edit', {user: result});
	});
})

router.post('/edit/:id', function(req, res){
	
	var user = {
		username: req.body.username,
		password: req.body.password,
		type: req.body.type,
		address: req.body.address,
		contact: req.body.contact,
		id: req.params.id
	};

	userModel.update(user, function(status){
		if(status){
			res.redirect('/cases/index');
		}else{
			res.redirect('/cases/edit/'+req.params.id);
		}
	});
})
module.exports = router;