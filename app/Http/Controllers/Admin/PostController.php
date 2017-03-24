<?php

namespace App\Http\Controllers\Admin;

use App\Repository\Post\PostInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\File;
use File;
class PostController extends Controller
{
    //
    protected $PostRepo;

    public function __construct(PostInterface $postInterface)
    {
        $this->PostRepo = $postInterface;
    }

    public function getList()
    {
        $posts = $this->PostRepo->paginate('updated_at','DESC',10);
        return view('admin.post.index', compact('posts'));
    }

    public function getAdd()
    {
        $categories = $this->PostRepo->getCate();
        return view('admin.post.create', compact('categories'));
    }

    public function postAdd(Request $request)
    {
        $post = $request->only('title', 'content');
        $post['slug'] = changeTitle($request->title);
        $post['avatar'] = $request->file('avatar')->getClientOriginalName();
        $request->file('avatar')->move('../resources/upload/post', $post['avatar']);
        $post['user_id'] = 1;
        $this->PostRepo->create($post);
        return redirect()->route('admin.post.getList')->with('success', 'Thêm mới thành công');
    }

    public function getEdit($id)
    {
        $post=$this->PostRepo->find($id);
        return view('admin.post.edit',compact('post'));
    }
    public function postEdit(Request $request,$id)
    {
        $img_current='../resources/upload/post/'.$this->PostRepo->find($id)->avatar;
        $post = $request->only('title', 'content');
        $post['slug'] = changeTitle($request->title);
        if(!empty($request->file('avatar'))){
            if(File::exists($img_current)){
                File::delete($img_current);
            }
            $post['avatar'] = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('../resources/upload/post', $post['avatar']);

        }
        $post['user_id'] = 1;
        $this->PostRepo->update($post,$id);
        return redirect()->route('admin.post.getList')->with('success', 'Thêm mới thành công');
    }
}
