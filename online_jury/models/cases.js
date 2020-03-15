	var db = require('./db');
	var db1 = require('./db1');
module.exports={
	getAll : function(callback){
		var sql = "select * from cases";

		db.getResults(sql, function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
	pending : function(callback){
		var sql = "select * from cases where status ='pending'";
		db.getResults(sql, function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
	getById: function(id, callback){
		var sql = "select * from user where id=?";
		db1.getResult(sql, [id], function(result){
			if(result.length > 0){
				callback(result[0]);
			}else{
				callback(null);
			}
		});
	},
	update: function(user, callback){
		var sql = "update user set username=?, password=?, type=? where id=?";
		db1.execute(sql, [user.username, user.password, user.type, user.id], function(status){
			if(status){
				callback(true);
			}else{
				callback(false);
			}
		});
	},
	getBytype : function(callback){
		var sql = "select * from user where type =2";
		db.getResults(sql, function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
	Books : function(callback){
		var sql = "select * from books";
		db.getResults(sql, function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
}