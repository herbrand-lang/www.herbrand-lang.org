```
(throw +term)
```

> Raise an exception

`(throw Exception)` raise the `Exception` exception. The system looks for the innermost [catch/3](#catch) ancestor for which `Exception` unifies with the `Catcher` argument of the [catch/3](#catch) call.