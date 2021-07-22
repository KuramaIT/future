
<!doctype>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
body {
    margin-top: 30px;
    margin-left: 200px;
}
.image {
    margin-left: 600px;
    height: 150px;
}
.futer_one{
    margin-left: 300px;
}
.futer_prava{
    margin-left: 300px;
}
.futer{
    max-height: 300px;
}

    </style>
</head>
<body>
<div class="header">
    <div class="number">
        <h7>телефон:8-999-999-99-99</h7>
    </div>
    <div class="mail">
        <h7>email:<a href="mmm.ru">future@mail.ru</a></h7>
    </div>
    <div class="image">
        <img src="{{ asset('image/future_test.jpg') }}">
    </div>
    <div class="comment">
        <h1>Комментарии</h1>
        <hr>
    </div>

</div>

<div  class="container">

    <div class="col">
        @foreach($users as $user)
            <div class="row">
                <div class="col">
                    <h4>{{$user->name}}</h4>
                </div>
                <div class="col">
                    <td>{{$user->created_at}}</td>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <td>{{$user->comment}}</td>
                </div>
            </div>
        @endforeach

        <hr>
    </div>
    <form method="POST" action="{{route('users.store')}}">
        @csrf
        <div class="form mt-3 col-md-4">
            <label for="name">Имя</label>
            <input  type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form col-md-4">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" rows="3"  class="form-control"></textarea>
        </div>

        <div class="col mt-3">
            <button type="submit" class="btn btn-outline-dark">Отправить</button>
        </div>
    </form>
</div>
<hr>
<div class="futer">
        <div class="futer_one">
         <div class="futer_number">
            <h7>телефон:8-999-999-99-99</h7>
         </div>
         <div class="futer_mail">
             <h7>email:<a href="mmm.ru">future@mail.ru</a></h7>
         </div>
         <div class="futer_adres">
            <h7>email:<a href="mmm.ru">Адресс:115088 Москва,ул 2-я Машиностроения, д.7 стр.1</a></h7>
         </div>
        </div>
        <div class="futer_image">
            <img src="{{ asset('image/future_test.jpg') }}">
        </div>
        <div class="futer_prava">
           <h7>email:<a href="mmm.ru">2010-2014 Future Все права защищены</a></h7>
        </div>

</div>

</body>
</html>

