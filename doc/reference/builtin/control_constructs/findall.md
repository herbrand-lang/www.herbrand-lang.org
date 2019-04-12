```
(findall ?term +callable_term ?list)
```

> Find all the values that would make a goal succeed

`(findall Template Goal Instances)` is true if and only if `Instances` is a list of values in the form `Templates` that would make the goal `Goal` succeed. Usually, `Template` and `Goal` share some variables, so `Instances` is filled with the values that make `Goal` succeed. If there is not a single value that make `Goal` unify, `Instances` will be an empty list.