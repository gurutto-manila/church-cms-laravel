<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// <--angular routes start-->

	//contact
	Route::post('/{slug}/contact/add', 'Api\Angular\ContactController@store');

	//event
	Route::get('/{slug}/events','Api\Angular\EventsController@showEvents');

	Route::get('/{slug}/events/upcoming/month','Api\Angular\EventsController@showUpcomingEventsMonthly');
	
	Route::get('/{slug}/events/past/month','Api\Angular\EventsController@showPastEventsMonthly');
	
	Route::get('/{slug}/event/{id}','Api\Angular\EventsController@showById');

	Route::get('/{slug}/events/latest','Api\Angular\EventsController@showLatestEvents');
	Route::get('/{slug}/event-detail/{id}','Api\Angular\EventsController@getEventDetail');

	//bulletin
	Route::get('/{slug}/bulletins','Api\Angular\BulletinsController@showBulletins');

	//fund
	Route::get('/{slug}/funds','Api\Angular\FundController@showFunds');
	Route::post('/{slug}/storedonation','Api\Angular\FundController@store');

	//church detail
	Route::get('/{slug}/churchdetails','Api\Angular\ChurchDetailsController@showChurchDetails');

	//group
	Route::get('/{slug}/groups','Api\Angular\GroupsController@showGroups');

	Route::get('/{slug}/group/{id}','Api\Angular\GroupsController@showGroup');

	//media file
	Route::get('/{slug}/mediafiles','Api\Angular\MediaFilesController@showMediaFiles');

	//sermon
	Route::get('/{slug}/sermons','Api\Angular\SermonsController@showSermons');

	//prayer request
	Route::get('/{slug}/prayerrequests','Api\Angular\PrayerRequestsController@showPrayerRequests');
	Route::post('/{slug}/storeprayer','Api\Angular\PrayerRequestsController@store');
	//help
	Route::get('/{slug}/helps','Api\Angular\HelpsController@showHelps');

	//quotes
	Route::get('/{slug}/quotes','Api\Angular\QuotesController@showQuotes');

	//faq
	Route::get('/{slug}/faq/category','Api\Angular\FaqController@list');
	
	Route::get('/{slug}/faq','Api\Angular\FaqController@index');

	//pages
	Route::get('/{slug}/pages','Api\Angular\PagesController@index');

	Route::get('/{slug}/page/{id}','Api\Angular\PagesController@show');

	//blogs
	Route::get('/{slug}/blogs','Api\Angular\BlogsController@index');
	
	Route::get('/{slug}/blog/{id}','Api\Angular\BlogsController@show');
	Route::get('/{slug}/blogs-archives','Api\Angular\BlogsController@getBlogArchives');
	Route::get('/{slug}/blogs-tags','Api\Angular\BlogsController@getBlogTags');

	//seo 
	Route::get('/{slug}/seo/basic','Api\Angular\SeoDetailController@basic');

	Route::get('/{slug}/seo/advanced','Api\Angular\SeoDetailController@advanced');

	//video conference
	Route::get('/{slug}/videoconferences','Api\Angular\VideoConferencesController@showVideoConferences');

	//news letter
	Route::get('/{slug}/newsletters','Api\Angular\NewsLetterController@index');

	//widgets
	Route::get('/{slug}/widgets/{uid}','Api\Angular\WidgetsController@showWigets');


	Route::get('/{slug}/allgallary','Api\Angular\GalleryController@show');

	Route::get('/{slug}/viewgallery_details/{gallery_id}','Api\Angular\GalleryController@view');
// <--angular routes end-->
