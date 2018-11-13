<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use App\Preference;

use Auth;

use DB;

use Session;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cluster = Auth::user()->cluster;
        $articles = Article::all()->where('cluster', $cluster);
        
        return view('admin.landing')->with('articles', $articles );

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Report on most popular posts
        $cluster = Auth::user()->cluster;
        $posts = DB::table('articles')->orderBy('likes_count', 'DESC')->where('cluster', $cluster)->get();;
        
      return view('admin.report')->with('posts', $posts );
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        //Handle file uploading
        if($request->hasFile('image')){
            //Get the filename with the extension
            $filenamewithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('image')->storeAs('public/images/',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $article = new Article;
        $article->author_mail = Auth::user()->email;
        $article->article_title = $request->input('title');
        $article->author_name = $request->input('author_name');
        $article->article_content = $request->input('content');
        $article->image = $fileNameToStore;
        $article->cluster = Auth::user()->cluster;
        $article->save();

        $store = "Article has been published successfully";
        return back()->with('store', $store);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show()
    { 
     
        $loggedUser = Auth::user()->email;
        $userID = Auth::user()->id; 

        //Fetch preference values
        $preferences = DB::table('preferences')->where('email', $loggedUser)->find($userID);
        
        //Tables to be queried
        $academia = $preferences->academia; 
        $news = $preferences->news_room;
        $leisure = $preferences->leisure;
        $clubs = $preferences->clubs;
        $community = $preferences->community;

        //Queries for clusters
        $academics_sql = DB::table('articles')->where('cluster', $academia)->orderBy('id', 'DESC')->get();
        $news_sql = DB::table('articles')->where('cluster', $news)->orderBy('id', 'DESC')->get();
        $leisure_sql = DB::table('articles')->where('cluster', $leisure)->orderBy('id', 'DESC')->get();
        $clubs_sql = DB::table('articles')->where('cluster', $clubs)->orderBy('id', 'DESC')->get();
        $community_sql = DB::table('articles')->where('cluster', $community)->orderBy('id', 'DESC')->get();
        $latest = DB::table('articles')->orderBy('id', 'DESC')->get();
        //Most popular articles
        $popular = DB::table('articles')->orderBy('likes_count', 'DESC')->get();

        //Render view together with article objects
       
       return view('/home1')->with('leisure_sql', $leisure_sql)->with('clubs_sql', $clubs_sql)->with('academics_sql', $academics_sql)
       ->with('community_sql', $community_sql)->with('latest', $latest)->with('popular', $popular)->render();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                //Handle file uploading
                if($request->hasFile('image')){
                    //Get the filename with the extension
                    $filenamewithExt = $request->file('image')->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                    //Get just ext
                    $extension = $request->file('image')->getClientOriginalExtension();
                    //Filename to store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    //upload Image
                    $path = $request->file('image')->storeAs('public/images/',$fileNameToStore);
                }else{
                    $fileNameToStore = 'noimage.jpg';
                }
        
                $article = Article::find($id);
                $article->author_mail = Auth::user()->email;
                $article->article_title = $request->input('title');
                $article->author_name = $request->input('author_name');
                $article->article_content = $request->input('content');
                $article->image = $fileNameToStore;
                $article->cluster = Auth::user()->cluster;
                $article->save();
                
                $cluster = Auth::user()->cluster;
                $articles = Article::all()->where('cluster', $cluster);
                $update = "Article has been updated successfully";
                return back()->with('articles', $articles )->with('update', $update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        $del = "Article has been successfully deleted";
        return back()->with('del', $del); 
    }

}
