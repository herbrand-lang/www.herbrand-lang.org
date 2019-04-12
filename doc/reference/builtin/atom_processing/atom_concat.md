```
(atom_concat ?atom ?atom +atom)
(atom_concat +atom +atom -atom)
```

> Concatenate atoms

`(atom_concat Start End Whole)` is true if and only if `Whole` is the atom obtained by adding the characters of `End` at the end of `Start`. If `Whole` is the only argument instantiated, [atom_concat/3](#atom_concat) will obtain all possible decompositions of it.
