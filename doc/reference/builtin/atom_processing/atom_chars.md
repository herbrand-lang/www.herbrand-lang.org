```
(atom_chars +atom ?string)
(atom_chars -atom +string)
```

> Express an atom as a list of one character atoms

`(atom_chars Atom List)` succeeds if and only if `List` is made up of characters that in order form `Atom`.