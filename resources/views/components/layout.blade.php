<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link rel="icon" href="media/favi.png" / type="image">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Comfortaa:wght@300..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Protest+Revolution&family=Protest+Riot&display=swap" rel="stylesheet">
    <title>Christian Casano</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar/>

    {{$slot}}

    <x-footer/>


    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyARVQVLuaksgUYofDb7auM52om9yropbqs",
          authDomain: "christian-casano-blog.firebaseapp.com",
          projectId: "christian-casano-blog",
          storageBucket: "christian-casano-blog.appspot.com",
          messagingSenderId: "562262821143",
          appId: "1:562262821143:web:ad86cfc4864fea9aed8f52",
          measurementId: "G-NE0HT1Y3B7"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
</body>
</html>