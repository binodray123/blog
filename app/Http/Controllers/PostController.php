<?php

namespace App\Http\Controllers;

use App\Models\ParentCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

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
        //validate the form
        $request->validate([
            'title' => 'required|unique:posts,title',
            'content' => 'required',
            'category' => 'required|exists:categories,id',
            'featured_image' => 'required|mimes:png,jpg,jpeg|max:1024'

        ]);
        //create post
        if ($request->hasFile('featured_image')) {
            $path = "images/posts/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '-' . $filename;

            //Upload featured image
            $upload = $file->move(public_path($path), $new_filename);

            if ($upload) {
                //Generate Resized Image and Thumbnail
                $resized_path = $path . 'resized/';
                if (!File::isDirectory($resized_path)) {
                    File::makeDirectory($resized_path, 0777, true, true);
                }
                // Thumbnail (Aspect ratio:1)
                Image::make($path . $new_filename)
                    ->fit(250, 250)
                    ->save($resized_path . 'thumb_' . $new_filename);
                //Resized Image (Aspect ratio: 1.6)
                Image::make($path . $new_filename)
                    ->fit(512, 320)
                    ->save($resized_path . 'resized_' . $new_filename);

                $post = new Post();
                $post->author_id = auth()->id();
                $post->category = $request->category;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->featured_image = $new_filename;
                $post->tags = $request->tags;
                $post->meta_keywords = $request->meta_keywords;
                $post->meta_description = $request->meta_description;
                $post->visibility = $request->visibility;
                $saved = $post->save();

                if ($saved) {
                    return response()->json(['status' => 1, 'message' => 'New post has been created successfully.']);
                } else {
                    return response()->json(['status' => 0, 'message' => 'Something went wrong.']);
                }
            } else {
                return response()->json(['status' => 0, 'message' => 'Something went wrong on uploading a featured image.']);
            }
        }
    }
}
