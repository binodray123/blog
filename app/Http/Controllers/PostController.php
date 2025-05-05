<?php

namespace App\Http\Controllers;

use App\Models\ParentCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function addPost(Request $request)
    {
        $categories_html = '';
        $pcategories = ParentCategory::whereHas('children')->orderBy('name', 'asc')->get();
        $categories = Category::where('parent', 0)->orderBy('name', 'asc')->get();

        // Loop through parent categories with children
        if ($pcategories->count() > 0) {
            foreach ($pcategories as $pcategory) {
                $categories_html .= '<optgroup label="' . $pcategory->name . '">';
                foreach ($pcategory->children as $category) {
                    $categories_html .= '<option value="' . $category->id . '">' . $category->name . '</option>';
                }
                $categories_html .= '</optgroup>';
            }
        }

        // Loop through uncategorized top-level categories
        if ($categories->count() > 0) {
            foreach ($categories as $category) {
                $categories_html .= '<option value="' . $category->id . '">' . $category->name . '</option>';
            }
        }

        $data = [
            'pageTitle' => 'Add new post',
            'categories_html' => $categories_html
        ];

        return view('back.pages.add_post', $data);
    }

    public function createPost(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'title' => 'required|unique:posts,title',
                'content' => 'required',
                'category' => 'required|exists:categories,id',
                'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 0,
                    'errors' => $validator->errors()
                ], 422);
            }

            if ($request->hasFile('featured_image')) {
                $path = "images/posts/";
                $file = $request->file('featured_image');
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path($path), $filename);
            } else {
                return response()->json(['status' => 0, 'message' => 'Image upload failed.']);
            }

            $post = new Post();
            $post->author_id = auth()->id();
            $post->category = $request->category;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->featured_image = $filename;
            $post->tags = $request->tags;
            $post->meta_keywords = $request->meta_keywords;
            $post->meta_description = $request->meta_description;
            $post->visibility = $request->visibility ?? 1;

            $post->save();

            return response()->json(['status' => 1, 'message' => 'New post has been created successfully.']);
        }

        return response()->json(['status' => 0, 'message' => 'Invalid request.']);
    }
}
