<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Размер</th>
        <th>Вес</th>
        <th>Редкость</th>
    </tr>
    </thead>
    <tbody>
    @foreach($fish as $oneFish)
        <tr>
            <td>{{$oneFish->title}}</td>
            <td>{{$oneFish->size}}</td>
            <td>{{$oneFish->weight}}</td>
            <td>{{\App\Domain\Enums\Fish\RatingEnum::toValue($oneFish->rating)}}</td>
            <td><a href="{{route('fish.show', ['fish' => $oneFish])}}">Подробнее</a></td>
            <td><a href="{{route('fish.edit', ['fish' => $oneFish])}}">Редактировать</a></td>
            <td>
                <form action="{{route('fish.destroy', ['fish' => $oneFish])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить" style="all: unset; cursor: pointer; color: #ef4444">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br>
<a href="{{route('fish.create')}}">Создать рыбу</a>
