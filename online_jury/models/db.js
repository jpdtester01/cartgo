var mysql   = require('mysql');

var getConnection = function(){

	var connection = mysql.createConnection({
		host:'localhost',
		user: 'root',
		password: '',
		database: 'online_jury'
	});
	 
	connection.connect(function(err) {
	  if (err) {
	    console.error('error connecting: ' + err.stack);
	    return;
	  }
	  console.log('connected as id ' + connection.threadId);
	});

	return connection;
}


module.exports={

	getResults: function(sql, callback){

		var connection = getConnection();
		connection.query(sql, function(error, results){

			callback(results);
		});

		connection.end(function(err) {
		  console.log("Database connection is terminated.");
		});
	},
	execute: function(sql, callback){

		var connection = getConnection();
		connection.query(sql, function(error, results){

			if(error){
				callback(false);
			}else{
				callback(true);
			}

		});

		connection.end(function(err) {
		  console.log("Database connection is terminated.");
		});
	},
}




