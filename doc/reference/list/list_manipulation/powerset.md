```
(powerset ?list ?list)
```

> Powerset of a list


`(powerset List Powerset)` is true if and only if `Powerset` is an element of the powerset of `List`. If one of those parameters is uninstantiated, [powerset/2](#powerset) will calculate all the possible sets of the powerset.