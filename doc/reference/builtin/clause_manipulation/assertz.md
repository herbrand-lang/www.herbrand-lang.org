```
(assertz @clause)
```

> Add term to the Herbrand database

`(assertz Clause)` is true. Same side effect as [asserta/1](#asserta), but placing `Clause` after all the facts and rules with the same functor.