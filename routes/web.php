<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', 'ClientController@index');
Route::get('about-us', 'ClientController@about_us');
Route::get('services', 'ClientController@services');
Route::get('portfolio', 'ClientController@portfolio');
Route::get('team', 'ClientController@team');
Route::get('contact-us', 'ClientController@contact_us');
Route::post('send-message', 'ClientController@send_message');
Route::get('newsletter-details/{id}', 'ClientController@newsletter_details');

//Admin Template
Route::get('admin-login', 'AdminController@index');
Route::post('admin-login-check', 'AdminController@admin_login_check');

//Start Super Admin
Route::get('dashboard', 'SuperAdminController@index');

Route::get('add-home-content', 'SuperAdminController@add_home_content');
Route::post('save-home-content', 'SuperAdminController@save_home_content');
Route::get('manage-home-content', 'SuperAdminController@manage_home_content');
Route::get('unpublished-home-content/{id}', 'SuperAdminController@unpublished_home_content');
Route::get('published-home-content/{id}', 'SuperAdminController@published_home_content');
Route::get('undo-home-content/{id}', 'SuperAdminController@undo_home_content');
Route::get('delete-home-content/{id}', 'SuperAdminController@delete_home_content');
Route::get('inactive-home-content/{id}', 'SuperAdminController@inactive_home_content');
Route::get('active-home-content/{id}', 'SuperAdminController@active_home_content');
Route::get('edit-home-content/{id}', 'SuperAdminController@edit_home_content');
Route::post('update-home-content/', 'SuperAdminController@update_home_content');

Route::get('add-aboutus-content', 'SuperAdminController@add_aboutus_content');
Route::post('save-aboutus-content', 'SuperAdminController@save_aboutus_content');
Route::get('manage-aboutus-content', 'SuperAdminController@manage_aboutus_content');
Route::get('unpublished-aboutus-content/{id}', 'SuperAdminController@unpublished_aboutus_content');
Route::get('published-aboutus-content/{id}', 'SuperAdminController@published_aboutus_content');
Route::get('undo-aboutus-content/{id}', 'SuperAdminController@undo_aboutus_content');
Route::get('delete-aboutus-content/{id}', 'SuperAdminController@delete_aboutus_content');
Route::get('edit-aboutus-content/{id}', 'SuperAdminController@edit_aboutus_content');
Route::post('update-aboutus-content/', 'SuperAdminController@update_aboutus_content');

Route::get('add-portfolio-category', 'SuperAdminController@add_portfolio_category');
Route::post('save-portfolio-category', 'SuperAdminController@save_portfolio_category');
Route::get('manage-portfolio-category', 'SuperAdminController@manage_portfolio_category');
Route::get('unpublished-portfolio-category/{id}', 'SuperAdminController@unpublished_portfolio_category');
Route::get('published-portfolio-category/{id}', 'SuperAdminController@published_portfolio_category');
Route::get('undo-portfolio-category/{id}', 'SuperAdminController@undo_portfolio_category');
Route::get('delete-portfolio-category/{id}', 'SuperAdminController@delete_portfolio_category');
Route::get('add-portfolio-category-details', 'SuperAdminController@add_portfolio_category_details');
Route::post('save-portfolio-category-details', 'SuperAdminController@save_portfolio_category_details');
Route::get('manage-portfolio-category-details', 'SuperAdminController@manage_portfolio_category_details');
Route::get('unpublished-portfolio-category-details/{id}', 'SuperAdminController@unpublished_portfolio_category_details');
Route::get('published-portfolio-category-details/{id}', 'SuperAdminController@published_portfolio_category_details');
Route::get('undo-portfolio-category-details/{id}', 'SuperAdminController@undo_portfolio_category_details');
Route::get('delete-portfolio-category-details/{id}', 'SuperAdminController@delete_portfolio_category_details');

Route::get('add-team-content', 'SuperAdminController@add_team_content');
Route::post('save-team-content', 'SuperAdminController@save_team_content');
Route::get('manage-team-content', 'SuperAdminController@manage_team_content');
Route::get('unpublished-team-content/{id}', 'SuperAdminController@unpublished_team_content');
Route::get('published-team-content/{id}', 'SuperAdminController@published_team_content');
Route::get('undo-team-content/{id}', 'SuperAdminController@undo_team_content');
Route::get('delete-team-content/{id}', 'SuperAdminController@delete_team_content');
Route::get('inactive-team-content/{id}', 'SuperAdminController@inactive_team_content');
Route::get('active-team-content/{id}', 'SuperAdminController@active_team_content');
Route::get('edit-team-content/{id}', 'SuperAdminController@edit_team_content');
Route::post('update-team-content/', 'SuperAdminController@update_team_content');

Route::get('add-contactus-content', 'SuperAdminController@add_contactus_content');
Route::post('save-contactus-content', 'SuperAdminController@save_contactus_content');
Route::get('manage-contactus-content', 'SuperAdminController@manage_contactus_content');
Route::get('unpublished-contactus-content/{id}', 'SuperAdminController@unpublished_contactus_content');
Route::get('published-contactus-content/{id}', 'SuperAdminController@published_contactus_content');
Route::get('undo-contactus-content/{id}', 'SuperAdminController@undo_contactus_content');
Route::get('delete-contactus-content/{id}', 'SuperAdminController@delete_contactus_content');
Route::get('edit-contactus-content/{id}', 'SuperAdminController@edit_contactus_content');
Route::post('update-contactus-content/', 'SuperAdminController@update_contactus_content');
Route::get('manage-contactus-inbox', 'SuperAdminController@manage_contactus_inbox');
Route::get('unseen-contactus-inbox/{id}', 'SuperAdminController@unseen_contactus_inbox');
Route::get('seen-contactus-inbox/{id}', 'SuperAdminController@seen_contactus_inbox');
Route::get('notreplied-contactus-inbox/{id}', 'SuperAdminController@notreplied_contactus_inbox');
Route::get('replied-contactus-inbox/{id}', 'SuperAdminController@replied_contactus_inbox');

Route::get('add-newsletter-content', 'SuperAdminController@add_newsletter_content');
Route::post('save-newsletter-content', 'SuperAdminController@save_newsletter_content');
Route::get('manage-newsletter-content', 'SuperAdminController@manage_newsletter_content');
Route::get('unpublished-newsletter-content/{id}', 'SuperAdminController@unpublished_newsletter_content');
Route::get('published-newsletter-content/{id}', 'SuperAdminController@published_newsletter_content');
Route::get('undo-newsletter-content/{id}', 'SuperAdminController@undo_newsletter_content');
Route::get('delete-newsletter-content/{id}', 'SuperAdminController@delete_newsletter_content');
Route::get('edit-newsletter-content/{id}', 'SuperAdminController@edit_newsletter_content');
Route::post('update-newsletter-content/', 'SuperAdminController@update_newsletter_content');

Route::get('logout', 'SuperAdminController@logout');
