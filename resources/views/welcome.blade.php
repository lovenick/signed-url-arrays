<x-app>
   <a href="{{ URL::signedRoute('protected', ['inputs' => ['foo' => 'bar']]) }}">Protected - 1 Param</a>
   <br />
   <a href="{{ URL::signedRoute('protected', ['inputs' => ['foo' => 'bar', 'biz' => 'baz']]) }}">Protected - 2 Params</a>
</x-app>
