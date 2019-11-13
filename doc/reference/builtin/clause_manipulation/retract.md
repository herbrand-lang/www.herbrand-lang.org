```
(retract +clause)
```

> Delete term from Herbrand database

`(retract Clause)` is true if there's at least one predicate in the database with the clause `Clause`. It has for side effect the removal of that predicate.
