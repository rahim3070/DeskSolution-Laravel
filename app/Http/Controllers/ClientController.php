<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;

session_start();

class ClientController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // For Active Info
        $home_info_active = DB::table('tbl_home')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->where('active', 1)
                ->get();

        // For In Active Info
        $home_info_inactive = DB::table('tbl_home')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->where('active', 0)
                ->get();

        $client_content = view('client.pages.home')
                ->with('home_info_active', $home_info_active)
                ->with('home_info_inactive', $home_info_inactive);

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function about_us() {
        // For About Us Info
        $aboutus_info = DB::table('tbl_about_us')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->select('tbl_about_us.aboutus_id', 'tbl_about_us.aboutus_description')
                ->get();

        // For Mission Info
        $mission_info = DB::table('tbl_about_us')
                ->join('tbl_about_us_image', 'tbl_about_us.aboutus_id', '=', 'tbl_about_us_image.aboutus_id')
                ->where('tbl_about_us.publication_status', 1)
                ->where('tbl_about_us.deletion_status', 0)
                ->where('tbl_about_us_image.image_level', 1)
                ->select('tbl_about_us.aboutus_id', 'tbl_about_us.mission_description', 'tbl_about_us_image.image_option')
                ->get();

        // For Plan Info
        $plan_info = DB::table('tbl_about_us')
                ->join('tbl_about_us_image', 'tbl_about_us.aboutus_id', '=', 'tbl_about_us_image.aboutus_id')
                ->where('tbl_about_us.publication_status', 1)
                ->where('tbl_about_us.deletion_status', 0)
                ->where('tbl_about_us_image.image_level', 2)
                ->select('tbl_about_us.aboutus_id', 'tbl_about_us.plan_description', 'tbl_about_us_image.image_option')
                ->get();

        // For Vission Info
        $vission_info = DB::table('tbl_about_us')
                ->join('tbl_about_us_image', 'tbl_about_us.aboutus_id', '=', 'tbl_about_us_image.aboutus_id')
                ->where('tbl_about_us.publication_status', 1)
                ->where('tbl_about_us.deletion_status', 0)
                ->where('tbl_about_us_image.image_level', 3)
                ->select('tbl_about_us.aboutus_id', 'tbl_about_us.vission_description', 'tbl_about_us_image.image_option')
                ->get();

        $client_content = view('client.pages.about_us')
                ->with('aboutus_info', $aboutus_info)
                ->with('mission_info', $mission_info)
                ->with('plan_info', $plan_info)
                ->with('vission_info', $vission_info);

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function services() {
        $client_content = view('client.pages.services');

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function portfolio() {
        // For Portfolio Category
        $portfolio_cat_info = DB::table('tbl_portfolio_category')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->get();

        // For Portfolio Category Details Info
//        $portfolio_cat_details_info = DB::table('tbl_portfolio_category_details')
//                ->where('publication_status', 1)
//                ->where('deletion_status', 0)
//                ->get();
        $portfolio_cat_details_info = DB::table('tbl_portfolio_category_details')
                ->join('tbl_portfolio_category', 'tbl_portfolio_category_details.category_id', '=', 'tbl_portfolio_category.category_id')
                ->where('tbl_portfolio_category.publication_status', 1)
                ->where('tbl_portfolio_category.deletion_status', 0)
                ->where('tbl_portfolio_category_details.publication_status', 1)
                ->where('tbl_portfolio_category_details.deletion_status', 0)
                ->select('tbl_portfolio_category.filter_name', 'tbl_portfolio_category_details.heading', 'tbl_portfolio_category_details.details', 'tbl_portfolio_category_details.title', 'tbl_portfolio_category_details.portfolio_image')
                ->get();

        $client_content = view('client.pages.portfolio')
                ->with('portfolio_cat_info', $portfolio_cat_info)
                ->with('portfolio_cat_details_info', $portfolio_cat_details_info);

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function team() {
        // For Active Info
        $team_info_active = DB::table('tbl_team')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->where('active', 1)
                ->get();

        $client_content = view('client.pages.team')
                ->with('team_info_active', $team_info_active);

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function contact_us() {
        // For Active Info
        $contactus_info = DB::table('tbl_contact_us')
                ->where('publication_status', 1)
                ->where('deletion_status', 0)
                ->get();

        $client_content = view('client.pages.contact_us')
                ->with('contactus_info', $contactus_info);

        return view('client.client_master')
                        ->with('client_content', $client_content);
    }

    public function send_message(Request $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['email_address'] = $request->email_address;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;

        DB::table('tbl_inbox')->insert($data);
        Session::put('message', 'Your message has been sent. Thank you!');
        return Redirect::to('contact-us');
    }

    public function newsletter_details($newsletter_id) {
        // For Plan Info
        $newsletter_info = DB::table('tbl_newsletter')
                    ->where('newsletter_id', $newsletter_id)
                    ->where('publication_status', 1)
                    ->where('deletion_status', 0)
                    ->get();

        $client_content = view('client.pages.newsletter_details')
                ->with('newsletter_info', $newsletter_info);

        return view('client.client_master')
                        ->with('client_content', $client_content);
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
