```
(assertz @clause)
```

> Add term to the Prolog database

`(assertz Clause)` is true. Same side effect as [asserta/1](#asserta), but placing `Clause` after all the facts and rules with the same functor.