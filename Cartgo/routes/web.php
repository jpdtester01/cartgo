<?php


Route::get('/','HomeController@index')->name('home.index');

Route::get('/ComingSoon','HomeController@ComingSoon')->name('home.ComingSoon');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@check');
Route::get('/reg','RegisterController@Index')->name('Register.Index');
Route::post('/reg','LoginController@registerCheck')->name('login.registerCheck');
Route::get('/SupplierReg','SupplierController@Index')->name('Supplier.Index');

Route::post('/unameChk','LoginController@unameCheck')->name('login.unameCheck');
Route::post('/emailChk','LoginController@emailChk')->name('login.emailChk');
Route::post('/contactCheck','LoginController@contactCheck')->name('login.contactCheck');

Route::post('/AddCart','productController@AddCart')->name('product.AddCart');
Route::get('/ProductCart','CartController@Index')->name('Cart.Index');
Route::get('/CartClear','productController@CartClear')->name('product.CartClear');
Route::get('/DelCart/{pid}','productController@DelCart')->name('product.DelCart');
Route::get('/QtyChange/{pid}/{newqty}','productController@QtyChange')->name('product.QtyChange');

Route::post('/AddWish','productController@AddWish')->name('product.AddWish');
Route::get('/wishlist','WishController@Index')->name('Wish.Index');
Route::get('/DelWish/{pid}','productController@DelWish')->name('product.DelWish');

Route::get('/Admin/Home/Edit','HomeEditController@Index')->name('HomeEdit.Index');
Route::get('/DashBoard','DashBoardController@Index')->name('DashBoard.Index');
Route::get('/SiteChange/{element}/{data}','HomeEditController@SiteChange')->name('HomeEdit.SiteChange');
Route::post('/SiteChanger','HomeEditController@SiteChanger')->name('HomeEdit.SiteChanger');

Route::get('/profile','accountController@account');
Route::post('/account','accountController@updateCheck')->name('account.updateCheck');
Route::post('/pass','accountController@passCheck')->name('account.passCheck');
Route::post('/proChange','accountController@proChange')->name('account.proChange');

Route::post('/logoChange','HomeEditController@PostLogo')->name('HomeEdit.PostLogo');
Route::post('/slider1Change','HomeEditController@slider1Change')->name('HomeEdit.slider1Change');
Route::post('/slider2Change','HomeEditController@slider2Change')->name('HomeEdit.slider2Change');
Route::post('/cat1Change','HomeEditController@cat1Change')->name('HomeEdit.cat1Change');
Route::post('/cat2Change','HomeEditController@cat2Change')->name('HomeEdit.cat2Change');
Route::post('/cat3Change','HomeEditController@cat3Change')->name('HomeEdit.cat3Change');
Route::post('/cat4Change','HomeEditController@cat4Change')->name('HomeEdit.cat4Change');
Route::post('/postcadChange','HomeEditController@postcadChange')->name('HomeEdit.postcadChange');

Route::get('/Shop/{searchType}/{value}','ShopController@Index')->name('Shop.Index');
Route::get('/Shop/{searchType}/{value}/{sorts}','ShopController@Index')->name('Shop.Index');
Route::get('/shop/withtag/{searchType}/{value}','ShopController@Index2')->name('Shop.Index2');
Route::get('/shop/withtag/{searchType}/{value}/{sorts}','ShopController@Index2')->name('Shop.Index2');
Route::get('/shop/withtag/{searchType}/{value}/{sorts}/{min}/{max}','ShopController@Index2')->name('Shop.Index2');

Route::get('/Order','OrderController@Index')->name('Order.Index');
Route::get('/SrcOrder/{ord}','OrderController@SrcOrder')->name('Order.SrcOrder');
Route::get('/Coupon','CouponController@Index')->name('Coupon.Index');

Route::get('/checkout','CartController@checkout')->name('Shop.checkout');

Route::get('/SrcAcc/{uname}','accountController@SrcAcc')->name('account.SrcAcc');

Route::get('/payments','ManagerialController@Payments')->name('Managerial.Payments');
Route::get('/Conditions','ManagerialController@Conditions')->name('Managerial.Conditions');
Route::get('/SiteMap','ManagerialController@SiteMap')->name('Managerial.SiteMap');
Route::get('/services','ManagerialController@services')->name('Managerial.services');
Route::get('/Blog','ManagerialController@Blog')->name('Managerial.Blog');
Route::get('/FAQ','ManagerialController@FAQ')->name('Managerial.FAQ');

Route::get('/logout','LogoutController@index')->name('logout.index');
Route::get('/about',function(){
	return view("about");
});

//Route::get('product-details','productController@show');
Route::get('product-details/{id}','productController@auth');
Route::post('/revUpload','productController@revUpload')->name('product.revUpload');

Route::get('addDetails','AddProductController@show')->name('AddProduct.show');
Route::post('/AddProduct','AddProductController@Add')->name('AddProduct.Add');
Route::post('/UpdateProduct','AddProductController@UpdateProduct')->name('AddProduct.UpdateProduct');

Route::get('aboutus','aboutusController@show');

Route::get('contact','contactController@show');
Route::post('/feedback','contactController@feedback')->name('contact.feedback');

Route::get('/lito', function () {
    return view('template.section');
});