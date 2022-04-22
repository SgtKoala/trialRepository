<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


    
    <style>
        #container_3{
            justify-content: center;
            align-items: center;
            padding: 70px;
        }
        #title{
            
            padding: 10px;
        }

        .container {
	    min-height: 100vh;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
       

    }

        .container form {
        width: 500px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
       
    </style>
<div style="width: 900px;" class="container max-w-full mx-auto pt-4" id="container_3">

<form method="POST" action="/posts">
        @csrf 

        <h4 class="display-4 text-center">Add student</h4>
        <div class="form-group">
              <label for="name">Blog Title</label>
              <input type="text"
               id="title"
               name="title"
              class="form-control">
        </div>
            
        <div class="form-group">
              <label for="name">Content</label>
              <input type="text" 
              class="form-control"
              id="content"
              name="content"
               >
        </div>
<button type="submit" 
            class="btn btn-primary"
            name="Add">Add</button>
          </form>
    </div>
</div>

    <!--
    <h1 class="text-4xl font-bold mb-4" id="title" >Add Blog</h1>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4" id="container_3">
    
        <form method="POST" action="/posts">
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
    </div>
    -->
</body>
</html>
