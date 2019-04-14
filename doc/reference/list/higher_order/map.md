```
(map :callable_term ?list)
```

> Check if goal can be applied to a list

`(map Goal List)` is true if and only if `Goal` can be successfully applied to `List`. If `Goal` fails for any of `List`'s elements, [map/2](#map) fails.