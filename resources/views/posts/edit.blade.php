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
        #deleteButton{
            text-align:center;
        }
}
           
}
</style>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-4" id="container_2">


      
    <form method="POST" action="/posts/{{$post->id}}">
        @method('PUT')
        @csrf
            <h3 class="display-4 text-center">Update/Delete Blog</h3>
        <div class="form-group">
              <label for="name">Title</label>
              <input type="text" 
              id="title"
              name="title"
              class="form-control"
              value="{{ $post->title }}">
        </div>
            
        <div class="form-group">
              <label for="name">Content</label>
              <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">{{ $post->content }}</textarea>
        </div>
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
          </form>

          <form method="POST"action="/posts/{{ $post->id }}" id="deleteButton">
                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" id="deleteButton">Delete</button>
                @csrf
                @method('DELETE')
                
        </form>

        </div>
    

      <!--
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">{{ $post->content }}</textarea>
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

        </form>

        <form method="POST"action="/posts/{{ $post->id }}" id="deleteButton">
                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
                @csrf
                @method('DELETE')
                
        </form>
-->

    </div>
</body>
</html>
