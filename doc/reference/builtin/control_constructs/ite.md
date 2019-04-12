```
(ite :callable_term :callable_term :callable_term)
```

> If-Then-Else

`(ite If Then Else)` is true if and only if `If` is true and `Then` is true for the first solution of `If`, or if `If` is false and `Else` is true for the first value with which `If` fails.