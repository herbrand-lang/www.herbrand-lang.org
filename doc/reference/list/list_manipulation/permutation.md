```
(permutation ?list ?list)
```

> Permutation of list

`(permutation List PermutateList)` is true if and only if `PermutateList` is a permutation of `List`. If one of those parameters is uninstantiated, [permutation/2](#permutation) will calculate all the possible permutations. It's important to keep in mind that this predicate is computationally expensive, since a list of `T` length has `T`! permutations.