<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

session_start();

class SuperAdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $admin_id = Session::get('admin_id');

        if ($admin_id == NULL) {
            return Redirect::to('admin-login')->send();
        }
        $dashboard_content = view('admin.pages.dashboard_content');
        return view('admin.admin_master')
                        ->with('admin_content', $dashboard_content);
    }

    public function add_home_content() {
        $add_home_content = view('admin.pages.home_content_add');
        return view('admin.admin_master')
                        ->with('admin_content', $add_home_content);
    }

    public function save_home_content(Request $request) {
        $data = array();
        $data['home_title'] = $request->home_title;
        $data['home_description'] = $request->home_description;

        $image = $request->file('home_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            ////For Image validation / Not work
            //if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
            //    Session::put('message', 'Please select jpg,jpeg,png,gif type file.');
            //    exit();
            //} else {
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/home_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            //}

            if ($success) {
                $data['home_image'] = $image_url;

                DB::table('tbl_home')->insert($data);
                Session::put('message', 'Save Successfully.');
                return Redirect::to('add-home-content');
            }
        } else {
            DB::table('tbl_home')->insert($data);
            Session::put('message', 'Save Successfully.');
            return Redirect::to('add-home-content');
        }
    }

    public function manage_home_content() {
        $all_home_info = DB::table('tbl_home')->get();

        $manage_home_content = view('admin.pages.home_content_manage')
                ->with('all_home_info', $all_home_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_home_content);
    }

    public function unpublished_home_content($home_id) {
        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-home-content');
    }

    public function published_home_content($home_id) {
        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-home-content');
    }

    public function undo_home_content($home_id) {
        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-home-content');
    }

    public function delete_home_content($home_id) {
//        DB::table('tbl_home')
//                ->where('home_id', $home_id)
//                ->delete();

        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-home-content');
    }

    public function inactive_home_content($home_id) {
        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['active' => 0]);

        return Redirect::to('manage-home-content');
    }

    public function active_home_content($home_id) {
        // First In Active All
        DB::table('tbl_home')
                ->update(['active' => 0]);

        DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->update(['active' => 1]);

        return Redirect::to('manage-home-content');
    }

    public function edit_home_content($home_id) {
        // For Edit Form Load
        $home_info = DB::table('tbl_home')
                ->where('home_id', $home_id)
                ->first();

        $edit_home_content = view('admin.pages.home_content_edit')
                ->with('home_info', $home_info);

        return view('admin.admin_master')
                        ->with('admin_content', $edit_home_content);
    }

    public function update_home_content(Request $request) {
        $data = array();
        $home_id = $request->home_id;
        $data['home_title'] = $request->home_title;
        $data['home_description'] = $request->home_description;

        $image = $request->file('home_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            ////For Image validation / Not work
            //if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
            //    Session::put('message', 'Please select jpg,jpeg,png,gif type file.');
            //    exit();
            //} else {
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/home_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            //}

            if ($success) {
                $data['home_image'] = $image_url;

                DB::table('tbl_home')
                        ->where('home_id', $home_id)
                        ->update($data);

                Session::put('message', 'Updated Successfully.');
                return Redirect::to('/edit-home-content/' . $home_id);
            }
        } else {
            DB::table('tbl_home')
                    ->where('home_id', $home_id)
                    ->update($data);

            Session::put('message', 'Updated Successfully.');
            return Redirect::to('/edit-home-content/' . $home_id);
        }
    }

    public function add_aboutus_content() {
        $aboutus_content_add = view('admin.pages.aboutus_content_add');
        return view('admin.admin_master')
                        ->with('admin_content', $aboutus_content_add);
    }

    public function save_aboutus_content(Request $request) {
        $data = array();
        $data['aboutus_description'] = $request->aboutus_description;
        $data['mission_description'] = $request->mission_description;
        $data['plan_description'] = $request->plan_description;
        $data['vission_description'] = $request->vission_description;

        $aboutus_id = DB::table('tbl_about_us')->insertGetId($data);
        Session::put('message', 'Save Successfully.');
        $this->do_upload($request, $aboutus_id);
        return Redirect::to('add-aboutus-content');
    }

    public function do_upload($request, $aboutus_id) {
        for ($i = 1; $i <= 3; $i++) {
            $image = $request->file("p_image$i");

            if ($image) {
                $image_name = str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'images/aboutus_image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $idata = array();
                    $idata['aboutus_id'] = $aboutus_id;
                    $idata['image_option'] = $image_url;

                    if ($i === 1) {
                        $idata['image_level'] = 1;
                    } else if ($i === 2) {
                        $idata['image_level'] = 2;
                    } else {
                        $idata['image_level'] = 3;
                    }

                    DB::table('tbl_about_us_image')->insert($idata);
                }
            }
        }

        return;
    }

    public function manage_aboutus_content() {
        $all_aboutus_info = DB::table('tbl_about_us')->get();

        $manage_aboutus_content = view('admin.pages.aboutus_content_manage')
                ->with('all_aboutus_info', $all_aboutus_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_aboutus_content);
    }

    public function unpublished_aboutus_content($aboutus_id) {
        DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-aboutus-content');
    }

    public function published_aboutus_content($aboutus_id) {
        DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-aboutus-content');
    }

    public function undo_aboutus_content($aboutus_id) {
        DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-aboutus-content');
    }

    public function delete_aboutus_content($aboutus_id) {
//        DB::table('tbl_about_us')
//                ->where('aboutus_id', $aboutus_id)
//                ->delete();

        DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-aboutus-content');
    }

    public function edit_aboutus_content($aboutus_id) {
        // For Edit Form Load
        $aboutus_info = DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->first();

        $edit_aboutus_content = view('admin.pages.aboutus_content_edit')
                ->with('aboutus_info', $aboutus_info);

        return view('admin.admin_master')
                        ->with('admin_content', $edit_aboutus_content);
    }

    public function update_aboutus_content(Request $request) {
        $data = array();
        $aboutus_id = $request->aboutus_id;
        $data['aboutus_description'] = $request->aboutus_description;
        $data['mission_description'] = $request->mission_description;
        $data['plan_description'] = $request->plan_description;
        $data['vission_description'] = $request->vission_description;

        DB::table('tbl_about_us')
                ->where('aboutus_id', $aboutus_id)
                ->update($data);

        Session::put('message', 'Updated Successfully.');
        $this->do_upload_update($request, $aboutus_id);
        return Redirect::to('/edit-aboutus-content/' . $aboutus_id);
    }

    public function do_upload_update($request, $aboutus_id) {
        // First Delete Previous Image
        DB::table('tbl_about_us_image')
                ->where('aboutus_id', $aboutus_id)
                ->delete();

        for ($i = 1; $i <= 3; $i++) {
            $image = $request->file("p_image$i");

            if ($image) {
                $image_name = str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'images/aboutus_image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $idata = array();
                    $idata['aboutus_id'] = $aboutus_id;
                    $idata['image_option'] = $image_url;

                    if ($i === 1) {
                        $idata['image_level'] = 1;
                    } else if ($i === 2) {
                        $idata['image_level'] = 2;
                    } else {
                        $idata['image_level'] = 3;
                    }

                    DB::table('tbl_about_us_image')->insert($idata);
                }
            }
        }

        return;
    }

    public function add_portfolio_category() {
        $add_portfolio_category = view('admin.pages.portfolio_category_add');
        return view('admin.admin_master')
                        ->with('admin_content', $add_portfolio_category);
    }

    public function save_portfolio_category(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['filter_name'] = $request->filter_name;

        DB::table('tbl_portfolio_category')->insert($data);
        Session::put('message', 'Save Successfully.');
        return Redirect::to('add-portfolio-category');
    }

    public function manage_portfolio_category() {
        $all_portfolio_cat_info = DB::table('tbl_portfolio_category')->get();

        $manage_portfolio_cat = view('admin.pages.portfolio_category_manage')
                ->with('all_portfolio_cat_info', $all_portfolio_cat_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_portfolio_cat);
    }

    public function unpublished_portfolio_category($category_id) {
        DB::table('tbl_portfolio_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-portfolio-category');
    }

    public function published_portfolio_category($category_id) {
        DB::table('tbl_portfolio_category')
                ->where('category_id', $category_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-portfolio-category');
    }

    public function undo_portfolio_category($category_id) {
        DB::table('tbl_portfolio_category')
                ->where('category_id', $category_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-portfolio-category');
    }

    public function delete_portfolio_category($category_id) {
        DB::table('tbl_portfolio_category')
                ->where('category_id', $category_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-portfolio-category');
    }

    public function add_portfolio_category_details() {
        // For Portfolio Category
        $portfolio_cat_info = DB::table('tbl_portfolio_category')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->get();

        $add_portfolio_category_details = view('admin.pages.portfolio_category_details_add')
                ->with('portfolio_cat_info', $portfolio_cat_info);

        return view('admin.admin_master')
                        ->with('admin_content', $add_portfolio_category_details);
    }

    public function save_portfolio_category_details(Request $request) {
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['heading'] = $request->heading;
        $data['details'] = $request->details;
        $data['title'] = $request->title;

        $image = $request->file('portfolio_image');

        if ($data['category_id']) {
            if ($image) {
                $image_name = str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());

                ////For Image validation / Not work
                //if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
                //    Session::put('message', 'Please select jpg,jpeg,png,gif type file.');
                //    exit();
                //} else {
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'images/portfolio_image/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                //}

                if ($success) {
                    $data['portfolio_image'] = $image_url;

                    DB::table('tbl_portfolio_category_details')->insert($data);
                    Session::put('message', 'Save Successfully.');
                    return Redirect::to('add-portfolio-category-details');
                }
            } else {
                DB::table('tbl_portfolio_category_details')->insert($data);
                Session::put('message', 'Save Successfully.');
                return Redirect::to('add-portfolio-category-details');
            }
        } else {
            Session::put('message', 'Category is blank.');
            return Redirect::to('add-portfolio-category-details');
        }
    }

    public function manage_portfolio_category_details() {
        $all_portfolio_cat_details_info = DB::table('tbl_portfolio_category_details')->get();

        $manage_portfolio_cat_details = view('admin.pages.portfolio_category_details_manage')
                ->with('all_portfolio_cat_details_info', $all_portfolio_cat_details_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_portfolio_cat_details);
    }
    
    public function unpublished_portfolio_category_details($category_details_id) {
        DB::table('tbl_portfolio_category_details')
                ->where('category_details_id', $category_details_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-portfolio-category-details');
    }

    public function published_portfolio_category_details($category_details_id) {
        DB::table('tbl_portfolio_category_details')
                ->where('category_details_id', $category_details_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-portfolio-category-details');
    }

    public function undo_portfolio_category_details($category_details_id) {
        DB::table('tbl_portfolio_category_details')
                ->where('category_details_id', $category_details_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-portfolio-category-details');
    }

    public function delete_portfolio_category_details($category_details_id) {
        DB::table('tbl_portfolio_category_details')
                ->where('category_details_id', $category_details_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-portfolio-category-details');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function add_team_content() {
        $add_team_content = view('admin.pages.team_content_add');
        return view('admin.admin_master')
                        ->with('admin_content', $add_team_content);
    }

    public function save_team_content(Request $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;

        $image = $request->file('image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            ////For Image validation / Not work
            //if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
            //    Session::put('message', 'Please select jpg,jpeg,png,gif type file.');
            //    exit();
            //} else {
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/team_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            //}

            if ($success) {
                $data['image'] = $image_url;

                DB::table('tbl_team')->insert($data);
                Session::put('message', 'Save Successfully.');
                return Redirect::to('add-team-content');
            }
        } else {
            DB::table('tbl_team')->insert($data);
            Session::put('message', 'Save Successfully.');
            return Redirect::to('add-team-content');
        }
    }

    public function manage_team_content() {
        $all_team_info = DB::table('tbl_team')->get();

        $manage_team_content = view('admin.pages.team_content_manage')
                ->with('all_team_info', $all_team_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_team_content);
    }

    public function unpublished_team_content($team_id) {
        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-team-content');
    }

    public function published_team_content($team_id) {
        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-team-content');
    }

    public function undo_team_content($team_id) {
        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-team-content');
    }

    public function delete_team_content($team_id) {
//        DB::table('tbl_team')
//                ->where('team_id', $team_id)
//                ->delete();

        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-team-content');
    }

    public function inactive_team_content($team_id) {
        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['active' => 0]);

        return Redirect::to('manage-team-content');
    }

    public function active_team_content($team_id) {
//        // First In Active All
//        DB::table('tbl_team')
//                ->update(['active' => 0]);

        DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->update(['active' => 1]);

        return Redirect::to('manage-team-content');
    }

    public function edit_team_content($team_id) {
        // For Edit Form Load
        $team_info = DB::table('tbl_team')
                ->where('team_id', $team_id)
                ->first();

        $edit_team_content = view('admin.pages.team_content_edit')
                ->with('team_info', $team_info);

        return view('admin.admin_master')
                        ->with('admin_content', $edit_team_content);
    }

    public function update_team_content(Request $request) {
        $data = array();
        $team_id = $request->team_id;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;

        $image = $request->file('image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            ////For Image validation / Not work
            //if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
            //    Session::put('message', 'Please select jpg,jpeg,png,gif type file.');
            //    exit();
            //} else {
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/team_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            //}

            if ($success) {
                $data['image'] = $image_url;

                DB::table('tbl_team')
                        ->where('team_id', $team_id)
                        ->update($data);

                Session::put('message', 'Updated Successfully.');
                return Redirect::to('/edit-team-content/' . $team_id);
            }
        } else {
            DB::table('tbl_team')
                    ->where('team_id', $team_id)
                    ->update($data);

            Session::put('message', 'Updated Successfully.');
            return Redirect::to('/edit-team-content/' . $team_id);
        }
    }

    public function add_contactus_content() {
        $add_contactus_content = view('admin.pages.contactus_content_add');
        return view('admin.admin_master')
                        ->with('admin_content', $add_contactus_content);
    }

    public function save_contactus_content(Request $request) {
        $data = array();
        $data['description'] = $request->description;
        $data['address'] = $request->address;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        $data['about_company'] = $request->about_company;
//        $data['news_letter'] = $request->news_letter;

        DB::table('tbl_contact_us')->insert($data);
        Session::put('message', 'Save Successfully.');
        return Redirect::to('add-contactus-content');
    }

    public function manage_contactus_content() {
        $all_contactus_info = DB::table('tbl_contact_us')->get();

        $manage_contactus_content = view('admin.pages.contactus_content_manage')
                ->with('all_contactus_info', $all_contactus_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_contactus_content);
    }

    public function unpublished_contactus_content($contactus_id) {
        DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-contactus-content');
    }

    public function published_contactus_content($contactus_id) {
        DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-contactus-content');
    }

    public function undo_contactus_content($contactus_id) {
        DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-contactus-content');
    }

    public function delete_contactus_content($contactus_id) {
        DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-contactus-content');
    }

    public function edit_contactus_content($contactus_id) {
        // For Edit Form Load
        $contactus_info = DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->first();

        $edit_contactus_content = view('admin.pages.contactus_content_edit')
                ->with('contactus_info', $contactus_info);

        return view('admin.admin_master')
                        ->with('admin_content', $edit_contactus_content);
    }

    public function update_contactus_content(Request $request) {
        $data = array();
        $contactus_id = $request->contactus_id;
        $data['description'] = $request->description;
        $data['address'] = $request->address;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        $data['about_company'] = $request->about_company;
        $data['news_letter'] = $request->news_letter;

        DB::table('tbl_contact_us')
                ->where('contactus_id', $contactus_id)
                ->update($data);

        Session::put('message', 'Updated Successfully.');
        return Redirect::to('/edit-contactus-content/' . $contactus_id);
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    public function add_newsletter_content() {
        $add_newsletter_content = view('admin.pages.newsletter_content_add');
        return view('admin.admin_master')
                        ->with('admin_content', $add_newsletter_content);
    }

    public function save_newsletter_content(Request $request) {
        $data = array();
        $data['heading'] = $request->heading;
        $data['details'] = $request->details;

        $image = $request->file('image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/newsletter_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['image'] = $image_url;

                DB::table('tbl_newsletter')->insert($data);
                Session::put('message', 'Save Successfully.');
                return Redirect::to('add-newsletter-content');
            }
        } else {
            DB::table('tbl_newsletter')->insert($data);
            Session::put('message', 'Save Successfully.');
            return Redirect::to('add-newsletter-content');
        }
    }

    public function manage_newsletter_content() {
        $all_newsletter_info = DB::table('tbl_newsletter')->get();

        $manage_newsletter_content = view('admin.pages.newsletter_content_manage')
                ->with('all_newsletter_info', $all_newsletter_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_newsletter_content);
    }

    public function unpublished_newsletter_content($newsletter_id) {
        DB::table('tbl_newsletter')
                ->where('newsletter_id', $newsletter_id)
                ->update(['publication_status' => 0]);

        return Redirect::to('manage-newsletter-content');
    }

    public function published_newsletter_content($newsletter_id) {
        DB::table('tbl_newsletter')
                ->where('newsletter_id', $newsletter_id)
                ->update(['publication_status' => 1]);

        return Redirect::to('manage-newsletter-content');
    }

    public function undo_newsletter_content($newsletter_id) {
        DB::table('tbl_newsletter')
                ->where('newsletter_id', $newsletter_id)
                ->update(['deletion_status' => 0]);

        return Redirect::to('manage-newsletter-content');
    }

    public function delete_newsletter_content($newsletter_id) {
        DB::table('tbl_newsletter')
                ->where('newsletter_id', $newsletter_id)
                ->update(['deletion_status' => 1]);

        return Redirect::to('manage-newsletter-content');
    }

    public function edit_newsletter_content($newsletter_id) {
        // For Edit Form Load
        $newsletter_info = DB::table('tbl_newsletter')
                ->where('newsletter_id', $newsletter_id)
                ->first();

        $edit_newsletter_content = view('admin.pages.newsletter_content_edit')
                ->with('newsletter_info', $newsletter_info);

        return view('admin.admin_master')
                        ->with('admin_content', $edit_newsletter_content);
    }

    public function update_newsletter_content(Request $request) {
        $data = array();
        $newsletter_id = $request->newsletter_id;
        $data['heading'] = $request->heading;
        $data['details'] = $request->details;

        $image = $request->file('image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'images/newsletter_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['image'] = $image_url;

                DB::table('tbl_newsletter')
                        ->where('newsletter_id', $newsletter_id)
                        ->update($data);

                Session::put('message', 'Updated Successfully.');
                return Redirect::to('/edit-newsletter-content/' . $newsletter_id);
            }
        } else {
            DB::table('tbl_newsletter')
                    ->where('newsletter_id', $newsletter_id)
                    ->update($data);

            Session::put('message', 'Updated Successfully.');
            return Redirect::to('/edit-newsletter-content/' . $newsletter_id);
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function manage_contactus_inbox() {
        $all_inbox_info = DB::table('tbl_inbox')->get();

        $manage_inbox_content = view('admin.pages.contactus_manage_inbox')
                ->with('all_inbox_info', $all_inbox_info);

        return view('admin.admin_master')
                        ->with('admin_content', $manage_inbox_content);
    }

    public function unseen_contactus_inbox($inbox_id) {
        DB::table('tbl_inbox')
                ->where('inbox_id', $inbox_id)
                ->update(['seen' => 0]);

        return Redirect::to('manage-contactus-inbox');
    }

    public function seen_contactus_inbox($inbox_id) {
        DB::table('tbl_inbox')
                ->where('inbox_id', $inbox_id)
                ->update(['seen' => 1]);

        return Redirect::to('manage-contactus-inbox');
    }

    public function notreplied_contactus_inbox($inbox_id) {
        DB::table('tbl_inbox')
                ->where('inbox_id', $inbox_id)
                ->update(['reply' => 0]);

        return Redirect::to('manage-contactus-inbox');
    }

    public function replied_contactus_inbox($inbox_id) {
        DB::table('tbl_inbox')
                ->where('inbox_id', $inbox_id)
                ->update(['reply' => 1]);

        return Redirect::to('manage-contactus-inbox');
    }

    public function logout() {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        Session::put('message', 'You are Successfully Logout.');

        return Redirect::to('admin-login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
