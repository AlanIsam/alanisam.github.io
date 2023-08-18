<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet">
</head>
<body class = "bg-gradient-to-r from-slate-900 to-slate-900">
<ul class="bg-gradient-to-r from-slate-900 to-indigo-900 flex flex-col md:flex-row items-center justify-center p-3 space-y-3 md:space-y-0 md:space-x-8 text-xl">
        <li>
            <a href="#" class="text-white font-bold font-mono hover:bg-slate-700 rounded py-0.5 px-2 block md:inline-block">Home</a>
        </li>
        <li>
            <a href="#" class="text-white font-bold font-mono hover:bg-slate-700 rounded py-0.5 px-2 block md:inline-block">About</a>
        </li>
        <li>
            <a href="#" class="text-white font-bold font-mono hover:bg-slate-700 rounded py-0.5 px-2 block md:inline-block">Blog</a>
        </li>
        <li>
            <a href="#" class="text-white font-bold font-mono hover:bg-slate-700 rounded py-0.5 px-2 block md:inline-block">Contact</a>
        </li>
    </ul>
    <div class="relative shadow-2xl">
    <img class="object-cover h-96 w-full opacity-25" src="/img/img3.jpg" alt="Image">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
        <h1 class="text-4xl font-bold font-sans text-center"><span id="element"></span></h1>
        <div class="absolute bottom-0 flex justify-center space-x-8 w-full">
            <a href ="https://github.com/AlanIsam"><img src="/img/github.png" href="https://github.com/AlanIsam" class="h-10 my-3" ></a>
            <a href ="https://my.linkedin.com/in/alan-isam-34a596262"><img src="/img/linkedin.png" class="h-10 my-3" ></a>
            <a href ="https://alanisam.itch.io/"><img src="/img/itchio.png" class="h-10 my-3" ></a>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row items-center space-y-3 my-3 mx-3 md:space-y-0 md:space-x-2 text-xl">
    <div class="bg-slate-600 w-full md:w-1/2 h-72 text-white md:mb-0">Content</div>
    <div class="bg-slate-600 w-full md:w-1/2 h-72 text-white">Content</div>
</div>

<div class="flex flex-col md:flex-row items-center space-y-3 my-3 mx-3 md:space-y-0 md:space-x-2 text-xl">
    <div class="bg-slate-600 w-full md:w-1/2 h-72 text-white md:mb-0">Content</div>
    <div class="bg-slate-600 w-full md:w-1/2 h-72 text-white">Content</div>
</div>


  <script src="app.js"></script>
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

 <script>
 const typed = new Typed('#element', {
    strings: ['Hello my name is Alan Isam <br> I am a Web Developer!'],
    typeSpeed: 40,
  });</script>
</body>

</html>