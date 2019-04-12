```
(atom_length +atom ?integer)
```

> Length of an atom

`(atom_length Atom Length)` is true if and only if the number of characters in the name of `Atom` is equal to `Length`. If `Length` is not instantiated, [atom_length/2](#atom_length) will calculate the length of `Atom`'s name.