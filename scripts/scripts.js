var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "ragnarok",
  password: "ragnarok",
  database: "ragnarok"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});

function selectItem(con){
  var sqlQuery = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id"
}

function accountRegister(){
  $("#account-form").submit(function(a){
    $ajax({
      method: "POST",
      url:"",
      data:{
        name: $("#account-name").val(),
				email: $("#account-email").val(),
				password: $("#account-pass").val()
      }
    })
    return true
  });
}

function itemDbList(){
  $.ajax({
    method: "GET",
    url: "http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=ragnarok&table=item_db&pos=0",			
  })
  .done(function (selectItem)
  {
    $("$id").val();	
    $("$name_english").val();
    $("$type").val();
    $("$subtype").val();
    $("$price_buy").val();
  })
}