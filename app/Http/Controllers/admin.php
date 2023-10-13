<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Basic;
use App\Models\Home;
use App\Models\About;
use App\Models\gallery;
use App\Models\gallery1;
use App\Models\Obligation;
use App\Models\Contact;
use App\Models\Resource;

class admin extends Controller
{

 public function submit_basic(Request $request)
 {
    $data = $request->all();
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);  
        $data['image'] = $imageName;
    }
    // Create the database record
    Basic::create($data);
    return back()->with('success','Form Submitted Sucessfully');
}


public function manage_basic(Request $request)
{
    $basics = Basic::all();
    // dd($basics);
    // exit();
    return view('admin/manage_basic', ['basic1' => $basics]);
}

public function update_basic(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    // dd($id);
    // exit();
    $basic = Basic::find($id);

    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }

    // Update the record with the new data
    $basic->update($data);

    return back();
}

public function delete_basic(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    // dd($id);
    // exit();
    $basic = Basic::find($id);
    $basic->delete();
    return back()->with('success','Deleted Sucessfully');
}


// Home code 
public function submit_home(Request $request)
{
    // dd($request);
    // exit();
    $data = $request->all();
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);  
        $data['image'] = $imageName;
    }
    // Create the database record
    Home::create($data);
    return back()->with('success','Form Submitted Sucessfully');
}


public function manage_home(Request $request)
{
    $homes = Home::all();
    // dd($basics);
    // exit();
    return view('admin/manage_home', ['home1' => $homes]);
}

public function update_home(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $home = Home::find($id);
    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }

    // Update the record with the new data
    $home->update($data);

    return back()->with('success','Updated Sucessfully');
}

public function delete_home(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $home = Home::find($id);
    $home->delete();
    return back()->with('success','Deleted Sucessfully');
}

// Gallery code for image
public function submit_gallery_image(Request $request)
{
    // dd($request);
    // exit();
 $data = $request->all();

// Handle image upload
 if ($request->hasFile('image')) {
    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
    // Generate a UUID
    $uuid = Str::uuid();
    // Combine UUID and extension to create a unique filename
    $imageName = $uuid . '.' . $extension;
    $image->move('public/upload/', $imageName);  
    $data['image'] = $imageName;
}
// Create the database record
Gallery::create($data);
return back()->with('success','Gallery Submitted Successfully');

}


public function manage_gallery_image(Request $request)
{
    $gallerys = Gallery::all();
    // dd($gallerys);
    // exit();
    return view('admin/manage_gallery_image', ['gallerys1' => $gallerys]);
}

public function update_gallery_image(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $gallery = Gallery::find($id);
    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }

    // Update the record with the new data
    $gallery->update($data);

    return back()->with('success','Updated Sucessfully');
}

public function delete_gallery_image(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $gallery = Gallery::find($id);
    $gallery->delete();
    return back()->with('success','Deleted Sucessfully');
}

// Gallery code for video
public function submit_gallery1(Request $request)
{
    $data = $request->all();
// Handle video upload
    if ($request->hasFile('video')) {
        $video = $request->file('video');
        $extension = $video->getClientOriginalExtension();
    // Generate a UUID
        $uuid = Str::uuid();
    // Combine UUID and extension to create a unique filename
        $videoName = $uuid . '.' . $extension;
        $video->move('public/upload/', $videoName);
        $data['video'] = $videoName;
    }

    // Create the database record
    Gallery1::create($data);

    return back()->with('success', 'Gallery Submitted Successfully');
}


public function manage_gallery_video(Request $request)
{
    $gallerys = Gallery1::all();
    // dd($gallerys);
    // exit();
    return view('admin/manage_gallery_video', ['gallerys1' => $gallerys]);
}

public function update_gallery_video(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $gallery = Gallery1::find($id);
    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('video')) {
        $video = $request->file('video');
        $extension = $video->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $videoName = $uuid . '.' . $extension;
        $video->move('public/upload/', $videoName);
        $data['video'] = $imageName;
    }

    // Update the record with the new data
    $gallery->update($data);

    return back()->with('success','Updated Sucessfully');
}

public function delete_gallery_video(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $gallery = Gallery1::find($id);
    $gallery->delete();
    return back()->with('success','Deleted Sucessfully');
}

// Obligation code 
public function submit_obligation(Request $request)
{

    $data = $request->all();
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);  
        $data['image'] = $imageName;
    }
    // Create the database record
    Obligation::create($data);
    return back()->with('success','Form Submitted Sucessfully');
}


public function manage_obligation(Request $request)
{
    $Obligation = Obligation::all();
    // dd($basics);
    // exit();
    return view('admin/manage_obligation', ['Obligation1' => $Obligation]);
}

public function update_obligation(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $Obligation = Obligation::find($id);
    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }

    // Update the record with the new data
    $Obligation->update($data);

    return back()->with('success','Updated Sucessfully');
}

public function delete_obligation(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $Obligation = Obligation::find($id);
    $Obligation->delete();
    return back()->with('success','Deleted Sucessfully');
}

// contact code
public function manage_contact(Request $request)
{
    $contact = contact::all();
    return view('admin/manage_contact', ['contact1' => $contact]);
}
public function delete_contact(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $contact = contact::find($id);
    $contact->delete();
    return back()->with('success','Deleted Sucessfully');
}

// About code
public function manage_about(Request $request)
{
    $about = About::all();
    return view('admin/manage_about', ['about1' => $about]);
}
public function update_about(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $about = About::find($id);
    $data = $request->all();
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }
    // Update the record with the new data
    $about->update($data);
    return back()->with('success','Updated Sucessfully');
}

// Resource code 
public function submit_resource(Request $request)
{
    // dd($request);
    // exit();
    $data = $request->all();
    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);  
        $data['image'] = $imageName;
    }
    // Create the database record
    Resource::create($data);
    return back()->with('success','Form Submitted Sucessfully');
}


public function manage_resource(Request $request)
{
    $resources = Resource::all();
    // dd($resources);
    // exit();
    return view('admin/manage_resource', ['resources1' => $resources]);
}

public function update_resource(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $resource = Resource::find($id);
    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        // Generate a UUID
        $uuid = Str::uuid();
        // Combine UUID and extension to create a unique filename
        $imageName = $uuid . '.' . $extension;
        $image->move('public/upload/', $imageName);
        $data['image'] = $imageName;
    }

    // Update the record with the new data
    $resource->update($data);

    return back()->with('success','Updated Sucessfully');
}

public function delete_resource(Request $request)
{
    // Find the record you want to update
    $id = $request->input('id');
    $resource = Resource::find($id);
    $resource->delete();
    return back()->with('success','Deleted Sucessfully');
}

}
