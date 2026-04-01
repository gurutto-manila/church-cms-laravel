<?php

namespace App\Http\Controllers\Admin;

use App\Models\BotmanMaster;
use App\Models\BotmanTag;
use App\Models\BotmanMessage;
use App\Models\User;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Google\Cloud\Language\LanguageClient;
use Google\Cloud\Storage\StorageClient;
use App\Http\Controllers\Controller;
use App\Http\Requests\BotmanAddRequest;
use Illuminate\Support\Facades\Auth;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
class BotmanMasterController extends Controller
{
/**
 * BotmanMasterController
 *
 * Manages chatbot configuration and AI conversational features.
 * Integrates with BotMan framework for building conversational chatbot flows.
 * Handles chatbot setup, message routing, tag management, and natural language processing.
 * Supports Google Cloud Language API and Google Cloud Storage integration.
 *
 * @package App\Http\Controllers\Admin
 */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged = Auth::user()->id;
        $query = BotmanMaster::query()->with('tags','userInfo');
        $pages = (isset($request->page) ? $request->page : '');
        $search = '';
        $query_string = array();
        if (isset($request->search) && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('status', 'like', "%{$search}%");
            $query_string['search'] = $search;
        }

        $getBots = $query->orderBy('id', 'desc')->paginate(10);
        $build = http_build_query($query_string);
       return view('admin.botman.index', compact('getBots', 'pages', 'search', 'build'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.botman.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BotmanAddRequest $request)
    {
        $botMaster = new BotmanMaster();
        $botMaster->answers = $request->description;
        $botMaster->status = $request->status;
        $botMaster->created_by = Auth::user()->id;
        $botMaster->save();


        $tag = $request->tags;
        $tagInput = explode(',', $tag);
        if(count($tagInput)>0){
            foreach ($tagInput as $key => $value) {
                $tagx = new BotmanTag();
                $tagx->master_id = $botMaster->id;
                $tagx->name = $value;
                $tagx->created_by = Auth::user()->id;
                $tagx->save();
            }
        }

         return redirect('admin/botman/index')->with('message', 'Botman has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BotmanMaster  $botmanMaster
     * @return \Illuminate\Http\Response
     */
    public function show(BotmanMaster $botmanMaster)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BotmanMaster  $botmanMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = BotmanMaster::with('tags')->find($id);
        $allTag = array();
        if(count($edit->tags)>0){
            foreach ($edit->tags as $key => $tvalue) {
                $allTag[] = $tvalue['name'];
            }
        }

        $display = implode(',', $allTag);
        return view('admin.botman.form_edit',compact('edit','display'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BotmanMaster  $botmanMaster
     * @return \Illuminate\Http\Response
     */
    public function update(BotmanAddRequest $request, $id)
    {
        $botMaster = BotmanMaster::find($id);
        $botMaster->answers = $request->description;
        $botMaster->status = $request->status;
        $botMaster->updated_by = Auth::user()->id;
        $botMaster->save();

        $tag = $request->tags;
        $tagInput = explode(',', $tag);
        $tags_count = BotmanTag::where('master_id', $id)->get();
        $remove_tag = array();
        if (count($tags_count) > 0) {
            foreach ($tags_count as $pn_key => $pn_value) {
                $tag_id = $pn_value->id;
                if (isset($tagInput[$pn_key])) {
                    $remove_tag[] = $tag_id;
                    $update_tag = BotmanTag::find($tag_id);
                    $update_tag->name = $tagInput[$pn_key];
                    $update_tag->updated_by = Auth::user()->id;
                    $update_tag->save();
                }
            }

            if (count($remove_tag) > 0 && count($tags_count) != count($remove_tag)) {
                BotmanTag::whereNotIn('id', $remove_tag)->where('master_id', $id)->delete();
            }
        }

        if (count($tagInput) === 0 && count($tags_count) > 0) {
            BotmanTag::where('master_id', $id)->delete();
        }

        if (count($tagInput) > 0 && count($tags_count) < count($tagInput)) {
            foreach ($tagInput as $key => $tagdata) {
                if ($key >= count($tags_count) && !empty($tagdata)) {
                    $inser_tag = new BotmanTag();
                    $inser_tag->master_id = $id;
                    $inser_tag->name = $tagdata;
                    $inser_tag->created_by = Auth::user()->id;
                    $inser_tag->save();
                }
            }
        }

         return redirect('admin/botman/index')->with('message', 'Botman has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BotmanMaster  $botmanMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(BotmanMaster $botmanMaster)
    {
        //
    }

    public function remove(Request $request, $id) {

        BotmanMaster::where('id',$id)->delete();
        BotmanTag::where('master_id',$id)->delete();

        return redirect('admin/botman/index')->with('message', 'Botman has been deleted successfully.');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchIndex(Request $request){
        $config = [];

        // Load the driver(s) you want to use
         DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);



        $checkTag = $this->nativeGoogle($request);

        $jsonDecode = json_decode($checkTag,true);
        $getFirst = 0;
        if(count($jsonDecode)>0){
            $tags = $jsonDecode['tags'];
            if(count($tags)>0){
                $getFirst = $tags['0'];
            }
        }
        $messages = $request->message;
        $botman->hears('hello|hi', function (BotMan $bot) use ($messages) {
            $userId = $bot->getUser()->getId();
            $replies = 'Hello';
            $bot->typesAndWaits(1);
            $bot->reply($replies);
            $this->saveMsg($userId,$messages,$replies);
            $question = Question::create('Already Do You Have an Account Here?')->addButton(Button::create('Yes')->value('exist_account'))->addButton(Button::create('No')->value('new_account'));
            $bot->reply($question);
        });

        $botman->hears('exist_account', function(BotMan $bot)  use ($messages) {
             $userId = $bot->getUser()->getId();
             $replies = 'Enter your phone number';
             $bot->reply($replies);
             $this->saveMsg($userId,$messages,$replies);
        });

        $botman->hears('([0-9]+)', function(BotMan $bot, $number)  use ($messages) {
             $userId = $bot->getUser()->getId();
             $match = User::where('mobile_no', $number)->first();
             if(!empty($match)){
                $nameX = $match->name;
                $replies = 'Welcome '.$nameX;
                $bot->reply($replies);
                $this->saveMsg($userId,$messages,$replies);
             }else{
                $replies = 'No record found';
                $urlRegister = '<a href="'.url('register').'" target="__blank">Click Here</a> To Register.';
                $bot->reply($replies);
                $this->saveMsg($userId,$messages,$replies);
                $bot->reply($urlRegister);
             }
        });

        $botman->hears('new_account', function(BotMan $bot)  use ($messages) {
            $userId = $bot->getUser()->getId();
            $replies = '<a href="'.url('register').'" target="__blank">Click Here</a> To Register.';
            $bot->reply($replies);
            $this->saveMsg($userId,$messages,$replies);
            $question = Question::create('Already Do You Have an Account Here?')->addButton(Button::create('Yes')->value('exist_account'));
            $bot->reply($question);
        });
         $active = BotmanMaster::where('status','active')->pluck('id');
         $default = $request->message;
         if(!empty($getFirst)){
            $default = strtolower($getFirst);
            $request->message = $default;
            $bots = BotmanTag::where('name', $default)->whereIn('master_id',$active)->get();
         }else{
            $bots = BotmanTag::whereIn('master_id',$active)->get();
         }


        if(count($bots)>0){
            foreach ($bots as $key => $value) {
                $botman->hears('.*'.$value['name'].'.*', function (BotMan $bot) use ($messages, $value) {
                    $userId = $bot->getUser()->getId();
                    $bot->typesAndWaits(1);
                    $reply = BotmanMaster::find($value['master_id']);
                    if(!empty($reply)){
                        $replies = $reply['answers'];
                    }else{
                        $replies = 'Sorry, I did not understand these commands.';
                    }
                    $bot->reply($replies);
                    $this->saveMsg($userId,$messages,$replies);
                });
            }
        }

       $botman->fallback(function($bot) use ($messages) {
            $userId = $bot->getUser()->getId();
            $bot->typesAndWaits(1);
            $replies = 'Sorry, I did not understand these commands.';
            $bot->reply($replies);
            $this->saveMsg($userId,$messages,$replies);
        });

        // Start listening
        $botman->listen();
    }

    public function saveMsg($userId, $msg, $reply){
         $save = new BotmanMessage();
         $save->bot_id = $userId;
         if (Auth::check()) {
            $save->user_id = Auth::user()->id;
         }
         $save->message = $msg;
         $save->reply = $reply;
         $save->save();
    }

    public function nativeGoogle(Request $request){

        putenv('GOOGLE_APPLICATION_CREDENTIALS='.public_path().'/ChurchApp-e2ee8d452932.json');

        $message = $request->message;
        $entitiesArray = array();
        $byTag = array();
        $errorMessage = '';
        $language = new LanguageClient();
        try {
            $annotation = $language->annotateText($message);

            // Detect entities.
            $entities = $annotation->entitiesByType('LOCATION');

            foreach ($entities as $entity) {
                $entitiesArray[] = $entity['name'];
            }

            // Parse the syntax.
            $tokens = $annotation->tokensByTag('NOUN');

            foreach ($tokens as $token) {
                $byTag[] = $token['text']['content'];
            }
            $status = true;
        } catch (Exception | \Google\Cloud\Core\Exception\BadRequestException $exception) {
            $errorMessage = $exception->getMessage();
            $status = false;
        }

        $result =  array('status' => $status, 'entities'=> $entitiesArray, 'tags' => $byTag, 'error' => $errorMessage);

        return json_encode($result);
    }

    public function getMessages(Request $request){
        $userBased = BotmanMessage::with('userInfo')->groupBy('user_id');
        $botBased = BotmanMessage::whereNull('user_id')->groupBy('bot_id');
        $unionBy = $userBased->union($botBased)->orderBy('id', 'desc')->paginate(10);
        $query_string = array();
        $build = http_build_query($query_string);
        return view('admin.botman.messages', compact('unionBy','build'));
    }

    public function getDetails(Request $request, $id, $type){
        if($type==='code'){
            $query = BotmanMessage::where('bot_id',$id)->get();
        }else{
            $query = BotmanMessage::with('userInfo')->where('user_id',$id)->get();
        }

        return view('admin.botman.message_details', compact('query'));
    }
}
