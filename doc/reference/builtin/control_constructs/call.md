```
(call +callable_term ... +term)
```

> Invoke a callable term as a goal

`(call Goal | Args)` is true if and only if `Goal` represents a goal which is true after appending `Args` to its list of arguments. 