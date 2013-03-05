This module contains legacy code support. Its purpose is to be included in old
projects to avoid refactoring code. Legacy support is only valid up to the next
major version. So for example this module is usable if you've got code written
in `1.1` and want to switch to `1.7`, but is unusable if you want to go from 
`1.1` to `2.0` or `2.2` etc.

When we say it's unusable *we mean it*. The `3.0` version of the legacy module 
will always be empty, because we will strip any `2.x` legacy support from it 
(same for when we move from `1.x` to `2.0` and any other major version). This 
is a *helper* to ensure fast turn around time. You should always aim to move 
your code to a state where you don't need to rely on this module for it to work.
