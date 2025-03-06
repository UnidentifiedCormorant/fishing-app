<p>Название: {{$fish->title}}</p>
<p>Размер: {{$fish->size}}</p>
<p>Вес: {{$fish->weight}}</p>
<p>Редкость: {{$fish->rating}}</p>
<p>Дата создания: {{$fish->created_at->format('d.m.Y')}}</p>

@include('fish.templates.base')
