<form action="{{route('fish.update', ['fish' => $fish])}}" method="POST">
    @csrf
    @method('PATCH')
    <label for="title">Название</label><br>
    <input type="text" id="title" name="title" value="{{$fish->title}}"><br>

    <label for="size">Размер</label><br>
    <input type="text" step=0.01 id="size" name="size" value="{{$fish->size}}"><br>

    <label for="weight">Вес</label><br>
    <input type="text" step=0.01 id="weight" name="weight" value="{{$fish->weight}}"><br>

    <label for="rating">Редкость</label><br>
    <select name="rating" id="rating">
        @foreach(\App\Domain\Enums\Fish\RatingEnum::toList() as $key => $value)
            <option value="{{$key}}" @if($key === $fish->rating) selected="selected" @endif>{{$value}}</option>
        @endforeach
    </select><br>

    <br>

    <input type="submit" value="Сохранить">
</form>

@include('fish.templates.base')
