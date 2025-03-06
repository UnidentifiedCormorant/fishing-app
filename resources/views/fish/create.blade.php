<form action="{{route('fish.store')}}" method="POST">
    @csrf
    <label for="title">Название</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="size">Размер</label><br>
    <input type="number" step=0.01 id="size" name="size"><br>

    <label for="weight">Вес</label><br>
    <input type="number" step=0.01 id="weight" name="weight"><br>

    <label for="rating">Редкость</label><br>
    <select name="rating" id="rating">
        @foreach(\App\Domain\Enums\Fish\RatingEnum::toList() as $key => $value)
            <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select><br>

    <br>

    <input type="submit" value="Создать">
</form>

@include('fish.templates.base')
