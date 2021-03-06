@extends('rapyd::demo.demo')

@section('title','DataSet')

@section('body')

<h1>DataSet</h1>

<p>

    @foreach ($dataset->data as $item) {!! $item['nome'] !!}<br />
    @endforeach
    <br />
    {!! $dataset->links() !!}
    <br />
    <a href="{!! $dataset->orderbyLink('nome', 'desc') !!}">sort a-z</a>  |  <a href="{!! $dataset->orderbyLink('nome', 'asc') !!}">sort z-a</a>

    {!! Documenter::showMethod("Iginikolaev\\Rapyd\\Demo\\DemoController", "getSet") !!}
    {!! Documentor::showCode("iginikolaev/rapyd/views/rapyd/dataset.blade.php") !!}
</p>
@stop
