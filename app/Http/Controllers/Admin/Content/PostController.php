<?php

namespace App\Http\Controllers\admin\content;

use App\Events\NewStudentAdded;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\PageRequest;
use App\Http\Requests\Admin\Content\PostRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Content\Menu;
use App\Models\Content\Post;
use App\Models\Content\PostCategory;
use App\Models\Content\Video;
use App\Repository\PostRepo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function __construct() {
    //     $this->authorizeResource(Post::class ,'store-update-delete-posts');
    // }


    public $postRepo;

    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        $postsGet = $this->postRepo->orderBy();
        return view('admin.content.post.index', compact('postsGet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postCategoriesGet = $this->postRepo->findCategory();
        return view('admin.content.post.create', compact('postCategoriesGet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request, ImageService $imageService)
    {
        $store = $this->postRepo->store($request, $imageService);
        return redirect()->route('admin.content.post.index')->with('swal-success', 'پست  جدید شما با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $postCategories = PostCategory::all();
        return view('admin.content.post.edit', compact('postCategories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->postRepo->update($request, $post);
        return redirect()->route('admin.content.post.index')->with('swal-success', 'صفحه  شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->postRepo->delete($id);
        return redirect()->route('admin.content.post.index')->with('swal-success', 'پست شما با موفقیت حذف شد');

        //    return redirect()->route('admin.content.post.index')->with('swal-success', 'پست شما با موفقیت حذف شد');
    }


    public function status(Page $page)
    {

        $page->status = $page->status == 0 ? 1 : 0;
        $result = $page->save();
        if ($result) {
            if ($page->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }



    public function commentable(Post $post)
    {
        $post->commentable = $post->commentable == 0 ? 1 : 0;
        $result = $post->save();
        if ($result) {
            if ($post->commentable == 0) {
                return respomse()->json(['commentable' => true, 'checked' => false]);
            } else {
                return response()->json(['commentable' => true, 'checked' => false]);
            }
        } else {
            return response()->json(['commentable' => false]);
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url =  asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
