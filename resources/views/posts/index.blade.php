<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <style>
        #container_1{
            justify-content: center;
            align-items: center;
            padding: 70px;
            
        }
       
        #title{
            text-align:center;
            padding: 40px;
        }

        #firstDesign {
        margin: 0;
       
        background-color: white;
        }

        #firstDesign > h1, #secondDesign{
        margin: 10px;
        padding: 5px;
        }

        #secondDesign {
        background: #F2F2F2;  
        }

        #secondDesign > a, p {
        margin: 4px;
       
        }
        p{
         font-size:18px;
         font-weight:bold;
        }
    </style>

    
     <div class="cards">
    <h1 class="text-4xl font-bold mb-4" id="title" >List of Blogs</h1>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4" id="container_1">
        
        
        @foreach($posts as $post)
        <article id = "firstDesign">
            <article class="mb-2" id="secondDesign">
                
                <a href="/posts/{{ $post->id }}/edit" class="text-2xl f ont-bold text-blue-500">{{ $post->title }}</a>
                <p class="text-md text-gray-600">{{ $post->content }}</p>

                <hr class="mt-2">
            </article>
        @endforeach

        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>
    </div>
    </div>
</article>
</body>
</html>
