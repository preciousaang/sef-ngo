<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$news->title}}</title>
</head>
<body style="width: 100%">
    <div style="border: 1px solid black; width: 70%; margin: 10px auto;">
        <div style="display: flex; justify: content-center">
        <img style="margin: 5px auto;" src="{{asset('img/logo.png')}}" alt="logo">
        </div>
        <h2 style="text-align: center">SEF News Letter</h2>
        <hr>
        <div style="width: 90%; margin: 0 auto;">
            <img src="{{asset('storage/uploads/'.$news->image_url)}}" style="border: 1px solid black;" width="100%">
            <h3 style="text-align: center">{{$news->title}}</h3>
            <p style="text-align: center">
                <a style="text-decoration: none; border: 1px solid black; padding: 10px; border-radius: 5px; color: black; font-size: 120%;" href="{{route('news-detail', $news->slug)}}">Read</a>
                <br>
                <br>
                <br>
                <a href="{{route('unsubscribe', ['subscriber'=>$mail])}}">Unsubscribe</a>
            </p>
        </div>
    </div>
</body>
</html>